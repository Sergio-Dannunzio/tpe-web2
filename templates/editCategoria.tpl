
   {include file="templates/header.tpl"}

{*EDITAR*}
      <h1>{$titulo}</h1>
    <form action="editarCategoria/{$categoria->id}" method="POST">
        <div>
            <label for="input_edit_categoria" >Nombre</label>
            <input name="input_edit_categoria" {$categoria->categoria}>
            <button type="submit">EDITAR</button>
        </div>
    </form>


   {include file="templates/footer.tpl"}