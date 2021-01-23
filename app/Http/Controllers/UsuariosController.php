<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login($usuario, $clave)
    {
        $pass = urldecode($clave);
        $correo = urldecode($usuario);
        $datos = Usuarios::where('email', $correo)->where('clave', md5($pass))->first();
        if ($datos !== null) {
            $idusuario = $datos->idusuario;
            return array("response" => "done", "idusuario" => $idusuario);
        } else {
            return array("response" => "error");
        }
    }

    public function store(Request $request)
    {
        $usuario = Usuarios::create($request->all());
        return $usuario;
    }

    public function find($idusuario)
    {
        $usuario = Usuarios::find($idusuario);
        return $usuario;
    }

    public function updatess(Request $request, $idusuario)
    {
        $usuario = Usuarios::find($idusuario);
        $usuario->update($request->all());
        return ["response"=>"done"];
    }

}
