<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 20:59:07
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\categoriaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8355fb538a47_72477204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25ec53f25eb29f025cc70ca7749bfb24a2000bc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\categoriaAdmin.tpl',
      1 => 1602442745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f8355fb538a47_72477204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
    

    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form class="formulario" action="agregarCategoria" method="POST">
        <div>
            <label for="input_categoria">Nombre</label>
            <input  class="form-control" name="input_categoria">
        </div>
        <button class="btn btn-light" type="submit" >Agregar</button>
    </form>


<table class="table table-striped">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'categorias');
$_smarty_tpl->tpl_vars['categorias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorias']->value) {
$_smarty_tpl->tpl_vars['categorias']->do_else = false;
?> 

         <tr> 
            <td><?php echo $_smarty_tpl->tpl_vars['categorias']->value->categoria;?>
</td>
            <td><button class="btn btn-outline-secondary"> <a  href='eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id;?>
'>Eliminar</a> </button></td> 
            <td><button class="btn btn-outline-secondary"> <a  href='editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id;?>
'>Editar</a> </button></td>
        </tr>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<a  href='administrador'>Volver</a>

<?php }?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
