<?php
namespace App\Orcamento;

use App\Item as Item;

class Orcamento {

    private $itens;

    private $valor;

    public function getValor()
    {
        return $this->valor;
    }

    public function setItem(Item\Item $item)
    {
        $this->itens[] = $item;
        $this->valor = $item->getValor() + $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }
}