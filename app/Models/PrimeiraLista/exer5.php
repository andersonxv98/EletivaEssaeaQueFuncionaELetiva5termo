<?php

namespace App\Models\PrimeiraLista;

class exer5
{
    private $var1;private $var2;private $var3;private $var4;

    /**
     * @param $var1
     * @param $var2
     * @param $var3
     * @param $var4
     */
    public function __construct($var1, $var2, $var3, $var4)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
        $this->var3 = $var3;
        $this->var4 = $var4;
    }

    public  function CalculoEprint(){
        $result_ = (this->$var1 + this->$var2 + this->$var3 + this->$var4)/  4;
        echo "média total: ".$result_;

        echo this->VerAprov($result_);
    }

    private function VerAprov($result_){
        return ($result_ >= 7) ? ( "Aprovado")  : ("reprovado");

    }

}
