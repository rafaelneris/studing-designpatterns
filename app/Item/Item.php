<?php

namespace App\Item;

class Item {

    /** @var string $nome */
    private $nome;

    /** @var integer $valor */
    private $valor;

    /**
     * Construtor
     */
    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    /**
     * @param string $nome
     * @return Item
     */
    public function setNome($nome) 
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string 
     */
    public function getNome() 
    {
        return $this->nome;
    }

    /**
     * @param float $valor
     * @return Item
     */
    public function setValor($valor) 
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return float
     */
    public function getValor() 
    {
        return $this->valor;
    }
}