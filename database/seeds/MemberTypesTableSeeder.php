<?php

use Illuminate\Database\Seeder;

class MemberTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('member_types')->delete();

    	$types = [
            [
                'id'            => 0,
        		'name'	        => 'Thành viên Yaki',
            ],
            [
                'id'            => 1,
        		'name'	        => 'VIP',
            ],
    	];

    	DB::table('member_types')->insert($types);
    }
}
