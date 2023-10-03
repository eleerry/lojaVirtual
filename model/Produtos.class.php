<?php 

class Produtos extends Conexao{

    function __construct(){
        parent::__construct();
    }

    function GetProdutos(){
        // query para buscar os produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}produtos p 
                  INNER JOIN {$this->prefix}categorias c
                  ON p.pro_categoria = c.cate_id";
    }

}

?>