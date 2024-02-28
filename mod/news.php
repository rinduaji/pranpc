<?php
require_once("../deft_nav.php");
include("./assets/conn.php");
if ($_GET) {
    extract($_GET, EXTR_OVERWRITE);
}
if ($_POST) {
    extract($_POST, EXTR_OVERWRITE);
}
// if($_FILES) {
//     extract($_FILES, EXTR_OVERWRITE);
// }
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];

$tgl = date("Y-m-d");
$prevN = mktime(0, 0, 0, date("m"), date("d") - 70, date("Y"));
$last = date("Y-m-d", $prevN);
if ($Login != '') {
    $wlogin = "AND a.login = '$Login'";
}
if ($date != '') {
    $dt = explode("-", trim($date));
    $tgl = "$dt[2]-$dt[1]-$dt[0]";
}
if ($logagent <> '') {
    $wr = "AND a.login = $logagent";
}
if ($fastel <> '') {
    $wr = "AND a.fastel = $fastel";
}



//$dataPerPage = 20;
//if(isset($_GET['page']))
//{
//$noPage = $_GET['page'];
//}
//else $noPage = 1;
//$offset = ($noPage - 1) * $dataPerPage;


if ($jb == "Tabber") {
    $whr = "WHERE $area a.follow ='2' AND (`upd_qco` = ' ' OR `upd_qco` IS NULL) $wr ORDER BY `tgl` asc ";
}
//AND a.input = 'New' AND upd_qco is NULL
else if ($jb == "Supervisor" || $jb == "TL") {
    $whr = "WHERE $area a.follow = '3' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
} else {
    $whr = "WHERE $area a.follow in ('4','3','2','7') AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
}

$bulan = date("m", strtotime($tanggal));
$tahun = date("Y", strtotime($tanggal));
$month = date("m", strtotime($tgl));
$year = date("Y", strtotime($tgl));

$file = $_FILES['file']['name'];
$data = $_FILES['data']['name'];
//cek dulu jika ada gambar news jalankan coding ini

$query_site = "SELECT * FROM cc147_main_users a INNER JOIN cc147_main_users_extended b ON a.username=b.user1 WHERE b.user1='$login'";
$hasil_site = mysqli_query($con, $query_site) or die("Query gagal!");


    $query = "SELECT a.id, a.tanggal, a.judul, a.deskripsi, a.upd, a.file, a.data, b.username, b.name FROM news a , cc147_main_users b, cc147_main_users_extended c WHERE a.upd=b.username AND b.username=c.user1 order by a.tanggal DESC";
    $query_agent = "SELECT a.id, a.tanggal, a.judul, a.deskripsi, a.upd, a.file, a.data, b.username, b.name FROM news a , cc147_main_users b, cc147_main_users_extended c WHERE a.upd=b.username AND b.username=c.user1 order by a.tanggal DESC";
                 

