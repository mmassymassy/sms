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
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->integer("client_id");
            $table->integer("solver_id");
            $table->integer("sheet_id");
            $table->boolean("status")->default(0);
            $table->string("pay_slip")->nullable();
            $table->boolean("in_dispute")->default(0);
            $table->foreign("sheet_id")->references("id")->on("sheets");
            $table->foreign("client_id")->references("id")->on("users");
            $table->foreign("solver_id")->references("id")->on("users");
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
        Schema::dropIfExists('payements');
    }
};
