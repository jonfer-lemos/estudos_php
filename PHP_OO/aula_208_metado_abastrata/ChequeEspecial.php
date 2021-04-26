<?php


class ChequeEspecial extends Cheque
{
    public function calcularJuros() : string
    {
        $valorComJuros = $this->valor + (0.20) * $this->valor;
        $valorConvertido = parent::converteReal($valorComJuros);
        return "Valor do chque do tipo {$this->tipo} é de R$: <strong>{$valorConvertido}</strong>";

    }
}