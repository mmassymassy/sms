<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('item_name');
            $table->string('item_url');
            $table->string('quantity');
            $table->string('delivery_address');
            $table->string('item_description');
            $table->string('note');
            $table->float('item_price');
            $table->float('exchange_rate');
            $table->float('total_price');
            $table->boolean('paid');
            $table->float('delivery_status');
            $table->date('estimated_arrival');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commands');
    }
};
