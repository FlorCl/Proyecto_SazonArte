<?php
	//registro_pr.php
	
	//Datos
		$nombre= $_POST['nombre'];
		$apellido= $_POST['apellido'];
		$edad= $_POST['edad'];
		$email= $_POST['email'];
		$telefono= $_POST['telefono'];
		$sexo= $_POST['sexo'];	
		$pais= $_POST['pais'];
		$usuario= $_POST['usuario'];
		$pass= $_POST['pass'];
	
	//Conexion
		include("conexion.php");
		
	//Crear la query
	$insertar = "insert into usuarios
					values
				(NULL,'$nombre','$apellido','$edad','$email','$telefono','$sexo','$pais','$usuario','$pass')";
	

	//Ejecutar la query
	
	$ej_insertar = mysqli_query($con,$insertar);
	
	
	//Preguntar si funciono
	
	if ($ej_insertar === true){
		echo "Registro insertado";
		
	}else{
		echo "Problema al insertar los datos";
	}
	

?>