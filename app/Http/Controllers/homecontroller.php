<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function Exer1()
    {

    }

    public function primeiroexercicio(){
        return view('exercicio1');
    }

    public function result(Request $request){
        $valor = $request['valor'];
        return "ovalor informado é: ".$request;
    }
}
