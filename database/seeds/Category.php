<?php

use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 10; $i++){
            $t = 'Category test '.rand(1,50);
            DB::table('category')->insert([
                [
                    'title' => $t,
                    'slug' => $t . rand(1,50),
                    'status' => 1
                ]
            ]);
        }
    }
}
