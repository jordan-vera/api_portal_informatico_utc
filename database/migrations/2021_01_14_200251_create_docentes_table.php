<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->integer('iddocente')->autoIncrement();
            $table->string('nombres', 100);
            $table->string('email', 80);
            $table->text('formacion_academica');
            $table->string('foto', 100);
            $table->text('experiencia_laboral');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
