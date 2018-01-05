<?php

use Illuminate\Database\Seeder;

class Brand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 10; $i++){
            $t = 'Brand test '.rand(1,50);
            DB::table('brand')->insert([
                [
                    'title' => $t,
                    'slug' => $t . rand(1,50),
                    'status' => 1,
                    'thumbnail' => 'default.jpg'
                ]
            ]);
        }
    }
}
