<?php

require_once("../formas/FormaTridimencional.php");

class Cubo extends FormaTridimencional
{
    public function __construct(string $nome, float $aresta)
    {
        parent::__construct($nome, $aresta, false);
    }
}