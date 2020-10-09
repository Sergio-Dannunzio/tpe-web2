
{include file="templates/header.tpl"}

{*EDITAR*}
    <h1>{$titulo}</h1>
    <form action="editarProducto/{$producto->id_producto}" method="POST">
        <div>
            <label for="input_edit_nombre" >Nombre</label>
            <input name="input_edit_nombre" {$producto->nombre}>

            <label for="input_edit_descripcion">Descripcion</label>
            <input   name="input_edit_descripcion" {$producto->descripcion} >
            
             <label for="input_edit_precio">Precio</label>
            <input  name="input_edit_precio"  {$producto->precio}>
            
            <label for="categoriaUpdate">Categoria</label>
           <select name="categoriaUpdate"> 
                <option value="">Elegir</option>

                {foreach from=$categoria item=categorias} 
                    <option value="{$categorias->id}">{$categorias->categoria}</option>
                {/foreach}

            </select>
  
            <button type="submit">EDITAR PRODUCTO</button>
        </div>
    </form>


   {include file="templates/footer.tpl"}