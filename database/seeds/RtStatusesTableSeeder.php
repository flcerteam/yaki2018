<?php

use Illuminate\Database\Seeder;

class RtStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('rt_statuses')->delete();

    	$statuses = [
            [
                'id'            => 0,
        		'name'	        => 'Chờ xử lý',
            ],
            [
                'id'            => 1,
        		'name'	        => 'Đã xác nhận',
            ],
            [
                'id'            => 2,
        		'name'	        => 'Hoàn thành',
            ],
            [
                'id'            => 3,
        		'name'	        => 'Đã hủy',
            ],
    	];

    	DB::table('rt_statuses')->insert($statuses);
    }
}
