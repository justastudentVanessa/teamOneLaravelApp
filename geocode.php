<?php
// function to geocode address, it will return false if unable to geocode address
function geocode($address){
 
    // url encode the address
    $address = urlencode($address);
     
    // google map geocode api url
    $url = "https://maps.google.com/maps/api/geocode/json?address={$address}&key=AIzaSyD0c4B2pQ1us-0PE5jm7KiW-v_Mc-lW1KY";
 
    // get the json response
    $resp_json = file_get_contents($url);
    print_r($resp_json); 
    // decode the json
    $resp = json_decode($resp_json, true);
 
    // response status will be 'OK', if able to geocode given address 
    if($resp['status']=='OK'){
       //  echo "right"; 
        // get the important data
        $lati = $resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
        $formatted_address = $resp['results'][0]['formatted_address'];
         
        // verify if data is complete
        if($lati && $longi && $formatted_address){
    //     echo "correct data";
            // put the data in the array
            $data_arr = array();            
             
            array_push(
                $data_arr, 
                    $lati, 
                    $longi, 
                    $formatted_address
                );
             
           // print_r($data_arr);
             
        }else{
            return false;
        }
         
    }else{
        return false;
    }
}







//php to run the geocode

$file2 = 'cleanaddress.txt';
$file3 = file($file2);
for($x=0;$x < count($file3); $x++){
        geocode($file3[$x]);
//	echo "Working";
//	print_r($data_arr);
}
print_r($data_arr);

?>
