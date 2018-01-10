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


// create menu
        for($i = 0; $i <=10; $i++)
        {
            $t = 'Menu  '.$i;
            DB::table('category')->insert([
                [
                    'title' => $t,
                    'slug' => "slug-menu-".$i,
                    'status' => 1,
                    'level'=>1
                ]
            ]);
        }
// create category cha
        for($i = 0; $i <=100; $i++){
            $ran =rand(1,10);
            $t = 'Category Cha  '.$ran;
            DB::table('category')->insert([
                [
                    'title' => $t,
                    'slug' => "slugcon"."--".substr(md5(rand()),0,10)."--".$ran,
                    'status' => 1,
                    'level' =>2
                ]
            ]);
        }

// create category con
        for($i = 0; $i <=1000; $i++){
            $ran =rand(11,106);
            $t = 'Category Con  '.$ran;
            DB::table('category')->insert([
                [
                    'title' => $t,
                    'slug' => "slugcon"."--".substr(md5(rand()),0,10)."--".$ran,
                    'status' => 1,
                    'level'=>3
                ]
            ]);
        }

    }
}
