<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 19:49:21
  from 'C:\xampp\htdocs\web1\wer\templates\categoriaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7dffa18ec929_81870382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b015d331b260216b0a1716cf31fa5a2281bb0708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\wer\\templates\\categoriaAdmin.tpl',
      1 => 1602085943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/formCategoria.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f7dffa18ec929_81870382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/formCategoria.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'categorias');
$_smarty_tpl->tpl_vars['categorias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorias']->value) {
$_smarty_tpl->tpl_vars['categorias']->do_else = false;
?> 

         <tr> 
            <td><?php echo $_smarty_tpl->tpl_vars['categorias']->value->categoria;?>
</td>

            <td> <a  href='eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id;?>
'>Eliminar</a> </td> 
            <td> <a  href='editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id;?>
'>Editar</a> </td>
        </tr>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
