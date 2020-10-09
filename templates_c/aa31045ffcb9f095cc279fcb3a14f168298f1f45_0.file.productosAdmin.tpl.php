<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 17:40:35
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\productosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f808473070d78_65552888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa31045ffcb9f095cc279fcb3a14f168298f1f45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\productosAdmin.tpl',
      1 => 1602258031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f808473070d78_65552888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div>
    <h1> Lista de Productos</h1>
    <form action="agregarProducto" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input  id="nombre" name="input_nombre">
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <input name="input_descripcion" id="descripcion">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input name="input_precio" id="precio">
        </div>
        <div>
            <label for="nombre">Categoria</label>
            <select name="select_categoria"> 
                <option value="">Elegir</option>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'categorias');
$_smarty_tpl->tpl_vars['categorias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorias']->value) {
$_smarty_tpl->tpl_vars['categorias']->do_else = false;
?> 
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categorias']->value->categoria;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>


          
        </div>
        <button type="submit">Agregar</button>
    </form>
</div>







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
                <td><?php echo $_smarty_tpl->tpl_vars['food']->value->categoria;?>
</td>
                
                <td> <a  href='borrar/<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
'>Eliminar</a> </td> 
                <td> <a  href='editarProducto/<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
'>Editar</a> </td>
              
            </tr>
            
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<a  href='administrador'>Volver</a>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
