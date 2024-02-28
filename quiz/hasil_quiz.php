<?php
    include("../assets/conn.php");
    session_start();
    $login=$_SESSION["username"];
    if(isset($_POST['login'])){
        $login=$_POST['login'];
    }
    else {
        $login=$_GET['username'];
    }

    if(isset($_POST['jenis'])) {
        $jenis=$_POST['jenis'];
    }
    else {
        $jenis=$_GET['jenis'];
    }
    
    $tgl =date("Y-m-d");
    $total_nilai = 0;
    $status_nilai = '';
    $lup = date("Y-m-d h:i:s");
    $status = 0;

    $query = "SELECT (SUM(nilai)/COUNT(*)) as total_nilai FROM app_tam_jawaban WHERE login='$login' AND tgl='$tgl'";
    $hasil = mysqli_query($con, $query) or die("Query gagal!");
    $total = mysqli_num_rows($hasil);

    if($total > 0) {
        while($row = mysqli_fetch_array($hasil)){
          $total_nilai = $row['total_nilai'];
        }
    }

    if($total_nilai == 100) {
        $status_nilai = "Lulus";
    }
    else{
        $status_nilai = "Tidak Lulus";
    }

    $hari = date("d", strtotime($tgl));
    $bulan = date("m", strtotime($tgl));
    $tahun = date("Y", strtotime($tgl));

    $query = "SELECT * FROM app_tam_nilai WHERE login='$login' AND DAY(lup)='$hari' AND MONTH(lup)='$bulan' AND YEAR(lup)='$tahun'";
    $hasil = mysqli_query($con, $query) or die("Query gagal!");
    $total = mysqli_num_rows($hasil);

    if($total > 0) {
        $status = 1;
    }
    if($status == 0) {
        $query_nilai = "INSERT INTO app_tam_nilai (nilai_total, login, status_ujian, lup, jenis) VALUES ('$total_nilai', '$login', '$status_nilai', '$lup', '$jenis')";
        mysqli_query($con, $query_nilai);

        if($total_nilai == 100){
            $query_user_quiz = "UPDATE cc147_main_users SET user_quiz='1' WHERE username='$login'";
            mysqli_query($con, $query_user_quiz);
        }
        else {
            $query_user_quiz = "UPDATE cc147_main_users SET user_quiz='0' WHERE username='$login'";
            mysqli_query($con, $query_user_quiz);
        }
    }

    if($total_nilai == "80") {
        $query = "SELECT (SUM(nilai)/COUNT(*)) as total_nilai FROM app_tam_jawaban WHERE login='$login' AND tgl='$tgl'";
        $hasil = mysqli_query($con, $query) or die("Query gagal!");
        $total = mysqli_num_rows($hasil);

        if($total > 0) {
            while($row = mysqli_fetch_array($hasil)){
            $total_nilai = $row['total_nilai'];
            }
        }

        if($total_nilai == 100) {
            $status_nilai = "Lulus";
        }
        else{
            $status_nilai = "Tidak Lulus";
        }

        $hari = date("d", strtotime($tgl));
        $bulan = date("m", strtotime($tgl));
        $tahun = date("Y", strtotime($tgl));

        $query = "SELECT * FROM app_tam_nilai WHERE login='$login' AND DAY(lup)='$hari' AND MONTH(lup)='$bulan' AND YEAR(lup)='$tahun'";
        $hasil = mysqli_query($con, $query) or die("Query gagal!");
        $total = mysqli_num_rows($hasil);

        if($total > 0) {
            $status = 1;
        }
        if($status == 0) {
            $query_nilai = "UPDATE app_tam_nilai SET nilai_total='$total_nilai', status_ujian='$status_nilai' WHERE login='$login' AND jenis='$jenis' AND  tgl='$tgl'";
            mysqli_query($con, $query_nilai);

            if($total_nilai == 100){
                $query_user_quiz = "UPDATE cc147_main_users SET user_quiz='1' WHERE username='$login'";
                mysqli_query($con, $query_user_quiz);
            }
            else {
                $query_user_quiz = "UPDATE cc147_main_users SET user_quiz='0' WHERE username='$login'";
                mysqli_query($con, $query_user_quiz);
            }
        }
    }
?>

<!DOCTYPE html>
<!-- saved from url=(0059)https://jthemes.net/themes/html/quizo/thankyou/index-1.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="../assets/hasil_quiz/all.min.css">
    <!-- Google-fonts-include -->
    <link href="../assets/hasil_quiz/css2" rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="../assets/hasil_quiz/bootstrap.min.css">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="../assets/hasil_quiz/style.css">
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <div class="row text-center">
                <div class="check_mark_img">
                    <img src="../assets/hasil_quiz/checkmark.png" alt="image_not_found">
                </div>
                <div class="sub_title">
                    <span>Your submission has been received</span>
                </div>
                <div class="title pt-2">
                    <h5>Anda <?=$status_nilai?></h5>
                </div>
                <div class="sub_title">
                    <h4>Nama : <?=$login?> | Nilai : <?=$total_nilai?></h4>
                </div>
                <div class="title pt-1">
                    <h3>Thankyou For Give Answer</h3>
                </div>
                <div>
                    <a href="../index.html" class="btn btn-success btn-lg">Back to Login Seamless</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap-js include -->
    <script src="../assets/hasil_quiz/bootstrap.min.js.download"></script>

</body></html>