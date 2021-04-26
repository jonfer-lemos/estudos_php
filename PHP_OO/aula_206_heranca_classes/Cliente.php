<?php


//descrição
require './Conn.php'; 
class Cliente // classe 
{
  public string $logradouro;
  public string $bairro;

  public function verEndereco() : string
  {
      return "<p>Endereço: {$this->logradouro} <br> 
               Bairro: {$this->bairro}</p>";
  }


}