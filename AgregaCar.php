<?php
session_start();

require("filesphp/validarcliente.php");

extract($_REQUEST);
require('filesphp/conexion.php');

if(!isset($cantidad)){
	$cantidad=1;
}

$qry = mysql_query("select * from productos where id_prod='".$id."'");
$row = mysql_fetch_array($qry);

if(isset($_SESSION['carro']))
	$carro = $_SESSION['carro'];

$carro[md5($id)]=array(	'identificador'=>md5($id),
						'cantidad'=>$cantidad,
						'producto'=>$row['nombre_prod'],
						'precio'=>$row['precioventa_prod'],
						'id'=>$id
						);

$_SESSION['carro']=$carro;

header("location: Catalogo.php?".SID);
?>