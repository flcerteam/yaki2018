<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->delete();

    	$categories = [
            [
        		'name'  => 'Đặc sản Yaki',
            ],
            [
        		'name'  => 'Món nướng',
            ],
            [
        		'name'  => 'Món hấp',
            ],
            [
        		'name'  => 'Món chiên',
            ],
            [
        		'name'  => 'Món xào',
            ],
            [
        		'name'  => 'Cháo',
            ],
            [
        		'name'  => 'Món lẩu',
            ]
    	];

    	DB::table('categories')->insert($categories);
    }
}
