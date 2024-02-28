<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
session_start();

include("./assets/conn.php");

//$username = $_POST['username'];
//$password = MD5($_POST['password']);

$username = mysqli_escape_string($con,$_POST['username']);
$password = MD5(mysqli_escape_string($con,$_POST['password']));

$query = "SELECT a.user_id,a.`name`,a.username,b.user3 ,b.user5, b.user6, a.user_quiz
FROM cc147_main_users AS a
INNER JOIN cc147_main_users_extended AS b ON a.user_id = b.id WHERE a.username = '$username' AND a.user_password = '$password' AND user_active <>'0'";
$resul =mysqli_query($con, $query);

if (mysqli_num_rows($resul) == 1){
	$row=mysqli_fetch_row($resul);
	$_SESSION["user_id"] = $row[0];
	$_SESSION["username"] = $row[2];
	$_SESSION["name"] = $row[1];
	$_SESSION["jabatan"] = $row[3];
	$jb = explode(" ",trim($row[3]));
	$_SESSION["jb"] = $jb[0];
	$_SESSION["area"] = $row[4];

	$tgl = date("Y-m-d");

	$hari = date("d", strtotime($tgl));
    $bulan = date("m", strtotime($tgl));
    $tahun = date("Y", strtotime($tgl));

	$query_cek_nilai = "SELECT nilai_total FROM app_tam_nilai WHERE login='$username' AND DAY(lup)='$hari' AND MONTH(lup)='$bulan' AND YEAR(lup)='$tahun'";
    $hasil_cek_nilai = mysqli_query($con, $query_cek_nilai) or die("Query gagal!");
    $total_cek_nilai = mysqli_num_rows($hasil_cek_nilai);
	$row1=mysqli_fetch_row($hasil_cek_nilai);
	// print_r($row[6].' '.$row[3]. ' '.$row1[0]);
	// exit();
	// $_SESSION["akses"] = $row[5];
    if($row[6] == '1' AND ($row[3] == trim("Agent TAM") OR $row[3] == trim("Tabber TAM"))) {
		if($row1[0] == 100) {
			$tanggal = date("Y-m-d");
			// $sql = "SELECT tanggal, login FROM app_wfh_wfo_status WHERE login = '$row[2]' AND tanggal = '$tanggal'";
			// $hasil = mysqli_query($con, $sql);
			// $total = mysqli_num_rows($hasil);
			// if($total == 0 AND $row[3] == trim("Agent TAM")) {
				// $query = "INSERT INTO app_wfh_wfo_status (login, nama, jabatan, kota, status, tanggal) VALUES ('$row[2]', '$row[1]', '$row[3]', '$row[4]', '$status', '$tanggal')";
				// mysqli_query($con, $query);
				
			// }
			
			
			header("Location:./mod/dashboard.php");
		}
		else {
			if($row[6] == '1') {
				$tanggal = date("Y-m-d");
				// $sql = "SELECT tanggal, login FROM app_wfh_wfo_status WHERE login = '$row[2]' AND tanggal = '$tanggal'";
				// $hasil = mysqli_query($con, $sql);
				// $total = mysqli_num_rows($hasil);
				// if($total == 0 AND $row[3] == trim("Agent TAM")) {
					// $query = "INSERT INTO app_wfh_wfo_status (login, nama, jabatan, kota, status, tanggal) VALUES ('$row[2]', '$row[1]', '$row[3]', '$row[4]', '$status', '$tanggal')";
					// mysqli_query($con, $query);
					
				// }
				
				
				header("Location:./mod/dashboard.php");
			} 
			else {
				header("Location:./quiz/index.php");
			}
		}
    }
	else if($row[6] == '0' AND ($row[3] == trim("Agent TAM") OR $row[3] == trim("Tabber TAM"))){
        header("Location:./quiz/index.php");
    }
    else {
        $tanggal = date("Y-m-d");
		// $sql = "SELECT tanggal, login FROM app_wfh_wfo_status WHERE login = '$row[2]' AND tanggal = '$tanggal'";
		// $hasil = mysqli_query($con, $sql);
		// $total = mysqli_num_rows($hasil);
		// if($total == 0 AND $row[3] == trim("Agent TAM")) {
		// 	$query = "INSERT INTO app_wfh_wfo_status (login, nama, jabatan, kota, status, tanggal) VALUES ('$row[2]', '$row[1]', '$row[3]', '$row[4]', '$status', '$tanggal')";
		// 	mysqli_query($con, $query);
			
		// }

		
		header("Location:./mod/dashboard.php");
    }

	// header("Location:./mod/dashboard.php");
} else {
	unset($_SESSION["username"]);
	?>  <script language="JavaScript">
            alert('Username atau Password yang anda masukkan tidak sesuai ...');
            document.location='index.html';
        </script>
    <?php
}

?>