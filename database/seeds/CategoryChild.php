<?php

use Illuminate\Database\Seeder;

class CategoryChild extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 0; $i <=500; $i++){
    		DB::table('category_child')->insert([
    			[
    				'parent_id' => rand(11,109),
    				'child_id' => rand(110,1000)
    			]
    		]);
    	}

    }
}
