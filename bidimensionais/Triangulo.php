<?php

require_once("../formas/FormaBidimensional.php");

class Triangulo extends FormaBidimensional
{

    public function __construct(string $nome, float $base, float $altura )
    {
        parent::__construct($nome, $base, $altura);
    }

}