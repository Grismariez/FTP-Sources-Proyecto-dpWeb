<?php
session_start(); 
require("filesphp/validaradmin.php");
require('fpdf/fpdf.php');
require('filesphp/conexion.php');
$sql="select * from compra order by id_cliente";
$result=mysql_query($sql);

//Agregar Encabezado de pagina
class MyPdf extends FPDF{
	public function Header(){
		$this->image('Images Index/LogoOfficial.png',20,10,90,35);
		$this->Setfont('Arial','B',16);
		$this->Cell(285,35,'LISTADO DE COTIZACIONES',0,0,'C');
		$this->ln(10);
	}
	
function Footer()
{
    //Footer de la pagina
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(128);
    $this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
}  
	
}
$pdf = new MyPdf('P','mm','Letter');
$pdf ->addpage();
//$pdf->image('sfondo.jpg',10,10,20,20);
/*$pdf->setfont('Arial','B',10);
$pdf->text(10,10,'Mi Tienda');
$pdf->ln(5);
$pdf->text(10,15,'Accesorios y mas...');
$pdf->setfont('Arial','B',16);
$pdf->settextcolor(30,120,252);
$pdf->text(80,20,'Listado Usuarios');
//$pdf->line();*/
$pdf->ln(9);
$pdf->setfont('Arial','B',12);
$pdf->cell(20,60,'Id');
$pdf->cell(50,60,'Banco');
$pdf->cell(50,60,'No.Tarjeta');
$pdf->cell(40,60,'Tipo');
$pdf->cell(30,60,'Valor');
$pdf->ln(6.5);


//Mostrar los datos
$pdf->SetFillColor(0, 0, 255);
while($fila=mysql_fetch_array($result))
{
$pdf->setfont('Arial','',12);
$pdf->cell(20,60,$fila['id_cliente']);
$pdf->cell(50,60,$fila['nombretc_compra']);
$pdf->cell(50,60,$fila['numerotc_compra']);
$pdf->cell(40,60,$fila['tipotc_compra']);
$pdf->cell(20,60,$fila['valor_compra']);
$pdf->ln(6.5);
}
$pdf->output(); // Visualiza el pdf
//$pdf->output('doc1.pdf','D'); //Forzar la descarga
//$pdf->output('doc1.pdf','F'); //Guarda el pdf

?>