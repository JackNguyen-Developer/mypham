<?php

use Illuminate\Database\Seeder;

class ProductCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <=2000; $i++){
            DB::table('product_category')->insert([
                [
                    'product_id' => rand(1,1000),
                    'category_id' => rand(111,1000)
                ]
            ]);
        }
    }
}
