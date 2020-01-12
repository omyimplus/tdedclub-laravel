<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTstepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tsteps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('team1');
            $table->string('team2');
            $table->string('team3')->nullable();
            $table->string('team4')->nullable();
            $table->dateTime('published');
            $table->string('line');
            $table->string('facebook')->nullable();
            $table->string('editor');
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
        Schema::dropIfExists('tsteps');
    }
}
