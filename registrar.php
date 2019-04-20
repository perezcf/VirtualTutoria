<?php 
require_once('Vistas/header.php');
require_once('Modelos/conectar.php');
//require_once("Modelos/Usuarios_modelo.php"); 
echo '<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	  <script src="jquery-validate/dist/jquery.validate.min.js"></script>
      <script type="text/javascript" src="js/scripts.js"></script>
      <script type="text/javascript" src="Public/js/validaciones.js"></script>'

 ?>

<?php $_SESSION['$titulo'] = 'Registrar'; ?>

<div class="col-xl-12">
	<form name="registro_form" method="post">
		
		<div class="form-group">
			<h3>Ingrese sus datos</h3>
		</div>

		<div class="form-group">
			<label for="nombre"> Nombre:</label>
			<input type="text" name="nombre"  title="Empiece con Mayúscula y no utilice números" class="form-control" id="nombre" placeholder="Ingrese su nombre" >
		</div>

		<div class="form-group">
			<label for="apellido"> Apellido:</label>
			<input type="text" name="apellido" title="Empiece con Mayúscula y no utilice números" class="form-control" id="apellido" placeholder="Ingrese su apellido" >
		</div>
		<div class="form-group">
			<label for="cedula"> Cédula:</label>
			<input type="text" name="cedula" title="Cumpla con formato: 1 1111 1111" class="form-control" id="cedula" placeholder="Ingrese su numero de cédula sin guiones" >
		</div>
		<div class="form-group">
			<label for="email"> Email:</label>
			<input type="text" name="email"  title="Cumpla con formato: ejemplo@example.com" class="form-control" id="email" placeholder="Ingrese su Email" >
		</div>
		<div class="form-group">
			<label for="usuario"> Usuario:</label>
			<input type="text" name="usuario"  title="En minúscula, no utilice tildes, máximo 10 caracteres" class="form-control" id="usuario" placeholder="Ingrese su usuario" >
		</div>
		<div class="form-group">
			<label for="contrasena"> Contraseña:</label>
			<input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Ingrese su contraseña" >
		</div>

		<div class="form-group">
			<button type="submit" name="enviar" value="si"  class="btn btn-dark">Crear Usuario</button>
		</div>
	</form>
</div>

<?php 

include('Modelos/Usuarios_modelo.php');
 $objeto = new Usuario();


if (isset($_POST["nombre"],$_POST["apellido"],$_POST["cedula"],
		  $_POST["email"],$_POST["usuario"],$_POST["contrasena"]) 
	     /* and (
		  $_POST["nombre"]!="",$_POST["apellido"]!="",$_POST["cedula"]!="",
		  $_POST["email"]!="",$_POST["usuario"]!="",$_POST["contrasena"]!="")*/) {
	
	$objeto->AgregarUsuario($_POST["nombre"],$_POST["apellido"],$_POST["cedula"],
							$_POST["email"],$_POST["usuario"],$_POST["contrasena"]);

	echo "<script type='text/javascript'>
	alert('Usuario creado con exito');
	</script>";

}else{
	echo "<script type='text/javascript'>
	alert('Complete todos los datos del formulario');
	</script>";
}



require_once('Vistas/Footer.php');
 ?>
 