<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 17:38:35
  from 'C:\xampp\htdocs\web1\wer\templates\formCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7de0fb919b04_57237911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0345a247d64f00c0142ebc96d12785f4114340f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\wer\\templates\\formCategoria.tpl',
      1 => 1602085110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7de0fb919b04_57237911 (Smarty_Internal_Template $_smarty_tpl) {
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
    </form><?php }
}
