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
                'id'                => 0,
                'name'	            => 'Thành viên Yaki',
                'point_from'        => 0,
                'point_to'          => 199,
                'percent_discount'  => 3
            ],
            [
                'id'                => 1,
                'name'	            => 'VIP',
                'point_from'        => 200,
                'point_to'          => 299,
                'percent_discount'  => 5
            ],
            [
                'id'                => 2,
                'name'	            => 'VVIP',
                'point_from'        => 300,
                'point_to'          => 399,
                'percent_discount'  => 7
            ],
            [
                'id'                => 3,
                'name'	            => 'GOLD',
                'point_from'        => 400,
                'point_to'          => 499,
                'percent_discount'  => 10
            ],
            [
                'id'                => 4,
                'name'	            => 'DIAMOND',
                'point_from'        => 500,
                'point_to'          => 9999999999,
                'percent_discount'  => 12
            ],
    	];

    	DB::table('member_types')->insert($types);
    }
}
