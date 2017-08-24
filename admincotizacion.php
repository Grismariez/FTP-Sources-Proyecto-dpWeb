<?php session_start(); require("filesphp/validaradmin.php");?>
<!DOCTYPE HTML>
<html Lang="en-US">
	<head>
		<!--<meta >-->
		<title>Play Music - Perfil Admin</title>
		<link rel="shortcut icon" href="Images Index/playFav.ico" />
        <link rel="stylesheet" href="Juegos/cssgames/games.css">
		<link rel="stylesheet" href="tabla.css">
		<link rel="stylesheet" type="text/css" href="Css File/Ingreso/Logear.css" />
		<link href="Css File/Calendario/css/calendario.css" type="text/css" rel="stylesheet">
		<script src="Css File/Calendario/js/calendar.js" type="text/javascript"></script>
		<script src="Css File/Calendario/js/calendar-es.js" type="text/javascript"></script>
		<script src="Css File/Calendario/js/calendar-setup.js" type="text/javascript"></script>
		<link rel="stylesheet" href="Css File/Ingreso/Rotar.css" />
		<!--MENU FLOTANTE EZQUIERDA-->
		<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>-->
        <link rel="stylesheet" href="MenuFloatLeft/css/style.css" type="text/css"/>
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
                            <center>
	
    <!-- Jazmin -->
<?php
require('filesphp/conexion.php');

$sql='select * from cotizaciones';
if(isset($_GET['opc']))
{
	$opc=$_GET['opc'];
	if($opc=='Buscar')
	{
		$frase=$_POST['txtFrase'];
		$sql="Select * from cotizaciones where nombre_cott like '%".$frase."%'";
	}
	if($opc=='Detalle')
	{
		$id=$_GET['id_cott'];
		$sql="Select * from cotizaciones where id_cott=$id";
	}
	if($opc=='Eliminar')
	{
		$id=$_GET['id_cott'];
		$sql="Delete from cotizaciones where id_cott=$id";
		header("location:admincotizacion.php");
	}
	if($opc=='Modificar')
	{
		//Esta accion es para mostrar el formulario a modificar
		$id=$_GET['id_cott'];
		//Buscamos el usuario a modificar
		$sql2="Select * from cotizaciones where id_cott=$id";
		$mod=mysql_query($sql2);
		$usuario=mysql_fetch_array($mod);
?>	

  
		<form name="frmMod" action="admincotizacion.php?opc=Actualizar" method="POST">
		<input type="hidden" name="tmpId" value="<?php echo $usuario['id_cott']; ?>">
		<table class="tabla">
		<tr>
			<th colspan="2" class="tha">
				<h1>Modificar Datos</h1>
			</th>
		</tr>
		<tr>
			<td class="tda" colspan="2">&nbsp;
				
			</td>
		</tr>
		<tr>
			<th class="tha">
				Nombre:
			</th>
			
			<td class="tda">
				<input type="text" name="txtNom" value="<?php echo $usuario['nombre_cott']; ?>"
			</td>
		</tr>
		<tr>
			<th class="tha">
				Apellido:
			</th>
			
			<td class="tda">
				<input type="text" name="txtApe" value="<?php echo $usuario['apellido_cott']; ?>" />
			</td>
		</tr>
		<tr>
			<th class="tha">
				Telefono:
			</th>
			
			<td class="tda">
				<input type="text" name="txtTel" value="<?php echo $usuario['telefono_cott']; ?>" />
			</td>
		</tr>
			<tr>
			<th class="tha">
				Correo:
			</th>
			
			<td class="tda">
				<input type="text" name="txtMail" value="<?php echo $usuario['email_cott']; ?>" />
			</td>
		</tr>
		<tr>
			<td colspan="2" class="tda">
				<input class="btna" type="submit" name="guardar" Value="Actualizar"/>
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
		$apellido=$_POST['txtApe'];
		$telefono=$_POST['txtTel'];
		$correo=$_POST['txtMail'];
		$sql="update cotizaciones set nombre_cott='$nom', apellido_cott='$apellido', telefono_cott='$telefono', email_cott='$correo' where id_cott=$id";
		header("location:admincotizacion.php");
	}
}
$result=mysql_query($sql);
?>
<form name="frm" method="POST" action="admincotizacion.php?opc=Buscar">
<table border="0" cellspacing="0" cellpadding="0" class="tabla">
<tr>
<th class="tha" colspan="8"><h1>Mantenimiento de Cotizaciones</h1></th>
</tr>

<tr>
<td class="tda"><a class="aa" href="Agrega_cotizacion.php">Agregar Cotizacion</a></td>
<td class="tda">Buscar:</td>
<td class="tda" colspan="2"><input type="text" name="txtFrase"></td>
<td class="tda" colspan="4">
	<input class="btna" type="submit" value="Buscar" name="btnBuscar">&nbsp;
	<a class="aa" href="admincotizacion.php">Ver Todos</a>
</td>
</tr>

<tr>
<th class="tha">Id</td>
<th class="tha">Nombre</td>
<th class="tha">Apellido</td>
<th class="tha">Telefono</td>
<th class="tha">Correo</td>
<th class="tha" colspan="3"></td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){ 
?>
<tr>
<td class="tda"><?php echo $rows['id_cott']; ?></td>
<td class="tda"><?php echo $rows['nombre_cott']; ?></td>
<td class="tda"><?php echo $rows['apellido_cott']; ?></td>
<td class="tda"><?php echo $rows['telefono_cott']; ?></td>
<td class="tda"><?php echo $rows['email_cott']; ?></td>
<td class="tda">&nbsp;
<a class="aa" class="aa" href="admincotizacion.php?opc=Detalle&id_cott=<?php echo $rows['id_cott']; ?>">
Detalle</a>&nbsp;</td>
<td class="tda">&nbsp;
<a class="aa" href="admincotizacion.php?opc=Eliminar&id_cott=<?php echo $rows['id_cott']; ?>"
 onclick="return confirm('Seguro de eliminar el registro?');">
Eliminar</a>&nbsp;</td>
<td class="tda">&nbsp;
<a class="aa" href="admincotizacion.php?opc=Modificar&id_cott=<?php echo $rows['id_cott']; ?>">
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
<a href="Cotizacion_admin.php" class="aa" style="background-color:#9FF">Regresar</a>

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