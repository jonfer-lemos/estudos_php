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
  abstract function calcularJuros();


  public function converteReal($valor)
  {
    return number_format($valor, '2', ',', '.');
  }
}
