<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();

    	$users = [
            // Admin
            [
        		'name'	        => 'Admin',
                'email'         => 'admin@yaki.com.vn',
                'password'      => bcrypt('12345'),
                'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
            ],
    	];

    	DB::table('users')->insert($users);
    }
}
