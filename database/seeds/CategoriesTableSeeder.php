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
              'cid'       => 'C01',
              'name'      => 'Cháo - Lẩu',
            ],
            [
              'cid'   => 'C02',
              'name'  => 'Món chiên - xào - hấp',
            ],
            [
              'cid'   => 'C03',
              'name'  => 'Món khai vị',
            ],
            [
              'cid'   => 'C04',
              'name'  => 'Món nướng',
            ],
            [
              'cid'   => 'C05',
              'name'  => 'Thức uống',
            ],
            [
              'cid'   => 'C06',
              'name'  => 'Thịt bò',
            ],
            [
              'cid'   => 'C07',
              'name'  => 'Thịt heo',
            ],
            [
              'cid'   => 'C08',
              'name'  => 'Thịt dê',
            ],
            [
              'cid'   => 'C09',
              'name'  => 'Thịt gà',
            ],
            [
              'cid'   => 'C10',
              'name'  => 'Cá',
            ],
            [
              'cid'   => 'C11',
              'name'  => 'Tôm',
            ],
            [
              'cid'   => 'C12',
              'name'  => 'Giò chả',
            ],
            [
              'cid'   => 'C13',
              'name'  => 'Rau củ quả sạch',
            ],
    	];

    	DB::table('categories')->insert($categories);
    }
}
