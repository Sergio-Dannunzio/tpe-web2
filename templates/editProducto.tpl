
{include file="templates/header.tpl"}

{*EDITAR*}
<div class="text-center">
    <h1 class="text-center">{$titulo}</h1>
    <form action="editarProducto/{$producto->id_producto}" method="POST">
         <div>
            <label for="input_edit_nombre" >Nombre:</label>
            <input class="form-control" name="input_edit_nombre" value={$producto->nombre}>
        </div>
            <label for="input_edit_descripcion">Descripcion:</label>
            <input class="form-control"  name="input_edit_descripcion" value={$producto->descripcion} >
        <div>   
             <label for="input_edit_precio">Precio:</label>
            <input class="form-control" name="input_edit_precio"  value={$producto->precio}>
        </div>  
        <div>
            <label for="categoriaUpdate">Categoria:</label>
           <select name="categoriaUpdate"> 

                {foreach from=$categoria item=categorias} 
                <option {if $categorias->id_categoria == $producto->id_categoria}
                    selected
                {/if}</option>
                    {**<option value="{$categorias->id}">{$categorias->categoria}</option>**}
                {/foreach}

            </select>
        </div>
       
            <button  class="btn btn-light" type="submit">Editar</button>
    
    </form>
</div >

   {include file="templates/footer.tpl"}