<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gezi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('indirim')->nullable();
            $table->string('tur_adi')->nullable();
            $table->string('gün')->nullable();
            $table->string('asil_fiyat')->nullable();
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
        Schema::dropIfExists('gezi');
    }
}
