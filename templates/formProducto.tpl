

{include file='templates/header.tpl'}

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



<table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>id_categoria</th>
                <th>Categoria</th>
                <th>X</th>
                <th>Editar</th>
            </tr>
        </thead>
       


{include file='templates/footer.tpl'}