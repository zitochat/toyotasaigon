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
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(WardTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(BranchTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(DrivingTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductAccessoriesTableSeeder::class);
        $this->call(ProductColorTableSeeder::class);
        $this->call(ProductFurnitureTableSeeder::class);
        $this->call(ProductOperateTableSeeder::class);
        $this->call(ProductOutbuildingTableSeeder::class);
        $this->call(ProductSafeTableSeeder::class);
        $this->call(ProductSpecificationsTableSeeder::class);
        $this->call(ScheduleTableSeeder::class);
    }
}
