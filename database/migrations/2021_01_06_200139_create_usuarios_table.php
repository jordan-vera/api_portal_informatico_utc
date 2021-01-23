<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('idusuario')->autoIncrement();
            $table->string('nombres', 60);
            $table->string('email', 60);
            $table->string('clave', 80);
            $table->timestamps();
        });
    }

    public function down() 
    {
        Schema::dropIfExists('usuarios');
    }
}
