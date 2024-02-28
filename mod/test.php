<?php 
include("./assets/conn.php");
if(mysqli_connect_errno()){
    echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$dt = explode("-",trim($date)); 
$tglx="$dt[2]-$dt[1]-$dt[0]";
echo "$date";
echo "$exp";
if ($_POST['exp']=='ALL'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59'";}
else if ($_POST['exp']=='qco'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.upd_qco<>''";}
else if ($_POST['exp']=='tl'){$whr=" a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.upd_tl<>''";}
else if ($_POST['exp']=='qcotgl'){$whr="a.tgl_qco1 BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.upd_qco<>''";}
else if ($_POST['exp']=='recall'){$whr="a.follow in ('5','8')";}
$sql="SELECT
a.tgl AS Tanggal,
a.login,
b.user2 AS Agent,
a.no_pelanggan,
a.fastel,
a.nama_dm AS Nama_Pemilik,
a.tlp AS No_Telepon,
a.reg AS Regional,
a.jenis AS Jenis_Call,
a.status AS Status_Call,
a.kategori AS Kategori,
a.reason AS Reason_Call,
a.penerima AS Nama_Penerima,
a.relasi AS Hubungan_DM,
a.segment AS Segment,
a.ket AS Keterangan,
a.rec_qco AS Rekomendasi_QCO1,
a.tgl_qco1,
a.rec_tl AS Rekomendasi_TL,
a.tgl_tl,
a.rec_suport AS Rekomendasi_Support,
a.tgl_suport,
a.upd_qco AS Update_QCO1,
a.upd_tl AS Update_TL,
a.upd_suport AS Update_support,
a.input AS Input_Call,
a.prof_hp,
a.prof_email,
a.prof_ttl,
a.prof_hoby,
a.prof_agama,
a.prof_facebook,
a.add_on_tsel AS Selisih_Harga,
a.add_on_wifi AS Harga,
a.valid,
a.zone
FROM
app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1
WHERE $whr order by a.login asc";
echo $sql;

include("./assets/PHPExcel.php");
$excel = new PHPExcel();

// Settingan awal fil excel
$excel->getProperties()->setCreator('My Notes Code')
					   ->setLastModifiedBy('My Notes Code')
					   ->setTitle("Data TAM")
					   ->setSubject("TAM")
					   ->setDescription("Laporan Semua Data TAM")
					   ->setKeywords("Data TAM");

// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = array(
	'font' => array('bold' => true), // Set font nya jadi bold
	'alignment' => array(
		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
		'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	),
	'borders' => array(
		'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
		'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
		'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
		'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	)
);

// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = array(
	'alignment' => array(
		'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	),
	'borders' => array(
		'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
		'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
		'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
		'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	)
);

// Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('A1', "No"); 
$excel->setActiveSheetIndex(0)->setCellValue('B1', "Tanggal"); 
$excel->setActiveSheetIndex(0)->setCellValue('C1', "login"); 
$excel->setActiveSheetIndex(0)->setCellValue('D1', "Agent"); 
$excel->setActiveSheetIndex(0)->setCellValue('E1', "No Pelanggan"); 
$excel->setActiveSheetIndex(0)->setCellValue('F1', "Fastel"); 
$excel->setActiveSheetIndex(0)->setCellValue('G1', "Nama Pemilik"); 
$excel->setActiveSheetIndex(0)->setCellValue('H1', "No Telepon"); 
$excel->setActiveSheetIndex(0)->setCellValue('I1', "Regional"); 
$excel->setActiveSheetIndex(0)->setCellValue('J1', "Jenis Call"); 
$excel->setActiveSheetIndex(0)->setCellValue('K1', "Status Call"); 
$excel->setActiveSheetIndex(0)->setCellValue('L1', "Kategori"); 
$excel->setActiveSheetIndex(0)->setCellValue('M1', "Reason Call"); 
$excel->setActiveSheetIndex(0)->setCellValue('N1', "Nama Penerima"); 
$excel->setActiveSheetIndex(0)->setCellValue('O1', "Hubungan DM"); 
$excel->setActiveSheetIndex(0)->setCellValue('P1', "Segment"); 
$excel->setActiveSheetIndex(0)->setCellValue('Q1', "Keterangan"); 
$excel->setActiveSheetIndex(0)->setCellValue('R1', "Rekomendasi QCO"); 
$excel->setActiveSheetIndex(0)->setCellValue('S1', "Tgl upd QCO"); 
$excel->setActiveSheetIndex(0)->setCellValue('T1', "Rekomendasi_TL"); 
$excel->setActiveSheetIndex(0)->setCellValue('U1', "tgl_tl"); 
$excel->setActiveSheetIndex(0)->setCellValue('V1', "Rekomendasi_Support"); 
$excel->setActiveSheetIndex(0)->setCellValue('W1', "Input_Call"); 
$excel->setActiveSheetIndex(0)->setCellValue('X1', "prof_hp"); 
$excel->setActiveSheetIndex(0)->setCellValue('Y1', "prof_email");
$excel->setActiveSheetIndex(0)->setCellValue('Z1', "prof_ttl"); 
$excel->setActiveSheetIndex(0)->setCellValue('AA1', "prof_hoby"); 
$excel->setActiveSheetIndex(0)->setCellValue('AB1', "prof_agama"); 
$excel->setActiveSheetIndex(0)->setCellValue('AC1', "prof_facebook"); 
$excel->setActiveSheetIndex(0)->setCellValue('AD1', "Selisih Harga"); 
$excel->setActiveSheetIndex(0)->setCellValue('AE1', "Harga"); 
$excel->setActiveSheetIndex(0)->setCellValue('AF1', "valid"); 
$excel->setActiveSheetIndex(0)->setCellValue('AG1', "zone"); 


// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('I1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('J1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('K1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('L1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('M1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('N1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('O1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('P1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Q1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('R1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('S1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('T1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('U1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('V1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('W1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('X1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Y1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Z1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AA1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AB1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AC1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AD1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AE1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AF1')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AG1')->applyFromArray($style_col);


// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('4')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('6')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('7')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('8')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('9')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('10')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('11')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('12')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('13')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('14')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('15')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('16')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('17')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('18')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('19')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('20')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('21')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('22')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('23')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('24')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('25')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('26')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('27')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('28')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('29')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('30')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('31')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('32')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('33')->setRowHeight(20);




// Buat query untuk menampilkan semua data 

$sqli = mysqli_query($con,$sql);					   
$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = mysqli_fetch_array($sqli)){ // Ambil semua data dari hasil eksekusi $sql
	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['Tanggal']);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('C'.$numrow, $data['login'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['Agent']);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('E'.$numrow, $data['no_pelanggan'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('F'.$numrow, $data['fastel'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['Nama_Pemilik']);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('H'.$numrow, $data['No_Telepon'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data['Regional']);
	$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['Jenis_Call']);
	$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data['Status_Call']);
	$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data['Kategori']);
	$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data['Reason_Call']);
	$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data['Nama_Penerima']);
	$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data['Hubungan_DM']);
	$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data['Segment']);
	$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data['Keterangan']);
	$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data['Rekomendasi_QCO']);
	$excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data['tgl_qco1']);
	$excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, $data['Rekomendasi_TL']);
	$excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data['tgl_tl']);
	$excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, $data['Rekomendasi_Support']);
	$excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data['Input_Call']);
	$excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $data['prof_hp']);
	$excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data['prof_email']);
	$excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $data['prof_ttl']);
	$excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $data['prof_hoby']);
	$excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $data['prof_agama']);
	$excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $data['prof_facebook']);
	$excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $data['Selisih_Harga']);
	$excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $data['Harga']);
	$excel->setActiveSheetIndex(0)->setCellValue('AF'.$numrow, $data['valid']);
	$excel->setActiveSheetIndex(0)->setCellValue('AG'.$numrow, $data['zone']);
		
	// Khusus untuk no telepon. kita set type kolom nya jadi STRING
	//$excel->setActiveSheetIndex(0)->setCellValueExplicit('E'.$numrow, $data['telp'], PHPExcel_Cell_DataType::TYPE_STRING);
	
	//$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['alamat']);
	
	// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
	$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row); 
	$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AE'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AF'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AG'.$numrow)->applyFromArray($style_row);
	
	$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
	
	$no++; // Tambah 1 setiap kali looping
	$numrow++; // Tambah 1 setiap kali looping
}

