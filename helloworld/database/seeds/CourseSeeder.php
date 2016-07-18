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
                                'coursename'  => 'Teravista Golf Club',
                                'address'   => '4332 Teravista Club Dr',
                                'city'   => 'Round Rock',
                                'state'    => 'Texas',
                                'zip'      => '78665',
                                'phone'   => '512-651-9850',
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
?>
