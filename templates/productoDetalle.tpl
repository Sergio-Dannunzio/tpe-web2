{include file='templates/header.tpl'}

<h1 class="text-center">{$titulo}</h1>

<table  class="table text-center">
 <thead  class="thead-dark">
    <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
    </tr>
    </thead>

    {foreach from=$producto item=food} 
        <tr>
            <td>{$food->nombre}</td>
            <td>{$food->descripcion}</td>
            <td>{$food->precio}</td>
        </tr>
        <input type="hidden" name="idComentarioProducto" value="{$food->id_producto}">
    {/foreach}
</table>
{if $logged ge 1}
<table  class="table table-sm text-center" >
    <thead >
        <tr>
            <th scope="col">Comentario</th>
            <th scope="col">Puntuacion</th>
            {if $logged == 1}
                <th scope="col">Borrar</th>
            {/if}
        </tr>
    </thead>

    {foreach from=$usuario item=user} 
        <input type="hidden" name="idUsuario" value="{$user->id_usuario}">
    {/foreach}

    <tbody id="crearComentarios">
    </tbody>
</table>
{/if}
{if $logged ge 1}
    <section id="comentario">
            <ul class="tabla-comentarios">
            </ul>
    </section>

        <form class="text-center" id="addComent"  method="post">
          <label for="">Comentario:</label>
            <input type="text" name="comentario" placeholder="comentario">
            <label for="">Puntaje:</label>
             <select name="puntaje" id="">
                    <option></option>
                    <option value="1">★</option>
                    <option value="2">★★</option>
                    <option value="3">★★★</option>
                    <option value="4">★★★★</option>
                    <option value="5">★★★★★</option>
            </select> 

            <button class="btn btn-light" type="submit">Agregar</button>
        </form>
{else}
    <h3 class="text-center"> Se necesita estar logueado</h3>
{/if}

{if ($logged)}
    <input type="hidden" name="permisos" value="{$logged}">
{/if}

<a  href='home'>Volver</a> 
<script src="./js/comentarios.js"></script>

    {include file='templates/footer.tpl'}