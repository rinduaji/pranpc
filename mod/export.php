<?php
include("./assets/conn.php");
if(mysqli_connect_errno()){
    echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
} 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$dt = explode("-",trim($date)); 
$tglx="$dt[2]-$dt[1]-$dt[0]";

if ($_POST['exp']=='ALL'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59'";}
else if ($_POST['exp']=='suppo'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.follow='6'";}
else if ($_POST['exp']=='valid'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.follow='6' AND valid='valid' AND kategori= 'Agre'";}
else if ($_POST['exp']=='qco'){$whr="a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.upd_qco<>''";}
else if ($_POST['exp']=='tl'){$whr=" a.tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.upd_tl<>''";}
else if ($_POST['exp']=='qcotgl'){$whr="a.tgl_qco1 BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' AND a.upd_qco<>''";}
else if ($_POST['exp']=='recall'){$whr="a.follow in ('5','8')";}
$whr="a.id ='6574580'";
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
//echo $sql;

$result = mysqli_query($con,$sql);

$field = mysqli_field_count($conn);
while ($property = mysqli_fetch_field($result)) {
	$header .= $property->name."\t";
}
    if($result) 
    { 
      //Do replacements 
      while($row = ($result)) 
      { 
        $baris = ''; 
        foreach($row as $value) 
        { 
          if ((!isset($value)) OR ($value=="")) 
          { 
            $value = "\t"; 
          } 
          else 
          { 
            $value = str_replace('"', '""', $value); 
            $value = '"'.$value.'"'."\t"; 
          } 
          $baris.=$value; 
        } 
        $data .= trim($baris)."\n"; 
      } 
      $data = str_replace("\r","",$data); 
      ////end do replacements  
	}
//$count   = mysqli_num_fields($qry_data);
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=data_TAM.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>
