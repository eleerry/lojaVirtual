<?php 

class Conexao extends Config{
    private $host, $user, $senha, $banco, $prefix;

    function __construct(){
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->senha = self::BD_SENHA;
        $this->banco = self::BD_BANCO;
        $this->prefix = self::BD_PREFIX;
    }

    private function Conectar(){
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf-8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );
        
        $link = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->user,$this->senha, $options);
    }
        
}

?>