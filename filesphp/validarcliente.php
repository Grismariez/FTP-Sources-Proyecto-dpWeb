<?php
if(!isset($_SESSION['tipoUser'])){
	header("location:Ingreso.php");
	$_SESSION['alerta'] = "Ud. no tiene permisos de acceder a la página solicitada!!";
}else
{
	if($_SESSION['tipoUser']!=2)
	{
		header("location:Ingreso.php");
		$_SESSION['alerta'] = "Ud. no tiene permisos de acceder a la página solicitada!!";
	}
}
?>