
{include file='templates/header.tpl'}

{if $logged == 1}
    
<div class="text-center">
        <div>
            <h2>Lista de Productos</h2> 
            <a  href="allProductosAdmin">Todos los Productos</a>
        </div>

        <div>
            <h2>Lista de categorias</h2>
            <a  href="allCategoriaAdmin">Todas las categorias </a>
        </div>
        <div>
            <h2>Lista de usuarios</h2> 
            <a  href="allUsuariosAdmin">Todos los usuarios</a>
        </div>
</div>

{elseif $logged == 2}
    <div class="alert alert-danger text-center" role="alert">
        <h1>Usuario normal</h1> 
    </div>
    {else}
        <h1 class="alert alert-warning text-center"> Logueate</h1>
{/if}

{include file='templates/footer.tpl'}