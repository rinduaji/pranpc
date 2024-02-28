<?php
include("../assets/conn.php");

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


if ($_POST['exp']=='ALL'){$whr="tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59'";}
$site=$_POST['site'];
if ($site=='AllArea'){$wh="";}
else{$wh="and site like '$site'";}

// create empty variable to be filled with export data


$query="SELECT
tgl,
login,
reg,
jenis,
wo,
retur,
decline,
webcare,
site 
FROM
app_tam_dapros 
WHERE tgl BETWEEN '$tglx 00:00:01' AND '$tglx 23:59:59' $wh order by login asc";
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
$csv_filename = 'Data Dapros '.date('Y-m-d').' '.$site.'.csv';
// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);