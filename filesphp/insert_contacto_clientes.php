<?php 
require('conexion.php'); session_start();
$tbl_name="mensajes";

$usuario=$_SESSION['miusuario'];
$c = mysql_fetch_array($aux1 = mysql_query("SELECT email_reg As 'Correo' FROM registrados WHERE nickname_reg = '$usuario'"));
$correo=$c['Correo'];
$asunto=$_POST['asunto'];
$p = mysql_fetch_array(mysql_query("SELECT pais_reg As 'Pais' FROM registrados WHERE nickname_reg = '$usuario'"));
$pais=$p['Pais'];
$descripcion=$_POST['message'];

$codPais = 0; $codPais = $pais;

$sql1="INSERT INTO $tbl_name(id_pais_mje, usuario_mje, email_mje, asunto_mje, descripcion_mje, tUser_mje)
VALUES($codPais, '$usuario','$correo','$asunto','$descripcion', 'C')";

// Instrucción para evitar que al refrescar página vuelva a enviarse la misma mensaje contacto por el usuario
$sql2 = "SELECT COUNT(id_mje) As 'Mje Recibido' FROM (SELECT id_mje FROM mensajes WHERE usuario_mje = '$usuario' And email_mje = '$correo' And descripcion_mje = '$descripcion')a"; 

// Ejecutando filtro para revocar mensaje contacto repetido
$countMje = mysql_query($sql2); 
$fila = mysql_fetch_array($countMje);

if ($usuario != null or $correo != null or $asunto != null or $descripcion != null) 
{
	if ($fila['Mje Recibido'] == 0)
	{
		$result = mysql_query($sql1); // Ejecutando Inserción de nueva mensaje contacto 
		if($result)
		{
			header('location:../Contacto_cliente.php');
			session_start();
			$_SESSION['alertaContacC'] = "Su mensaje ha sido enviado con éxito!!";
		}
		else
		{
			header('location:../Contacto_cliente.php');
			session_start();
			$_SESSION['alertaContacC'] = "Mensaje Fallido. Intentelo de nuevo más tarde!!";
		}
	}
	else
	{
		header('location:../Contacto_cliente.php');
		session_start();
		$_SESSION['alertaContacC'] = "Lo sentimos, este mensaje ya ha sido enviado por UD. Envíe uno diferente!!";
	}
}
mysql_close();
?>


