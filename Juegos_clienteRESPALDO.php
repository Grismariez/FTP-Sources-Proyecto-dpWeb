<?php session_start();?>
<!DOCTYPE HTML>
<html Lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Play Music - Juegos</title>
		<link rel="shortcut icon" href="Images Index/playFav.ico" />
		<link rel="stylesheet" type="text/css" href="Css File/Ingreso/Logear.css" />
		<link rel="stylesheet" href="Css File/Ingreso/Rotar.css" />
		<link rel="stylesheet" href="Juegos/cssgames/games.css">
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
									</ul>
								</li>
								<li class="top"><a href="Promociones_cliente.php" id="Promociones" class="top_link"><span class="top_link"><font color="yellow">OFERTAS</font></span></a></li>
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
								<li class="top"><a href="#" id="Promociones" class="top_link"><span><font color="yellow">BIENVENIDO "<?php echo strtoupper($_SESSION['miusuario']); ?>"</font></span></a>
								<li>
									<input id="busqueda" name="busqueda" placeholder="Buscar..." size="15" class="query2" />
								</li>
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
				<br /><br />
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >The Las Of Us:Remasterizado</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/last.jpg" title="The Las Of Us:Remasterizado" align="left" ></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color" >PS4-Acción</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Juego de culto, pieza esencial de la generación, experiencia inolvidable... Naughty Dog se esfuerza con The Last of Us: Remasterizado por dar a Joel y Ellie la edición de lujo y refinada que merecen, definitivamente, repleta de extras, súper mejorada gráficamente.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Child of Light</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/child.jpg" title="Child of Light"></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">PC-Plataforma</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">La odisea de Aurora a través de las fauces y riscos de las tierras de Lemuria es una formidable sorpresa audiovisual y jugable que deja huella como cualquier gran historia. Child of Light juega a ser poesía y rima con mecánicas de rol, puzles y saltos en un imprescindible mundo de luz y sombras.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Mario Kart 8</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/kart.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">WiiU-Conducción</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Wii U recibe uno de los juegos más esperados. Mario Kart 8 se convierte en un título imprescindible que supone un nuevo techo en todos los sentidos para la divertida y caótica franquicia de Nintendo.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Titanfall</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/titan.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">PC-Acción</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Respawn Entertainment lanza en PC su primer gran proyecto. Un juego enfocado exclusivamente al multijugador competitivo online en el que se mezclan disparos veloces desde cualquier punto con grandes mechas devastadores.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Dark Souls II</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/dark.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">PC-Acción</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Considerada la serie más desafiante de la generación de consolas, From Software lanza Dark Souls 2, juego que sabe mantener la esencia que ha hecho grande a sus predecesores añadiendo novedades interesantes. La versión PC sale bien parada.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Divinity: Original Sin</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/divi.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">PC-Acción</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Inspirados por el espíritu de Ultima VII y apoyados por un crowdfunding dedicado exclusivamente a mejorar el juego, Larian ha completado su mejor juego hasta la fecha y un juego de rol superlativo, que nos devuelve a una época perdida del género.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Transistor</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/tran.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">PS4-Acción</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Supergiant vuelve a la carga con un juego de acción y RPG en medio de un universo Cyberpunk en el que la tiranía de la tecnología es una realidad. Una pequeña joya indie que demuestra la gran importancia de estos desarrollos en la industria actual.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >WildStar</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/wild.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">PC-Rol</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Wildstar se presenta como el mejor y más aventajado discípulo de World of Warcraft, presentando un MMO "theme park" con una cantidad masiva de contenido de calidad y numerosas ideas que lo hacen muy recomendable.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Destiny</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/dest.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">XboxOne-Acción</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Destiny, con sus fortalezas y sus debilidades, es ante todo un gran videojuego de acción con contenidos como para mantenernos entretenidos muchas horas, y con un buen equilibrio entre campaña cooperativa y multijugador competitivo. </p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Los Sims 4</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/sims.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">Pc-Estrategia, Vida virtual</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Los Sims 4 es un avance en muchos aspectos para la saga pero también un juego que parece algo limitado de base, lo cierto es que sus mejoras en elementos como el interfaz, la comodidad que permite y la optimización brindan motivos más que suficientes para disfrutarlo.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Grand Theft Auto V</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/grand.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">PS3-Acción,Shooter,Aventura</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Rockstar ha sido uno de los grandes triunfadores de la actual generación, y han vuelto a demostrar el por qué con el inabarcable GTA V. Hacer justicia con un análisis a todo lo que ofrece es imposible, y sencillamente calificamos de imprescindible su compra a cualquier usuario amante de las experiencias adultas de calidad.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Metro Redux</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/metro.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">Multiplataforma-Acción,Shooter</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">4A Games y Deep Silver lanzan un pack recopilatorio de Metro 2033 y Metro Last Light con novedades técnicas, jugables y todo el contenido que se ha visto hasta el momento para la saga. En PC, One y PS4.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Tomb Raider: Definitive Edition</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/tomb.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">XboxOne-Acción,Shooter</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Casi un año después del lanzamiento del título original para PlayStation 3, Xbox 360 y PC, Lara Croft da el salto a la nueva generación con un sorprendente cambio de look que desafortunadamente no trae consigo ninguna novedad jugable respecto a la obra original.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 >Wacth Dogs</h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/dogs.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">Multiplataforma-Acción,Shooter</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">Ubisoft se lanza definitivamente al género sandbox con Watch Dogs, un proyecto que ha costado cinco años de desarrollo y diversos dolores de cabeza pero que se postula como otro nuevo contendiente atractivo para un género con cada vez más propuestas.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>		
					</div>
					<br>
					<br>
				</center>
				<center>
					<div class="sinborde">
						<table>
							<tr>
								<td class="titte" colspan="3" ><h3 ><b>InFamous:Second Son</b></h3></td>
							</tr>
							<tr>
								<td><img style="-webkit-box-shadow: 6px 6px 2px #888888" class="tamaño" src="Juegos/imgames/son.jpg" title=""></img></td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td><p class="color">PS4-Acción</p><br>
									<p class="alinear" style="text-shadow: 5px 5px 5px lightblue">En las húmedas calles de Seattle hay rastros de graffitis, destellos de neón y humo. Algo grande ha pasado sobrevolando el género sandbox, algo quiere llamar la atención con un buen espectáculo pirotécnico que empiece a recalcar lo que de verdad es la nueva generación. PlayStation 4 da vida.</p><br>
								<a href="#"><input type="submit" class="style" id="Cotiz" name="Cotiz" value="Comprar Juego" /></a></td>
							</tr>
							<tr><td>&nbsp;</td></tr>
						</table>				
					</div>
				</center>
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