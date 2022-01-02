<?php
 require 'invoiceKBGAS/config.php';
require('pdfLib/fpdf.php');
 
if(isset($_GET['id'])){
	$id=$_GET['id'];

	 
}


class myPDF extends FPDF
{
	
	function  header()
	{
		$this->Image('images/log.png',10,6);
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'INVOICE DETAILS',0,0,'C');
		$this->Ln();
		$this->SetFont('Times','',12);
		 require 'invoiceKBGAS/config.php';
		$id=$_GET['id'];
        $stmt=$db->query("SELECT * FROM tbl_order WHERE order_id='$id'");
        $data=$stmt->fetch(PDO::FETCH_OBJ);
		$this->Cell(276,5,'RECEIVER (BILL TO): '.$data->order_receiver_name,0,2,'C');
		$this->Cell(276,5,'Reverse Charge: '.$data->order_no,2,1,'C');
		$this->Cell(276,5,'Invoice Date: '.$data->order_date,2,1,'C');
		$this->Cell(276,5,'Billing Address: '.$data->order_receiver_address ,2,2,'C');
		$this->Ln(20);
	

	}

	function footer(){
      $this->SetY(-15);
      $this->SetFont('Arial','',8);
      $this->Cell(276,5,'Signature....................',2,2,'L');
      $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,1,'C');
     

	}
	function headerTable(){
		$this->SetFont('Times','B',12);
		$this->Cell(50,10,'Item Name',1,0,'C'); 
        $this->Cell(20,10,'Quantity',1,0,'C'); 
		$this->Cell(20,10,'Price',1,0,'C');
		$this->Cell(30,10,'Actual Amt',1,0,'C');  
        $this->Cell(25,10,'Tax1 (%)',1,0,'C'); 
        $this->Cell(25,10,'Tax2 (%)',1,0,'C');
        $this->Cell(25,10,'Tax3 (%)',1,0,'C');
        $this->Cell(25,10,'Tax3 (%)',1,0,'C'); 
        $this->Cell(20,10,'Total',1,0,'C');  
        $this->Cell(20,10,'Rate',1,0,'C');  
         $this->Cell(20,10,'Amt',1,0,'C'); 
         $this->Ln();
	}

	function viewTable($db){
      $this->SetFont('Times','',12);
       $id=$_GET['id'];
      $stmt=$db->query("SELECT * FROM tbl_order_item WHERE order_id='$id'");
      while($data=$stmt->fetch(PDO::FETCH_OBJ)){
      	$this->SetFont('Times','B',12);
		$this->Cell(50,10,$data->item_name,1,0,'L'); 
        $this->Cell(20,10,$data->order_item_quantity,1,0,'L'); 
		$this->Cell(20,10,$data->order_item_price,1,0,'L');
		$this->Cell(30,10,$data->order_item_actual_amount,1,0,'L');  
        $this->Cell(25,10,$data->order_item_tax1_rate,1,0,'L'); 
        $this->Cell(25,10,$data->order_item_tax1_amount,1,0,'L');
        $this->Cell(25,10,$data->order_item_tax2_rate,1,0,'L');
        $this->Cell(25,10,$data->order_item_tax2_amount,1,0,'L'); 
        $this->Cell(20,10,$data->order_item_tax3_rate,1,0,'L');  
        $this->Cell(20,10,$data->order_item_tax3_amount,1,0,'L');  
        $this->Cell(20,10,$data->order_item_final_amount,1,0,'L'); 
        $this->Ln();
      }
	}
}


$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();

?>