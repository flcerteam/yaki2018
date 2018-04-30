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
        DB::table('category_menu')->delete();
    	DB::table('menus')->delete();

    	$menus = [
            // Menu Yaki
            [
        		'menu_id'	    => 'YK_MENU',
                'name'          => 'Menu Yaki'
            ],
            // Menu Yaki Super Market
            [
        		'menu_id'	    => 'YK_SM_MENU',
                'name'          => 'Menu Yaki Super Market'
            ],
    	];

    	DB::table('menus')->insert($menus);
    }
}
