<?php


//descrição

class Usuario // classe 
{
    public $nome; // atributos
    public $email;

    public function cadastrar($nome, $email) //Metado
    {
        $this->nome = $nome;
        $this->email = $email;

        return "Usuário <strong>{$this->nome}</strong> 
                com email <strong>{$this->email}</strong>   
                cadastrado";
    }


}