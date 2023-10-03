<h2>Está é a pagina do produtos</h2>

<?php 

$produtos = new Produtos();
$produtos->GetProdutos();

var_dump($produtos->GetItens());

?>