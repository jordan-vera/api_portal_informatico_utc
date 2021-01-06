<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("usuarios", "App\Http\Controllers\UsuariosController");
Route::get("/usuarios-all", "App\Http\Controllers\UsuariosController@index");
