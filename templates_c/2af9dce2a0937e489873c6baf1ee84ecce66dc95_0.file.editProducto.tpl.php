<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 21:14:08
  from 'C:\xampp\htdocs\Practico1\TP_ESPECIAL\templates\editProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7f5908d4045_18581018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af9dce2a0937e489873c6baf1ee84ecce66dc95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Practico1\\TP_ESPECIAL\\templates\\editProducto.tpl',
      1 => 1606940047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fc7f5908d4045_18581018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="text-center">
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form action="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" method="POST">
         <div>
            <label for="input_edit_nombre" >Nombre:</label>
            <input class="form-control" name="input_edit_nombre" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
>
        </div>
            <label for="input_edit_descripcion">Descripcion:</label>
            <input class="form-control"  name="input_edit_descripcion" value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
 >
        <div>   
             <label for="input_edit_precio">Precio:</label>
            <input class="form-control" name="input_edit_precio"  value=<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
>
        </div>  
        <div>
            <label for="categoriaUpdate">Categoria:</label>
           <select name="categoriaUpdate"> 

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'categorias');
$_smarty_tpl->tpl_vars['categorias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorias']->value) {
$_smarty_tpl->tpl_vars['categorias']->do_else = false;
?> 

                    <option value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categorias']->value->categoria;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </select>
        </div>
       
            <button  class="btn btn-light" type="submit">Editar</button>
    
    </form>
</div >

   <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
