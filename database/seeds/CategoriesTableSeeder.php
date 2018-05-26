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
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C02',
              'name'  => 'Món chiên - xào - hấp',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C03',
              'name'  => 'Món khai vị',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C04',
              'name'  => 'Món nướng',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C05',
              'name'  => 'Thức uống',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C06',
              'name'  => 'Thịt bò',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C07',
              'name'  => 'Thịt heo',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C08',
              'name'  => 'Thịt dê',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C09',
              'name'  => 'Thịt gà',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C10',
              'name'  => 'Cá',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C11',
              'name'  => 'Tôm',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C12',
              'name'  => 'Giò chả',
              'ribbon_id' => '0',
            ],
            [
              'cid'   => 'C13',
              'name'  => 'Rau củ quả sạch',
              'ribbon_id' => '0',
            ],
    	];

    	DB::table('categories')->insert($categories);
    }
}
