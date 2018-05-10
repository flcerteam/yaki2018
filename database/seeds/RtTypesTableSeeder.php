<?php

use Illuminate\Database\Seeder;

class RtTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('rt_types')->delete();

    	$types = [
            [
                'id'            => 0,
        		'name'	        => 'Bình thường',
            ],
            [
                'id'            => 1,
        		'name'	        => 'Buffet',
            ],
    	];

    	DB::table('rt_types')->insert($types);
    }
}
