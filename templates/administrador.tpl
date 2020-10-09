
{include file='templates/header.tpl'}

{if $logged == 1}
    
<div >
        <div>
            <h2>Lista de Productos</h2> 
            <a  href="allProductosAdmin">Todos los Productos</a>
        </div>

        <div>
            <h2>Lista de categorias</h2>
            <a  href="allCategoriaAdmin">Todas las categorias </a>
        </div>
</div>

{/if}

{include file='templates/footer.tpl'}