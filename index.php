<?php

require './lib/autoload.php';

$smarty = new Template();
Rotas::get_Pagina();



//Valores para o template
$smarty->assign('NOME', 'Luis Ricardo');

echo Rotas::get_SiteTEMA();

$smarty->display('index.tpl');

?>