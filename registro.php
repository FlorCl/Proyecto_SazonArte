<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" >
		<title>Registrarse</title>
		<link href="contactos.css" rel="stylesheet">
			<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

	<body>
		<h1>SazonArte</h1>
			<!-- Cabecera -->
			<header class="marco">
				<nav class="cabecera">
				<h1><img src="logo_SazonArte.png" alt="logo_SazonArte">  SazonArte</h1>
			</nav>
		<form action="registro_pr.php" method="post" enctype="multipart/form-data">
		<!--<form method="post" action="registro_pr.php"> -->
		<ul>
			<div class="contacto">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre">
			</div>	
			<div class="contacto">
			<label for="apellido">Apellido</label>
			<input type="text" name="apellido" id="apellido" >
			</div>
			<div class="contacto">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" >
			</div>
			<div class="contacto">
			<label for="telefono">Telefono</label>
			<input type="text" name="telefono" id="telefono" >
			</div>
			<div class="contacto">
			<label for="sexo">Genero</label>
			<input type="text" name="sexo" id="sexo" >
			</div>
			<div class="contacto">
			<label for="usuario">Pais</label>
			<input type="text" name="pais" id="pais" >
			</div>
			<div class="contacto">
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario" >
			</div>
			<div class="contacto">
			<label for="pass">Contraseña</label>
			<input type="pass" name="pass" id="pass" >
			</div>
			<input type="submit" name="button" id="button" value="Registrarse">
		</ul>
		</form>
		<!--Pie de Pagina 
		<nav="pie">
				<div class="direccion">
					Juan Jose Paso 5300 -Rosario <br>
					Argentina<br>
					Tel: +54 9 4345 673 
				</div>

				<div class="copyright">
					<p>&copy; 2018-Sazonarte - Todos los derechos reservados</p>
				</div> -->
		<a href="https://sazonarte.netlify.com/sazonarte_op2">Volver a la pagina Principal</a>
		</nav>
	</body>
</html>