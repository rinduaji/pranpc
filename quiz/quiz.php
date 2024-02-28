<?php
      
      include("../assets/conn.php");
      session_start();

      $login=$_POST['login'];
      $tgl = date("Y-m-d");
      $tgl_countdown = date("Y/m/d");
      $jenis = $_POST['jenis'];
      

      if($jenis == "") {
         echo '<script type="text/JavaScript"> 
            window.location.replace("index.php");
            </script>';
      }

      $hari = date("d", strtotime($tgl));
      $bulan = date("m", strtotime($tgl));
      $tahun = date("Y", strtotime($tgl));

      $query_soal = "SELECT * FROM app_tam_soal WHERE jenis_soal='$jenis' order by RAND() LIMIT 3";
      $hasil = mysqli_query($con, $query_soal) or die("Query gagal!");
      $total = mysqli_num_rows($hasil);

      $query_cek_jawaban = "SELECT * FROM app_tam_jawaban WHERE login='$login' AND tgl='$tgl'";
      $hasil_cek = mysqli_query($con, $query_cek_jawaban) or die("Query gagal!");
      $total_cek = mysqli_num_rows($hasil_cek);

      $query_cek_nilai = "SELECT * FROM app_tam_nilai WHERE login='$login' AND DAY(lup)='$hari' AND MONTH(lup)='$bulan' AND YEAR(lup)='$tahun'";
      $hasil_cek_nilai = mysqli_query($con, $query_cek_nilai) or die("Query gagal!");
      $total_cek_nilai = mysqli_num_rows($hasil_cek_nilai);
     
      if($total == 0) {
         // header("Location : trouble_quiz.php");
         echo '<script type="text/JavaScript"> 
            window.location.replace("trouble_soal_quiz.php");
            </script>';
      }

      // print_r($query_cek_nilai);
      // exit();
      if($total_cek_nilai != 0) {
         // header("Location : trouble_quiz.php");
         echo '<script type="text/JavaScript"> 
            window.location.replace("trouble_nilai_quiz.php");
            </script>';
      }
      // else{
?>
<!DOCTYPE html>
<!-- saved from url=(0048)https://jthemes.net/themes/html/quizo/version-4/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quiz</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
   <!-- Bootstrap-css include -->
   <link rel="stylesheet" href="../assets/quiz/bootstrap.min.css">
   <!-- Animate-css include -->
   <link rel="stylesheet" href="../assets/quiz/animate.min.css">
   <!-- Main-StyleSheet include -->
   <link rel="stylesheet" href="../assets/quiz/style.css">
   <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "70%" 
        }
