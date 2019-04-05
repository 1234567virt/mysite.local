
<?php
require('tfpdf.php');
class PDF extends tFPDF
{
    
        // Load data
        function LoadData($file)
        {
            // Read file lines
            $lines = file($file);
            $data = array();
            foreach($lines as $line)
                $data[] = explode(';',trim($line));
            return $data;
        }
        
         function FancyTable($header, $data)
        {
            $this->SetY(80);
            $this->SetX(80);
            // Colors, line width and bold font
            $this->SetFillColor(255,0,0);
            $this->SetTextColor(255);
            $this->SetDrawColor(128,0,0);
            $this->SetLineWidth(.3);
          
            // $this->SetFont('','B');
            $this->SetFont('DejaVu','',15);
            // Header
            $w = array(60, 35, 22, 23);
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
                $this->SetX(80);
                $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
                $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
                $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
                $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
                $this->Ln();
                $fill = !$fill;
            }
            // Closing line
            $this->SetX(80);
            $this->Cell(array_sum($w),0,'','T');
        }
     
        }
        $pdf = new PDF('L');
        // Column headings
        $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
        $header = array('Название', 'Количество', 'Цена', 'Всего');
        // Data loading
        $data = $pdf->LoadData('countries.txt');
        $pdf->setAuthor('mysite.local');
        $pdf->AliasNbPages();
        
        $pdf->AddPage();
        
        
        $pdf->FancyTable($header,$data);
     
        $pdf->Output();
?>