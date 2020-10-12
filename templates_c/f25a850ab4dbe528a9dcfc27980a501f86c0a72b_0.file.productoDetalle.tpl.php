<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 17:02:36
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\productoDetalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84700c6e74a2_64962583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25a850ab4dbe528a9dcfc27980a501f86c0a72b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\productoDetalle.tpl',
      1 => 1602514951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f84700c6e74a2_64962583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>


<table  class="table">
 <thead  class="thead-dark">
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
    </tr>
    </thead>
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
