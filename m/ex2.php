
<?php
session_start();
require('class.chek.php');
require('model.php');

        $pdf = new PDF('L');
        // Column headings
        $logout = new Basket();
        $data=$logout->basket($_SESSION['user_id']);
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
?>