<?php
  include("../assets/conn.php");

  session_start();
  $login = $_SESSION['username'];

  $query_jenis = "SELECT * FROM app_tam_jenis WHERE aktif='1'";
      $hasil = mysqli_query($con, $query_jenis) or die("Query gagal!");
      $total = mysqli_num_rows($hasil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quiz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/techie/img/favicon.png" rel="icon">
  <link href="../assets/techie/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/techie/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/techie/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/techie/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/techie/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/techie/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/techie/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/techie/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.7.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>QUIZ WIFI CONSUMER</h1>
          <h2>Silahkan Pilih Jenis</h2>
          <br>
          <form method="post" action="quiz.php">
            <input type="hidden" id="login" name="login" value="<?=$login?>"/>
            <div>
              <select class="form-control" name="jenis" id="jenis" style="width: 75%" required>
              <option value="">-- Pilih Jenis --</option>
              <?php
                while ($data = mysqli_fetch_array($hasil)) {
              ?>
                <option value="<?=$data['keterangan']?>"><?=$data['keterangan']?></option>
              <?php
                }
              ?>
            </select>
            </div>
            <button type="submit" class="btn btn-get-started scrollto">Mulai</button>
          </form>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="../assets/techie/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/techie/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/techie/vendor/aos/aos.js"></script>
  <script src="../assets/techie/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/techie/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/techie/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/techie/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/techie/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/techie/js/main.js"></script>

</body>

</html>