<?php
include_once('m/model.php');
include_once('v/tfpdf.php');
include_once('v/pdf.php');
class C_Produkt extends C_Base
{
	
public function action_produkt(){
		$this->title .= "Ноутбук";
		
		if($this->isGet())
		{
		  $product=new Basket();
		
		  $text=$product->getSelectProduct($_GET['id']);
          
            $this->content= $this->Template('v/v_big-foto.php',array('text'=>$text));
            //header('location: index.php');
           //		exit();
	}
		
		else{
	$this->content = $this->Template('v/v_cabinet.php', array('text' => ''));		
	
		}
	}

	public function action_pdf(){
		$this->title .= "Счет";
		
		if($this->isGet())
		{
		 $product=new Basket();
		 $pdf=new PDF();
		 $data=$product->basket($_SESSION['user_id']);
		  
		 $pdf = new PDF('L');
		 // Column headings
		 $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
		 $header = array('Название', 'Количество', 'Цена', 'Всего');
		 // Data loading
		 $data = $pdf->LoadData('countries.txt');
		 $pdf->setAuthor('mysite.local');
		 $pdf->AliasNbPages();
		 
		 $pdf->AddPage();
		 
		 $pdf->SetSubject(" Счет от компании 'Мир ноутбуков'");
		 $pdf->SetCreator('Tfpdf in PHP');
		 $pdf->fio($_SESSION['user'],$_GET['number'],$_GET['adres'],$_GET['dost']);
		 $pdf->FancyTable($header,$data);
		 $pdf->Output();
           // $this->content= $this->Template('v/v_big-foto.php',array('data'=>$data));
            //header('location: index.php');
           //		exit();
		}
	}
}
	?>