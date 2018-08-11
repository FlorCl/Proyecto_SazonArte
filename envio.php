<?php

if(isset($_post['nombre'])&& !empty ($_post['nombre']) &&
isset($_POST['asunto'])&& !empty ($_post['asunto']) &&
isset($_post['email'])&& !empty ($_post['email']) &&
isset($_post['mensaje'])&& !empty ($_post['mensaje'])
{
	$destino="mafcolla80@gmail.com";
	$desde ="From:."WMTP";
	$asunto = $_POST['asunto'];
	$mensaje= $_post['mensaje'];
	
	mail($destino,$asunto,$mensaje,$desde);
	
	echo"Correo enviado";
} else{
echo "Problemas con el envio";
}