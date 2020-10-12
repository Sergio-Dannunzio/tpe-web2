{include file='templates/header.tpl'}



{if $logged==1}
    

    <h1 class="text-center">{$titulo}</h1>
    <form class="formulario" action="agregarProducto" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input class="form-control" id="nombre" name="input_nombre">
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <input class="form-control" name="input_descripcion" id="descripcion">
        </div>
        <div>
            <label for="precio">Precio</label>
            <input class="form-control" name="input_precio" id="precio">
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
        <button class="btn btn-light" type="submit">Agregar</button>
    </form>




<table class="table table-striped">
    <thead  class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Nombre de categoria</th>
            <th scope="col">Eliminar</th>
            <th scope="col">Editar</th>
 
            </tr>
    </thead>
 
 {foreach from=$producto item=food} 
    
            <tr> 

                <td>{$food->nombre}</td>
                <td>{$food->descripcion}</td>
                <td>{$food->precio}</td>
                <td>{$food->categoria}</td>
                
                <td><button class="btn btn-outline-secondary"> <a  href='borrar/{$food->id_producto}'>Eliminar</a></button> </td> 
                <td><button class="btn btn-outline-secondary"> <a  href='editarProducto/{$food->id_producto}'>Editar</a></button> </td>
              
            </tr>
            
{/foreach}
</table>


<a  href='administrador'>Volver</a>


{/if}
{include file='templates/footer.tpl'}