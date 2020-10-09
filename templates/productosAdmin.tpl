{include file='templates/header.tpl'}



{if $logged==1}
    
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


                {foreach from=$categoria item=categorias} 
                    <option value="{$categorias->id}">{$categorias->categoria}</option>
                {/foreach}
            </select>


          
        </div>
        <button type="submit">Agregar</button>
    </form>
</div>






{*dluplica el producto*}

<table>



    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
 
            <th>Nombre de categoria</th>
 
            </tr>
    </thead>
  



 {foreach from=$producto item=food} 
    
            <tr> 

                <td>{$food->nombre}</td>
                <td>{$food->descripcion}</td>
                <td>{$food->precio}</td>
                <td>{$food->categoria}</td>
                
                <td> <a  href='borrar/{$food->id_producto}'>Eliminar</a> </td> 
                <td> <a  href='editarProducto/{$food->id_producto}'>Editar</a> </td>
              
            </tr>
            
{/foreach}
</table>


<a  href='administrador'>Volver</a>


{/if}
{include file='templates/footer.tpl'}