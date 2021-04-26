<?php

class Conn
{
    public $db = "mysql";
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "base_estudos";
    //public $port = 8080;
    public $connect = null;

    public function connect()
    {
        try {
            $this->connect = new PDO($this->db .':host='. $this->host . ';dbname='.$this->dbname, $this->user, $this->pass);
            echo "Conexao com sucesso!";
            return $this->connect;
        } catch (Exception $ex) {
            echo "Conexão não realizada! 
                <br> Erro:" . $ex;
            return false;
        }
    }
}


// class Conn
// {
//     public $host = "localhost";
//     public $user = "root";
//     public $pass = "";
//     public $dbname = "base_estudos";
//     //public $port = 8080;
//     public $connect = null;

//     public function conectar()
//     {
//         try {
//             $this->connect = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbname, $this->user, $this->pass);
//             //echo "Conexao com sucesso!";
//             return $this->connect;
//         } catch (Exception $ex) {
//             echo "Conexão não realizada! 
//                 <br> Erro:" . $ex;
//             return false;
//         }
//     }
// }