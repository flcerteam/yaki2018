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
        		'name'  => 'Món nướng',
                'slug'  => 'mon-nuong',
            ],
            [
        		'name'  => 'Món hấp',
                'slug'  => 'mon-hap',
            ],
            [
        		'name'  => 'Món chiên',
                'slug'  => 'mon-chien',
            ],
            [
        		'name'  => 'Món xào',
                'slug'  => 'mon-xao',
            ],
            [
        		'name'  => 'Cháo',
                'slug'  => 'chao',
            ],
            [
        		'name'  => 'Món lẩu',
                'slug'  => 'mon-lau',
            ]
    	];

    	DB::table('categories')->insert($categories);
    }
}
