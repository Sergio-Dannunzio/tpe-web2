
{include file='templates/header.tpl'}

<h1>{$titulo}</h1>


<table>

    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
    </tr>
{foreach from=$categoria item=categories} 
    <tr>
        <td>{$categories->nombre}</td>
        <td>{$categories->descripcion}</td>
        <td>{$categories->precio}</td>
    </tr>
{/foreach}

</table>

<a  href='home'>Volver</a> 


  {include file='templates/footer.tpl'}