<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('branches')->delete();

    	$branches = [
            [
        		'name'	        => 'Yaki 1',
                'slug'          => 'yaki-1',
                'description'   => 'Nhà hàng Yaki 1',
                'address'       => '71 Chế Lan Viên, P. Tây Thạnh, Q. Tân Phú, Tp. HCM',
                'contact_name'  => 'Mr. Yaki 1',
                'phone_number'  => '0903906084 - (028) 38162188',
                'email'         => 'admin@yaki.com.vn',
                'open_hour'     => '15:00',
                'close_hour'    => '22:30',
                'location'      => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0806366451257!2d106.66426731480104!3d10.805135992302025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752924e9933fb7%3A0x7cfcfeda7f7e52e4!2sFujinet+Systems+JSC!5e0!3m2!1sen!2s!4v1525707072224" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'status'        => 0,
                'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
        		'name'	        => 'Yaki 2',
                'slug'          => 'yaki-2',
                'description'   => 'Nhà hàng Yaki 2',
                'address'       => '123 Bờ Bao Tân Thắng, P. Sơn Kỳ, Q. Tân Phú, Tp. HCM',
                'contact_name'  => 'Mr. Yaki 2',
                'phone_number'  => '0903906084 - (028) 38162188',
                'email'         => 'admin@yaki.com.vn',
                'open_hour'     => '15:00',
                'close_hour'    => '22:30',
                'location'      => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0806366451257!2d106.66426731480104!3d10.805135992302025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752924e9933fb7%3A0x7cfcfeda7f7e52e4!2sFujinet+Systems+JSC!5e0!3m2!1sen!2s!4v1525707072224" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'status'        => 0,
                'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
        		'name'	        => 'Yaki 3',
                'slug'          => 'yaki-3',
                'description'   => 'Nhà hàng Yaki 3',
                'address'       => '375 Tân Sơn Nhì, P. Tân Thành, Q. Tân Phú, Tp. HCM',
                'contact_name'  => 'Mr. Yaki 3',
                'phone_number'  => '0903906084 - (028) 38162188',
                'email'         => 'admin@yaki.com.vn',
                'open_hour'     => '15:00',
                'close_hour'    => '22:30',
                'location'      => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0806366451257!2d106.66426731480104!3d10.805135992302025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752924e9933fb7%3A0x7cfcfeda7f7e52e4!2sFujinet+Systems+JSC!5e0!3m2!1sen!2s!4v1525707072224" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'status'        => 0,
                'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
        		'name'	        => 'Yaki 4',
                'slug'          => 'yaki-4',
                'description'   => 'Nhà hàng Yaki 4',
                'address'       => '60 Đường CN1, P. Sơn Kỳ, Q. Tân Phú, Tp. HCM',
                'contact_name'  => 'Mr. Yaki 4',
                'phone_number'  => '0903906084 - (028) 38162188',
                'email'         => 'admin@yaki.com.vn',
                'open_hour'     => '15:00',
                'close_hour'    => '22:30',
                'location'      => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0806366451257!2d106.66426731480104!3d10.805135992302025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752924e9933fb7%3A0x7cfcfeda7f7e52e4!2sFujinet+Systems+JSC!5e0!3m2!1sen!2s!4v1525707072224" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'status'        => 0,
                'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
        		'name'	        => 'Yaki 5',
                'slug'          => 'yaki-5',
                'description'   => 'Nhà hàng Yaki 5',
                'address'       => '39 Đường số 3, Vĩnh Lộc Mới, Q. Bình Tân, Tp. HCM',
                'contact_name'  => 'Mr. Yaki 5',
                'phone_number'  => '0903906084 - (028) 38162188',
                'email'         => 'admin@yaki.com.vn',
                'open_hour'     => '15:00',
                'close_hour'    => '22:30',
                'location'      => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0806366451257!2d106.66426731480104!3d10.805135992302025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752924e9933fb7%3A0x7cfcfeda7f7e52e4!2sFujinet+Systems+JSC!5e0!3m2!1sen!2s!4v1525707072224" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'status'        => 0,
                'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'    => \Carbon\Carbon::now()->toDateTimeString()
            ],
    	];

    	DB::table('branches')->insert($branches);
    }
}
