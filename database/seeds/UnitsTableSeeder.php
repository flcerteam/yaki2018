<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
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
                'name'  => 'Cái'
            ],
            [
                'name'  => 'Cây'
            ],
            [
                'name'  => 'Chai'
            ],
            [
                'name'  => 'Chén'
            ],
            [
                'name'  => 'Con'
            ],
            [
                'name'  => 'Dĩa'
            ],
            [
                'name'  => 'Kg'
            ],
            [
                'name'  => 'Lạng'
            ],
            [
                'name'  => 'Lon'
            ],
            [
                'name'  => 'Ly'
            ],
            [
                'name'  => 'Mâm'
            ],
            [
                'name'  => 'Phần'
            ],
            [
                'name'  => 'Tháp'
            ]
    	];

    	DB::table('units')->insert($units);
    }
}
