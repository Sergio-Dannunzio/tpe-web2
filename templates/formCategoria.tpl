
{include file='templates/header.tpl'}

{*AGREGAR*}
    <h1 > Lista de Categorias</h1>
    <form action="agregarCategoria" method="POST">
        <div>
            <label for="input_categoria">Nombre</label>
            <input name="input_categoria">
        </div>
        <button type="submit" >Agregar</button>
    </form>



    {include file='templates/footer.tpl'}