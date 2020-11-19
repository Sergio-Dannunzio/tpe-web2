<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 19:10:46
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\usuariosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb563a6bd4047_53926226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6441616869ac53a5626bbf6850d0c33e8d1b3927' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\usuariosAdmin.tpl',
      1 => 1605723043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fb563a6bd4047_53926226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
    
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<table class="table table-striped text-center">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?> 
         <tr> 
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->nombre;?>
</td>
            <td><button class="btn btn-outline-secondary "> <a  href='eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
'>Eliminar</a> </button></td>

        <div>
        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->access == 2) {?>
            <td><button type="submit" class="btn btn-outline-info" name="input_cambiar_permisos"><a href="asignarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
">Asignar Admin</a></button></td>
        <?php } else { ?>    
            <td><button type="submit" class="btn btn-outline-info"  name="input_cambiar_permisos"><a href='quitarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
'>Quitar Permisos</a> </button></td>
        <?php }?>
                    </div>
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
