<?php

namespace App\Models\PrimeiraLista;

class exer4
{
    private $var1;

    /**
     * @param $var1
     */
    public function __construct($var1)
    {
        $this->var1 = $var1;
    }


    function VerfValor()
    {


        $arr_ = [];
        if (this->$var1 % 2 == 0 && this->$var1 != 0) {
            $arr_.add("par");
        }
        else if (this->$var1 == 0){
            $arr_.add("Zero");
        }
        else if(this->$var1 %2 ==1){
            $arr_.add("impar");
        }
        else{
            echo "insira um valor válido";
            return;
        }
        foreach ($arr_ as $item)
            echo $item."</br>";
    }

}
