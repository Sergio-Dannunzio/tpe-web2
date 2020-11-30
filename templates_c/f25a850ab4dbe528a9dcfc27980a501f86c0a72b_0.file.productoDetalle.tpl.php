<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-25 16:16:14
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\productoDetalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbe753e8006a5_17324297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25a850ab4dbe528a9dcfc27980a501f86c0a72b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\productoDetalle.tpl',
      1 => 1606317367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fbe753e8006a5_17324297 (Smarty_Internal_Template $_smarty_tpl) {
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

<table  class="table table-sm text-center"  id="sinComentarios">
    <thead >
        <tr>
            <th scope="col">Comentario</th>
            <th scope="col">Puntuacion</th>
            <th scope="col">Usuario</th>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
                <th scope="col">Borrar</th>
            <?php }?>
        </tr>
    </thead>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?> 
        <input type="hidden" name="idUsuario" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    <tbody id="appearsComments">
    </tbody>
</table>


<?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
    <section id="comentario">
            <ul class="tabla-comentarios">
            </ul>
    </section>

        <form class="text-center" id="addComent"  method="post">
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
           
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value, 'food');
$_smarty_tpl->tpl_vars['food']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['food']->value) {
$_smarty_tpl->tpl_vars['food']->do_else = false;
?>     
                    <input type="hidden" name="idDelComentario" value="<?php echo $_smarty_tpl->tpl_vars['food']->value->id_producto;?>
">
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 

            <button class="btn btn-light" type="submit">Agregar</button>
        </form>
<?php } else { ?>
    <h3 class="text-center"> Se necesita estar logueado</h3>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['logged']->value)) {?>
    <input type="hidden" name="usuarioConectado" value="<?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
">
<?php }?>

<a  href='home'>Volver</a> 
<?php echo '<script'; ?>
 src="./js/comentarios.js"><?php echo '</script'; ?>
>

    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
