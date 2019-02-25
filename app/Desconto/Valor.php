<?php 
namespace App\Desconto;

use App\Orcamento as Orcamento;

class Valor extends DescontoAbstract implements DescontoInterface {
    
    private $descontoValorPermitir = 500;

    public function descontar(Orcamento\Orcamento $orcamento) {
        if ($orcamento->getValor() > $this->descontoValorPermitir) {
            return $orcamento->getValor() * 0.1;
        }

        return $this->proximoDesconto->descontar($orcamento);
    }
}