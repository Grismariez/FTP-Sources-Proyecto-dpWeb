<?php 
require('conexion.php');

$tbl_name="registrados";

$nombres=$_POST['nom'];
$apellidos=$_POST['ape'];
$pais=$_POST['pais'];
$email=$_POST['user'];
$nickname=$_POST['nickNm'];
$clave=$_POST['pass'];
$direc=$_POST['dire'];
$diaNac=$_POST['dia'];
$mesNac=$_POST['mes'];
$anioNac=$_POST['anio'];
$sexo=$_POST['genero'];
$dui=$_POST['dui'];
$nit=$_POST['nit'];
$telefono=$_POST['telefono'];
$tipousua=2;

$codPais = 0; $codPais = $pais;

$sql1="INSERT INTO $tbl_name(nombres_reg,apellidos_reg,pais_reg,email_reg,
nickname_reg,clave_reg,direc_reg,diaNac_reg,mesNac_reg,anioNac_reg,sexo_reg,
dui_reg,nit_reg,telefono_reg,tipousua_reg)
VALUES('$nombres','$apellidos', $codPais,'$email','$nickname','$clave',
'$direc','$diaNac','$mesNac','$anioNac','$sexo','$dui','$nit','$telefono', $tipousua)";

// Contando cuántas veces existe un registro con el username idéntico al que se ha ingresado en formulario. Si ésta consulta
// arroja un resultado de 0 significa que el nuevo registro puede insertarse a la perfección ya que usuario no existirá
$sql2 = "SELECT COUNT(id_reg) As 'UserItem' FROM (SELECT id_reg FROM $tbl_name WHERE nickname_reg = '$nickname')a";

//Ejecutando instrucción para obtener los valores de campos indicados en tabla registro
$countUser = mysql_query($sql2); 
$fila = mysql_fetch_array($countUser);

if (($nombres != null) or ($apellidos != null) or ($nickname != null) or ($clave != null))
{
	if ($fila['UserItem'] == 0)
	{
		$result = mysql_query($sql1); // Ejecutando Inserción de nuevo cliente
		if($result)
		{
			header('location:../Agrega_usuarios.php');
			session_start();
			$_SESSION['alertaRegis'] = "Bienvenido: ".$nickname." - Su registro fue satisfactorio!!";
		}
		else
		{
			header('location:../Agrega_usuarios.php');
			session_start();
			$_SESSION['alertaRegis'] = "Registro Fallido. Intentelo de nuevo más tarde!!";
		}
	}
	else
	{
		header('location:../Agrega_usuarios.php');
		session_start();
		$_SESSION['alertaRegis'] = "Este cliente ya existe. Regístrese con otro nombre por favor!!";
	}
}
mysql_close();

?>