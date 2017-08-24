<?php
if(!isset($_SESSION['tipoUser'])){
	header("location:Ingreso.php");
	$_SESSION['alerta'] = "Solo usuarios administradores tienen acceso a está página. <br>Absténgase de continuar, de lo contrario se verá en procesos legales!!";
}else
{
	if($_SESSION['tipoUser']!=1)
	{
		header("location:Ingreso.php");
		$_SESSION['alerta'] = "Solo usuarios administradores tienen acceso a está página. <br>Absténgase de continuar, de lo contrario se verá en procesos legales!!";
	}
}
?>