</script>
</head>
<body onload="zoom()">
   <div class="wrapper position-relative">
      <div class="container-fluid">
         <div class="row py-5">
            <div class="col-md-6">
               <div class="logo_area ps-5">
                  <a href="">
                     <img src="../assets/quiz/logo.png" alt="image-not-found">
                  </a>
               </div>
            </div>
            <div class="col-md-6">
               <!-- Progress- -->
               <div class="count_progress clip-0">
                  <span class="progress-left">
                     <span class="progress_bar"></span>
                  </span>
                  <span class="progress-right">
                     <span class="progress_bar"></span>
                  </span>
                  <div class="progress-value countdown_timer" data-countdown="<?=$tgl_countdown?>"><div class="count_number"><p id="detik">300</p></div></div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <form class="multisteps_form" id="wizard" method="POST" action="hasil_quiz.php">
               <!-- <form class="multisteps_form" id="wizard" method="POST" action="https://jthemes.net/themes/html/quizo/thankyou/index-1.html"> -->
            
               <input type="hidden" name="total_data" id="total_data" value="<?=$total?>"/>
               <input type="hidden" name="login" id="login" value="<?=$login?>"/>
               <input type="hidden" name="jenis" id="jenis" value="<?=$jenis?>"/>
               <input type="hidden" name="tgl" id="tgl" value="<?=$tgl?>"/>
               <!------------------------- Step-1 ----------------------------->
               <?php
                  $no=1;
                  $angka=1;

                  while ($data = mysqli_fetch_array($hasil)) {
                     $id_soal = $data['id_soal'];
                     $kunci = $data['kunci'];

                     if($total_cek == 0){
                        $query_jawaban = "INSERT INTO app_tam_jawaban (id_soal, kunci, ketjawab, nilai, tgl, login) VALUES ('$id_soal', '$kunci', 'Salah', '0', '$tgl', '$login')";
                        mysqli_query($con, $query_jawaban);
                     }

                     if($angka==1){
               ?>
               <input type="hidden" name="id_soal_<?=$angka?>" id="id_soal_<?=$angka?>" value="<?=$data['id_soal']?>"/>
             <div class="col-lg-7">
                  <div class="multisteps_form_panel" style="display: block;">
                     <div class="question_title pb-4">
                        <h1 class="bg-white rounded-pill position-relative"><?=$data['pertanyaan']?></h1>
                        <!-- Step-Progress-bar area -->
                        <div class="step_progress_bar position-absolute">
                           <div class="step position-relative active" style="background-color: #f8d5b3;"></div>
                           <div class="step position-relative" style="background-color: #ffe090;"></div>
                           <div class="step position-relative" style="background-color: #f2c7db;"></div>
                           <div class="step position-relative" style="background-color: #bdcaff;"></div>
                        </div>
                     </div>
                     <div class="form_items">
                        <ul class="ms-5 p-0 list-unstyled">
                           <li>
                              <label for="opt_<?=$no?>" class="step_<?=$angka?> rounded-pill position-relative animate__animated animate__fadeInRight animate_50ms">
                                 <input type="radio" id="opt_<?=$no++?>" name="stp_<?=$angka?>_select_option" value="A">
                                 <span class="text-white">A</span>
                                 <?=$data['jawab_a']?>
                                 <span class="pinkLady"></span>
                              </label>
                           </li>
                           <li>
                              <label for="opt_<?=$no?>" class="step_<?=$angka?> rounded-pill position-relative animate__animated animate__fadeInRight animate_100ms">
                                 <input type="radio" id="opt_<?=$no++?>" name="stp_<?=$angka?>_select_option" value="B">
                                 <span class="text-white">B</span>
                                 <?=$data['jawab_b']?>
                                 <span class="salomie"></span>
                              </label>
                           </li>
                           <li>
                              <label for="opt_<?=$no?>" class="step_<?=$angka?> rounded-pill position-relative animate__animated animate__fadeInRight animate_150ms">
                                 <input type="radio" id="opt_<?=$no++?>" name="stp_<?=$angka?>_select_option" value="C">
                                 <span class="text-white">C</span><?=$data['jawab_c']?><span class="wePeep"></span>
                              </label>
                           </li>
                           <li>
                              <label for="opt_<?=$no?>" class="step_<?=$angka?> rounded-pill position-relative animate__animated animate__fadeInRight animate_200ms">
                                 <input type="radio" id="opt_<?=$no++?>" name="stp_<?=$angka?>_select_option" value="D">
                                 <span class="text-white">D</span><?=$data['jawab_d']?><span class="periwinkle"></span>
                              </label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <?php
                     }
                     else{
               ?>
                  <input type="hidden" name="id_soal_<?=$angka?>" id="id_soal_<?=$angka?>" value="<?=$data['id_soal']?>"/>
                  <div class="col-lg-7">
                  <div class="multisteps_form_panel">
                     <div class="question_title pb-4">
                        <h1 class="bg-white rounded-pill position-relative"><?=$data['pertanyaan']?></h1>
                        <!-- Step-Progress-bar area -->
                        <div class="step_progress_bar position-absolute">
                           <div class="step position-relative" style="background-color: #f8d5b3;"></div>
                           <div class="step position-relative" style="background-color: #ffe090;"></div>
                           <div class="step position-relative" style="background-color: #f2c7db;"></div>
                           <div class="step position-relative" style="background-color: #bdcaff;"></div>
                        </div>
                     </div>
                     <div class="form_items">
                        <ul class="ms-5 p-0 list-unstyled">
                           <li>
                              <label for="opt_<?=$no?>" class="step_<?=$angka?> rounded-pill position-relative animate__animated animate__fadeInRight animate_50ms">
                                 <input type="radio" id="opt_<?=$no++?>" name="stp_<?=$angka?>_select_option" value="A">
                                 <span class="text-white">A</span><?=$data['jawab_a']?><span class="pinkLady"></span>
                              </label>
                           </li>
                           <li>
                              <label for="opt_<?=$no?>" class="step_<?=$angka?> rounded-pill position-relative animate__animated animate__fadeInRight animate_100ms">
                                 <input type="radio" id="opt_<?=$no++?>" name="stp_<?=$angka?>_select_option" value="B">
                                 <span class="text-white">B</span><?=$data['jawab_b']?><span class="salomie"></span>
                              </label>
                           </li>
                           <li>
                              <label for="opt_<?=$no?>" class="step_<?=$angka?> rounded-pill position-relative animate__animated animate__fadeInRight animate_150ms">
                                 <input type="radio" id="opt_<?=$no++?>" name="stp_<?=$angka?>_select_option" value="C">
                                 <span class="text-white">C</span><?=$data['jawab_c']?><span class="wePeep"></span>
                              </label>
                           </li>
                           <li>
                              <label for="opt_<?=$no?>" class="step_<?=$angka?> rounded-pill position-relative animate__animated animate__fadeInRight animate_200ms">
                                 <input type="radio" id="opt_<?=$no++?>" name="stp_<?=$angka?>_select_option" value="D">
                                 <span class="text-white">D</span><?=$data['jawab_d']?><span class="periwinkle"></span>
                              </label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <?php
                     }
                     $angka++;
                  }
               ?>
               <!---------- Form Button ---------->
               <div class="form_btn position-absolute">
                  <button type="button" class="f_btn prev_btn text-white rounded-pill text-uppercase" id="prevBtn" onclick="nextPrev(-1)" style="display: none;"><span><i class="fas fa-arrow-left"></i></span> Last Question</button>
                  <button type="button" class="f_btn nextBtn text-white rounded-pill text-uppercase" id="nextBtn" onclick="nextPrev(1), move()">Next Question <span><i class="fas fa-arrow-right"></i></span></button>
               </div>
            </form>
         </div>
      </div>
      <!-- progress-bar -->
      <div class="progress position-absolute rounded-pill">
         <div id="myBar" class="progress-bar rounded-pill" role="progressbar" style="width: <?=floor(100/$total)?>%;" aria-valuenow="<?=floor(100/$total)?>" aria-valuemin="0" aria-valuemax="100"><?=floor(100/$total)?>%</div>
      </div>
      <!-- Right-side-img -->
      <div class="right_bottom_img d-none d-lg-block">
         <img class="position-absolute" src="../assets/quiz/bg_1.png" alt="image-not-found">
      </div>
   </div>
   <!-- jQuery-js include -->
   <script src="../assets/quiz/jquery-3.6.0.min.js"></script>
   <!-- Bootstrap-js include -->
   <script src="../assets/quiz/bootstrap.min.js"></script>
   <!-- jQuery-validate-js include -->
   <script src="../assets/quiz/jquery.validate.min.js"></script>
   <!-- jQuery-countUp-js include -->
   <script src="../assets/quiz/countdown.js"></script>
   <!-- Custom-js include -->
   <script src="../assets/quiz/script.js"></script>

</body></html>
<?php
      // }
      ?>