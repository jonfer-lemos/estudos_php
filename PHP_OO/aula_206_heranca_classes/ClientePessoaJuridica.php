<?php

class ClientePessoaJuridica extends Cliente
{
    public string $nomeFantasia;
    public int $cnpj;

    public function verInformacaoEmpresa(): string
    {
        $dados = "Endereço da pessoa Juridica<br>";
        $dados .= "Endereço: {$this->logradouro}<br>";
        $dados .= "Bairro: {$this->bairro}<br>";
        $dados .= "Empresa: {$this->nomeFantasia}<br>";
        $dados .= "CNPJ: {$this->cnpj}<br>";

        return "<p> $dados </p>";
    }
}
