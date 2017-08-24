<?php session_start(); require("filesphp/validaradmin.php");?>
<!DOCTYPE HTML>
<html Lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Play Music - Listado de Clientes</title>
		<link rel="shortcut icon" href="Images Index/playFav.ico" />
		<link rel="stylesheet" type="text/css" href="Css File/Ingreso/Logear.css" />
		<link href="Css File/Calendario/css/calendario.css" type="text/css" rel="stylesheet">
		<script src="Css File/Calendario/js/calendar.js" type="text/javascript"></script>
		<script src="Css File/Calendario/js/calendar-es.js" type="text/javascript"></script>
		<script src="Css File/Calendario/js/calendar-setup.js" type="text/javascript"></script>
		<link rel="stylesheet" href="Juegos/cssgames/games.css">
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
						
					<script type="text/javascript">document.oncontextmenu = function(){return false}</script>
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
					<table width="970" bordercolor="#BDBDBD" border="0" cellpadding="1" cellspacing="1">
						<tr>
							<style type="text/css">A:link {text-decoration: none}A:hover {text-decoration: underline; color: yellow;}</style>
							<td>
								<ul class="borde" id="nav">
								<li class="top"><a href="index_admin.php" class="top_link"><span><font color="aqua">INICIO</font></span></a></li>
								<li class="top"><a href="Diagrama.php" class="top_link"><span><font color="aqua">DIAGRAMA BD</font></span></a></li>
								<li class="top"><a href="#" id="Promociones" class="top_link"><span class="down"><font color="yellow">NUEVO PRODUCTO</font></span></a>
									<ul class="sub">
										<li align="left"><font><b>NEW MUSIC</b></li>
										<li align="left"><a href="Agrega_musica.php" id="New Music">NEW MUSIC</a></li>	
										<li align="left"></li>
										<li align="left"><b>NEW GAME</b></li>
										<li align="left"><a href="Agrega_juego.php" id="New Game">NEW GAME</a></li>
									</ul>
								</li>
								<li class="top"><a href="#" id="tablas" class="top_link"><span class="down"><font color="yellow">LISTADO TABLAS</font></span></a>
									<ul class="sub">
										<li align="left"><b>COTIZACION</b></li>
										<li align="left"><a href="Cotizacion_admin.php">COTIZACION</a></li>
										<li align="left"></li>
										<li align="left"><b>ENCUESTA</b></li>
										<li align="left"><a href="Encuesta_admin.php">ENCUESTA</a></li>
										<li align="left"></li>
										<li align="left"><b>Nº REGISTROS</b></li>
										<li align="left"><a href="Registro_admin.php">Nº REGISTROS</a></li>
										<li align="left"></li>
										<li align="left"><b>PRODUCTOS</b></li>
										<li align="left"><a href="Producto_admin.php">PRODUCTOS</a></li>
										<li align="left"></li>
										<li align="left"><b>CONTACTOS</b></li>
										<li align="left"><a href="Contacto_admin.php">CONTACTOS</a></li>
										<li align="left"><b>COMPRA</b></li>
										<li align="left"><a href="Compra_admin.php">COMPRA</a></li>
										<li align="left"><b>DETALLE</b></li>
										<li align="left"><a href="Detalle_admin.php">DETALLE</a></li>
									</ul>
								</li>
								<li class="top"><a href="#" id="Promociones" class="top_link"><span class="down"><font color="yellow">CUENTA</font></span></a>
									<ul class="sub">
										<li align="left"><font><b>PERFIL</b></li>
										<li align="left"><a href="Perfil_admin.php" id="Acerca de">PERFIL</a></li>	
										<li align="left"></li>
										<li align="left"><b>SALIR</b></li>
										<li align="left"><a href="filesphp/logout.php" id="Políticas">SALIR</a></li>
									</ul>
								</li>
								<li class="top"><a href="#" id="Promociones" class="top_link"><span><font color="yellow">BIENVENIDO "<?php echo strtoupper($_SESSION['miusuario']); ?>"</font></span></a>
								<li>
									<input id="busqueda" name="busqueda" placeholder="Buscar..." size="20" class="query2" />
								</li>
							</ul>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<div style="float:left;">
				<ul id="navigation" color="#CFCFCF">
					<li class="home" align="center"><a href="Web2.html" title="Web2.0"><input type="image" src="Fondos Page/web2-0.png" title="" width="90" height="50" style="margin-top:10px;" /></a></li>
					<li class="about" align="center"><a href="EstructurasWeb.html" title="EstructurasWeb"><input type="image" src="Images Estructuras Web/tipoRed.png" title="" width="100" height="45" style="margin-top:12px;" /></a></li>
					<li class="search" align="center"><a href="PlataformasWeb.html" title="PlataformasWeb"><input type="image" src="Images Plataformas Web/AppServN.png" title="" width="100" height="40" style="margin-top:15px;" /></a></li>
					<li class="photos" align="center"><a href="Glosario.html" title="Glosario"><input type="image" src="srcGlosa/Images/diccInform.jpg" title="" width="85" height="55" style="margin-top:7px;" /></a></li>
					<li class="rssfeed" align="center"><a href="Musica.html" title="Todo Música"><input type="image" src="Fondos Page/TodaMusica.png" title="" width="83" height="43" style="margin-top:14px;" /></a></li>
					<li class="podcasts" align="center"><a href="Juegos.html" title="Video Games"><input type="image" src="Fondos Page/VideoGames.png" title="" width="79" height="65" style="margin-top:4px;" /></a></li>
					<li class="contact" align="center"><a href="Promociones.html" title="Promociones"><input type="image" src="Fondos Page/Promos.png" title="" width="75" height="65" style="margin-top:2px;" /></a></li>
				</ul>
			</div>
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
					<div>
						<center>
							<h3>MANTENIMIENTO</h3>
						</center>
					</div>
					<div>
						<center>
							<a href="adminusuarios.php"><input type="image" name="Details" src="Musica/btnBoton.png" width="80px" height="80px"/></a>
					</center>
					</div>
					</br>
					<div>
						<center>
							<a href="rptusuarios.php/" target="_blank">Reporte Listado de Usuarios</a>
					</center>
					</div>
					<h2>Listado de Usuarios Registrados</h2>
					<br /><br />
					<center><div class="sinborde3">
						<table width="100%" align="center">
							<tr>
								<td align="center" width="55"><b>NOMBRE</td>
								<td align="center" width="75"><b>NICKNAME</td>
								<td align="center" width="175"><b>E-MAIL</td>
								<td align="center" width="75"><b>PA&Iacute;S</td>
								<td align="center" width="80"><b>DUI:</td>
								<td align="center" width="100"><b>FECHA NACIMIENTO.</td>
								

							</tr>
							
								<?php require('filesphp/conexion.php');
								$usuario = $_SESSION['miusuario'];
								$consulta1 = mysql_query("SELECT * FROM registrados join paises on pais_reg=id_pais");
								while ($fila1 = mysql_fetch_array($consulta1)) { ?>
							<tr>
								<td style="color:red" align="center" width="55"><?php echo $fila1['nombres_reg']; ?></td>
								<td style="color:red" align="center" width="75"><?php echo $fila1['nickname_reg']; ?></td>
								<td style="color:red" align="center" width="175"><?php echo $fila1['email_reg']; ?></td>
								<td style="color:red" align="center" width="75"><?php echo $fila1['nombre_pais']; ?></td>
								<td style="color:red" align="center" width="80"><?php echo $fila1['dui_reg']; ?></td>
								<td style="color:red" align="center" width="100"><?php echo $fechaNac = $fila1['anioNac_reg'].'-'.$fila1['mesNac_reg'].'-'.$fila1['diaNac_reg']; ?></td>
								
							</tr>
								<?php } mysql_free_result($consulta1); mysql_close();?>
						</table>
					</div></center>
					<br /><br /><br />
					<hr width="100%" align="center"/>
				</td>
			</tr>
			<tr align="center" height="70">
				<td colspan="3">
					<table align="center">
						<tr>
							<br />
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