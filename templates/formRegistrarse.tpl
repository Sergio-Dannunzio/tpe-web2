

{include file='templates/header.tpl'}


<div class="spa">
    <form class="formulario" action="registrarse" method="POST">
      <h1>{$titulo}</h1>
        <ul class="formulario-ul">
          <li>
            <label for="">Nombre: </label>
            <input class="form-control" type="text" name="input_nombre">
          </li>
          <li>
            <label for="">Contraseña: </label>
            <input class="form-control" type="password" name="input_password">
          </li>
          <li>
            <input type="radio" name="input_access" value="1"> <label for="">Acepto terminos y condiciones</label>
          </li>
          <li>
            <button class="btn btn-primary">Iniciar sesion</button>
          </li>
      </ul>    
    </form>
</div>


{include file='templates/footer.tpl'}



