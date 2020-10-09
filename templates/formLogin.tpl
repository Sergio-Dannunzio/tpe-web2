
{include file='templates/header.tpl'}

{if $message != ""}
    {$message}
{/if}
    


<div>
    <h1>{$titulo}</h1>
      <form action="verificar" method="POST">
        <div>

          <label for="">Nombre: </label>
            <input type="text" name="input_nombre">
          <label for="">Contraseña: </label>
            <input type="password" name="input_password">
        </div>

        <div>
          <button>Iniciar sesion</button> <a href='registrarse'>REGISTRARSE</a> </td>
        </div>
      </form>
</div>


{include file='templates/footer.tpl'}