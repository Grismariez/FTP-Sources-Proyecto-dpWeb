<?php
session_start();

require("filesphp/validarcliente.php");

require('filesphp/conexion.php');

$carro=$_SESSION['carro'];
$total= $_SESSION['ValorPagar'];
$id=$_SESSION['myid'];
$fecha=date('Y-m-d H:i:s');
extract($_POST);
//Sustotuye a todos las lineas para sacar los datos del formulario
//$nombretc=$_POST['nobre'];

//Guardo los datos generales de la compra
$sql="insert into compra (id_cliente, fecha_compra, valor_compra, estado_compra, 
nombretc_compra, bancotc_compra, numerotc_compra, mestc_compra, aniotc_compra, tipotc_compra) 
values ('$id','$fecha',$total, '0', '$nombre', '$emisor', '$numero', '$mesv', '$aniov', '$tipo')";
mysql_query($sql);
//Devuelve el dato de la tabla que ha sido autoincrementado, el id de la compra
$idcompra=mysql_insert_id();

if ($idcompra>0)
{
	foreach($carro as $k => $v)
	{
		//Guardo los detalles del carrito
		$pro=$v['producto'];
		$pre=$v['precio'];
		$can=$v['cantidad'];
		$sqlitem="insert into detallecompra (id_compra, producto_detallec, 
		precio_detallec, cantidad_detallec) values($idcompra,'$pro',$pre,$can)";
		
		mysql_query($sqlitem);
	}
	//Y vaciamos el carrito
	$carro=false;
	$_SESSION['carro']=$carro;
	header('location:Catalogo.php');
	$_SESSION['mensaje'] = "Compra Exitosa!";
}
else
{
	header('location:Catalogo.php');
	$_SESSION['mensaje'] = "Compra Fallida. Intente más tarde!";
}

?>