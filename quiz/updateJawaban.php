<?php
      
      include("../assets/conn.php");

      $id = $_GET['id'];
      $jawaban = $_GET['jawaban'];
      $login = $_GET['login'];
      $tgl = date("Y-m-d");
      $id_jawaban = '';
      $kunci = '';
      $nilai = 0;
      $ketjawab = 'Salah';

      $query_id_jawaban = "SELECT * FROM app_tam_jawaban WHERE id_soal='$id' AND tgl='$tgl' AND login='$login'";
      $hasil = mysqli_query($con, $query_id_jawaban) or die("Query gagal!");
      $total = mysqli_num_rows($hasil);

      if($total > 0) {
          while($row = mysqli_fetch_array($hasil)){
            $id_jawaban = $row['id_jawaban'];
            $kunci = $row['kunci'];
          }
      }

      if($kunci == $jawaban) {
          $nilai = 100;
          $ketjawab = "Benar";
      }

      $query_update = "UPDATE app_tam_jawaban SET jawaban='$jawaban', nilai='$nilai', ketjawab='$ketjawab' WHERE id_jawaban='$id_jawaban'";
      $update = mysqli_query($con, $query_update) or die("Query gagal!");

      $query_id_jawaban2 = "SELECT * FROM app_tam_jawaban WHERE id_soal='$id' AND tgl='$tgl' AND login='$login'";
      $hasil2 = mysqli_query($con, $query_id_jawaban2) or die("Query gagal!");
      $total2 = mysqli_num_rows($hasil2);

      if($total2 > 0) {
          while($row2 = mysqli_fetch_array($hasil2)){
            $cek_jawaban = $row2['jawaban'];
          }
      }
      else {
        $cek_jawaban = 'Tidak Ada';
      }

      echo json_encode($cek_jawaban, JSON_PRETTY_PRINT);
?>