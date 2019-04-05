<?php
require('tfpdf.php');
class PDF extends tFPDF{
    function Header()
    {
    $this->SetFont('DejaVu','',15);
       
    
    }

    function Footer()
{
    //Отступаем снизу 1.5 см
    $this->SetY(-15);
    //Выбираем шрифр Arial курсив разером 8
    $this->SetFont('DejaVu','',15);
    //Выводим номер страницы по центру
    $this->Cell(0,10,'Номер '.$this->PageNo(),0,0,'C');
}


}
$pdf = new PDF('L');

// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
//$pdf->SetFont('DejaVu','',14);
$pdf->setAuthor('mysite.local');
// Load a UTF-8 string from a file and print it
$pdf->AliasNbPages();

// Select a standard font (uses windows-1252)
$pdf->Output();
?>