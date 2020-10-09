<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 19:49:18
  from 'C:\xampp\htdocs\web1\wer\templates\productosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7dff9e7cf782_01366573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b784f431a02c409d332be7b63ca80ff5d6f2b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\wer\\templates\\productosAdmin.tpl',
      1 => 1602085759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/formProducto.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f7dff9e7cf782_01366573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/formProducto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value, 'food');
$_smarty_tpl->tpl_vars['food']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['food']->value) {
$_smarty_tpl->tpl_vars['food']->do_else = false;
?> 
    
            <tr> 

                <td><?php echo $_smarty_tpl->tpl_vars['food']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['food']->value->descripcion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['food']->value->precio;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['food']->value->categoria;?>
</td>
                
                <td> <a  href='borrar/<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
'>Eliminar</a> </td> 
                <td> <a  href='editar/<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
'>Editar</a> </td>
              
            </tr>
            
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>







<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
