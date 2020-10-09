<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 17:07:16
  from 'C:\xampp\htdocs\web1\wer\templates\administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7dd9a4ec3258_04119212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdf5a0d20bd699c9f515cd9a027f44964a602ce4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\wer\\templates\\administrador.tpl',
      1 => 1602083225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f7dd9a4ec3258_04119212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div >
        <div>
            <h2>Lista de Productos</h2> 
            <a  href="allProductosAdmin">Todos los Productos</a>
        </div>

        <div>
            <h2>Lista de categorias</h2>
            <a  href="allCategoriaAdmin">Todas las categorias </a>
        </div>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
