<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function getUsuario() {
        // $atributos = Usuario::all();
        // [$items] = $atributos;
        // dd($items->getAttributes());
        $usuario = Usuario::all();
        return response($usuario);
    }

    public function create() {
        $usuario = Usuario::all();
        return response($usuario);
    }

    public function store(Request $request) {
        Usuario::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'uuid' => $request->uuid,
            'id' => $request->id,
        ]);
        return 'Usuário criado!';
    }

    public function updateUsuario() {
        $atributos = Usuario::all();
        [$items] = $atributos;
        dd($items->getAttributes());
    }
}
