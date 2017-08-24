<?php
session_start();

require("filesphp/validarcliente.php");

extract($_GET);
require('filesphp/conexion.php');

$carro= $_SESSION['carro'];

unset($carro[md5($id)]);

$_SESSION['carro']=$carro;

header("location: Catalogo.php?".SID);
?>