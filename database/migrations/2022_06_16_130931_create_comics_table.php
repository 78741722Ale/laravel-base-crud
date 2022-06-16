<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            /* Aggiungo tutti i dati dell'intestazione del fumetto (nome, titolo ecc) */
            $table->string('title', 100);
            $table->string('author', 100);
            $table->text('info');
            $table->string('cover_image', 200);
            $table->decimal('price', 5,2);
            $table->string('release',100);
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
        Schema::dropIfExists('comics');
    }
}
