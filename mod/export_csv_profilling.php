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
$tglx_awal=$date_awal;
$tglx_akhir=$date_akhir;

// create empty variable to be filled with export data

$site=$_POST['site'];
if ($site=='AllArea'){$wh="";}
else{$wh="and b.user5 like '$site'";}

$query="SELECT
a.tgl AS Tanggal,
a.login,
a.nama_agent AS Agent,
a.area AS Site,
a.fastel,
a.email_dbprofile AS Email_DB_Profile,
a.email_dbprofile_status AS Email_DB_Profile_Status,
a.email_myih AS Email_MYIH,
a.email_myih_status AS Email_MYIH_Status,
a.hp_dbprofile AS HP_DB_Profile,
a.hp_dbprofile_status AS HP_DB_Profile_Status,
a.hp_myih AS HP_MYIH,
a.hp_myih_status AS HP_MYIH_Status,
a.speed AS Speed,
a.tgl_verifikasi AS Tanggal_Verifikasi,
a.jenis,
a.status,
a.kategori,
a.reason,
a.keterangan,
a.follow,
a.input,
a.valid,
a.new_email1 AS New_Email1,
a.new_email2 AS New_Email2,
a.new_telp1 AS New_Telp1,
a.new_telp2 AS New_Telp2,
a.no_call_hp AS NO_Call_HP,
a.no_call_pilih AS NO_Call_Pilih
FROM
app_tam_profilling AS a 
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
$csv_filename = 'Data PRA_NPC PROFILLING '.date('Y-m-d').' '.$site.'.csv';
// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);