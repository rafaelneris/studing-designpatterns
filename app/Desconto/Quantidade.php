<?php 
namespace App\Desconto;

use App\Orcamento as Orcamento;

class Quantidade extends DescontoAbstract implements DescontoInterface{
    
    private $descontoItensQuantidadePermitir = 2;

    public function descontar(Orcamento\Orcamento $orcamento) {
        if (count($orcamento->getItens()) > $this->descontoItensQuantidadePermitir) {
            return $orcamento->getValor() * 0.15;
        }

        return $this->proximoDesconto->descontar($orcamento);
    }
}