<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 22:02:31
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\formRegistrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8759573400e1_19816893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f14471e9dffee968d721cf8a2b09f3f77733454d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\formRegistrarse.tpl',
      1 => 1602705719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f8759573400e1_19816893 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="spa">
    <form class="formulario" action="registrarse" method="POST">
      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <ul class="formulario-ul">
          <li>
            <label for="">Nombre: </label>
            <input class="form-control" type="text" name="input_nombre">
          </li>
          <li>
            <label for="">Contraseña: </label>
            <input class="form-control" type="password" name="input_password">
          </li>
          <li>
            <input type="radio" name="input_access" value="1"> <label for="">Acepto terminos y condiciones</label>
          </li>
          <li>
            <button class="btn btn-primary">Iniciar sesion</button>
          </li>
      </ul>    
    </form>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
