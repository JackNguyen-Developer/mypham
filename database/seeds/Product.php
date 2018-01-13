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
        for($i = 0; $i <= 1000; $i++){
            $t = 'Product test- ' . $i;
            DB::table('product')->insert([
                [
                    'name' => $t,
                    'slug' => "slug-product-test-" . $i,
                    'info' => '<p>Item Code: #12345678</p><p>Availability: <span class="in-stock">In stock</span></p><p>Condition: New</p>',
                    'description' => 'update late-'.rand(10,100),
                    'thumbnails' => '["a.jpg","b.jpg","c.jpg"]',
                    'price' =>rand(50000,300000),
                    'review' => rand(1,50),
                    'brand_id' => rand(1, 10),
                    'status' => 1
                ]
            ]);
        }
    }
}
