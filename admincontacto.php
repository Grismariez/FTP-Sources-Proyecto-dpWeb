<?php session_start(); require("filesphp/validaradmin.php");?>
<!DOCTYPE HTML>
<html Lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Play Music - Perfil Admin</title>
		<link rel="shortcut icon" href="Images Index/playFav.ico" />
        <link rel="stylesheet" href="Juegos/cssgames/games.css">
		<link rel="stylesheet" href="tabla.css">
		<link rel="stylesheet" type="text/css" href="Css File/Ingreso/Logear.css" />
		<link rel="stylesheet" href="Juegos/encuesta/games.css">
		<link href="Css File/Calendario/css/calendario.css" type="text/css" rel="stylesheet">
		<script src="Css File/Calendario/js/calendar.js" type="text/javascript"></script>
		<script src="Css File/Calendario/js/calendar-es.js" type="text/javascript"></script>
		<script src="Css File/Calendario/js/calendar-setup.js" type="text/javascript"></script>
		<link rel="stylesheet" href="Css File/Ingreso/Rotar.css" />
		<!--MENU FLOTANTE EZQUIERDA-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="MenuFloatLeft/css/style.css" type="text/css" charset="utf-8"/>
        <script type="text/javascript" src="MenuFloatLeft/jquery-1.3.2.js"></script>
	</head>
	<body class="fondo">
		<table align="center" width="998" border="0" bgcolor="#FFFFFF" id="sombra_body">
			<tr align="center">
				<td colspan="2">
					<input type="image" src="Images Index/ConsolaGames.png" width="120" height="100" title="Games" name="Consolas" id="Games" style="margin-bottom:23px;" class="Rotar" />
					<input type="image" src="Images Index/LogoOfficial.png" width="510" height="150" title="Logo Oficial" name="Logotipo" id="Logo Oficial" />
					<input type="image" src="Images Index/MarioFuego.png" width="135" height="130" title="Juegos" name="SuperMario" id="juegos" style="margin-bottom:10px;" class="Rotar" />
						
					<!--<script type="text/javascript">document.oncontextmenu = function(){return false}</script>-->
				</td>
				
					</div></center>
				</td>
			</tr>
			<tr align="center" height="70">
				<td colspan="3">
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<meta name="Author" content="Xerver" />
					<link rel="stylesheet" type="text/css" href="pro_dropdown_3/pro_dropdown_3.css" />
					<script src="pro_dropdown_3/stuHover.js" type="text/javascript"></script>
					
					<span class="preload1"></span>
					<span class="preload2"></span>
					
			<script type="text/javascript">
				$(function() {
					$('#navigation a').stop().animate({'marginLeft':'-85px'},1000);

					$('#navigation > li').hover(
						function () {
							$('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
						},
						function () {
							$('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
						}
					);
				});
			</script>
			<!--PAJARITO NAVIDEÑO DE TWITTER-->
			<script src="http://plantillasgratis.comuv.com/disemucho/pajaro_twitter_navidad/twitter/disemucho.js" type="text/javascript"></script>
			<script type="text/javascript">
			//<![CDATA[
					var birdSprite='http://u.jimdo.com/www21/o/s4e9df44a0ad8ccd8/img/i8b711531294e44fd/1323739764/std/image.png';
					var targetElems=new Array('img','hr','table','td','div','input','textarea','button',
			'select','ul','ol','li','h1','h2','h3','h4','p','code','object','a','b','strong','span');
					var twitterAccount = 'http://twitter.com/#!/disemuchojimdo';
					var twitterThisText ='Sigueme en Twitter';
					tripleflapInit();
			//]]>
			</script>			
			<tr align="justify" height="200">
				<td colspan="3">
					<link href="Slide/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
					<script src="Slide/themes/1/js-image-slider.js" type="text/javascript"></script>
					<link href="Slide/generic.css" rel="stylesheet" type="text/css" />
					<br /><br /><br />
					<table align="center">
						<tr>
							<td>
	
    <!-- Jazmin -->
    <center>
 <?php
require('filesphp/conexion.php');

$sql='select * from mensajes';
if(isset($_GET['opc']))
{
	$opc=$_GET['opc'];
	if($opc=='Buscar')
	{
		$frase=$_POST['txtFrase'];
		$sql="Select * from mensajes where usuario_mje like '%".$frase."%'";
	}
	if($opc=='Detalle')
	{
		$id=$_GET['id_mje'];
		$sql="Select * from mensajes where id_mje=$id";
	}
	if($opc=='Eliminar')
	{
		$id=$_GET['id_mje'];
		$sql="Delete from mensajes where id_mje=$id";
		header("location:admincontacto.php");
	}
	if($opc=='Modificar')
	{
		//Esta accion es para mostrar el formulario a modificar
		$id=$_GET['id_mje'];
		//Buscamos el usuario a modificar
		$sql2="Select * from mensajes where id_mje=$id";
		$mod=mysql_query($sql2);
		$usuario=mysql_fetch_array($mod);
?>	

		<form name="frmMod" action="admincontacto.php?opc=Actualizar" method="POST">
		<input type="hidden" name="tmpId" value="<?php echo $usuario['id_mje']; ?>">
		<table cellspacing="3px" class="tabla">
		<tr class="tra">
			<th colspan="2" class="tha">
				<h1>Modificar Datos</h1>
			</th>
		</tr>
		<tr>
			<td colspan="2" class="tda">&nbsp;
				
			</td>
		</tr>
		<tr>
			<th class="tha">
				Nombre:
			</th>
			
			<td class="tda">
				<input type="text" name="txtNom" value="<?php echo $usuario['usuario_mje']; ?>" />
			</td>
		</tr>
		<tr>
			<th class="tha">
				Correo:
			</th>
			
			<td class="tda">
				<input type="text" name="txtMail" value="<?php echo $usuario['email_mje']; ?>" />
			</td>
		</tr>
		<tr>
			<th class="tha">
				Asunto:
			</th>
			
			<td class="tda">
				<input type="text" name="txtAsunto" value="<?php echo $usuario['asunto_mje']; ?>"/>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center" class="tda">
				<input class="btna" type="submit" name="guardar" Value="Actualizar" class="btn">
			</td>
		</tr>
		</table>
		</form>
<?php
	}
	if($opc=='Actualizar')
	{
		//Esta accion es para actualizar con los datos del formulario
		$id=$_POST['tmpId'];
		$nom=$_POST['txtNom'];
		$correo=$_POST['txtMail'];
		$asunto=$_POST['txtAsunto'];
		$sql="update mensajes set usuario_mje='$nom', email_mje='$correo', asunto_mje='$asunto' where id_mje=$id";
		header("location:admincontacto.php");
	}
}
$result=mysql_query($sql);
?>
<form name="frm" method="POST" action="admincontacto.php?opc=Buscar">
<table border="0" cellpadding="0" cellspacing="3px">
<tr>
<th class="tha" colspan="7"><h1>Mantenimiento de Contactos</h1></th>
</tr>

<tr>
<td class="tda" width="69"><a class="aa" href="Agrega_contacto.php">Agregar Contacto</a></td>
<td class="tda" width="128">Buscar:</td>
<td class="tda" width="152"><input type="text" name="txtFrase"></td>
<td class="tda" colspan="4">
	<input class="btna" type="submit" value="Buscar" name="btnBuscar" class="btn">&nbsp;&nbsp;
	<a class="aa" href="admincontacto.php">Ver Todos</a>
</td>
</tr>

<tr>
<th class="tha">Id</th>
<th class="tha">Nombre</th>
<th class="tha">Correo</th>
<th class="tha">Asunto</th>
<th class="tha" colspan="3"></th>
</tr>
<?php
while($rows=mysql_fetch_array($result)){ 
?>
<tr>
<td class="tda"><?php echo $rows['id_mje']; ?></td>
<td class="tda"><?php echo $rows['usuario_mje']; ?></td>
<td class="tda"><?php echo $rows['email_mje']; ?></td>
<td class="tda"><?php echo $rows['asunto_mje']; ?></td>
<td class="tda">&nbsp;
<a class="aa" href="admincontacto.php?opc=Detalle&id_mje=<?php echo $rows['id_mje']; ?>">
Detalle</a>&nbsp;</td>
<td width="70" class="tda">&nbsp;
<a class="aa" href="admincontacto.php?opc=Eliminar&id_mje=<?php echo $rows['id_mje']; ?>"
 onclick="return confirm('Seguro de eliminar el registro?');">
Eliminar</a>&nbsp;</td>
<td class="tda">&nbsp;
<a class="aa" href="admincontacto.php?opc=Modificar&id_mje=<?php echo $rows['id_mje']; ?>">
Modificar</a>&nbsp;</td>
</tr>
<?php
}
?>
</table>
</form>
<?php
mysql_close();
?>
<br><br>
<a class="aa" href="Contacto_admin.php" style="background-color:#9FF">Regresar</a>  
   </center> 
    
    
							</td>
						</tr>
					</table>
					<br /><br /><br /><br />
					<hr width="100%" align="center"/>
				</td>
			</tr>
			<tr align="center" height="70">
				<td colspan="3">
					<table align="center">
						<tr>
							<br>
							<td><a href="https://www.facebook.com/pages/PlayMusic/1548421845387596?skip_nax_wizard=true&ref_type=logout_gear" target="_blank"><input type="image" id="Facebook Fans" src="Images Index/facebookFans.png" title="Facebook Fans" height="33" width="33" /></a></td>
							<td></td>
							<td><a href="https://twitter.com/play_music2" target="_blank"><input type="image" id="Twitter Fans" src="Images Index/twitterFans.png" title="Twitter Fans" height="34" width="34" /></a></td>
							<td></td>
							<td><a href="https://www.youtube.com/channel/UCTU0PTkwo0RUauZMhliJUDA/feed" target="_blank"><input type="image" id="YouTube Fans" src="Images Index/youtubeFans.png" title="YouTube Fans" height="35" width="35" /></a></td>
							<td></td>
							<td></td>
							<td><font size="3" color="#1C1C1C" face="Palatino linotype"><div align="justify">S&iacute;guenos en las redes sociales y comparte el mejor contenido multimedia que te ofrecemos en nuestras galer&iacute;as.</div></font></td>
						</tr>
					</table>
					<br />
				</td>
			</tr>
			<tr align="center" height="40">
				<td colspan="3">
					<table>
						<tr>
							<td><font size=2 color="#1C1C1C" face="Tahoma">&copy;</font></td>
							<td><font size=2 color="#1C1C1C" face="Tahoma"><i>2014 - Reservados todos los derechos</i></font></td>
						</tr>
					</table></td>
			</tr>
		</table>
	</body>
</html>