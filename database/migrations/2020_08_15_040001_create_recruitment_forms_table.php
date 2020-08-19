<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('job_id')->unsigned();
            $table->tinyInteger('city_id')->unsigned();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('address');
            $table->string('cvfile');
            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruitment_forms');
    }
}
