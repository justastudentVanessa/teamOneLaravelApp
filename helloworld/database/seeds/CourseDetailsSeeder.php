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
      $Course1 = DB::table('CourseDetails')->insert([
                                'teecolor' => 'Color',
                                'yardage' => 'Yardage',
                                'handicap' => 'Number',
                                'par' => 'Number',
                        ]);		
     }
}
