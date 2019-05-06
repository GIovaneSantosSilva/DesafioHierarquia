<?php

require_once("../formas/FormaTridimencional.php");

class Esfera extends FormaTridimencional
{
    public function __construct(string $nome, float $raio)
    {
        parent::__construct($nome, $raio, true);
    }
}