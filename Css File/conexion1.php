<?php
$host="127.0.0.1"; // Nombre del Servidor
$username="root"; // Mysql username
$password="sergio"; // Mysql password
$db_name="playmusic"; // Nombre Database

// Conectar al servidor y seleccionar la BD.
mysql_connect("$host", "$username", "$password")or die("No se puede conectar al Servidor");
mysql_select_db("$db_name")or die("No se puede seleccionar la BD");
?>