<?php

require('conexion.php');
$tbl_name="productos"; 

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$tipo = "Musicas";
$plataforma = $_POST['plataforma'];
$categoria = "1";
$precioventa = $_POST['precioventa'];
$preciocosto = $_POST['preciocosto'];
$genero = $_POST['genero'];
$foto = "No Aplica";
$fecha = $_POST['fecha'];

$pVta = 0.0; $pVta = $precioventa;
$pCto = 0.0; $pCto = $preciocosto;

// Insertando registros en la base de datos de mysql
$sql1="INSERT INTO $tbl_name(descripcion_prod, tipo_prod, plataforma_prod, categoria_prod, precioventa_prod, preciocosto_prod, 
genero_prod, foto, nombre_prod, fechaingreso_prod)
VALUES('$descripcion', '$tipo ', '$plataforma', '$categoria', $pVta, $pCto, '$genero', '$foto', '$nombre', '$fecha')";

// Instrucción para evitar que al refrescar página vuelva a enviarse el mismo producto
$sql2 = "SELECT COUNT(id_prod) As 'Producto Ingresado' FROM (SELECT id_prod FROM productos WHERE genero_prod = '$genero' And descripcion_prod = '$descripcion' And nombre_prod = '$nombre')a"; 

// Ejecutando filtro para revocar productos repetidos
$countProd = mysql_query($sql2); 
$fila = mysql_fetch_array($countProd);

if ($nombre != null or $descripcion != null or $plataforma != null or $genero != null) 
{
	if ($fila['Producto Ingresado'] == 0)
	{
		$result = mysql_query($sql1); // Ejecutando Inserción de un nuevo producto 
		if($result)
		{
			header('location:../Agrega_musica.php');
			session_start();
			$_SESSION['alertaProdA'] = "Su producto ha sido registrado con satisfacción!!";
			$alertaProdA = $_SESSION['alertaProdA'];
		}
		else
		{
			header('location:../Agrega_musica.php');
			session_start();
			$_SESSION['alertaProdA'] = "Registro de Producto Fallido. Intentelo de nuevo más tarde!!";
			$alertaProdA = $_SESSION['alertaProdA'];
		}
	}
	else
	{
		header('location:../Agrega_musica.php');
		session_start();
		$_SESSION['alertaProdA'] = "Lo sentimos, ya contamos con un registro relacionado con el que intenta ingresar. Favor envíe datos diferentes!!";
		$alertaProdA = $_SESSION['alertaProdA'];
	}
}
mysql_close();
?>