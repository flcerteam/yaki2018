<?php

use Illuminate\Database\Seeder;

class RibbonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('ribbons')->delete();

    	$ribbons = [
            [
              'id'        => '0',
              'name'      => 'Không hiển thị',
              'css_class' => NULL,
            ],
            [
              'id'        => '1',
              'name'      => 'Dải màu xanh lá cây',
              'css_class' => 'ft23-ribbon',
            ],
            [
              'id'        => '2',
              'name'      => 'Dải màu xanh da trời',
              'css_class' => 'ft23-ribbon blue',
            ],
            [
              'id'        => '3',
              'name'      => 'Dải màu đỏ',
              'css_class' => 'ft23-ribbon red',
            ],
    	];

    	DB::table('ribbons')->insert($ribbons);
    }
}
