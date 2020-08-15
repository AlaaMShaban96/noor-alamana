<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurPartnersTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_partners_translations', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->smallInteger('our_partners_id')->unsigned();
            $table->char('language_code',2);
            $table->string('name');
            $table->text('description');
            $table->timestamps();
     
            $table->foreign('our_partners_id')->references('id')->on('our_partners')->onDelete('cascade');
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
        Schema::dropIfExists('our_partners_translations');
    }
}
