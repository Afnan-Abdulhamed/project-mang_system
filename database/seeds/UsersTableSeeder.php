<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2019-08-01 00:00:00',
                'password' => '$2y$10$J4UVdzJjtRcYTysk1svtDOMvxLhd78MGGwQkcrYrcMzWerism85Lu',
                'remember_token' => NULL,
                'created_at' => '2019-08-26 21:30:42',
                'updated_at' => '2019-08-26 21:30:42',
                'type' => '1',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'client',
                'email' => 'client@gmail.com',
                'email_verified_at' => '2019-08-01 00:00:00',
                'password' => '$2y$10$CCWp2PMYGC.KDEw8s7iJ2.6tpa2c.kkJu/cgxKfWeXvi8dD9hA3UO',
                'remember_token' => NULL,
                'created_at' => '2019-08-30 12:49:35',
                'updated_at' => '2019-08-30 12:49:35',
                'type' => '0',
            ),
        ));
        
        
    }
}