{include file='templates/header.tpl'}
<h1 class="text-center">{$titulo}</h1>

<table>
        <tr>
    {foreach from=$categoria item=categories} 
        <th><button class="btn btn-light"> <a href='categoria/{$categories->id}'>{$categories->categoria}</a></button> </th>
    {/foreach}
        </tr>
</table>

 <div class="spa">
<table class="table">


    <thead  class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Nombre de la categoria</th>
            <th scope="col">Ver detalle</th>
        </tr>
    </thead>
  




    {foreach from=$producto item=food} 
    
            <tr> 
            
                <td>{$food->nombre}</td>
                <td>{$food->descripcion}</td>
                <td>{$food->precio}</td>
                <td>{$food->categoria}</td>
               
                <td> <button class="btn btn-light"><a href='producto/{$food->id_producto}'>Ver detalle</a> </button> </td>

            </tr>
    {/foreach}
  
</table>
 </div>

{include file='templates/footer.tpl'}


