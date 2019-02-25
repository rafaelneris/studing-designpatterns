<?php

namespace App\Imposto;

use App\Orcamento as Orcamento;

class Iss implements ImpostoInterface {

    public function calcular(Orcamento\Orcamento $orcamento) 
    {
        return $orcamento->getValor() * 0.10;
    }

}