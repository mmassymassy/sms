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
        Schema::create('disputes', function (Blueprint $table) {
            $table->id();
            $table->integer("sheet_id");
            $table->integer("client_id");
            $table->integer("solver_id");
            $table->integer("payement_id");
            $table->boolean("solved")->default(0);
            $table->dateTime("opened_on");
            $table->dateTime("closed_on");
            $table->string("note");
            $table->foreign("sheet_id")->references("id")->on("sheets");
            $table->foreign("client_id")->references("id")->on("users");
            $table->foreign("solver_id")->references("id")->on("users");
            $table->foreign("payement_id")->references("id")->on("payements");
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
        Schema::dropIfExists('disputes');
    }
};
