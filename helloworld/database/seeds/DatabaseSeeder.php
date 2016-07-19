<?php

use Illuminate\Database\Seeder;
//use Database\UserTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // $this->call(UserTableSeeder::class);
	$this->call(CourseSeeder::class);

}
}
?>
