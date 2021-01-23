<?php

namespace App\Http\Controllers;

use App\Models\noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = noticia::orderBy('idnoticia', 'desc')->get();
        return $noticias;
    }

    public function getTipo($tipo)
    {
        $noticias = noticia::where('tipo_noticia', $tipo)->orderBy('idnoticia', 'desc')->get();
        return $noticias;
    }

    public function find($idnoticia)
    {
        $noticias = noticia::where('idnoticia', $idnoticia)->first();
        return $noticias;
    }


    public function store(Request $request)
    {
        if ($request->archivo != null || $request->archivo != '') {
            $filePath = $_SERVER['DOCUMENT_ROOT'] . "/archivosPortal/" . $request->portada_url;
            file_put_contents($filePath, base64_decode($request->archivo));
        }

        $noticia = noticia::create($request->all());
        return $noticia;
    }

    public function delete($idnoticia)
    {
        $noticia = noticia::find($idnoticia);
        $noticia->delete();

        return $noticia;
    }

    public function updates(Request $request, $idnoticia, $anterior)
    {
        if ($request->archivo) {

            $filePath2 = $_SERVER['DOCUMENT_ROOT'] . "/archivosPortal/" . urldecode($anterior);
            unlink($filePath2);

            $filePath = $_SERVER['DOCUMENT_ROOT'] . "/archivosPortal/" . $request->portada_url;
            file_put_contents($filePath, base64_decode($request->archivo));
        }

        $noticia = noticia::find($idnoticia);
        $noticia->update($request->all());
        return $noticia;
    }
}
