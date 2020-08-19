<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurAddressTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_address_translations', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->smallInteger('our_address_id')->unsigned();
            $table->char('language_code',2);
            $table->string('name')->unique();
            $table->timestamps();

            $table->foreign('our_address_id')->references('id')->on('our_addresses')->onDelete('cascade');
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
        Schema::dropIfExists('our_address_translations');
    }
}
