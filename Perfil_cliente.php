<?php session_start(); require("filesphp/validarcliente.php");?>
<!DOCTYPE HTML>
<html Lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Play Music - Promociones</title>
		<link rel="shortcut icon" href="Images Index/playFav.ico" />
		<link rel="stylesheet" type="text/css" href="Css File/Ingreso/Logear.css" />
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
				<td>&nbsp;</td>
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
								<li class="top"><a href="index_cliente.php" class="top_link"><span><font color="aqua">INICIO</font></span></a></li>
								<li class="top"><a href="#" id="productos" class="top_link"><span class="down"><font color="aqua">FORMULARIOS</font></span></a>
									<ul class="sub">
										<li align="left"><b>COTIZACION</b></li>
										<li align="left"><a href="Cotizacion_cliente.php">COTIZACION</a></li>
										<li align="left"></li>
										<li align="left"><b>ENCUESTA</b></li>
										<li align="left"><a href="Encuesta_cliente.php">ENCUESTA</a></li>
										<li align="left"></li>
										<li align="left"><b>CONTACTO</b></li>
										<li align="left"><a href="Contacto_cliente.php">CONTACTO</a></li>
									</ul>
								</li>
								<li class="top"><a href="#" class="top_link"><span class="down"><font color="aqua">PRODUCTOS</font></span></a>
									<ul class="sub">
										<li align="left"><b>M&Uacute;SICA</b></li>
										<li align="left"><a href="Musica_cliente.php">M&Uacute;SICA</a></li>
										<li align="left"></li>
										<li align="left"><b>JUEGOS</b></li>
										<li align="left"><a href="Juegos_cliente.php">JUEGOS</a></li>
									</ul>
								</li>
								<li class="top"><a href="Promociones_cliente.php" id="Promociones_cli" class="top_link"><span class="top_link"><font color="aqua">OFERTAS</font></span></a></li>
								<li class="top"><a href="#" id="Promociones" class="top_link"><span class="down"><font color="yellow">NOSOTROS</font></span></a>
									<ul class="sub">
										<li align="left"><font><b>ACERCA DE</b></li>
										<li align="left"><a href="About_cliente.php" id="Acerca de">ACERCA DE</a></li>	
										<li align="left"></li>
										<li align="left"><b>POL&Iacute;TICAS</b></li>
										<li align="left"><a href="Politicas_cliente.php" id="Políticas">POL&Iacute;TICAS</a></li>
									</ul>
								</li>
								<li class="top"><a href="#" id="Promociones" class="top_link"><span class="down"><font color="yellow">CUENTA</font></span></a>
									<ul class="sub">
										<li align="left"><font><b>PERFIL</b></li>
										<li align="left"><a href="Perfil_cliente.php" id="Acerca de">PERFIL</a></li>	
										<li align="left"></li>
										<li align="left"><b>SALIR</b></li>
										<li align="left"><a href="filesphp/logout.php" id="Políticas">SALIR</a></li>
									</ul>
								</li>
								<li class="top"><a href="#" id="carrito" class="top_link"><span class="down"><font color="yellow">PEDIDOS</font></span></a>
									<ul class="sub">
										<li align="left"><font><b>CATALOGO</b></li>
										<li align="left"><a href="Catalogo.php" id="Acerca de">CATALOGO</a></li>	
										<li align="left"></li>
										<li align="left"><b>VER CARRITO</b></li>
										<li align="left"><a href="vercarrito.php" id="Políticas">VER CARRITO</a></li>
																			
									</ul>
								</li>
								<li class="top"><a href="#" id="Promociones" class="top_link"><span><font color="yellow">BIENVENIDO "<?php echo strtoupper(strtoupper($_SESSION['miusuario'])); ?>"</font></span></a></li>
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
					<br /><br />
					<table align="center">
						<tr>
							<h2>Perfil usuario tipo - Cliente:  "<?php echo $_SESSION['miusuario']; ?>"</h2><br /><br />
							<td>
								<table align="center">
									<?php require('filesphp/conexion.php');
									$usuario = $_SESSION['miusuario']; 
									$cuenta = mysql_query("SELECT * From registrados JOIN paises ON id_pais = pais_reg WHERE nickname_reg = '$usuario'"); 
									$fila = mysql_fetch_array($cuenta); ?>
									<tr >
										<td colspan="2" align="center"><b>DATOS PERSONALES</b></td>

									</tr>
									<tr>
										<td colspan="3"><hr width="100%" align="center"/></td>
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;NOMBRE:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['nombres_reg']); ?> </td>
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;APELLIDO:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['apellidos_reg']); ?></td>
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;PA&Iacute;S:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['nombre_pais']); ?></td>
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;CORREO ELECTR&Oacute;NICO:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['email_reg']); ?></td>
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;NICKNAME:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['nickname_reg']); ?></td>
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;DIRECCI&Oacute;N:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['direc_reg']); ?></td>
									</tr>
									<tr>
										<td colpan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;FECHA NACIMIENTO:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php $fecha = $fila['diaNac_reg'].'-'.$fila['mesNac_reg'].'-'.$fila['anioNac_reg']; echo strtoupper($fecha); ?></td> 
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;SEXO:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['sexo_reg']); ?></td>
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;DUI:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['dui_reg']); ?></td>
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;NIT:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['nit_reg']); ?></td>
									</tr>
									<tr>
										<td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;</td>
									</tr>
									<tr >
										<td style="border-top: double; width: 300px; background-color:#FFFFFF; border-radius:15px 0px 0px 15px; border-bottom:double"><b>&nbsp; &nbsp; &nbsp; &nbsp;TELÉFONO:</b></td>
										
										<td style="border-top: double; width: 500px; background-color:#FFFFFF; border-radius:0px 15px 15px 0px; border-bottom:double">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fila['telefono_reg']); ?></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<br /><br /><br /><br /><br />
					<hr width=100% align="center"/>
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
							<td><font size="3" color = "#1C1C1C" face="Palatino linotype"><div align="justify">S&iacute;guenos en las redes sociales y comparte el mejor contenido multimedia que te ofrecemos en nuestras galer&iacute;as.</div></font></td>
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