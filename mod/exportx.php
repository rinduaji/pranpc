<?php
$host = "10.194.176.158"; // Nama hostnya
$username = "appdev"; // Username
$password = "appdev123"; // Password (Isi jika menggunakan password)
$database = "maincc147"; // Nama databasenya
$connect = mysqli_connect($host, $username, $password, $database);
require_once("PHPExcel.php");

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
a.`status` AS Status_Call,
a.kategori AS Kategori,
a.reason AS Reason_Call,
a.penerima AS Nama_Penerima,
a.relasi AS Hubungan_DM,
a.segment AS Segment,
a.ket AS Keterangan,
a.rec_qco AS Rekomendasi_QCO,
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
WHERE a.tgl BETWEEN '2018-07-18 00:00:01' AND '2018-07-18 23:59:59' order by a.login asc";
echo $sql;
$qry_data=mysqli_query($con,$sql);
$objPHPExcel = new PHPExcel();
$row = 2;
// Tulis judul tabel
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row, 'No')
            ->setCellValue('B'.$row, 'Tanggal')
            ->setCellValue('C'.$row, 'login')
            ->setCellValue('D'.$row, 'Agent')
            ->setCellValue('E'.$row, 'No Pelanggan')
            ->setCellValue('F'.$row, 'Fastel')
			->setCellValue('G'.$row, 'Nama Pemilik')
			->setCellValue('H'.$row, 'No Telepon')
			->setCellValue('I'.$row, 'Regional')
			->setCellValue('J'.$row, 'Jenis Call')
			->setCellValue('K'.$row, 'Status Call')
			->setCellValue('L'.$row, 'Kategori')
			->setCellValue('M'.$row, 'Reason Call')
			->setCellValue('N'.$row, 'Nama Penerima')
			->setCellValue('O'.$row, 'Hubungan DM')
			->setCellValue('P'.$row, 'Segment')
			->setCellValue('Q'.$row, 'Keterangan')
			->setCellValue('R'.$row, 'Rekomendasi QCO')
			->setCellValue('S'.$row, 'tgl_qco1')
			->setCellValue('T'.$row, 'Rekomendasi_TL')
			->setCellValue('U'.$row, 'tgl_tl')
			->setCellValue('V'.$row, 'Rekomendasi_Support')
			->setCellValue('W'.$row, 'Input_Call')
			->setCellValue('X'.$row, 'prof_hp')
			->setCellValue('Y'.$row, 'prof_email')
			->setCellValue('Z'.$row, 'prof_ttl')
			->setCellValue('AA'.$row, 'prof_hoby')
			->setCellValue('AB'.$row, 'prof_agama')
			->setCellValue('AC'.$row, 'prof_facebook')
			->setCellValue('AD'.$row, 'Selisih Harga')
			->setCellValue('AE'.$row, 'Harga')
			->setCellValue('AF'.$row, 'valid')
			->setCellValue('AG'.$row, 'zone');

			
$nomor 	= 1; // set nomor urut = 1;
$row++; // pindah ke row bawahnya. (ke row 2)
while( $data = mysql_fetch_array($qry_data)){
	$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row,  $nomor )
            ->setCellValue('B'.$row, $data['Tanggal'])
            ->setCellValue('C'.$row, $data['login'])
            ->setCellValue('D'.$row, $data['Agent'])
            ->setCellValue('E'.$row, $data['no_pelanggan'])
            ->setCellValue('F'.$row, $data['fastel'])
			->setCellValue('G'.$row, $data['Nama_Pemilik'])
			->setCellValue('H'.$row, $data['No_Telepon'])
			->setCellValue('I'.$row, $data['Regional'])
			->setCellValue('J'.$row, $data['Jenis_Call'])
			->setCellValue('K'.$row, $data['Status_Call'])
			->setCellValue('L'.$row, $data['Kategori'])
			->setCellValue('M'.$row, $data['Reason_Call'])
			->setCellValue('N'.$row, $data['Nama_Penerima'])
			->setCellValue('O'.$row, $data['Hubungan_DM'])
			->setCellValue('P'.$row, $data['Segment'])
			->setCellValue('Q'.$row, $data['Keterangan'])
			->setCellValue('R'.$row, $data['Rekomendasi_QCO'])
			->setCellValue('S'.$row, $data['tgl_qco1'])
			->setCellValue('T'.$row, $data['Rekomendasi_TL'])
			->setCellValue('U'.$row, $data['tgl_tl'])
			->setCellValue('V'.$row, $data['Rekomendasi_Support'])
			->setCellValue('W'.$row, $data['Input_Call'])
			->setCellValue('X'.$row, $data['prof_hp'])
			->setCellValue('Y'.$row, $data['prof_email'])
			->setCellValue('Z'.$row, $data['prof_ttl'])
			->setCellValue('AA'.$row, $data['prof_hoby'])
			->setCellValue('AB'.$row, $data['prof_agama'])
			->setCellValue('AC'.$row, $data['prof_facebook'])
			->setCellValue('AD'.$row, $data['Selisih_Harga'])
			->setCellValue('AE'.$row, $data['Harga'])
			->setCellValue('AF'.$row, $data['valid'])
			->setCellValue('AG'.$row, $data['zone']);
			
	$row++; // pindah ke row bawahnya ($row + 1)
	$nomor++;
}

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('DataTAM');

// Set sheet yang aktif adalah index pertama, jadi saat dibuka akan langsung fokus ke sheet pertama
$objPHPExcel->setActiveSheetIndex(0);




// Simpan ke Excel 2007
/* $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('data.xlsx'); */

// Simpan ke Excel 2003
/* $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('data.xls'); */


// Download (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="dataTAM.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 

$objWriter->save('php://output');
exit;



?>
