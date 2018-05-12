<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('units')->delete();

    	$units = [
            [
                'name'          => 'Dĩa'
            ]
    	];

    	DB::table('units')->insert($units);
    }
}
