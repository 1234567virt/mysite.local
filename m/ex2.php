
<?php
session_start();
require('class.chek.php');
require('model.php');
$logout = new Basket();
$itog=$logout->check_sum($_SESSION['user_id']);

        $pdf = new PDF('L');
        // Column headings
      $pdf->itog=$itog;
  
        $data=$logout->basket($_SESSION['user_id']);
        foreach($data as $key=>$val){
          $logout->check_update($val['count'],$val['id_product']);
        }
    
        $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
        $header = array('Название', 'Количество', 'Цена', 'Всего');
        $pdf->setAuthor('mysite.local');
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetSubject(" Счет от компании 'Мир ноутбуков'");
        $pdf->SetCreator('Tfpdf in PHP');
        $pdf->fio($_SESSION['user'],$_GET['number'],$_GET['adres'],$_GET['dost']);
        $pdf->FancyTable($header,$data);
       
        $pdf->Output();
        $logout->check_del($_SESSION['user_id']);
        
       
      
     
?>