<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('info')->nullable();
            $table->text('description');
            $table->string('thumbnails');
            $table->integer('price')->unsigned();
            $table->integer('review')->nullable();
            $table->integer('order_sort')->unsigned()->default(1);
            $table->integer('status')->unsigned()->default(0);
            //$table->integer('category_id')->unsigned();
            $table->integer('brand_id')->unsigned();

            $table->timestamps();
            $table->softDeletes();

            //$table->foreign('category_id')->references('id')->on('category')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brand')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
