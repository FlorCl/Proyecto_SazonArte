<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contacto</title>
		<link href="contacto.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<style>
			img{
				width: 100%;
			}
		</style>
	
	</head>

	<body>
		<h1>SazonArte</h1>
			<!-- Cabecera -->
			<header class="marco">
				<nav class="cabecera">
			</nav>
			<!--Fin Cabecera -->
		<!--Form usuario-->
		<form method="post" action="login_pr.php">
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario">

			<label for="pass">Contraseña</label>
			<input type="password" name="pass" id="pass">
			
			<input type="submit" name="boton" id="boton" value="Ingresar">
		</form>
		<a class="boton" href="https://sazonarte.netlify.com">Ingresar sin loguearse</a>
		<br>
		<!-- Fin form usuario-->
		Si no estas registrado, hace click <a href="registro.php">aqui</a>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img src="cocina regional.jpg" alt="Receta regional">
				</div>
				<div class="item">
				  <img src="receta gourmet.jpg" alt="Receta gourmet">
				  <div class="carousel-caption">
				  </div>
				</div>
				<div class="item">
				  <img src="receta especial.jpg" alt="Recetas especiales">
				</div>
				<div class="item">
				  <img src="receta light.jpg" alt="Receta light">
				</div>
				<div class="item">
				  <img src="receta bebe.jpg" alt="Receta bebe">
				</div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		
		<!-- Cargo jQuery antes del código de bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!--Fin Carrousel -->
	
		<!--Pie de Pagina -->
	<nav="pie">
			<div class="direccion">
				Juan Jose Paso 5300 -Rosario <br>
				Argentina<br>
				Tel: +54 9 4345 673 
			</div>

			<div class="copyright">
				<p>&copy; 2018-Sazonarte - Todos los derechos reservados</p>
			</div>
	
	</nav>
	<script src=' http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'/>
	
	</body>
</html>
