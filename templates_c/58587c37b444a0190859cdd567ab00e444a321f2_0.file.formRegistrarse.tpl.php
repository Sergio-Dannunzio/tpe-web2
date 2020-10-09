<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 22:40:24
  from 'C:\xampp\htdocs\Practico1\TP_ESPECIAL\templates\formRegistrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80cab81a1dc4_49741811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58587c37b444a0190859cdd567ab00e444a321f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practico1\\TP_ESPECIAL\\templates\\formRegistrarse.tpl',
      1 => 1602251506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f80cab81a1dc4_49741811 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
      <form action="registrarse" method="POST">
        <div>

          <label for="">Nombre: </label>
            <input type="text" name="input_nombre">
          <label for="">Contraseña: </label>
            <input type="password" name="input_password">
        </div>

        <div>

          <button>Iniciar sesion</button>
        </div>
      </form>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
