<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 17:50:50
  from 'C:\xampp\htdocs\web1\wer\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7de3dae8ff49_16773068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e89f5c1a339d867018f9e3d2e44f899d6b75d7c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\wer\\templates\\productos.tpl',
      1 => 1602085847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f7de3dae8ff49_16773068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>



<table>


    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Nombre de categoria</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['food']->value->id_categoria;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['food']->value->categoria;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['food']->value->id;?>
</td>
               
              <td> <a href='producto/<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
'>ver detalle</a> </td>

            </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





    
</table>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
