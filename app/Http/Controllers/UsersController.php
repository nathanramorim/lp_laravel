<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\UsersLP;

class UsersController extends Controller
{

    public function insert(Request $request){
        $date = Carbon::now()->toDateTimeString();;

        $user = new UsersLP;
    
        $user->nome = $request->input('NomeCompleto');
        $user->sexo = $request->input('sexo');
        $user->email = $request->input('Email');
        $user->telefone = $request->input('Telefone');
        $user->cep = $request->input('cep');
        $user->endereco = $request->input('endereco');
        $user->bairro = $request->input('bairro');
        $user->cidade = $request->input('cidade');
        $user->uf = $request->input('uf');
        $user->created_at = $date;
        $user->updated_at = $date;
        $user->save();
        echo 1;
    }

    public function getIndex(){}


}
