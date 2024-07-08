<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

class UsuarioController
{

    public static function retornaUsuario()
    {
        $usuario = new Usuario('1', 'Fulano', 30);
        return view('usuario', ['usuario' => $usuario]);
    }

}