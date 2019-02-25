<?php
namespace App\Desconto;
use App\Orcamento as Orcamento;

class Desconto {

    private $orcamento;

    public function __construct(Orcamento\Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function calcularDesconto() 
    {
        $valor = new Valor();
        $quantidade = new Quantidade();
        $semValor = new SemDesconto();

        $valor->append($quantidade);
        $quantidade->append($semValor);
        
        return $valor->descontar($this->orcamento);
    }

}