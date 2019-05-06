<?php

require_once("./Forma.php");

class FormaBidimensional  extends Forma
{

    public function __construct(string $nome, array $values)
    {
        parent::__construct($nome, $values);
    }


    public function obterArea(bool $isTrinagulo): float
    {
        if(empty($isTrinagulo)) {
            return $isTrinagulo ? ($this->getLargura() * $this->getAltura())/2 : Math.pow($this->getAresta(), 2);
        } else {
            return ($this->getRaio() * $this->getRaio()) * self::PI_VALOR;
        }
    }

    public function obterNome(): string
    {
        return $this->getNome();
    }

}