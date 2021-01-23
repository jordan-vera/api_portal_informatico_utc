<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/login/{usuario}/{clave}", "App\Http\Controllers\UsuariosController@login");
Route::get("/user/{idusuario}", "App\Http\Controllers\UsuariosController@find");
Route::put("/users/{idusuario}", "App\Http\Controllers\UsuariosController@updatess");

Route::post("/docente", "App\Http\Controllers\DocenteController@store");
Route::get("/docentes", "App\Http\Controllers\DocenteController@index");
Route::get("/docente-id/{iddocente}", "App\Http\Controllers\DocenteController@find");
Route::delete("/docente/{iddocente}", "App\Http\Controllers\DocenteController@delete");
Route::put("/docente/{iddocente}/{anterior}", "App\Http\Controllers\DocenteController@updates");

Route::post("/video", "App\Http\Controllers\VideosController@store");
Route::get("/videos", "App\Http\Controllers\VideosController@index");
Route::delete("/video/{idvideo}", "App\Http\Controllers\VideosController@delete");

Route::post("/noticia", "App\Http\Controllers\NoticiaController@store");
Route::get("/noticias", "App\Http\Controllers\NoticiaController@index");
Route::get("/noticia-id/{idnoticia}", "App\Http\Controllers\NoticiaController@find");
Route::get("/noticia-tipo/{tipo}", "App\Http\Controllers\NoticiaController@getTipo");
Route::delete("/noticia/{idnoticia}", "App\Http\Controllers\NoticiaController@delete");
Route::put("/noticia/{idnoticia}/{anterior}", "App\Http\Controllers\NoticiaController@updates");
