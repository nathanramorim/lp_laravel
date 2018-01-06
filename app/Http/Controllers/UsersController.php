<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersController extends Controller
{

    public function insert(Request $request){
        $date = Carbon::now()->toDateTimeString();;
        // $data['id'] = 'DEFAULT';
        $data['nome'] = $request->input('NomeCompleto');
        $data['sexo'] = $request->input('sexo');
        $data['email'] = $request->input('Email');
        $data['telefone'] = $request->input('Telefone');
        $data['cep'] = $request->input('cep');
        $data['endereco'] = $request->input('endereco');
        $data['bairro'] = $request->input('bairro');
        $data['cidade'] = $request->input('cidade');
        $data['uf'] = $request->input('uf');
        $data['created_at'] = $date;
        $data['updated_at'] = $date;

        DB::insert('insert into lp_users 
            (id, nome, sexo, email, telefone, cep, endereco, bairro, cidade, uf, created_at, updated_at) 
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',$data);
    }

    public function getIndex(){}


}
