<?php
/* Smarty version 3.1.46, created on 2023-10-03 03:02:52
  from 'C:\lojaVirtual\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_651b845c902470_23913117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914808116b40db1ee9124cf2e319a7c64e343a20' => 
    array (
      0 => 'C:\\lojaVirtual\\view\\produtos.tpl',
      1 => 1696302169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651b845c902470_23913117 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Lista de Produtos</h3>
<hr>

<section id="paginacao" class="row">
    <center>PAGINAS</center>
</section>

<section id="produtos" class="row">
    <ul style="list-style: none;">
        <div class="row" id="pularlinha">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                
            <li class="col-md-4">
                <div class="thumbnail">
                    <a href="">
                        <img src="" alt="" />
                        <div class="caption">
                            <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4>
                            <h3 class="text-center text-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
                        </div>
                    </a>
                </div>
            </li>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </ul>
</section>

<section id="paginacao" class="row">
    <center>PAGINAS</center>
</section>

<?php }
}
