<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationbeneficariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationbeneficaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('callapplication_id');
            $table->unsignedInteger('organisation_id');
            $table->boolean('coordinator')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('applicationbeneficaries');
    }
}
