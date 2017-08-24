<?php
	session_start();
	if(!isset($_SESSION['carro']))
	{
		echo "Carrito esta vacio";
		echo "<a href='catalogo.php'>Volver al Catalogo</a>";
	}else{
	$carro=$_SESSION['carro'];
	$suma=0;
?>
<html>
<head>
<style>
	@media print {
		.noPrint{
			visibility: hidden;
		}
	}
</style>
</head>
<body>
<a href='vercarrito.php' class="noPrint">Volver al Carrito</a> 
<div class="noPrint">/ </div>
<a href='javascript:void();' 
onclick="window.print();" class="noPrint">Imprimir</a>
<h1 align="center">Orden de compra</h1>
<center>
<table width="600" border="0">
	<tr>
		<td></td>
		<td colspan="2">
			No. Compra: # <?php echo SID;?><br>
			Cliente: <?php echo $_SESSION['myusername']; ?><br>
			Fecha: <?php echo date('Y-m-d H:i:s'); ?><br>
			Total Compra: $<?php echo $_SESSION['ValorPagar']; ?><br>
		</td>
		<td></td>
	</tr>
	<tr bgcolor="grey">
		<td>Producto</td>
		<td>Precio</td>
		<td>Cantidad</td>
		<td>Sub Total</td>
	</tr>
	<?php
		foreach($carro as $k => $v)
		{
			$subtotal=$v['cantidad']*$v['precio'];
			$suma=$suma+$subtotal;
			echo '<tr>';
			echo '<td>'.$v['producto'].'</td>';
			echo '<td>'.$v['precio'].'</td>';
			echo '<td>'.$v['cantidad'].'</td>';
			echo '<td>'.$subtotal.'</td>';
			echo '</tr>';
		}
	?>
</table>
</center>
</body>
</html>
<?php
}
?>