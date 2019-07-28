<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('employer_id')->unsigned();
          $table->string('title');
          $table->string('salary');
          $table->string('location');
          $table->string('country');
          $table->text('description');
          $table->foreign('employer_id')->references('id')->on('employers');
          $table->rememberToken();
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
        Schema::dropIfExists('jobs');
    }
}
