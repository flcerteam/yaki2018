<?php

use Illuminate\Database\Seeder;

class ParametersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('parameters')->delete();

    	$parameters = [
            [
        		'param_id'	    => 'YAKI_ABOUT',
                'name'          => 'Giới thiệu Yaki',
                'content'       => 'Giới thiệu về nhà hàng Yaki',
                'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
            ],
    	];

    	DB::table('parameters')->insert($users);
    }
}
