<?php


class ListContact extends Conn
{
    public object $conn;
    
    public function list() : array
    {
      $this->conn = $this->connect();

     $query_msgs_contacts = "SELECT id, name, email, msg_title, msg_content 
                FROM msgs_contacts  
                ORDER BY id DESC LIMIT 40";
     $result_msgs_contacts = $this->conn->prepare($query_msgs_contacts);
     $result_msgs_contacts->execute();
     $retorno = $result_msgs_contacts->fetchAll();
     //var_dump($retorno);
     return $retorno;
    }

}