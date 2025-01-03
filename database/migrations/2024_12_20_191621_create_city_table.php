<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sayfa_link')->nullable();
            $table->string('image')->nullable();
            $table->string('indirim')->nullable();
            $table->string('il')->nullable();
            $table->string('açiklama')->nullable();
            $table->string('gün')->nullable();
            $table->string('normal_fiyat')->nullable();
            $table->string('indirimli_fiyat')->nullable();
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
        Schema::dropIfExists('city');
    }
}
