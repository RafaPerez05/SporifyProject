<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicasTable extends Migration
{
    public function up()
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('caminho');
            $table->string('autor');
            $table->string('img');
            $table->text('descricao')->nullable();
            // Adicione outros campos conforme necessário
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('musicas');
    }
};
