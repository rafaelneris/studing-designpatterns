<?php
namespace App\Desconto;

abstract class DescontoAbstract {

    protected $proximoDesconto;

    public function append(DescontoInterface $desconto) 
    {
        $this->proximoDesconto = $desconto;
    }
}