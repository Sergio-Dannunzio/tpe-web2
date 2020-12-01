<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 16:06:36
  from 'C:\xampp\htdocs\Practico1\TP_ESPECIAL\templates\administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc65bfc118899_37084111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '543816accbccc71095be74c4fdf02dd2d5a0d748' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practico1\\TP_ESPECIAL\\templates\\administrador.tpl',
      1 => 1606835191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fc65bfc118899_37084111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
    
<div class="text-center">
        <div>
            <h2>Lista de Productos</h2> 
            <a  href="allProductosAdmin">Todos los Productos</a>
        </div>

        <div>
            <h2>Lista de categorias</h2>
            <a  href="allCategoriaAdmin">Todas las categorias </a>
        </div>
        <div>
            <h2>Lista de usuarios</h2> 
            <a  href="allUsuariosAdmin">Todos los usuarios</a>
        </div>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['logged']->value == 2) {?>
    <div class="alert alert-danger text-center">
        <h1>Usuario normal</h1> 
    </div>
<?php } else { ?>
    <h1 class="alert alert-warning text-center"> Logueate</h1>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
