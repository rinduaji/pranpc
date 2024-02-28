<?php
session_start();

include("../assets/conn.php");
include("../assets/script.php"); 
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
        $this->SetY(-15);
        // Set font
        $this->SetFont('', 'I', 8);
        // Page number
		$this->MultiCell('50', 5, "\nDEFT System Admin", 0, 'C', 0, 0, '', '', true);
        $this->MultiCell('105', 5, "Indotrans Tour n Travel\nTelp. 031-8498555, Fax. 031-8497525", 0, 'C', 0, 0, '', '', true);
		$this->MultiCell('50', 5, "\nRaya Jemursari", 0, 'C', 0, 0, '', '', true);
    }

	// Colored table
	public function ColoredTable($header,$data) {
		// Colors, line width and bold font
		$this->SetFillColor(235, 0, 0);
		$this->SetTextColor(255);
		$this->SetDrawColor(235, 235, 235);
		$this->SetLineWidth(0.3);
		$this->SetFont('', 'B');
		// Header
		$w = array(65, 45, 15, 40, 40);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
		} $this->Ln();
		// Color and font restoration
		$this->SetFillColor(235, 235, 235);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = 0;
		foreach($data as $row) {
			$this->Cell($w[0], 6, $row[0], 'LR', 0, 'L', $fill);
			$this->Cell($w[1], 6, $row[1], 'LR', 0, 'L', $fill);
			$this->Cell($w[2], 6, $row[2], 'LR', 0, 'C', $fill);
			$this->Cell($w[3], 6, $row[3], 'LR', 0, 'C', $fill);
			if($row[4]>0){
				$this->Cell($w[4], 6, number_format($row[4],2,',','.')." ", 'LR', 0, 'R', $fill);
			} else $this->Cell($w[4], 6, $row[4], 'LR', 0, 'R', $fill);
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
$query = "SELECT * FROM trave_hotel WHERE no = '$no'";
$resul = mysql_query($query); $row = mysql_fetch_row($resul);

$quer = "SELECT * FROM trave_customers WHERE nama = '$row[23]'";
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
	$date = date_create($row[1]);
	$user = $row[24];
	while($row = $row = mysql_fetch_row($resul)) {
		$total = $row[19];
		$date1 = date_create($row[9]); $date1 = date_format($date1, 'd M');
		$date2 = date_create($row[10]); $date2 = date_format($date2, 'd M Y');
		$text = $text.$row[2].";".$row[5]." ".$row[4].";".$row[6].";".$date1."/".$date2.";".$row[19]."\r\n";
	}
	for ($r = $i; $r < 3; $r++)
	{
		$text = $text.";;;;;\r\n";
	}
}
			
$file = fopen("DATA_HOTEL.txt","w");
fwrite($file,$text);
fclose($file);

$resu = mysql_query("SELECT keterangan FROM trave_info WHERE info = 'Keterangan'");
while($keterangan=mysql_fetch_array($resu)){
	$ket = $ket."\n -".$keterangan[0];
}

$quer = "SELECT * FROM trave_hotel_extended WHERE no = '$no'";
$resu = mysql_query($quer);

while($pax = mysql_fetch_row($resu)) {
	$paxs = $pax[2].", ".$paxs; 
}
// ---------------------------------------------------------
$pdf->SetFont('times', '', 10);
$pdf->AddPage('P', 'A4');

//Table Loading
$header = array('Nama Hotel', 'Type Room', 'Bed+', 'Tanggal In/Out', 'Harga');
$data = $pdf->LoadData('DATA_HOTEL.txt');

$pdf->MultiCell(67, 5, "", 0, 'C', 0, 0, '', '', true);
$pdf->MultiCell(71, 5, "INV/".$no."/".date_format($date, 'j/m/Y'), 0, 'C', 0, 0, '', '', true);
$pdf->MultiCell(67, 5, "", 0, 'R', 0, 0, '', '', true);
$pdf->Ln(5);

// print colored table
$pdf->ColoredTable($header, $data);

// write html

$pdf->Ln(0.1);

$pdf->MultiCell(100, 5, "", 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(55, 5, "Materai ", 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(10, 5, "Rp", 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(40, 5, number_format($ma,2,',','.')." ", 1, 'R', 0, 0, '', '', true);
$pdf->Ln();
$pdf->MultiCell(100, 5, "", 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(55, 5, "Total Pembayaran ", 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(10, 5, "Rp", 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(40, 5, number_format($total+$ma,2,',','.')." ", 1, 'R', 0, 0, '', '', true);
$pdf->Ln(7);

$pdf->SetFillColor(235, 235, 235);
$pdf->MultiCell(205, 5, $paxs, 0, 'C', 1, 0, '', '', true);

$pdf->Ln(7);
$pdf->SetFillColor(255, 255, 225);
$pdf->MultiCell(205, 5, "Terbilang, ".terbilang($total+$ma, $style=3)." Rupiah\n".$ket, 0, 'L', 1, 0, '', '', true);
$pdf->Ln();

$pdf->Ln(7);
$pdf->MultiCell(67, 5, "", 0, 'C', 0, 0, '', '', true);
$pdf->MultiCell(71, 5, "Issued Oleh,\n\n\n\n".$user, 0, 'C', 0, 0, '', '', true);
$pdf->MultiCell(67, 5, $sekarang."\n\n\n\nINDOTrans", 0, 'C', 0, 0, '', '', true);

// ---------------------------------------------------------
ob_end_clean();
// close and output PDF document
$pdf->Output('INVOICE_'.$no.'.PDF', 'I');

//============================================================+
// END OF FILE
//============================================================+
