<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 16:02:11
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbbcef358e173_94951372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40539a6f75823bc703c9ce6123e2f92d80db89a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\comentarios.tpl',
      1 => 1606143683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbbcef358e173_94951372 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<form>
    <input type="hidden" id="input_IdProducto" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
    <input type="hidden" id="input_IdUsuario" value="<?php echo $_smarty_tpl->tpl_vars['Iduser']->value;?>
">
    <input type="hidden" id="input_Admin" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
">
</form>
<!--AGREGAR UN COMENTARIO-->
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
    <h1>Agregar un comentario: </h1>
    <form class="form_comentarios">
        <textarea class="textarea_commet" id="input_comentario" placeholder="Escriba su comentario" rows="10" cols="50" maxlength="200"></textarea>

        <div class="clasificacion">
            <p>Valora el producto</p> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stars']->value, 'star');
$_smarty_tpl->tpl_vars['star']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['star']->value) {
$_smarty_tpl->tpl_vars['star']->do_else = false;
?>
                <input class="input_star" id="radio<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
" type="radio" name="estrellas" value="<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
">
                <label class="label_star" for="radio<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
">★</label>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <button id="btn_comment" class="btn" type="submit">Comentar</button>
    </form>
<?php }?>

   <section id="comentario">
        <ul class="lista-comentarios">
        </ul>
    </section>

        <form id="form-tarea" action="insertar" method="post">
            <input type="text" name="titulo" placeholder="Titulo">
            <input type="text" name="descripcion" placeholder="Descripcion">
            <input type="number" name="prioridad"  max="10">
            <input type="submit" value="Insertar">
        </form>

<?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
>
        <?php }
}
