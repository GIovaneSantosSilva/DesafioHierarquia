<?php

class Forma
{

    private $nome;
    private $largura;
    private $altura;
    private $raio;
    private $aresta;
    protected const PI_VALOR = 3.14159265359;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function getAresta(): float
    {
        return $this->aresta;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function getRaio(): float
    {
        return $this->raio;
    }


    public function __construct(string $nome, ...$values)
    {
        $this->nome = $nome;
        if(is_bool($values[1])) {
            if($values[1])
                $this->raio = $values[0];
            else
                $this->aresta = $values[0];
        } else {
            $this->largura = $values[0];
            $this->altura = $values[1];
        }
    }

}