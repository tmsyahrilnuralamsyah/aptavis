<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlasemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klasemen', function (Blueprint $table) {
            $table->id();
            $table->string('klub');
            $table->string('kota');
            $table->integer('ma');
            $table->integer('me');
            $table->integer('s');
            $table->integer('k');
            $table->integer('gm');
            $table->integer('gk');
            $table->integer('sg');
            $table->integer('poin');
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
        Schema::dropIfExists('klasemen');
    }
}
