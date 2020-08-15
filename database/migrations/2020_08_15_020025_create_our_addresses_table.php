<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_addresses', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->integer('footer_id')->unsigned();
            $table->string('location')->nullable();
            $table->timestamps();

            $table->foreign('footer_id')->references('id')->on('footers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('our_addresses');
    }
}
