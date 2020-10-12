<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 17:01:44
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f846fd89a5585_69277392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd86518ef3b2adc9e20b54c09670f8a971c32cf99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\productos.tpl',
      1 => 1602514897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f846fd89a5585_69277392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<table>
        <tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'categories');
$_smarty_tpl->tpl_vars['categories']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->do_else = false;
?> 
        <th><button class="btn btn-light"> <a href='categoria/<?php echo $_smarty_tpl->tpl_vars['categories']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['categories']->value->categoria;?>
</a></button> </th>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
</table>


<table class="table">


    <thead  class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Nombre de la categoria</th>
            <th scope="col">Ver detalle</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['food']->value->categoria;?>
</td>
               
                <td> <button class="btn btn-light"><a href='producto/<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
'>Ver detalle</a> </button> </td>

            </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
</table>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
