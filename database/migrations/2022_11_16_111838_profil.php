<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pekerjaan');
            $table->string('deskripsi');
            $table->string('no_hp');
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('github')->nullable();
            $table->string('google')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('gambar');
            $table->string('bg_color');
            $table->string('card_color');
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
        Schema::dropIfExists('profil');
    }
};
