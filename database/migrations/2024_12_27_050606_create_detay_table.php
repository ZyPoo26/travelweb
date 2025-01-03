<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detay', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('tur_name')->nullable();
            $table->string('fiyat')->nullable();
            $table->string('indirimli_fiyat')->nullable();
            $table->string('aciklama')->nullable();
            $table->string('gün')->nullable();
            $table->string('ay')->nullable();
            $table->string('yer')->nullable();
            $table->string('detayli_aciklama')->nullable();
            $table->string('yan')->nullable();
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
        Schema::dropIfExists('detay');
    }
}
