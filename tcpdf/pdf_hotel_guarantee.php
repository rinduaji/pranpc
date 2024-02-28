<?php
session_start();

include("../dist/db.php");

require_once('tcpdf.php');

$username = $_SESSION['username'];
$sekarang = date("j F, Y"); 

if(isset($_GET['no'])){
	$no=$_GET['no'];
}else header("Location:../inputu_detail.php");
// extend TCPF with custom functions
class MYPDF extends TCPDF {

	public function LoadData($file) {
		$lines = file($file); $data = array();
		foreach($lines as $line) {
			$data[] = explode(';', chop($line));
		}return $data;
	}
	
	// Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-170);
        // Set font
        $this->SetFont('', 'I', 8);
        // Page number
        $this->MultiCell('', 5, "Indotrans Tour n Travel\nTelp. 031-8498555, Fax. 031-8497525", 0, 'C', 0, 0, '', '', true);
    }

	// Colored table
	public function ColoredTable($header,$data) {
		// Colors, line width and bold font
		$this->SetFillColor(255, 255, 255);
		$this->SetTextColor(0);
		$this->SetDrawColor(0, 0, 0);
		$this->SetLineWidth(0.3);
		$this->SetFont('', 'B');
		// Header
		$w = array(45, 30, 25, 45, 25, 35);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
		} $this->Ln();
		// Color and font restoration
		$this->SetFillColor(224, 235, 255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = 0;
		foreach($data as $row) {
			$this->Cell($w[0], 6, $row[0], 'LR', 0, 'C', $fill);
			$this->Cell($w[1], 6, $row[1], 'LR', 0, 'C', $fill);
			$this->Cell($w[2], 6, $row[2], 'LR', 0, 'C', $fill);
			$this->Cell($w[3], 6, $row[3], 'LR', 0, 'C', $fill);
			$this->Cell($w[4], 6, $row[4], 'LR', 0, 'C', $fill);
			if($row[5]>0){
				$this->Cell($w[5], 6, number_format($row[5],2,',','.')." ", 'LR', 0, 'R', $fill);
			} else $this->Cell($w[5], 6, $row[5], 'LR', 0, 'R', $fill);
			$this->Ln();
			$fill=!$fill;
		} $this->Cell(array_sum($w), 0, '', 'T');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(400, 300), true, 'UTF-8', false);
$pdf->setHeaderFont(array('', '', 10));

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('DEFT System');
$pdf->SetTitle('DEFT System');
$pdf->SetSubject('DEFT System');
$pdf->SetKeywords('TCPDF, PDF, DEFT, Trave');

// ---------------------------------------------------------
$query = "SELECT * FROM trave_hotel WHERE no = '$no' AND subagent NOT LIKE '-'";
$resul = mysql_query($query); $row = mysql_fetch_row($resul);

$quer = "SELECT * FROM trave_customers WHERE nama = '$row[22]'";
$resu = mysql_query($quer); $cust = mysql_fetch_row($resu);

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, 25, 'Kepada Yth.', "$cust[1]\n$cust[2]\nTelp. $cust[3]");

// set margins
$pdf->SetMargins(2, PDF_MARGIN_TOP, 3);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// ---------------------------------------------------------

if ($resul = mysql_query($query)) { 
	while($row = $row = mysql_fetch_row($resul)) {
		$total = $row[18];
		$date1 = date_create($row[9]); $date1 = date_format($date1, 'd M');
		$date2 = date_create($row[10]); $date2 = date_format($date2, 'd M Y');
		$text = $text.$row[2].";".$row[5]." ".$row[4].";".$row[6].";".$date1." - ".$date2.";".$row[11].";".$row[18]."\r\n";
	}
	for ($r = $i; $r < 3; $r++)
	{
		$text = $text.";;;;;\r\n";
	}
}
			
$file = fopen("DATA_HOTEL.txt","w");
fwrite($file,$text);
fclose($file);

$quer = "SELECT keterangan FROM trave_info WHERE info = 'Keterangan'";
$resu = mysql_query($quer); $ket = mysql_fetch_row($resu);

$quer = "SELECT nama FROM trave_login WHERE user = '$username'";
$resu = mysql_query($quer); $user = mysql_fetch_row($resu);
// ---------------------------------------------------------
$pdf->SetFont('', '', 10);
$pdf->AddPage('P', 'A4');

$header = array('Nama Hotel', 'Type Room', 'Extra Bed', 'Tanggal', 'Total Night', 'Harga');

// data loading
$data = $pdf->LoadData('DATA_HOTEL.txt');

$pdf->MultiCell(67, 5, "In.".$no, 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(71, 5, "Letter of Guarantee", 0, 'C', 0, 0, '', '', true);
$pdf->MultiCell(67, 5, $sekarang, 0, 'R', 0, 0, '', '', true);
$pdf->Ln(5);

// print colored table
$pdf->ColoredTable($header, $data);

// write html

$pdf->Ln(0.1);

$pdf->MultiCell(100, 5, "", 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(70, 5, "Materai ", 1, 'R', 0, 0, '', '', true);
$pdf->MultiCell(35, 5, number_format($ma,2,',','.')." ", 1, 'R', 0, 0, '', '', true);
$pdf->Ln(5.1);
$pdf->MultiCell(100, 5, "", 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(70, 5, "Total ", 1, 'R', 0, 0, '', '', true);
$pdf->MultiCell(35, 5, number_format($total,2,',','.')." ", 1, 'R', 0, 0, '', '', true);
$pdf->Ln(7);
$pdf->MultiCell(205, 5, "Nb.: Pembayaran atas pelayanan hotel tersebut diatas mohon ditagihkan kepada pihak kami dengan attachment dokumen sah.", 0, 'L', 0, 0, '', '', true);
$pdf->Ln(7);

$pdf->MultiCell(67, 5, "", 0, 'C', 0, 0, '', '', true);
$pdf->MultiCell(71, 5, "", 0, 'C', 0, 0, '', '', true);
$pdf->MultiCell(67, 5, "Hormat Kami,\n\n\n\n".$user[0], 0, 'C', 0, 0, '', '', true);

// ---------------------------------------------------------

// close and output PDF document
$pdf->Output('INVOICE_'.$no, 'I');

//============================================================+
// END OF FILE
//============================================================+
