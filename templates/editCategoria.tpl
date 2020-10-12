
   {include file="templates/header.tpl"}

{*EDITAR*}
<div class="text-center">
      <h1 class="text-center">{$titulo}</h1>
    <form action="editarCategoria/{$categoria->id}" method="POST">
        <div>
            <label for="input_edit_categoria" >Nombre</label>
            <input class="form-control" name="input_edit_categoria" {$categoria->categoria}>
            <button  class="btn btn-light" type="submit">EDITAR</button>
        </div>
    </form>
</div>

   {include file="templates/footer.tpl"}