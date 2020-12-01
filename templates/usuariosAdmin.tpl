{include file='templates/header.tpl'}

{if $logged == 1}
    
    <h1 class="text-center">{$titulo}</h1>

<table class="table table-striped text-center">
{foreach from=$usuarios item=usuario} 
         <tr> 
            <td>{$usuario->nombre}</td>
            <td><button class="btn btn-outline-secondary "> <a  href='eliminarUsuario/{$usuario->id_usuario}'>Eliminar</a> </button></td>

        <div>
        {if $usuario->access eq 2}
            <td><button type="submit" class="btn btn-outline-info" name="input_cambiar_permisos"><a href="asignarUsuario/{$usuario->id_usuario}">Asignar Admin</a></button></td>
        {else}    
            <td><button type="submit" class="btn btn-outline-info"  name="input_cambiar_permisos"><a href='quitarUsuario/{$usuario->id_usuario}'>Quitar Permisos</a> </button></td>
        {/if}
        </div>
        </tr>
{/foreach}
</table>

<a  href='administrador'>Volver</a>

{/if}

{include file='templates/footer.tpl'}