if ($id == "") {
    if (isset($username_login1)) {
        if ($file != "") {
            $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
            $x = explode('.', $file); //memisahkan nama file dengan ekstensi yang diupload
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['file']['tmp_name'];
            $angka_acak     = rand(1, 999);
            $nama_gambar_baru = $angka_acak . '-' . $file; //menggabungkan angka acak dengan nama file sebenarnya

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, 'uploads/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
                // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                if($data != ""){
 
                                    $ekstensi_diperbolehkan_data = array('doc', 'docx', 'xls', 'xlsx','pdf'); //ekstensi file gambar yang bisa diupload 
                                    $x_data = explode('.', $data); //memisahkan nama file dengan ekstensi yang diupload
                                    $ekstensi_data = strtolower(end($x_data));
                                    $data_tmp_data = $_FILES['data']['tmp_name'];
                                    $angka_acak_data     = rand(1, 999);
                                    $nama_data_baru = $angka_acak . '-' . $data; //menggabungkan angka acak dengan nama file sebenarnya
                    
                    if (in_array($ekstensi_data, $ekstensi_diperbolehkan_data) === true) {
                        move_uploaded_file($data_tmp_data, 'file/' . $nama_data_baru); //memindah file gambar ke folder gambar
                    $query_insert = "INSERT INTO news (judul, deskripsi, upd, tanggal, file, data) VALUES ('$judul', '$deskripsi', '$username_login1', '$tanggal_libur', '$nama_gambar_baru', '$nama_data_baru')";

                    if (!mysqli_query($con, $query_insert)) {
                        die("Query gagal dijalankan: " . mysqli_errno($con) .
                            " - " . mysqli_error($con));
                    } else {
                        //tampil alert dan akan redirect ke halaman news.php
                        //silahkan ganti news.php sesuai halaman yang akan dituju
                        echo "<script>alert('Data berhasil berserta gambar dan file ditambah.');window.location='news.php';</script>";
                    }
                }
                }
                else {
                    $query_insert = "INSERT INTO news (judul, deskripsi, upd, tanggal, file) VALUES ('$judul', '$deskripsi', '$username_login1', '$tanggal_libur', '$nama_gambar_baru')";

                    if (!mysqli_query($con, $query_insert)) {
                        die("Query gagal dijalankan: " . mysqli_errno($con) .
                            " - " . mysqli_error($con));
                    } else {
                        //tampil alert dan akan redirect ke halaman news.php
                        //silahkan ganti news.php sesuai halaman yang akan dituju
                        echo "<script>alert('Data berhasil beserta gambar ditambah.');window.location='news.php';</script>";
                    }
                }
                // periska query apakah ada error
            } else {
                //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='news.php';</script>";
            }
        } else {
            if($data != ""){
                    
                $ekstensi_diperbolehkan_data = array('doc', 'docx', 'xls', 'xlsx','pdf'); //ekstensi file gambar yang bisa diupload 
                $x_data = explode('.', $data); //memisahkan nama file dengan ekstensi yang diupload
                $ekstensi_data = strtolower(end($x_data));
                $data_tmp_data = $_FILES['data']['tmp_name'];
                $angka_acak_data     = rand(1, 999);
                $nama_data_baru = $angka_acak . '-' . $data; //menggabungkan angka acak dengan nama file sebenarnya

if (in_array($ekstensi_data, $ekstensi_diperbolehkan_data) === true) {
    move_uploaded_file($data_tmp_data, 'file/' . $nama_data_baru); //memindah file gambar ke folder gambar
$query_insert = "INSERT INTO news (judul, deskripsi, upd, tanggal, data) VALUES ('$judul', '$deskripsi', '$username_login1', '$tanggal_libur', '$nama_data_baru')";

if (!mysqli_query($con, $query_insert)) {
    die("Query gagal dijalankan: " . mysqli_errno($con) .
        " - " . mysqli_error($con));
} else {
    //tampil alert dan akan redirect ke halaman news.php
    //silahkan ganti news.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil berserta gambar dan file ditambah.');window.location='news.php';</script>";
}
}
            }

            $query = "INSERT INTO news (judul, deskripsi, upd, tanggal, file, data) VALUES ('$judul', '$deskripsi', '$username_login1', '$tanggal_libur', null, null)";

            // periska query apakah ada error
            if (!mysqli_query($con, $query)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                    " - " . mysqli_error($con));
            } else {
                //tampil alert dan akan redirect ke halaman news.php
                //silahkan ganti news.php sesuai halaman yang akan dituju
                echo "<script>alert('Data berhasil ditambah.');window.location='news.php';</script>";
            }
        }
    }
}
else {
    if($username_login1 == ''){
        $query_delete = "DELETE FROM news WHERE id='$id'";
        mysqli_query($con, $query_delete);
    }
    else {

        if ($file != "") {
            $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
            $x = explode('.', $file); //memisahkan nama file dengan ekstensi yang diupload
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['file']['tmp_name'];
            $angka_acak     = rand(1, 999);
            $nama_gambar_baru = $angka_acak . '-' . $file; //menggabungkan angka acak dengan nama file sebenarnya

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, 'uploads/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
                // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                if($data != ""){
 
                                    $ekstensi_diperbolehkan_data = array('doc', 'docx', 'xls', 'xlsx','pdf', 'pptx', 'ppt'); //ekstensi file gambar yang bisa diupload 
                                    $x_data = explode('.', $data); //memisahkan nama file dengan ekstensi yang diupload
                                    $ekstensi_data = strtolower(end($x_data));
                                    $data_tmp_data = $_FILES['data']['tmp_name'];
                                    $angka_acak_data     = rand(1, 999);
                                    $nama_data_baru = $angka_acak . '-' . $data; //menggabungkan angka acak dengan nama file sebenarnya
                    
                    if (in_array($ekstensi_data, $ekstensi_diperbolehkan_data) === true) {
                        move_uploaded_file($data_tmp_data, 'file/' . $nama_data_baru); //memindah file gambar ke folder gambar
                   
            $query_update = "UPDATE news SET judul='$judul', deskripsi='$deskripsi', upd='$username_login1', tanggal='$tanggal_libur', file='$nama_gambar_baru', data='$nama_data_baru' WHERE id='$id'";
                    if (!mysqli_query($con, $query_update)) {
                        die("Query gagal dijalankan: " . mysqli_errno($con) .
                            " - " . mysqli_error($con));
                    } else {
                        //tampil alert dan akan redirect ke halaman news.php
                        //silahkan ganti news.php sesuai halaman yang akan dituju
                        echo "<script>alert('Data berhasil berserta gambar dan file ditambah.');window.location='news.php';</script>";
                    }
                }
                }
                else {
                    
            $query = "UPDATE news SET judul='$judul', deskripsi='$deskripsi', upd='$username_login1', tanggal='$tanggal_libur', file='$nama_gambar_baru' WHERE id='$id'";
                    if (!mysqli_query($con, $query_update)) {
                        die("Query gagal dijalankan: " . mysqli_errno($con) .
                            " - " . mysqli_error($con));
                    } else {
                        //tampil alert dan akan redirect ke halaman news.php
                        //silahkan ganti news.php sesuai halaman yang akan dituju
                        echo "<script>alert('Data berhasil beserta gambar ditambah.');window.location='news.php';</script>";
                    }
                }
                // periska query apakah ada error
            } else {
                //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='news.php';</script>";
            }
        } else {
            if($data != ""){
                    
                $ekstensi_diperbolehkan_data = array('doc', 'docx', 'xls', 'xlsx','pdf'); //ekstensi file gambar yang bisa diupload 
                $x_data = explode('.', $data); //memisahkan nama file dengan ekstensi yang diupload
                $ekstensi_data = strtolower(end($x_data));
                $data_tmp_data = $_FILES['data']['tmp_name'];
                $angka_acak_data     = rand(1, 999);
                $nama_data_baru = $angka_acak . '-' . $data; //menggabungkan angka acak dengan nama file sebenarnya

if (in_array($ekstensi_data, $ekstensi_diperbolehkan_data) === true) {
    move_uploaded_file($data_tmp_data, 'file/' . $nama_data_baru); //memindah file gambar ke folder gambar

    $query = "UPDATE news SET judul='$judul', deskripsi='$deskripsi', upd='$username_login1', tanggal='$tanggal_libur', data='$nama_data_baru' WHERE id='$id'";
if (!mysqli_query($con, $query_update)) {
    die("Query gagal dijalankan: " . mysqli_errno($con) .
        " - " . mysqli_error($con));
} else {
    //tampil alert dan akan redirect ke halaman news.php
    //silahkan ganti news.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil berserta gambar dan file ditambah.');window.location='news.php';</script>";
}
}
            }

            $query = "UPDATE news SET judul='$judul', deskripsi='$deskripsi', upd='$username_login1', tanggal='$tanggal_libur', file='', data='' WHERE id='$id'";
            // periska query apakah ada error
            if (!mysqli_query($con, $query)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                    " - " . mysqli_error($con));
            } else {
                //tampil alert dan akan redirect ke halaman news.php
                //silahkan ganti news.php sesuai halaman yang akan dituju
                echo "<script>alert('Data berhasil diubah.');window.location='news.php';</script>";
            }
        }
}
}
//$Page = $offset;
?>

