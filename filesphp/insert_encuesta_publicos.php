<?php 
require('conexion.php');
$tbl_name="encuesta";

$alias=$_POST['nom'];
$sexo=$_POST['genero'];
$pais=$_POST['pais'];
$preg1=$_POST['pregunta1'];
$preg2=$_POST['pregunta2'];
$preg3=$_POST['pregunta3'];
$preg4=$_POST['pregunta4'];
$preg5=$_POST['preg5'];
$preg6=$_POST['preg6'];
$preg7=$_POST['preg7'];
$detalle7=$_POST['xq'];
$preg8=$_POST['pm'];
$preg9=$_POST['prt'];
$preg10=$_POST['preg10'];
$preg11=$_POST['pyt'];
$preg12=$_POST['p12'];
$preg13=$_POST['prg13'];
$detalle13=$_POST['preg13'];
$preg14=$_POST['pregu14'];
$preg15=$_POST['pregu15'];

$codPais = 0; $codPais = $pais;

$sql1="INSERT INTO $tbl_name(alias_encu,sexo_encu,pais_encu,answerpreg1_encu,
answerpreg2_encu,answerpreg3_encu,answerpreg4_encu,answerpreg5_encu,answerpreg6_encu,
answerpreg7_encu,detalleresp7_encu,answerpreg8_encu,answerpreg9_encu,
answerpreg10_encu,answerpreg11_encu,answerpreg12_encu,answerpreg13_encu,
detalleresp13_encu,answerpreg14_encu,answerpreg15_encu,tUser_encu)
VALUES('$alias','$sexo', $codPais,'$preg1','$preg2','$preg3','$preg4','$preg5',
'$preg6','$preg7','$detalle7','$preg8','$preg9','$preg10','$preg11','$preg12',
'$preg13','$detalle13','$preg14','$preg15','E')";

// Instrucción para evitar que al refrescar página vuelva a enviarse respuestas de encuesta por mismo usuario
$sql2 = "SELECT COUNT(id_encu) As 'Encuesta enviada' FROM (SELECT id_encu FROM encuesta WHERE alias_encu = '$alias')a";

// Ejecutando filtro para revocar mensaje repetido
$countEncu = mysql_query($sql2); 
$fila = mysql_fetch_array($countEncu); 

if (($nombre != null) or ($codPais != null))
{	
	if ($fila['Encuesta enviada'] == 0)
	{
		$result = mysql_query($sql1); // Ejecutando Inserción de respuestas desde formulario encuesta
		if($result)
		{
			header('location:../Encuesta.php');
			session_start();
			$_SESSION['alertaEncu'] = "El envío de su encuesta ha sido satisfactorio!!";
		}
		else
		{
			header('location:../Encuesta.php');
			session_start();
			$_SESSION['alertaEncu'] = "Proceso Fallido. Intentelo de nuevo más tarde!!";
		}
	}
	else
	{
		header('location:../Encuesta.php');
		session_start();
		$_SESSION['alertaEncu'] = "Lo sentimos, hemos encontrado en nuestros registros una encuesta parecida a esta. Favor envíe una diferente!!";
	}
}
mysql_close();

?>

 