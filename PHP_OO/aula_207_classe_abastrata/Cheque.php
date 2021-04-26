<?php


//descrição
require './Conn.php'; 
abstract class Cheque // classe 
{
  public float $valor;
  public string $tipo;

  public function __construct($valor, $tipo)
  {
    $this->valor = $valor;
    $this->tipo = $tipo;
  }

  // public function verValor() : string 
  // { 
  //   return "Valor do chque do tipo {$this->tipo} é de R$: <strong>{$this->valor}</strong>";
  // } 

  public function converteReal($valor)
  {
   return number_format($valor,'2',',','.');
  }


}