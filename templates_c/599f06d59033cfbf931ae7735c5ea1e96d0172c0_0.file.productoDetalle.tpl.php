<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 21:59:08
  from 'C:\xampp\htdocs\Practico1\TP_ESPECIAL\templates\productoDetalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80c10c0ede41_04554724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '599f06d59033cfbf931ae7735c5ea1e96d0172c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practico1\\TP_ESPECIAL\\templates\\productoDetalle.tpl',
      1 => 1602170741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f80c10c0ede41_04554724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>


<table>

    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
    </tr>
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
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<a  href='home'>Volver</a> 


  <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
