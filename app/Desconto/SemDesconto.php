<?php
namespace App\Desconto;

use App\Orcamento;

class SemDesconto extends DescontoAbstract implements DescontoInterface {

    public function descontar(Orcamento\Orcamento $orcamento) 
    {
        return 0;
    }

}