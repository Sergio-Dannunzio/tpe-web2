<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 23:24:49
  from 'C:\xampp\htdocs\Practico1\TP_ESPECIAL\templates\editCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80d5211bfcf8_14290893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78d676896e4adaf6d2f6c75f96c7f328a673c53f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practico1\\TP_ESPECIAL\\templates\\editCategoria.tpl',
      1 => 1602255743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f80d5211bfcf8_14290893 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form action="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" method="POST">
        <div>
            <label for="input_edit_categoria" >Nombre</label>
            <input name="input_edit_categoria" <?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria;?>
>
            <button type="submit">EDITAR</button>
        </div>
    </form>


   <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
