<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallapplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callapplications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('call_id');
            $table->unsignedInteger('organisation_id')->nullable();
            $table->boolean('application_status')->nullable();
            $table->string('approval_status')->nullable();
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
        Schema::dropIfExists('callapplications');
    }
}
