<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 19:30:12
  from 'C:\xampp\htdocs\Practico1\TP_ESPECIAL\templates\productoDetalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc68bb438d6a5_70267547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '599f06d59033cfbf931ae7735c5ea1e96d0172c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practico1\\TP_ESPECIAL\\templates\\productoDetalle.tpl',
      1 => 1606847392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fc68bb438d6a5_70267547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<table  class="table text-center">
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
        <input type="hidden" name="idComentarioProducto" value="<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<?php if ($_smarty_tpl->tpl_vars['logged']->value >= 1) {?>
<table  class="table table-sm text-center" >
    <thead >
        <tr>
            <th scope="col">Comentario</th>
            <th scope="col">Puntuacion</th>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
                <th scope="col">Borrar</th>
            <?php }?>
        </tr>
    </thead>

    <tbody id="crearComentarios">
    </tbody>
</table>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['logged']->value >= 1) {?>
    <section id="comentario">
            <ul class="tabla-comentarios">
            </ul>
    </section>

        <form class="text-center" id="agregarComentario"  method="post">
          <label for="">Comentario:</label>
            <input type="text" name="comentario" placeholder="comentario">
            <label for="">Puntaje:</label>
             <select name="puntaje" id="">
                    <option></option>
                    <option value="1">★</option>
                    <option value="2">★★</option>
                    <option value="3">★★★</option>
                    <option value="4">★★★★</option>
                    <option value="5">★★★★★</option>
            </select> 
            
            <button class="btn btn-light" type="submit">Agregar</button>
        </form>

<?php } else { ?>
    <h3 class="alert alert-warning text-center" class="text-center"> Se necesita estar logueado para poder ver los comentarios</h3>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['logged']->value)) {?>
    <input type="hidden" name="permisos" value="<?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
">
<?php }?>

<a  href='home'>Volver</a> 
<?php echo '<script'; ?>
 src="./js/comentarios.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
