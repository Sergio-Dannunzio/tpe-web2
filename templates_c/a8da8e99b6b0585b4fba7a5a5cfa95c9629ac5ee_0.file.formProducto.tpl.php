<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 15:32:38
  from 'C:\xampp\htdocs\web1\TP_ESPECIAL\templates\formProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f14f6c70495_55514156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8da8e99b6b0585b4fba7a5a5cfa95c9629ac5ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\TP_ESPECIAL\\templates\\formProducto.tpl',
      1 => 1602163930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f14f6c70495_55514156 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <h1> Lista de Productos</h1>
    <form action="agregarProducto" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input  id="nombre" name="input_nombre">
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <input name="input_descripcion" id="descripcion">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input name="input_precio" id="precio">
        </div>
        <div>
            <label for="nombre">Categoria</label>
            <select name="select_categoria"> 
                <option value="">Elegir</option>


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
        <button type="submit">Agregar</button>
    </form>
</div>


<form action="editar" method="POST">
        <div>
            <label for="nombreUpdate">Nombre</label>
            <input   name="input_nombreUpdate" >
        </div>
        <div>
            <label for="descripcionUpdate">Descripcion</label>
            <input  name="input_descripcionUpdate" >
        </div>
        <div>
            <label for="precioUpdate">Precio</label>
            <input  name="input_precioUpdate" >
        </div>
        <div>
            <label for="categoriaUpdate">Categoria</label>
            <select name="select_categoriaUpdate">
                <option value="1">Desayuno</option>
                <option value="2">Almuerzo-cena</option>
                <option value="3">Merienda</option>
            </select>
        </div>

    </form>

<table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>id_categoria</th>
                <th>Categoria</th>
                <th>X</th>
                <th>Editar</th>
            </tr>
        </thead>
       
<?php }
}