<!-- <!doctype html> -->
<html lang="en">
<title>App TAM</title>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">



                    <div align="center" class="panel-heading">
                        <b>FORM Berita</b>
                    </div>
                    <div>
                        <div class="row row-centered">
                            <div align="center" class="col-md-4">
                            </div>
                        </div>
                        <div>
                            <?php
                            if ($_SESSION['jabatan'] != 'Agent TAM') {
                            ?>
                                <button class="btn btn-primary btn" style="margin: 20px 20px" data-toggle="modal" data-target="#formBeritaAdd">Tambah Data</button>
                            <?php
                            } else {
                                echo "<br><br>";
                            }
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="header">
                                            <h4 class="title" style="color:#008B8B">Data Berita</h4>
                                        </div>
                                        <div style="overflow-x:auto;">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">No.
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Tanggal
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Login
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Nama
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Judul
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Gambar
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">File (Klik Nama untuk download)
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Action
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $Page = $Page + 1;
                                                    $jml = 0;
                                                    //echo $query;
                                                    if ($_SESSION['jabatan'] == 'Agent TAM') {
                                                        $hasil = mysqli_query($con, $query_agent) or die("Query gagal!");
                                                    } else {
                                                        $hasil = mysqli_query($con, $query) or die("Query gagal!");
                                                    }
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        echo "<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
											<th align=\"center\" style=\"font-size:10px\">" . date("l, d F Y", strtotime($data['tanggal'])) . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['username'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['name'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">" . $data['judul'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\"><img src=\"uploads/" . $data['file'] . "\" width=\"150px\" height=\"150px\"></th>
                                            <th align=\"center\" style=\"font-size:10px\"><a href=\"file/" . $data['data'] . "\" style=\"text-decoration: none;color:black;\" /><strong>" . $data['data'] . "</strong></th>
                                            <th align=\"center\" style=\"font-size:10px\">";
                                                        if ($_SESSION['jabatan'] == 'Agent TAM') {
                                                            echo "<button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#formBeritaView" . $data['id'] . "\">Lihat</button>
                                            </th>
                                            ";
                                                        } else {
                                                            echo "<button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#formBeritaView" . $data['id'] . "\">Lihat</button>
                                                <button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#formBeritaEdit" . $data['id'] . "\">Update</button>
                                                <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#formBeritaDelete" . $data['id'] . "\">Delete</button>
                                            </th>
                                            ";
                                                        }
                                                    ?>


                                                        <!-- Modal Edit-->
                                                        <div class="modal fade" id="formBeritaEdit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Form Berita Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="news.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <?php
                                                                                $id = $data['id'];
                                                                                $tanggal = $data['tanggal'];
                                                                                ?>
                                                                                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>" required>
                                                                                <label for="username_login1">Username</label>
                                                                                <div class="form-group">
                                                                                    <input type="hidden" name="item-id1" id="item-id1">
                                                                                    <input type="text" name="username_login1" id="item-username1" class="form-control" value="<?= $login ?>" required readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Name</label>
                                                                                    <input type="text" class="form-control" name="name1" id="item-name1" value="<?= $nama ?>" required readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="tanggal">Tanggal</label>
                                                                                    <input type="date" class="form-control" name="tanggal_libur" id="tanggal" value="<?= $data['tanggal'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="judul">Judul</label>
                                                                                    <input type="text" class="form-control" name="judul" id="judul" value="<?= $data['judul'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="deskripsi">Deskripsi</label>
                                                                                    <textarea class="form-control" name="deskripsi" id="summernote" rows="10" required><?= $data['deskripsi'] ?></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="file">Gambar</label>
                                                                                    <input type="file" class="form-control" name="file" id="file" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="data">File</label>
                                                                                    <input type="file" class="form-control" name="data" id="data" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal View-->
                                                        <div class="modal fade" id="formBeritaView<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Form Lihat Berita</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="news.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <div class="form-group" style="text-align:;">
                                                                                <?php
                                                                                $id = $data['id'];
                                                                                $tanggal = $data['tanggal'];
                                                                                ?>
                                                                                <h2><?= strtoupper($data['judul']) ?></h2>
                                                                                <h6><?= date("l, d F Y", strtotime($data['tanggal'])) ?> | <?= $data['name'] ?></h6>
                                                                                <hr>
                                                                                <div>
                                                                                    <br>
                                                                                    <center><img src="uploads/<?= $data['file'] ?>" width="250px" height="250px"></center>
                                                                                </div>
                                                                                <div>
                                                                                    <br><br>
                                                                                    <p>
                                                                                        <center><?= $data['deskripsi'] ?></center>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal Delete-->
                                                        <div class="modal fade" id="formBeritaDelete<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Form Berita Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="news.php" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" class="form-control" name="id" id="id" value="<?=$data['id'] ?>" required>
                                                                            <h6 style="text-transform:capitalize;font-weight:normal;">Apakah Anda yakin menghapus data ini ?</h6>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Delete</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                        $Page = $Page + 1;
                                                    }

                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
                                        <table>
                                            <?php
                                            //$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
                                            //echo $query;
                                            //$hasil   = mysqli_query($con,$query);
                                            //$data    = mysqli_fetch_array($hasil);
                                            //$jumData = $data['jumData'];
                                            //$jumPage = ceil($jumData/$dataPerPage);
                                            //if ($noPage > 1) echo  "<td><a href='approve.php?page=".($noPage-1)."&site=$site'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
                                            //echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
                                            //if ($noPage < $jumPage)  echo "<td><a href='approve.php?page=".($noPage+1)."&site=$site'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> "; 
                                            //echo "</br><table><td><strong>Total Data : $jumData</strong></table></td>";

                                            ?>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tambah-->
<div class="modal fade" id="formBeritaAdd" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Berita Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="news.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                <div class="modal-body">
                    <div class="form-group">
                        <?php
                        $id = $data['id'];
                        $jabatan = $data['jabatan'];
                        ?>
                        <input type="hidden" class="form-control" name="id" id="id" required>
                        <label for="username_login1">Username</label>
                        <div class="form-group">
                            <input type="hidden" name="item-id1" id="item-id1">
                            <input type="text" name="username_login1" id="item-username1" class="form-control" value="<?= $login ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name1" id="item-name1" value="<?= $nama ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal_libur" id="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" required>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="summernote" name="deskripsi" id="deskripsi" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file">Gambar</label>
                            <input type="file" class="form-control" name="file" id="file" required>
                        </div>
                        <div class="form-group">
                            <label for="data">File</label>
                            <input type="file" class="form-control" name="data" id="data" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

</html>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    </script>
<?php require_once("../deft_foo.php"); ?>