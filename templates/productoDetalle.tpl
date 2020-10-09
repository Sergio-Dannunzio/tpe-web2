{include file='templates/header.tpl'}

<h1>{$titulo}</h1>


<table>

    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
    </tr>
{foreach from=$producto item=food} 
    <tr>
        <td>{$food->nombre}</td>
        <td>{$food->descripcion}</td>
        <td>{$food->precio}</td>
    </tr>
{/foreach}

</table>

<a  href='home'>Volver</a> 


  {include file='templates/footer.tpl'}