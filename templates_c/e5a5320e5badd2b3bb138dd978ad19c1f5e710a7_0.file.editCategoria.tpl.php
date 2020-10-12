<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 17:25:40
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\editCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f847574e29086_74551534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5a5320e5badd2b3bb138dd978ad19c1f5e710a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\editCategoria.tpl',
      1 => 1602516334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f847574e29086_74551534 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="text-center">
      <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form action="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" method="POST">
        <div>
            <label for="input_edit_categoria" >Nombre</label>
            <input class="form-control" name="input_edit_categoria" <?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria;?>
>
            <button  class="btn btn-light" type="submit">EDITAR</button>
        </div>
    </form>
</div>

   <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
