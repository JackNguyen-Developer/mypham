<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BillTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('total_price')->unsigned();
            $table->integer('status')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::create('bill_detail', function (Blueprint $table) {
            $table->integer('bill_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('number')->unsigned();
            $table->softDeletes();

            $table->primary(['bill_id', 'product_id']);

            $table->foreign('bill_id')->references('id')->on('bill')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('product')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_detail');
        Schema::dropIfExists('bill');
    }
}
