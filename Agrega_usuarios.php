<?php session_start(); require("filesphp/validaradmin.php");?>
<!DOCTYPE HTML>
<html Lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Play Music - Agregar Usuarios</title>
		<link rel="shortcut icon" href="Images Index/playFav.ico" />
		<link rel="stylesheet" type="text/css" href="Css File/Ingreso/Logear.css" />
		<link rel="stylesheet" type="text/css" href="Css File/Registro/Register.css" />
		<link rel="stylesheet" href="Juegos/cssgames/games.css">
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
					<br><br><br>
					<div>
						<center>
								<a href="adminusuarios.php">Volver a Mantenimiento</a>
						</center>
					</div>
					<center><div class="formNewUser">
					<form action="filesphp/insert_registrados2.php" name="form2" id="form2" method="post" onsubmit="validardatos();">
						<table style="border-radius:15px;" width="817" height="750">
							<tr>
								<td colspan="4">
									<label><font size="3" color="red" face="Palatino linotype"><br /><br /><b>* <?php echo $_SESSION['alertaRegis']; ?></b><br /></font></label>
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<label><font color="black" size="3" face="Palatino linotype"><br /></font></label>
								</td>
							</tr>
							<tr>
								<td colspan="4" align="center">
									<label><font color="black" size="3" face="Palatino linotype"><b><u>INGRESE UN NUEVO USUARIO</u></b></font></label>
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">Nombres:</font></label>
								</td>
								<td align="left">
									<input type="text" size="30" id="nom" name="nom" title="Ingrese su nombre." required onkeypress="return soloLetras(event)" />
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">Apellidos:</font></label>
								</td>
								<td align="left">
									<input type="text" size="30" name="ape" id="ape" required title="Ingrese su apellido" onkeypress="return soloLetras(event)" />
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">Su país:</font></label>
								</td>
								<td align="left">
									<select name="pais" id="pais" required>
												   <option value="0" Selected >Seleccione opci&oacute;n</option>
												   <option value="1">United States</option>
												   <option value="2">Canada</option>
												   <option value="3">M&eacute;xico</option>
												   <option value="4">Guatemala</option>
												   <option value="5">El Salvador</option>
												   <option value="6">Costa Rica</option>
												   <option value="7">Alemania</option>
												   <option value="8">Brazil</option>
												   <option value="9">Puerto Rico</option>
												   <option value="10">England</option>
												   <option value="11">France</option>
												</select>
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">Correo Electrónico:</font></label>
								</td>
								<td align="left">
									<input type="email" size="30" name="user" id="user" placeholder="alguien@ejemplo.com" required />
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">NickName:</font></label>
								</td>
								<td align="left">
									<input type="text" size="30" id="nickNm" name="nickNm" title="Ingrese su nombre de usuario a mostrar en el sitio." required onkeypress="return soloLetras(event)" />
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">Contraseña:</font></label>
								</td>
								<td align="left">
									<input type="password" size="30" name="pass" id="pass1" required />
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">Confirmar Contraseña:</font></label>
								</td>
								<td align="left">
									<input type="password" size="30" name="confir" id="confir1" required />
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">Direcci&oacute;n <br />de residencia:</font></label>
								</td>
								<td align="left">
									<textarea name="dire" id="dire" title="Ingrese su direccion completa." cols="58" rows="5" required></textarea>
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">Fecha de Nacimiento:</font></label>
								</td>
								<td align="left">
									<select name="dia" id="dia" required>
										<option value="" selected>Dia</option>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
									&nbsp;
									<select name="mes" id="mes" required >
										<option value="" selected >Mes</option>
										<option value="Enero" >Enero</option>
										<option value="Febrero" >Febrero</option>
										<option value="Marzo" >Marzo</option>
										<option value="Abril" >Abril</option>
										<option value="Mayo">Mayo</option>
										<option value="Junio" >Junio</option>
										<option value="Julio" >Julio</option>
										<option value="Agosto" >Agosto</option>
										<option value="Septiembre" >Septiembre</option>
										<option value="Octubre" >Octubre</option>
										<option value="Noviembre" >Noviembre</option>
										<option value="Diciembre" >Diciembre</option>
									</select>
									&nbsp;
									<select name="anio" id="anio" required >
										<option value="" selected >Año</option>
										<option value="2014" >2014</option>
										<option value="2013" >2013</option>
										<option value="2012" >2012</option>
										<option value="2011" >2011</option>
										<option value="2010" >2010</option>
										<option value="2009" >2009</option>
										<option value="2008" >2008</option>
										<option value="2007" >2007</option>
										<option value="2006" >2006</option>
										<option value="2005" >2005</option>
										<option value="2004" >2004</option>
										<option value="2003" >2003</option>
										<option value="2002" >2002</option>
										<option value="2001" >2001</option>
										<option value="2000" >2000</option>
										<option value="1999" >1999</option>
										<option value="1998" >1998</option>
										<option value="1997" >1997</option>
										<option value="1996" >1996</option>
										<option value="1995" >1995</option>
										<option value="1994" >1994</option>
										<option value="1993" >1993</option>
										<option value="1992" >1992</option>
										<option value="1991" >1991</option>
										<option value="1990" >1990</option>
										<option value="1989" >1989</option>
										<option value="1988" >1988</option>
										<option value="1987" >1987</option>
										<option value="1986" >1986</option>
										<option value="1985" >1985</option>
										<option value="1984" >1984</option>
										<option value="1983" >1983</option>
										<option value="1982" >1982</option>
										<option value="1981" >1981</option>
										<option value="1980" >1980</option>
									</select>
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">&nbsp;</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<label><font color="black" size="3" face="Palatino linotype">Sexo:</font></label>
								</td>
								<td align="left">
									<input type="radio" size="30" id="genero" name="genero" value="Femenino" required><font color="black" size="3" face="Palatino linotype">Femenino</font></input>&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" size="30" id="genero" name="genero" value="Masculino" required><font color="black" size="3" face="Palatino linotype">Masculino</font></input>
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">&nbsp;</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left">
									<input type="radio" size="30" id="aceptaTerms" name="aceptaTerms" value="Si" required><font color="black" size="3" face="Palatino linotype">Aceptar t&eacute;rminos y condiciones</font></input>&nbsp;&nbsp;
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
								<td align="left" colspan="2">
									<table align="center" width="500">
										<tr>
											<td>
												<br />
												<fieldset>
													<legend><font color="black" size="3" face="Palatino linotype">Documentos:</font></legend>
													<table align="left">
														<tr>
															<td><font color="black" size="3" face="Palatino linotype">D.U.I.:</font></td>
															<td> 
																<input type="number" size="30" name="dui" id="dui" maxlength="9" title="digite numero de DUI" placeholder="9 dígitos, sin espacios" required onkeypress="return ValidaSoloNumeros()" /> 
															</td>
															<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
														</tr>
														<tr>
															<td><font color="black" size="3" face="Palatino linotype">N.I.T:</font></td>
															<td> 
																<input type="number" size="30" name="nit" id="nit" maxlength="14" placeholder="14 dígitos, sin espacios" title="Digite numero de NIT" required onkeypress="return ValidaSoloNumeros()" /> 
															</td>
															<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
														</tr>
														<tr>
															<td><font color="black" size="3" face="Palatino linotype">Tel&eacute;fono:</font></td>
															<td> 
																<input type="number" size="30" maxlength="8" name="telefono" id="telefono" title="Digite numero de telefono" placeholder="8 dígitos, sin espacios" required onkeypress="return ValidaSoloNumeros()" />
															</td>
															<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
														</tr>
													</table>
												</fieldset>
											</td>
											<td>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</td>
											<td>
												<table>
													<tr>
														<td align="center">
															<input type="submit" class="style" name="aceptar" id="aceptar" value="Iniciar Registro" onclick="validardatos();" readonly="true" />
														</td>
													</tr>
													<tr><td>&nbsp;</td></tr>
													<tr>
														<td align="center">
															<input type="reset" class="style" name="Resetear" id="Resetear" value="Cancelar" />
														</td>
													</tr>
												</table>
											</td>
											<td>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</td>
										</tr>
										<tr>
											<td colspan="4">&nbsp;</td>
										</tr>
									</table>
								</td>
								<td>
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<label><font color="black" size="3" face="Palatino linotype">&nbsp;</font></label>
								</td>
							</tr>
							<tr>
								<td colspan="4">
									<label><font color="black" size="3" face="Palatino linotype"><br /></font></label>
								</td>
							</tr>
							<br>
							<br>
							
						</table>
					</form>
				</div></center>
					<br /><br /><br /><br/><br/>
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






