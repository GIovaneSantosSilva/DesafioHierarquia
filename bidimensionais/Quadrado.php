<?php

require_once("../formas/FormaBidimensional.php");

class Quadrado extends FormaBidimensional
{
    public function __construct(string $nome, float $aresta)
    {
        parent::__construct($nome, $aresta, false);
    }
}