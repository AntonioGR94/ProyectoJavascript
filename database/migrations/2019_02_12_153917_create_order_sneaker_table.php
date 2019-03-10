<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderSneakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_sneaker', function (Blueprint $table) {
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('sneaker_id');

            $table->primary(['order_id','sneaker_id']);

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('sneaker_id')->references('id')->on('sneakers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_sneaker');
    }
}
