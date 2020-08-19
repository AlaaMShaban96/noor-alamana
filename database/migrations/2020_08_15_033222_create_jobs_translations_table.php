<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_translations', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->mediumInteger('job_id')->unsigned();
            $table->char('language_code',2);
            $table->string('name');
            $table->text('description');
            $table->string('responsibility');
            $table->string('qualification');
            $table->string('experience');
            $table->string('skills');
            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('language_code')->references('code')->on('languages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_translations');
    }
}
