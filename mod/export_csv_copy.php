<?php
include("./assets/conn.php");

$hostname = "10.194.176.158";
$user = "appdev";
$password = "appdev123";
$database = "maincc147";



$conn = mysqli_connect($hostname, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
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
// create empty variable to be filled with export data
$site=$_POST['site'];
if ($site=='AllArea'){$wh="";}
else{$wh="and b.user5 like '$site%'";}

$query="SELECT
a.tgl AS Tanggal,
a.login,
b.user2 AS Agent,
a.no_pelanggan,
a.fastel,
a.nama_dm AS Nama_Pemilik,
a.tlp AS No_HP,
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
WHERE $whr $wh order by a.login asc";
//echo $query;

$csv_export = '';
// query to get data from database
$query = mysqli_query($conn, $query);
$field = mysqli_field_count($conn);

// create line with field names
for($i = 0; $i < $field; $i++) {
    $csv_export.= mysqli_fetch_field_direct($query, $i)->name.';';
}

// newline (seems to work both on Linux & Windows servers)
$csv_export.= '
';

// loop through database query and fill export variable
while($row = mysqli_fetch_array($query)) {
    // create line with field values
    for($i = 0; $i < $field; $i++) {
        $csv_export.= '"'.$row[mysqli_fetch_field_direct($query, $i)->name].'";';
    }
    $csv_export.= '
';
}
// filename for export
$csv_filename = 'Data TAM '.date('Y-m-d').' '.$site.'.csv';
// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);