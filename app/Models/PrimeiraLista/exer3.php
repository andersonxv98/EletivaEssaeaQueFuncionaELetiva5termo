<?php

namespace App\Models\PrimeiraLista;

class exer3
{
    private  $var1;

    /**
     * @param $var1
     */
    public function __construct($var1)
    {
        $this->var1 = $var1;
    }

    function VerValor()
    {
        //$var1 = $_POST['valor1']; //valor kilo
        if (this->$var1 > 10) {
            echo "maior que 10";
            return;
        }
        echo "menor que 10";
//$var2 = $_POST['valor2']; //qtd consum
//$result = $var1 * $var2;
    }
}
