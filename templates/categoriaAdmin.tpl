{include file='templates/header.tpl'}

{if $logged == 1}
    

    <h1 class="text-center">{$titulo}</h1>
    <form class="formulario" action="agregarCategoria" method="POST">
        <div>
            <label for="input_categoria">Nombre</label>
            <input  class="form-control" name="input_categoria">
        </div>
        <button class="btn btn-light" type="submit" >Agregar</button>
    </form>


<table class="table table-striped">
{foreach from=$categoria item=categorias} 

         <tr> 
            <td>{$categorias->categoria}</td>
            <td><button class="btn btn-outline-secondary"> <a  href='eliminarCategoria/{$categorias->id}'>Eliminar</a> </button></td> 
            <td><button class="btn btn-outline-secondary"> <a  href='editarCategoria/{$categorias->id}'>Editar</a> </button></td>
        </tr>

{/foreach}
</table>

<a  href='administrador'>Volver</a>

{/if}


{include file='templates/footer.tpl'}


