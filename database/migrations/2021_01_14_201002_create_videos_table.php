<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->integer('idvideo')->autoIncrement();
            $table->string('titulo', 100);
            $table->text('descripcion');
            $table->string('video_url', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
