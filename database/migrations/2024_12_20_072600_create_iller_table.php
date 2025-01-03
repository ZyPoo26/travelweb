<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateillerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iller', function (Blueprint $table) {
            $table->increments('id');
            $table->string('incele_link')->nullable();
            $table->string('image')->nullable();
            $table->string('il_ad')->nullable();
            $table->string('gün')->nullable();
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
        Schema::dropIfExists('iller');
    }
}
