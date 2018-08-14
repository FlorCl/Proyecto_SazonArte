<?php
	
	//Datos
		$usuario = $_POST['usuario'];
		$pass = $_POST['pass']; 
	
	//Conexin
		include("conexion.php");
	//Query
	
		$preg = "select * from usuarios
			where usuario = '$usuario'
			and pass = '$pass'";
					
		$preg_ej = mysqli_query($con, $preg);
		
	
		if ($preg_ej === false ){
			echo "Error!!!";
		}else{
		
			$cant = mysqli_num_rows($preg_ej);
			
			if ($cant === 1){
			
				$reg = mysqli_fetch_array($preg_ej);

				session_start();
				$_SESSION['id_usu'] = $reg['id_usuario'];
				
				//Reenviar a pagina inicial
				header ("location:https://sazonarte.netlify.com/sazonarte_op3");
				
				
			}
			else{
				echo "Datos incorrectos";
			}
		
		}

?>