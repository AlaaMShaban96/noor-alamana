<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->integer('footer_id')->unsigned();
            $table->tinyInteger('email_type_id')->unsigned();
            $table->string('email')->unique();
            $table->timestamps();

            $table->foreign('footer_id')->references('id')->on('footers')->onDelete('cascade');
            $table->foreign('email_type_id')->references('id')->on('emails_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
