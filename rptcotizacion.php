<?php
session_start(); 
require("filesphp/validaradmin.php");
require('fpdf/fpdf.php');
require('filesphp/conexion.php');
$sql="select * from cotizaciones order by id_cott";
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
$pdf->ln(5);
$pdf->setfont('Arial','B',12);
$pdf->cell(20,60,'Id');
$pdf->cell(30,60,'Cliente');
$pdf->cell(30,60,'Telefono');
$pdf->cell(50,60,'Correo');
$pdf->cell(40,60,'Producto');
$pdf->cell(40,60,'Categoria');
$pdf->ln(7);

//Mostrar los datos
$pdf->setfillcolor(100,100,200);
while($fila=mysql_fetch_array($result))
{
$pdf->setfont('Arial','',12);
$pdf->cell(20,60,$fila['id_cott']);
$pdf->cell(30,60,$fila['nombre_cott']);
$pdf->cell(30,60,$fila['telefono_cott']);
$pdf->cell(50,60,$fila['email_cott']);
$pdf->cell(50,60,$fila['nomprod_cott']);
$pdf->cell(40,60,$fila['category_cott']);
$pdf->ln(7);
}
$pdf->output(); // Visualiza el pdf
//$pdf->output('doc1.pdf','D'); //Forzar la descarga
//$pdf->output('doc1.pdf','F'); //Guarda el pdf

?>