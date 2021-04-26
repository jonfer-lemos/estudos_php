<?php


//descrição
require './Conn.php'; 
class Users // classe 
{
   public $connect;

   public function listar()
   {
    $conn = new Conn();
    $this->connect = $conn->conectar();

    $query_useres = "SELECT id, nome, email FROM users ORDER BY id DESC LIMIT 40";
    $result_useres = $this->connect->prepare($query_useres);
    $result_useres->execute();
    return $result_useres->fetchAll();//criar matriz de todas as linhas
    

   }

}