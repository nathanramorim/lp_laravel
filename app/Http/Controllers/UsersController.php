<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        echo "Listar";
    }

    public function insert(Request $request){
        $data['nome'] = $request->input('NomeCompleto');
        $data['email'] = $request->input('Email');
        $data['telefone'] = $request->input('Telefone');
        $data['cep'] = $request->input('cep');
        $data['endereco'] = $request->input('endereco');
        $data['bairro'] = $request->input('bairro');
        $data['cidade'] = $request->input('cidade');
        $data['uf'] = $request->input('uf');
        $data['sexo'] = $request->input('sexo');
        // echo '<pre>';
        // var_dump($data);
        echo 1;
        // echo '</pre>';
    }

    public function getIndex(){}


}
