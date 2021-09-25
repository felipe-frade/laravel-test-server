<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contato;

class ContatoController extends Controller
{
    // public function index()
    // {
    //     return "Este é o index do contato controller";
    // }
    public function index()
    {
        $lista = [
            ["nome" => "maria", "telefone" => "1234"],
            ["nome" => "joao", "telefone" => "4321"]
        ];

        // $contato = new \App\Contato();
        $contato = new Contato();
        dd($contato->lista());

        return view('contato.index', compact('lista'));
    }
    public function criar(Request $req)
    {
        dd($req->all());
        return "Este é o criar do contato controller";
    }
    public function editar()
    {
        return "Este é o editar do contato controller";
    }
}
