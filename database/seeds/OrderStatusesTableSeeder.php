<?php

use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('order_statuses')->delete();

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
        		'name'	        => 'Đang giao hàng',
            ],
            [
                'id'            => 3,
        		'name'	        => 'Hoàn thành',
            ],
            [
                'id'            => 4,
        		'name'	        => 'Đã hủy',
            ],
    	];

    	DB::table('order_statuses')->insert($statuses);
    }
}
