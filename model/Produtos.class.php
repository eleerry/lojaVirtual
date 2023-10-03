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

        //$query .= "ORDER BY p.pro_id DESC";
        $this->ExecuteSQL($query);
        $this->getLista();
    }

    private function getLista(){
        $i = 1;
        while($lista = $this->ListarDados()){
            $this->itens[$i] = array(
                'pro_id' => $lista['pro_id'],
                'pro_categoria' => $lista['pro_categoria'],
                'pro_nome' => $lista['pro_nome'],
                'pro_desc' => $lista['pro_desc'],
                'pro_peso' => $lista['pro_peso'],
                'pro_valor' => $lista['pro_valor'],
                'pro_largura' => $lista['pro_largura'],
                'pro_altura' => $lista['pro_altura'],
                'pro_comprimento' => $lista['pro_comprimento'],
                'pro_img' => $lista['pro_img'],
                'pro_slug' => $lista['pro_slug'],
                'pro_estoque' => $lista['pro_estoque'],
                'pro_modelo' => $lista['pro_modelo'],
                'pro_referencia' => $lista['pro_referencia'],
                'pro_fabricante' => $lista['pro_fabricante'],
                'pro_ativo' => $lista['pro_ativo'],
                'pro_frete_free' => $lista['pro_frete_free']
            );
            $i++;
        }
    }

}

?>