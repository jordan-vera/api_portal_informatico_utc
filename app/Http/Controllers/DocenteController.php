<?php

namespace App\Http\Controllers;

use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        return docente::all();
    }

    public function store(Request $request)
    {
        if ($request->archivo != null || $request->archivo != '') {
            $filePath = $_SERVER['DOCUMENT_ROOT'] . "/archivosPortal/" . $request->foto;
            file_put_contents($filePath, base64_decode($request->archivo));
        }

        $docente = docente::create($request->all());
        return $docente;
    }

    public function find($iddocente)
    {
        $docente = docente::where('iddocente', $iddocente)->first();
        return $docente;
    }

    public function updates(Request $request, $iddocente, $anterior)
    {
        if ($request->archivo) {

            $filePath2 = $_SERVER['DOCUMENT_ROOT'] . "/archivosPortal/" . urldecode($anterior);
            unlink($filePath2);

            $filePath = $_SERVER['DOCUMENT_ROOT'] . "/archivosPortal/" . $request->foto;
            file_put_contents($filePath, base64_decode($request->archivo));
        }

        $docente = docente::find($iddocente);
        $docente->update($request->all());
        return $docente;
    }

    public function delete($iddocente)
    {
        $docente = docente::find($iddocente);
        $docente->delete();

        return $docente;
    }
}
