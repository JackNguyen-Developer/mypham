<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 10; $i++){
            $t = 'Product test ' . rand(1,50);
            DB::table('product')->insert([
                [
                    'name' => $t,
                    'slug' => $t . rand(1,50),
                    'info' => '<p>Item Code: #12345678</p><p>Availability: <span class="in-stock">In stock</span></p><p>Condition: New</p>',
                    'description' => 'update late',
                    'thumbnails' => '["a.jpg","b.jpg","c.jpg"]',
                    'price' => 100,
                    'review' => 1,
                    'brand_id' => rand(1, 10),
                    'status' => 1
                ]
            ]);
        }
    }
}
