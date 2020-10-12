
{include file='templates/header.tpl'}

<h1 class="text-center">{$titulo}</h1>


<table class="table">
    <thead  class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
        </tr>
    </thead>
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