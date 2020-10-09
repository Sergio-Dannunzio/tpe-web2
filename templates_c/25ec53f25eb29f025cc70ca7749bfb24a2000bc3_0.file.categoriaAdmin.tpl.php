<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 17:27:46
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\categoriaAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f2ff2c74a30_27286319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25ec53f25eb29f025cc70ca7749bfb24a2000bc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\categoriaAdmin.tpl',
      1 => 1602170810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f7f2ff2c74a30_27286319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <h1 > Lista de Categorias</h1>
    <form action="agregarCategoria" method="POST">
        <div>
            <label for="input_categoria">Nombre</label>
            <input name="input_categoria">
        </div>
        <button type="submit" >Agregar</button>
    </form>


<table>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'categorias');
$_smarty_tpl->tpl_vars['categorias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorias']->value) {
$_smarty_tpl->tpl_vars['categorias']->do_else = false;
?> 

         <tr> 
            <td><?php echo $_smarty_tpl->tpl_vars['categorias']->value->categoria;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['categorias']->value->id;?>
</td>
            <td> <a  href='eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id;?>
'>Eliminar</a> </td> 
            <td> <a  href='editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id;?>
'>Editar</a> </td>
        </tr>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<a  href='administrador'>Volver</a>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
