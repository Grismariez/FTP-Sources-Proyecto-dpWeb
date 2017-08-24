<?php 
require('conexion.php'); session_start();
$tbl_name="cotizaciones";

$nombre = $_SESSION['miusuario']; 
$aux1 = mysql_query("SELECT apellidos_reg As 'Apellido' FROM registrados WHERE nickname_reg = '$nombre'");
$a = mysql_fetch_array($aux1);
$apellido=$a['Apellido'];
$aux2 = mysql_query("SELECT telefono_reg As 'Telefono' FROM registrados WHERE nickname_reg = '$nombre'");
$t = mysql_fetch_array($aux2);
$telefono=$t['Telefono'];
$aux3 = mysql_query("SELECT email_reg As 'Correo' FROM registrados WHERE nickname_reg = '$nombre'");
$c = mysql_fetch_array($aux3);
$correo=$c['Correo'];
$aux4 = mysql_query("SELECT pais_reg As 'Pais' FROM registrados WHERE nickname_reg = '$nombre'");
$p = mysql_fetch_array($aux4);
$pais=$p['Pais'];
$categoria=$_POST['tipo'];
$formato=$_POST['formato'];
$nomprod=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$coment=$_POST['comen'];

$codCate = 0; $codCate = $categoria;
$codPais = 0; $codPais = $pais;
$codCantidad = 0; $codCantidad = $cantidad;

$sql1="INSERT INTO $tbl_name(nombre_cott,apellido_cott,telefono_cott,email_cott,
pais_cott,category_cott,formato_cott,nomprod_cott,cantidad_cott,coments_cott,tUser_cott)
VALUES('$nombre','$apellido','$telefono','$correo',$codPais,
$codCate,'$formato','$nomprod', $codCantidad,'$coment','C')"; 

// Instrucción para evitar que al refrescar página vuelva a enviarse la misma cotización por el usuario
$sql2 = "SELECT COUNT(id_cott) As 'Cotizacion Recibida' FROM (SELECT id_cott FROM cotizaciones WHERE nomprod_cott = '$nomprod' AND telefono_cott = '$telefono' AND email_cott = '$correo' AND pais_cott = $codPais)a"; 

// Ejecutando filtro para revocar cotización repetida
$countCotiza = mysql_query($sql2); 
$fila = mysql_fetch_array($countCotiza);

if ($nombre != null or $apellido != null or $telefono != null or $correo != null or $codPais != null) 
{
	if ($fila['Cotizacion Recibida'] == 0)
	{
		$result = mysql_query($sql1); // Ejecutando Inserción de nueva cotización
		if($result)
		{
			header('location:../Cotizacion_cliente.php');
			session_start();
			$_SESSION['alertaCottC'] = "Su cotización ha sido recibida. Le atenderemos con mucho gusto y a la mayor brevedad prosible!!";
		}
		else
		{
			header('location:../Cotizacion_cliente.php');
			session_start();
			$_SESSION['alertaCottC'] = "Proceso Fallido. Intentelo de nuevo más tarde!!";
		}
	}
	else
	{
		header('location:../Cotizacion_cliente.php');
		session_start();
		$_SESSION['alertaCottC'] = "Lo sentimos, no puede enviarse más de 1 vez la misma cotización. Realice una diferente por favor!!";
	}
}
mysql_close();

?>