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
        		  'name'  => 'Cháo - Lẩu',
            ],
            [
        		  'name'  => 'Món chiên - xào - hấp',
            ],
            [
        		  'name'  => 'Món khai vị',
            ],
            [
        		  'name'  => 'Món nướng',
            ],
            [
        		  'name'  => 'Thức uống',
            ],
            [
        		  'name'  => 'Thịt bò',
            ],
            [
        		  'name'  => 'Thịt heo',
            ],
            [
              'name'  => 'Thịt dê',
            ],
            [
              'name'  => 'Thịt gà',
            ],
            [
              'name'  => 'Cá',
            ],
            [
              'name'  => 'Tôm',
            ],
            [
              'name'  => 'Giò chả',
            ],
            [
              'name'  => 'Rau củ quả sạch',
            ],
    	];

    	DB::table('categories')->insert($categories);
    }
}
