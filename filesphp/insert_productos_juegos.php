<?php

require('conexion.php');
$tbl_name="productos"; 

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$tipo = "Juegos";
$plataforma = $_POST['plataforma'];
$categoria = "2";
$precioventa = $_POST['precioventa'];
$preciocosto = $_POST['preciocosto'];
$genero = $_POST['genero'];
$foto = $_FILES['imagen']['name'];
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
			//Capturamos el archivo y validamos si no esta vacio
			
			$archivo = $_FILES['imagen']['name']; //este es el nombre del archivo que acabas de subir
			$tipoarchivo = $_FILES['imagen']['type']; //este es el tipo de archivo que acabas de subir
			$origen = $_FILES['imagen']['tmp_name'];//este es donde esta almacenado el archivo que acabas de subir.
			$tamano = $_FILES['imagen']['size']; //este es el tamaño en bytes que tiene el archivo que acabas de subir.
			$mjeError = $_FILES['imagen']['error']; //este almacena el codigo de error que resultaría en la subida.
			$destino="fotos/".$archivo;
			if($archivo!="")
			{
				copy($origen, $destino);
			}
			header('location:../Agrega_juego.php');
			session_start();
			$_SESSION['alertaProdB'] = "Su producto ha sido registrado con satisfacción!!";
			$alertaProdB = $_SESSION['alertaProdB'];
		}
		else
		{
			header('location:../Agrega_juego.php');
			session_start();
			$_SESSION['alertaProdB'] = "Registro de Producto Fallido. Intentelo de nuevo más tarde!!";
			$alertaProdB = $_SESSION['alertaProdB'];
		}
	}
	else
	{
		header('location:../Agrega_juego.php');
		session_start();
		$_SESSION['alertaProdB'] = "Lo sentimos, ya contamos con un registro relacionado con el que intenta ingresar. Favor envíe datos diferentes!!";
		$alertaProdB = $_SESSION['alertaProdB'];
	}
}
mysql_close();
?>