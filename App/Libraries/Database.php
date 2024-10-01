<?php
class Database{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "blogaula";
    private $porta = "3306";
    private $dbh;

    public function __construct(){
         
        $dns = 'mysql:host='.$this->host.';port='.$this->porta.';dbname'.$this->banco;
        $opcoes = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try{
            $this->dbh = new PDO($dns, $this->usuario, $this->senha, $opcoes);
        }
        catch(PDOException $error){
            print "Error!";$error->getMessage()."<br/>";
            die();
        }
       
    }//fim do método constrututor
        
    
}