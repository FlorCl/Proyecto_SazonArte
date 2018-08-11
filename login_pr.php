<?php
	// login_pr.php
	
	//Consigo los datos del form
		$usuario = $_POST['usuario'];
		$pass = md5($_POST['pass']); 
	
	//Me conecto a la BD
		include("conexion.php");
	//Genero la query
	
		$preg = "select * from usuarios
			where usuario = '$usuario'
			and pass = '$pass'";
					
		$preg_ej = mysqli_query($con, $preg);
		
	
		if ($preg_ej === false ){
			echo "Error, ver SQL";
		}else{
		
			$cant = mysqli_num_rows($preg_ej);
			
			if ($cant === 1){
			
				$reg = mysqli_fetch_array($preg_ej);

				session_start();
				$_SESSION['id_usu'] = $reg['id_usu'];
				
				//Reenviar a pagina interna
				header ("location:SazonArte_op2.html");
				
				
			}else{
				echo "Datos incorrectos";
			}
		
		}

?>