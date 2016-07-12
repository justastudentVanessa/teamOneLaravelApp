<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $Course1 = DB::table('courses')->insert([
                                'coursename'  => 'Course1',
                                'address'   => 'One Street',
                                'city'=> 'Austin',
                                'state'    => 'Texas',
                                'zip'      => '78749',
                                'phone'   => '512-329-8078',
                        ]);


	 $Course2 = DB::table('courses')->insert([
                                'coursename'  => 'Course2',
                                'address'   => 'Two Street',
                                'city'=> 'Austin',
                                'state'    => 'Texas',
                                'zip'      => '78759',
                                'phone'   => '512-678-9004',
                        ]);

	
	 $Course3 = DB::table('courses')->insert([
                                'coursename' => 'Course3',
                                'address'  => 'Three Street',
                                'city'    => 'Austin',
                                'state'   => 'Texas',
                                'zip'     => '5678',
                                'phone'   => '512-546-3496',
                        ]);
		
}
}
