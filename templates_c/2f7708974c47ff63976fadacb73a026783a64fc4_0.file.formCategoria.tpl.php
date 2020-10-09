<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 20:58:04
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\formCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e0fbcdb1a40_83346726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f7708974c47ff63976fadacb73a026783a64fc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\formCategoria.tpl',
      1 => 1602096961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7e0fbcdb1a40_83346726 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 > Lista de Categorias</h1>
    <form action="agregarCategoria" method="POST">
        <div>
            <label for="input_categoria">Nombre</label>
            <input name="input_categoria">
        </div>
        <button type="submit" >Agregar</button>
    </form>




      <h1 > Lista de Categorias</h1>
    <form action="editarCategoria" method="POST">
        <div>
            <label for="input_edit_categoria" >Nombre</label>
            <input name="input_edit_categoria">
        </div>
    </form>

    <?php }
}
