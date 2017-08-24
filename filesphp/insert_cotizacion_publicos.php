<?php 
require('conexion.php');
$tbl_name="cotizaciones";

$nombre=$_POST['nom'];
$apellido=$_POST['ape'];
$telefono=$_POST['telefono'];
$correo=$_POST['mail'];
$pais=$_POST['pais'];
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
$codCate,'$formato','$nomprod', $codCantidad,'$coment','E')"; 

// Instrucción para evitar que al refrescar página vuelva a enviarse la misma cotización por el usuario
$sql2 = "SELECT COUNT(id_cott) As 'Cotizacion Recibida' FROM (SELECT id_cott FROM cotizaciones WHERE nombre_cott = '$nombre' And apellido_cott = '$apellido' And telefono_cott = '$telefono' AND email_cott = '$correo' AND pais_cott = $codPais)a"; 

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
			header('location:../Cotizacion.php');
			session_start();
			$_SESSION['alertaCott'] = "Su cotización ha sido recibida. Le atenderemos con mucho gusto y a la mayor brevedad prosible!!";
		}
		else
		{
			header('location:../Cotizacion.php');
			session_start();
			$_SESSION['alertaCott'] = "Proceso Fallido. Intentelo de nuevo más tarde!!";
		}
	}
	else
	{
		header('location:../Cotizacion.php');
		session_start();
		$_SESSION['alertaCott'] = "Lo sentimos, no puede enviarse más de 1 vez la misma cotización. Realice una diferente por favor!!";
	}
}
mysql_close();

?>