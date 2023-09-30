<?php
/* Smarty version 3.1.46, created on 2023-09-30 21:14:05
  from 'C:\lojaVirtual\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_65188f9de27ad6_81001552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c602cf4c238a02305d504ec9430fdf3d03b163f1' => 
    array (
      0 => 'C:\\lojaVirtual\\view\\contato.tpl',
      1 => 1696108441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65188f9de27ad6_81001552 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="envio" method="post">

    <div class="form-group ">
      <label for="nome">Nome</label>
      <input
        name="nome"
        type="text"
        class="form-control"
        id="nome"
        placeholder="Nome...">
    </div>

    <div class="form-group ">
        <label for="email">E-mail</label>
        <input
            name="email"
            type="email"
            class="form-control"
            id="email"
            placeholder="E-mail...">
    </div>

    <div class="form-group ">
        <label for="assunto">Assunto</label>
        <input
            name="assunto"
            type="assunto"
            class="form-control"
            id="assunto"
            placeholder="Assunto...">
    </div>

    <div class="form-group">
    <label for="mensagem">Mensagem</label>
    <textarea
        name="mensagem"
        class="form-control"
        id="mensagem"
        rows="3"
        placeholder="Digite sua mensagem aqui..."></textarea>
    </div>

    <button class="btn btn-lg btn-primary">Enviar</button>

</form><?php }
}
