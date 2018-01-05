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
        $this->call(Brand::class);
        $this->call(Category::class);
        $this->call(Product::class);
        $this->call(ProductCategory::class);
        $this->call(RolePermission::class);
    }
}
