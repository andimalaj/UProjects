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
            $table->string('title')->nullable();
            $table->string('iden_component')->nullable();
            $table->string('app_name')->nullable();
            $table->string('unit_proposal')->nullable();
            $table->string('ext_beneficary')->nullable();
            $table->float('budget_requested')->nullable();
            $table->float('budget_requestedakkshi')->nullable();
            $table->float('budget_total')->nullable();
            $table->integer('duration')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_detail')->nullable();
            $table->string('project_description')->nullable();
            $table->string('excepted_results')->nullable();
            $table->string('objectives_alike')->nullable();
            $table->string('infrastructure')->nullable();
            $table->string('activities')->nullable();
            $table->string('reliability')->nullable();
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
