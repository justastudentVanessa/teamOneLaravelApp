<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                $User1 = DB::table('users')->insert([
                                'name'       => 'Doctor',
                                'username'   => 'House',
                                'phonenumber'=> '567890',
                                'address'    => '34 York Ave',
                                'email'      => 'cool@yahoo.com',
                                'password'   => Hash::make('thedarkside'),
                                'created_at' => new DateTime(),
                                'updated_at' => new DateTime()
                        ]);

               $User2 = DB::table('users')->insert([
                                 'name'       => 'Charles',
                                'username'    => 'Xavier',
                                'phonenumber' => '887890',
                                'address'     => '34 City Ave',
                                'email'       => 'nice@yahoo.com',
                                'password'    => Hash::make('puppies'),
                                'created_at'  => new DateTime(),
                                'updated_at'  => new DateTime()
                        ]);

               $User3 = DB::table('users')->insert([
                                  'name'      => 'Sandy',
                                'username'    => 'Spongebob',
                                'phonenumber' => '887890',
                                'address'     => '34 City Ave',
                                'email'       => 'cat@yahoo.com',
                                'password'    => Hash::make('banana'),
                                'created_at'  => new DateTime(),
                                'updated_at'  => new DateTime()
                        ]);
}
}
?>
