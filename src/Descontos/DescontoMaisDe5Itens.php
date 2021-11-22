<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Descontos\Desconto;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItems > 5) {
            return $orcamento->valor * 0.1;
        }
        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