// Set width kolom
	$excel->getActiveSheet()->getColumnDimension('A')->setWidth(6);
	$excel->getActiveSheet()->getColumnDimension('B')->setWidth(18); 
	$excel->getActiveSheet()->getColumnDimension('C')->setWidth(8); 
	$excel->getActiveSheet()->getColumnDimension('D')->setWidth(25); 
	$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); 
	$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15); 
	$excel->getActiveSheet()->getColumnDimension('G')->setWidth(20); 
	$excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); 
	$excel->getActiveSheet()->getColumnDimension('I')->setWidth(5); 
	$excel->getActiveSheet()->getColumnDimension('J')->setWidth(20); 
	$excel->getActiveSheet()->getColumnDimension('K')->setWidth(15); 
	$excel->getActiveSheet()->getColumnDimension('L')->setWidth(10); 
	$excel->getActiveSheet()->getColumnDimension('M')->setWidth(15); 
	$excel->getActiveSheet()->getColumnDimension('N')->setWidth(15); 
	$excel->getActiveSheet()->getColumnDimension('O')->setWidth(15); 
	$excel->getActiveSheet()->getColumnDimension('P')->setWidth(15); 
	$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(100); 
	$excel->getActiveSheet()->getColumnDimension('R')->setWidth(40); 
	$excel->getActiveSheet()->getColumnDimension('S')->setWidth(18); 
	$excel->getActiveSheet()->getColumnDimension('T')->setWidth(40);
	$excel->getActiveSheet()->getColumnDimension('U')->setWidth(18);
	$excel->getActiveSheet()->getColumnDimension('V')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('W')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('X')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('Y')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('Z')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('AA')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('AB')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('AC')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('AD')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('AE')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('AF')->setWidth(15);
	$excel->getActiveSheet()->getColumnDimension('AG')->setWidth(5);

// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Laporan Data Transaksional");
$excel->setActiveSheetIndex(0);

// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Data TAM.xlsx"'); // Set nama file excel nya
header('Cache-Control: max-age=0');

$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$write->save('php://output');

?>