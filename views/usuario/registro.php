 <?php  require_once 'helpers/utils.php';?>

<h1>Registrarse</h1>


  <?php if(isset($_SESSION['register'])&&$_SESSION['register']=='complete'):?>

    <div class="alert alert-success" role="alert">
            Registro completado satisfactoriamente
    </div>
  <?php    elseif (isset($_SESSION['register'])&&$_SESSION['register']=='failed'): ?>
  <div class="alert alert-danger" role="alert">
          Registro fallido, rellena todos los campos o intruce datos validos
  </div>
  <?php endif; ?>


<?php  Utils::deleteSession('register'); ?>




<form action="<?=base_url?>usuario/save" method="POST">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required/>

	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" required/>

	<label for="email">Email</label>
	<input type="email" name="email" required/>

	<label for="password">Contraseña</label>
	<input type="password" name="password" required/>

	<input type="submit" value="Registrarse" />
</form>
