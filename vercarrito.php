<?php
session_start();

require("filesphp/validarcliente.php");

require('filesphp/conexion.php');
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];
else
$carro = false;
?>
<!DOCTYPE HTML>
<html Lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Play Music - Ver Carrito</title>
		<link rel="shortcut icon" href="Images Index/playFav.ico" />
		<link rel="stylesheet" type="text/css" href="Css File/Ingreso/Logear.css" />
		<link rel="stylesheet" href="Css File/Ingreso/Rotar.css" />
		<!--MENU FLOTANTE EZQUIERDA-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="MenuFloatLeft/css/style.css" type="text/css" charset="utf-8"/>
        <script type="text/javascript" src="MenuFloatLeft/jquery-1.3.2.js"></script>
		
		<style type="text/css">
			.tit {
				font-family: Verdana, Arial, helvetica, sans-serif;
				font-size:9px ;
				color:#fff;
				}
				.prod {
					font-family: Verdana, Arial, helvetica, sans-serif;
					font-size:9px ;
					color:#333;
				}
				h1 {
					font-family: Verdana, Arial, helvetica, sans-serif;
					font-size:20px;
					color:#990000;
				}
			}
		</style>
			
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
				<td>
					
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
							<ul class="borde" id="nav">
								<li class="top"><a href="index_cliente.php" class="top_link"><span><font color="aqua">INICIO</font></span></a></li>
								
								<li class="top"><a href="#" id="productos" class="top_link"><span class="down"><font color="aqua">FORMULARIOS</font></span></a>
									<ul class="sub">
										<li align="left"><b>COTIZACIONES</b></li>
										<li align="left"><a href="Cotizacion_cliente.php">COTIZACIONES</a></li>
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
										<li align="left"></li>
										
									</ul>
								</li>
								
								<li class="top"><a href="Promociones_cliente.php" id="Promociones" class="top_link"><span class="top_link"><font color="aqua">OFERTAS</font></span></a></li>
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
					</br></br></br>
						<h1 align="center">Carrito de Compras</h1>
							<br>
							<div align="center"> 
							<a href="printcarrito.php<?php echo SID;?>">
							<img src="images/imprimir.png" width="155" height="120"></a> 
							</div>
							<?php 
							if($carro){
							?>
							<table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
							<tr bgcolor="#333333" class="tit"> 
							<td width="105">Producto</td>
							<td width="207">Precio</td>
							<td colspan="2" align="center">Cantidad de Unidades</td>
							<td width="100" align="center">Borrar</td>
							<td width="159" align="center">Actualizar</td>
							</tr>
							<?php
							$color=array("#ffffff","#F0F0F0");
							$contador=0;
							$suma=0;
							foreach($carro as $k => $v){
							$subto=$v['cantidad']*$v['precio'];
							$suma=$suma+$subto;
							$contador++;
							//Creo una variable de sesion y le asigno el total a pagar
							$_SESSION['ValorPagar']=$suma;
							?>
							<form name="a<?php echo $v['identificador'] ?>" method="post" action="AgregaCar.php?<?php 
							echo SID ?>" id="a<?php echo $v['identificador'] ?>">
							<tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'> 
							<td><?php echo $v['producto'] ?></td>
							<td>$<?php echo $v['precio'] ?></td>
							<td width="43" align="center"><?php echo $v['cantidad'] ?></td>
							<td width="136" align="center"> 
							<input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" 
							size="8">
							<input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td>
							<td align="center"><a href="BorraCar.php?<?php echo SID ?>&id=<?php echo $v['id'] 
							?>"><img src="images/trash.png" width="25" height="26" title="eliminar" border="0"></a></td>
							<td align="center"> 
							<input name="imageField" type="image" src="images/actualizar.png" width="26" height="26" border="0"></td>
							</tr></form>
							<?php 
							}
							?>
							</table>
							<div align="center"><span class="prod">Total de Artículos: <?php echo count($carro);
							?></span> 
							</div><br>
							<div align="center"><span class="prod">Total: $<?php echo number_format($suma,2);
							?></span> 
							</div><br>
							<div align="center"><span class="prod">Continuar la selección de productos</span> 
							<a href="Catalogo.php?<?php echo SID;?>">
							<img src="images/continuar.png" width="13" height="13" border="0" /></a> 
							</div>
							<br>
							<div align="center"> 
							<a href="pagarcompra.php?<?php echo SID;?>">
							<img src="images/byOrder.png" width="165" height="85" border="0" title="comp" /></a> 
							</div>
							<?php }else{ ?>
							<p align="center"> <span class="prod">No hay productos seleccionados</span>
							<a href="Catalogo.php?<?php echo SID;?>">
							<img src="images/continuar.png" width="13" height="13" border="0"></a> 
							<?php }?>
							</p>
					</br></br></br></br>
					<hr width=100% align="center"/>
				</td>
			</tr>
			<tr align="center" height="70">
				<td colspan="3">
					<table align="center">
						<tr>
							</br>
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
					</br>
				</td>
			</tr>
			<tr align="center" height="40">
				<td colspan="3">
					<table>
						<tr>
							<td><font size=2 color="#1C1C1C" face="Tahoma">&copy;</font></td>
							<td><font size=2 color="#1C1C1C" face="Tahoma"><i>2014 - Reservados todos los derechos</i></font></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>