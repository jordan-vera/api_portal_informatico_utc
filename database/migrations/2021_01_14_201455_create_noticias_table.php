<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{

    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->integer('idnoticia')->autoIncrement();
            $table->string('titulo', 100);
            $table->text('descripcion');
            $table->string('portada_url', 100);
            $table->string('tipo_noticia', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
