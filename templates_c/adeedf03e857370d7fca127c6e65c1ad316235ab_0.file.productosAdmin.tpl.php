<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 16:09:09
  from 'C:\xampp\htdocs\Practico1\TP_ESPECIAL\templates\productosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc65c95a09d93_64812403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adeedf03e857370d7fca127c6e65c1ad316235ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practico1\\TP_ESPECIAL\\templates\\productosAdmin.tpl',
      1 => 1602442396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fc65c95a09d93_64812403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
    

    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form class="formulario" action="agregarProducto" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input class="form-control" id="nombre" name="input_nombre">
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <input class="form-control" name="input_descripcion" id="descripcion">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input class="form-control" name="input_precio" id="precio">
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
        <button class="btn btn-light" type="submit">Agregar</button>
    </form>




<table class="table table-striped">
    <thead  class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Nombre de categoria</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Editar</th>
 
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
                
                <td><button class="btn btn-outline-secondary"> <a  href='borrar/<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
'>Eliminar</a></button> </td> 
                <td><button class="btn btn-outline-secondary"> <a  href='editarProducto/<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
'>Editar</a></button> </td>
              
            </tr>
            
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>


<a  href='administrador'>Volver</a>


<?php }
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
