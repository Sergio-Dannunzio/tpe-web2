{include file='templates/header.tpl'}

{if $logged == 1}
    

{*AGREGAR*}
    <h1 > Lista de Categorias</h1>
    <form action="agregarCategoria" method="POST">
        <div>
            <label for="input_categoria">Nombre</label>
            <input name="input_categoria">
        </div>
        <button type="submit" >Agregar</button>
    </form>


<table>
{foreach from=$categoria item=categorias} 

         <tr> 
            <td>{$categorias->categoria}</td>
            <td>{$categorias->id}</td>
            <td> <a  href='eliminarCategoria/{$categorias->id}'>Eliminar</a> </td> 
            <td> <a  href='editarCategoria/{$categorias->id}'>Editar</a> </td>
        </tr>

{/foreach}
</table>

<a  href='administrador'>Volver</a>

{/if}


{include file='templates/footer.tpl'}


