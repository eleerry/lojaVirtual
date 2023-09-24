<?php

require './lib/autoload.php';

$smarty = new Template();

//Valores para o template
$smarty->assign('NOME', 'Luis Ricardo');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_CARRINHO', Rotas::pag_Carrinho());

$smarty->display('index.tpl');

?>