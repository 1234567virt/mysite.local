<?php
require('tfpdf.php');

class PDF extends tFPDF
{
        function Header(){
        $this->SetFont('DejaVu','',15);
        $this->SetFontSize(25);
        $this->Cell(1);
        $this->Cell(280,10,'Счет',1,0,'C');
         }
        function Footer(){
          $this->SetY(-15);
          $this->SetFont('DejaVu','',8);
          $this->Cell(0,10,'Страница '.$this->PageNo(),0,0,'C');
        }
        function fio($fio,$number,$adress,$date){
            $this->SetY(30);
            $this->SetFont('DejaVu','',8);
            $this->SetFontSize(10);
            $this->Cell(30);
            $this->Cell(20,7,'Номер счета: '.$number,0,1,'C');
            $this->Cell(30);
            $this->Cell(20,7,'Ф.И.О: '.$fio,0,1,'C');
            $this->Cell(30);
            $this->Cell(20,7,'Адрес: '.$adress,0,1,'C');
            $this->Cell(30);
            $this->Cell(20,7,'Дата доставки: '.$date,0,1,'C');
        }

        
         function FancyTable($header, $data)
        {
            $this->SetY(80);
            $this->SetX(39);
            // Colors, line width and bold font
            $this->SetFillColor(255,0,0);
            $this->SetTextColor(255);
            $this->SetDrawColor(128,0,0);
            $this->SetLineWidth(.3);
           // $this->SetFont('','B');
            $this->SetFont('DejaVu','',15);
            // Header
            $w = array(90, 45, 52, 43);
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
            $this->Ln();
            // Color and font restoration
            $this->SetFillColor(224,235,255);
            $this->SetTextColor(0);
            $this->SetFont('');
            // Data
            $fill = false;
            foreach($data as $row)
            {
                $this->SetX(39);
                $this->Cell($w[0],10,$row[7],'LR',0,'C',$fill);
                $this->Cell($w[1],10,$row[4],'LR',0,'C',$fill);
                $this->Cell($w[2],10,number_format($row[5]),'LR',0,'C',$fill);
                $this->Cell($w[3],10,number_format($row[8]),'LR',0,'C',$fill);
                $this->Ln();
                $fill = !$fill;
            }
            // Closing line
            $this->SetX(39);
            $this->Cell(array_sum($w),0,'','T');
        }
     
}
        ?>