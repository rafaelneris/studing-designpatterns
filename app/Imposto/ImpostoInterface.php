<?php

namespace App\Imposto;
use App\Orcamento as Orcamento;
interface ImpostoInterface {

    public function calcular(Orcamento\Orcamento $orcamento);
    
}