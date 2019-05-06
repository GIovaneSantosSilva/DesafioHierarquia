<?php

require_once("../formas/FormaBidimensional.php");

class Circulo extends FormaBidimensional
{
    public function __construct(string $nome, float $raio)
    {
        parent::__construct($nome, $raio, true);
    }
}