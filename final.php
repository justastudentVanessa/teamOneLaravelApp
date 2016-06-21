<?php

$file = "address.txt"; // file of addresses

$merged1 = array(); // empty array to put in merged addresses


$sorted = array();
$sample = array( "LOWERCASE");

$array = file($file); // creates an array of each line of address.txt

// first we creat the merged addresses 
// 1. remove the name from the address so that it starts with the number
// 2. merge the remaining string together -- "Numberetcetcetc"
// 3. write a function to check whether or not the first of the string is a numb// or empty - if either are true remove the address- othersies push it to array


// Step 1: remove name from the address
// for every element in the list arrayadd, chop the first part of the address.
// remove the first part of the address by splitting the string? Maybe add the second half of the array 1 to another array and then you have an array with the heads removed
	for($x = 0; $x <=50000; $x++){
	$array[$x]= explode("|",$array[$x],2);
}
// this for loop gets rid of all the | and converts to lower
	for($x = 0; $x <= 50000; $x++){
	array_push($merged1,$array[$x][1]);
//	$merged1[$x]= str_replace("|","",$merged1[$x]);// gets rid of lines
	$merged1[$x]= str_replace(" ","%",$merged1[$x]);// gets rid of empty space
	$merged1[$x]= trim($merged1[$x]);
	$merged1{$x}= strtolower($merged1[$x]);	
	

}
$array1 = $merged1;

	for($x =0; $x<= 50000; $x++){
	$pobox = substr_count($array1[$x],"pobox");	
	if($pobox > 0){
	unset($array1[$x]);
	}

	}
$array2 = $array1;
$arrayfinal = array();
// this for loop cleans the code of n/a and blank addresse
	for($x = 0; $x <=sizeof($array2); $x++){
		if($array2[$x]!= "" &&  $array2[$x]!= "n/a"){
		array_push($arrayfinal, $array2[$x]);
}
}
	for($x =0; $x<=50000; $x++){
	        $arrayfinal[$x]= str_replace("|"," ",$arrayfinal[$x]);
                $arrayfinal[$x]= str_replace("%"," ",$arrayfinal[$x]);
}



// Geocode function : 




function geocode($address){
 
    // url encode the address
    $address = urlencode($address);
     
    // google map geocode api url
    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";
 
    // get the json response
    $resp_json = file_get_contents($url);
     
    // decode the json
    $resp = json_decode($resp_json, true);
 
    // response status will be 'OK', if able to geocode given address 
    if($resp['status']=='OK'){
 
        // get the important data
        $lati = $resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
        $formatted_address = $resp['results'][0]['formatted_address'];
         
        // verify if data is complete
        if($lati && $longi && $formatted_address){
         
            // put the data in the array
            $data_arr = array();            
             
            array_push(
                $data_arr, 
                    $lati, 
                    $longi, 
                    $formatted_address
                );
             
            return $data_arr;
             
        }else{
            return false;
        }
         
    }else{
        return false;
    }
}

$arrayclean= array_unique($arrayfinal);
//print_r($arrayclean);
file_put_contents('cleanaddress.txt',print_r($arrayclean,true));


$file2 = 'cleanaddress.txt';

while(!feof($file2)){
	geocode(file($file2));
}


// Now we have all our addresses without the || and without names, now we will remove all P
// P.o boxed

//print_r($sorted);



//print_r($array[3]);

//print_r(strtolower($array[3]));
?>	
