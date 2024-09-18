<?php
class Database{
    // variaveis que serão declaradas em bloco vazio
    private static $instance = null;
    private $conn;
    private $host = 'localhost';
    private $db = 'contatos';
    private $user = 'root';
    private $pass = '';

    //funcao que será construído em bloco teoricamente vazio
    private function __construct(){ 
        try{
            $this -> conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
        } catch (PDOException $e){
            echo 'Connection failed ' . $e->getMessage();
        }
    }    

    // instancia padrão para ser preenchida
    public static function getInstance(){
        // diferente de new PDO
        // 

        if(!self::$instace) //minha instancia existe?
      //if(self::$instace == null)
        {
            self::$instace = new Database(); //adiciona instancia ao novo objeto fora da classe
        }
        
        return self::$instance;
    }

    // funcao de retorno de conexao
    public function getConnection(){
        return $this -> conn;
    }
}


?>