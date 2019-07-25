<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationbudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationbudgets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('callapplication_id');
            $table->unsignedInteger('costtype_id');
            $table->float('unit_description');
            $table->float('unit_cost');
            $table->integer('number');
            $table->float('total_cost');
            $table->float('cost_requested');
            $table->float('cost_offered');
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
        Schema::dropIfExists('applicationbudgets');
    }
}
