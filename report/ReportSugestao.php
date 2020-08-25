<?php



require 'vendor/autoload.php';

class ReportSugestao extends FPDF
{  
    function header() {
        $this->SetTitle(utf8_decode("Alcântaro"));
        $this->Image(BASE_URL."assets/img/logo.png",10,6, 30,20);
        $this->SetFont('Arial','',12);
        $this->Cell(276, 5, utf8_decode("Relatório por Bairros"),0,0,'C');
        $this->Ln();
        $this->setFont('Arial','',10);
       
        $this->Ln(15);
    }
    function footer() {
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
        $this->Cell(0,5,utf8_decode("Usuário: ".$_SESSION['nome_usuario']),0,0,'R');
        $this->Cell(0,15,"Emitido em: ".date("d/m/Y H:i:s"),0,0,'R');
    }

    function headerTable() { 
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(45,8, utf8_decode('Nome'),1,0,'L');
        $this->Cell(10,8,'Idade',1,0,'L');
        $this->Cell(18,8,'Celular',1,0,'L');
        $this->Cell(30,8, utf8_decode('Bairro'),1,0,'L');
        $this->Cell(80,8, utf8_decode('Tema'),1,0,'L');
        $this->Cell(90,8, utf8_decode('Sugestão') ,1,0,'L');

        $this->Ln();
    }

    function viewTable()
    { 
        $this->SetFont('Arial', '', 6);


        $sugestoes = new Sugestao();
        
        $dados = $sugestoes->listarReport($_POST['bairro']);
   
        foreach($dados as $value) {

            $this->Cell(45,4,$value['nome'],1,0,'L');
            $this->Cell(10,4,$value['idade'],1,0,'L');
            $this->Cell(18,4,$value['telefone'],1,0,'L');
            $this->Cell(30,4, utf8_decode($value['bairro']),1,0,'L');
            $this->Cell(80,4, utf8_decode($value['tema']),1,0,'L');
            $this->MultiCell(90, 4, str_replace("\n","<br>",utf8_decode($value['sugestao'])), 1);
            
            $this->Ln();
        }
    }
}

$pdf = new ReportSugestao();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable();
$pdf->Output();