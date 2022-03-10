<?php

namespace App\Http\Controllers;

use App\Models\PrimeiraLista\exer1;
use App\Models\PrimeiraLista\exer3;
use App\Models\PrimeiraLista\exer4;
use App\Models\PrimeiraLista\exer5;
use Illuminate\Http\Request;

class ControllerPrimeiraLista extends Controller
{
    public function Exe1($var1, $var2)
    {
        // parent::__call($method, $parameters); // TODO: Change the autogenerated stub
        exer1::class($var1, $var2);
        exer1::Calculo();
    }

    public function Exe2($var1, $var2){
        // parent::__call($method, $parameters); // TODO: Change the autogenerated stub
        exer2::class($var1, $var2);
        exer2::Calculo();
    }

    public function Exe3($var1){
        // parent::__call($method, $parameters); // TODO: Change the autogenerated stub
        exer3::class($var1);
        exer3::VerValor();
    }

    public function Exe4($var1){
        // parent::__call($method, $parameters); // TODO: Change the autogenerated stub
        exer4::class($var1);
        exer4::VerfValor();
    }

    public function Exe5($var1, $var2,$var3, $var4){
        // parent::__call($method, $parameters); // TODO: Change the autogenerated stub
        exer5::class($var1, $var2,$var3, $var4);
        exer5::CalculoEprint();
    }

  /*  public function result(Request $request){
        $valor = $request['valor'];
        return "ovalor informado é: ".$request;
    }*/
}