<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RibbonsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(RtStatusesTableSeeder::class);
        $this->call(OrderStatusesTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(RtTypesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(ParametersTableSeeder::class);
        $this->call(MemberTypesTableSeeder::class);
    }
}
