<?php

require './lib/autoload.php';

$smarty = new Template();
Rotas::get_Pagina();



//Valores para o template
$smarty->assign('NOME', 'Luis Ricardo');

$smarty->display('index.tpl');

?>