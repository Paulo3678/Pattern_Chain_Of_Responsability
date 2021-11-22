<?php

/** 
 * Chain of Responsibility
      Básicamente, é uma "cadeia" de responsabilidades
      e que alguém dessa "cadeia" precisa resolver o
      nosso problema
 
 */

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Iss;

require 'vendor/autoload.php';

// $calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItems = 6;
// echo $calculadora->calcula($orcamento, new Iss());


$calculadora = new CalculadoraDeDescontos();
echo $calculadora->calculaDescontos($orcamento);
