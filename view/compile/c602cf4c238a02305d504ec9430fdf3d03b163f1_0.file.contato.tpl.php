<?php
/* Smarty version 3.1.46, created on 2023-09-25 02:17:37
  from 'C:\lojaVirtual\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_6510edc16a9135_49700198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c602cf4c238a02305d504ec9430fdf3d03b163f1' => 
    array (
      0 => 'C:\\lojaVirtual\\view\\contato.tpl',
      1 => 1695608255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6510edc16a9135_49700198 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="#" method="post">

    <div class="form-group ">
      <label for="nome">Nome</label>
      <input
        type="text"
        class="form-control"
        id="nome"
        placeholder="Nome...">
    </div>

    <div class="form-group ">
        <label for="email">E-mail</label>
        <input
            type="email"
            class="form-control"
            id="email"
            placeholder="E-mail...">
    </div>

    <div class="form-group ">
        <label for="assunto">Assunto</label>
        <input
            type="assunto"
            class="form-control"
            id="assunto"
            placeholder="Assunto...">
    </div>

    <div class="form-group">
    <label for="mensagem">Mensagem</label>
    <textarea
        class="form-control"
        id="mensagem"
        rows="3"
        placeholder="Digite sua mensagem aqui..."></textarea>
    </div>

    <button class="btn btn-lg btn-primary">Enviar</button>

</form><?php }
}
