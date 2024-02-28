<?php
include("./assets/conn.php");

$hostname = "10.194.176.158";
$user = "appdev";
$password = "appdev123";
$database = "pranpc";

$conn = mysqli_connect($hostname, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
// print_r($date_awal);
$tglx_awal=$_POST['date_awal'];
$tglx_akhir=$_POST['date_akhir'];

// create empty variable to be filled with export data

$site=$_POST['site'];
if ($site=='AllArea'){$wh="";}
else{$wh="and b.user5 like '$site'";}

$query="SELECT
a.tgl AS Tanggal,
a.login,
a.nama_agent AS Agent,
a.fastel,
a.no_telp AS No_Telepon,
a.msisdn AS MSISDN,
a.area AS Area,
a.reg AS Regional,
a.witel AS Witel,
a.produk AS Produk,
a.speed AS Speed,
a.total AS Total,
a.hasil_nego AS Negosisasi_Pembayaran,
a.janji_bayar AS Tanggal_Janji_Bayar,
a.jenis,
a.status,
a.kategori,
a.reason,
a.ket AS Keterangan,
a.follow,
a.input,
a.valid 
FROM
app_tam_pranpc AS a 
WHERE a.tgl BETWEEN '$tglx_awal 00:00:01' AND '$tglx_akhir 23:59:59' $wh order by a.login asc";
// echo $query;

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
// print_r($csv_export);
// filename for export
$csv_filename = 'Data PRA_NPC CHURN '.date('Y-m-d').' '.$site.'.csv';
// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);