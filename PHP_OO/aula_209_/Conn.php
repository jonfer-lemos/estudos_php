<?php



abstract class Conn
{
    public string $db = "mysql";
    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public string $dbname = "base_estudos";
    //public $port = 8080;
    public object $connect;

    public function connect()
    {
        try {
            $this->connect = new PDO($this->db . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->pass);
            //echo "Conexao com sucesso!";
            return $this->connect;
        } catch (Exception $ex) {
            echo "Conexão não realizada! 
                <br> Erro:" . $ex;
            return false;
        }
    }
}
