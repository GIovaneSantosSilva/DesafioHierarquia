<?php

require_once("./Forma.php");

class FormaTridimencional extends Forma
{

    public function __construct(string $nome, array $values)
    {
        parent::__construct($nome, $values);
    }

    public function obterArea(bool $isTetraedro): float
    {
        if(empty($isTetraedro)){
            return $isTetraedro ? ((Math.pow($this->getAresta(), 2) * (Math.sqrt(3)))/4)*4 : 6 * (Math.pow($this->getAresta(), 2));
        } else {
            return (4 * self::PI_VALOR) * Math . pow($this->getRaio(), 2);
        }
    }

    public function obterVolume(bool $isTetraedro): float
    {
        if(empty($isTetraedro)) {
            return $isTetraedro ? (Math.pow($this->getAresta(), 3) * Math.sqrt(2)) / 12 : Math.pow($this->getAresta(), 3);
        } else {
            return (4 * self::PI_VALOR * (Math.pow($this->getRaio(), 3)))/ 3;
        }
    }

    public function obterNome(): string
    {
        return $this->getNome();
    }

}