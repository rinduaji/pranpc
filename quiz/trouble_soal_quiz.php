<?php
    include("../assets/conn.php");

    if(isset($_POST['login'])){
        $login=$_POST['login'];
    }
    else {
        $login=$_SESSION['username'];
    }
    
    $tgl =$_POST['tgl'];
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
                    <img src="../assets/hasil_quiz/silang.png" alt="image_not_found">
                    <br>
                </div>
                <div class="sub_title">
                    <span>Soal Quiz Belum Ada Hari Ini</span>
                </div>
                <div class="title pt-1">
                    <h3>Harap Hubungi Team Leader Terkait Jika Ada Kendala</h3>
                </div>
                <div>
                    <br>
                    <a href="../index.html" class="btn btn-danger btn-lg">Back to Login Seamless</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap-js include -->
    <script src="../assets/hasil_quiz/bootstrap.min.js.download"></script>

</body></html>