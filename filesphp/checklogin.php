<?php
require ('conexion.php'); session_start();
$tbl_name="registrados"; // Nombre de la Tabla

// Capturo Usuario y Clave enviados por el formulario
$c=$_POST['usua'];
$usuario=mysql_query("SELECT nickname_reg As 'user', nombres_reg as 'mynombre', id_reg  from registrados WHERE email_reg = '$c'");
$var=mysql_fetch_array($usuario);
$myusername=$var['user']; 
$mypassword=$_POST['clave'];
//Otra forma recomendada de definir variables de sesion
$_SESSION['miusuario']=$var['user'];
$_SESSION['miclave']=$_POST['clave'];
$_SESSION['mynombre']=$var['mynombre'];
$_SESSION['id_reg']=$var['id_reg'];

// Esto es opcional por seguridad para proteger MySQL de código 
//malicioso que un usuario quiera poner en los formularios.
$myusername = stripslashes($myusername); //para evitar espacios en blanco
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername); //Caracteres raros que pueden ser introducidos en los textboxes
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE nickname_reg = '$myusername' and clave_reg = '$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row cuenta las filas de la tabla
$count=mysql_num_rows($result);

// Si el resultado coincide $myusername y $mypassword, la tabla
//deberá tener 1 fila

if($count==1){

//Obtener los datos de la consulta
	$fila = mysql_fetch_array($result);
	$_SESSION['tipoUser'] = $fila['tipousua_reg'];
	
	if( $fila['tipousua_reg']==1)
	{
		header("location: ../index_admin.php");

	}
	else
	{
		header("location: ../index_cliente.php");
		$_SESSION['myuser']=$myusername;

	}
}
else 
{
	header("location:../Ingreso.php");
	$_SESSION['alerta'] = "Credenciales Incorrectas, Verifique!!";
}
?>	