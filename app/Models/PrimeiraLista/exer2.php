<?php

namespace App\Models\PrimeiraLista;

class exer2
{

private $var1;
private $var2;

    /**
     * @param $var1
     * @param $var2
     */
    public function __construct($var1, $var2)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
    }
    public function Calculo(){
        $result = (this->$var1) * (this->$var2);

        echo  "O Preço pago pelo consumo será de: ".$result." DILMAS";
    }

}
