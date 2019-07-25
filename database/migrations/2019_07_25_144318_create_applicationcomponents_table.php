<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationcomponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationcomponents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('callapplication_id');
            $table->string('title');
            $table->string('iden_component');
            $table->string('app_name');
            $table->string('unit_proposal');
            $table->float('budget_requested');
            $table->float('budget_requestedakkshi');
            $table->float('budget_total');
            $table->integer('duration');
            $table->string('contact_name');
            $table->string('contact_detail');
            $table->string('project_description');
            $table->string('excepted_results');
            $table->string('objectives_alike');
            $table->string('infrastructure');
            $table->string('activities');
            $table->string('reliability');
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
        Schema::dropIfExists('applicationcomponents');
    }
}
