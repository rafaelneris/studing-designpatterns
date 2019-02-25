<?php
namespace App\Desconto;
use App\Orcamento as Orcamento;
interface DescontoInterface {
    public function descontar(Orcamento\Orcamento $orcamento);
}