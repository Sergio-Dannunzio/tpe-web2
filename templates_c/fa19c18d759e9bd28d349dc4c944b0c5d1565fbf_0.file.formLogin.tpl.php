<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 22:44:40
  from 'C:\xampp\htdocs\Practico1\TP_ESPECIAL\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80cbb8c9b592_93208267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa19c18d759e9bd28d349dc4c944b0c5d1565fbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practico1\\TP_ESPECIAL\\templates\\formLogin.tpl',
      1 => 1602253074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f80cbb8c9b592_93208267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<?php }?>
    


<div>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
      <form action="verificar" method="POST">
        <div>

          <label for="">Nombre: </label>
            <input type="text" name="input_nombre">
          <label for="">Contraseña: </label>
            <input type="password" name="input_password">
        </div>

        <div>
          <button>Iniciar sesion</button> <a href='registrarse'>REGISTRARSE</a> </td>
        </div>
      </form>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
