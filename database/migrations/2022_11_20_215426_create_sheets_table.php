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
        Schema::create('sheets', function (Blueprint $table) {
            $table->id();
            $table->integer("client_id")->unsigned();
            $table->integer("solver_id")->unsigned()->nullable();
            $table->string('title');
            $table->string('description');
            $table->boolean('status')->default(0);
            $table->string("sheet_link");
            $table->string("solution_link")->default("");
            $table->dateTime("deadline");
            $table->string("level");
            $table->string("spec");
            $table->string("module");
            $table->string("sheet_type");
            $table->float("client_price");
            $table->float("proposed_price");
            $table->dateTime("solved_on");
            $table->foreign("client_id")->references('id')->on('users');
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
        Schema::dropIfExists('sheets');
    }
};
