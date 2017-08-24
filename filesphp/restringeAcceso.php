<?php 
	require('conexion.php'); session_start();
	
	$Xerver = 0;
	
	while (($_SESSION['miusuario'] == null || $_SESSION['miclave'] == null) && ($Xerver==0)) 
	{ 
		header('WWW-Authenticate: Basic realm="INGRESE CORREO ELECTRONICO Y CLAVE DE SU CUENTA (CONFIRMACION DE CREDENCIALES REQUERIDA!!)"'); 
		header('HTTP/1.0 401 Unauthorized'); 
		
		if (ISSET($PHP_AUTH_USER) && ISSET($PHP_AUTH_PW))
		{
			$Xerver = 1;
		}
	}
	
	if ($Xerver==1)
	{
		// Asignando a variable auxiliar el correo ingresado desde variable global del servidor
		$e = $PHP_AUTH_USER;
		
		// Asignando a variable auxiliar la clave ingresada desde variable global del servidor
		$c = $PHP_AUTH_PW;
			
		// Recuperando el NickName del usuario según correo ingresado en variable global del servidor
		$auxUser = mysql_query("SELECT nickname_reg As 'user' from registrados WHERE email_reg = '$e' And clave_reg = '$c'");
		$usuario=mysql_fetch_array($auxUser);
		
		if ($usuario != null)
		{
			// Asignando a variable session el nickname recuperado del usuario
			$_SESSION['miusuario'] = $usuario['user'];
			$_SESSION['miclave'] = $PHP_AUTH_PW;
			
			$Xerver = 2;
		}		
	}
?>