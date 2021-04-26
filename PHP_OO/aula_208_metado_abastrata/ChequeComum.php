<?php


class ChequeComum extends Cheque
{
    public function calcularJuros(): string
    {
        $valorComJuros = $this->valor + (0.20) * $this->valor;
        $valorConvertido = $this->converteReal($valorComJuros);
        return "Valor do chque do tipo {$this->tipo} é de R$: <strong>{$valorConvertido}</strong>";
    }
}
