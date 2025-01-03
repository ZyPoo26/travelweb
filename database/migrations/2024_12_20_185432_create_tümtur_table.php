<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTümturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tümtur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sayfa_link')->nullable();
            $table->string('image')->nullable();
            $table->string('indirim')->nullable();
            $table->string('tur_il')->nullable();
            $table->string('tur_açiklama')->nullable();
            $table->string('tur_gün')->nullable();
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
        Schema::dropIfExists('tümtur');
    }
}
