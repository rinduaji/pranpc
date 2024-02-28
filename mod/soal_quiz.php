<?php
require_once("../deft_nav.php");
include("./assets/conn.php");
if ($_GET) {
    extract($_GET, EXTR_OVERWRITE);
}
if ($_POST) {
    extract($_POST, EXTR_OVERWRITE);
}

$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$area = $_SESSION["area"];
$lup1 = date("Y-m-d h:i:s");
print_r($save);

$tgl = date("Y-m-d");

if ($date != '') {
    $dt = explode("-", trim($date));
    $tgl = "$dt[2]-$dt[1]-$dt[0]";
}

$bulan = date("m", strtotime($tanggal));
$tahun = date("Y", strtotime($tanggal));
$month = date("m", strtotime($tgl));
$year = date("Y", strtotime($tgl));


if (isset($tanggal)) {
    $query = "SELECT * FROM app_tam_soal WHERE MONTH(lup) = '$bulan' AND YEAR(lup) = '$tahun'";
} else {
    $query = "SELECT * FROM app_tam_soal";
}    

if(isset($save)) {
    if ($id == "") {
        $query_insert = "INSERT INTO app_tam_soal (pertanyaan, jawab_a, jawab_b, jawab_c, jawab_d, kunci, jenis_soal, upd, lup, area) VALUES ('$pertanyaan', '$jawab_a', '$jawab_b', '$jawab_c', '$jawab_d', '$kunci', '$jenis_soal', '$username_login1', '$lup1', '$area1')";

        if (!mysqli_query($con, $query_insert)) {
            die("Query gagal dijalankan: " . mysqli_errno($con) .
            " - " . mysqli_error($con));
        } else {                
            echo "<script>alert('Data berhasil Disimpan.');window.location='soal_quiz.php';</script>";
        }
    }
    else {
        if($username_login1 == ''){
            $query_delete = "DELETE FROM app_tam_soal WHERE id_soal='$id'";
            if (!mysqli_query($con, $query_delete)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                        " - " . mysqli_error($con));
            } else {
                echo "<script>alert('Data berhasil dihapus.');window.location='soal_quiz.php';</script>";
            }
        }
        else {
            $query = "UPDATE app_tam_soal SET pertanyaan='$pertanyaan', jawab_a='$jawab_a', jawab_b='$jawab_b', jawab_c='$jawab_c', jawab_d='$jawab_d', kunci='$kunci', jenis_soal='$jenis_soal', upd='$username_login1', lup='$lup1', area='$area' WHERE id_soal='$id'";
            if (!mysqli_query($con, $query)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                        " - " . mysqli_error($con));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='soal_quiz.php';</script>";
            }
        }
    }
}
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
                        <b>FORM SOAL QUIZ</b>
                    </div>
                    <div>
                        <div class="row row-centered">
                            <div align="center" class="col-md-4">
                            </div>
                            <div align="center" class="col-md-4">
                                <form id='input' name="demoform" action='soal_quiz.php' method='post' accept-charset='UTF-8'>
                                    <tr>
                                    <tr>
                                        <div class="form-group">
                                            <label style="color:#008B8B">Bulan dan Tahun</label>
                                            <input class="form-control input-sm" type="month" name="tanggal">
                                        </div>
                                    </tr>
                                    <tr>
                                        <input name="search" type="submit" class="btn btn-danger" Value="Search">
                                    </tr>
                                    </tr>
                                </form>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary btn" style="margin: 20px 20px" data-toggle="modal" data-target="#formBeritaAdd">Tambah Data</button>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="header">
                                            <h4 class="title" style="color:#008B8B">Data Soal Quiz</h4>
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
                                                        <font color="red" face="Tahoma" size="2">Area
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Jenis Soal
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Pertanyaan
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Jawaban Pilihan A
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Jawaban Pilihan B
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Jawaban Pilihan C
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Jawaban Pilihan D
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Kunci
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Action
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $Page = 1;
                                                    $jml = 0;
                                                    //echo $query;
                                                    $hasil = mysqli_query($con, $query) or die("Query gagal!");
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        echo "<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
											<th align=\"center\" style=\"font-size:10px\">" . date("l, d F Y", strtotime($data['lup'])) . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['upd'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['area'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">" . $data['jenis_soal'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">" . $data['pertanyaan'] . "</th>
											<th align=\"center\" style=\"font-size:10px\">" . $data['jawab_a'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">" . $data['jawab_b'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">" . $data['jawab_c'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">" . $data['jawab_d'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">" . $data['kunci'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">
                                                <button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#formSoalEdit" . $data['id_soal'] . "\">Update</button>
                                                <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#formSoalDelete" . $data['id_soal'] . "\">Delete</button>
                                            </th>";

                                                    ?>
                                                    <div class="modal fade" id="formSoalEdit<?= $data['id_soal'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Form Soal Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="soal_quiz.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <?php
                                                                                $id = $data['id_soal'];
                                                                                $tanggal = $data['lup'];
                                                                                ?>
                                                                                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id; ?>" required>
                                                                                <div class="form-group">
                                                                                    <label for="username_login1">Username</label>
                                                                                    <input type="text" name="username_login1" id="item-username1" class="form-control" value="<?= $login ?>" required readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Name</label>
                                                                                    <input type="text" class="form-control" name="name1" id="item-name1" value="<?= $nama ?>" required readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="name">Area</label>
                                                                                    <input type="text" class="form-control" name="area1" id="item-name1" value="<?= $area ?>" required readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <input type="hidden" class="form-control" name="lup" id="lup" value="<?=$lup1?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="jenis_soal">Jenis Soal</label>
                                                                                    <select class="form-control" name="jenis_soal" id="jenis_soal" required>
                                                                                        <option value="">-- Pilih Jenis Soal --</option>
                                                                                    <?php 
                                                                                        $query_jenis = "SELECT * FROM app_tam_jenis WHERE aktif='1'";
                                                                                        $hasil_jenis = mysqli_query($con, $query_jenis) or die("Query gagal!");
                                                                                        while ($data_jenis = mysqli_fetch_array($hasil_jenis)) {
                                                                                    ?>
                                                                                            <option value="<?=$data_jenis['keterangan']?>"  <?=($data['jenis_soal'] == $data_jenis['keterangan']) ? 'selected' : ''?>><?=$data_jenis['keterangan']?></option>
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="pertanyaan">Pertanyaan</label>
                                                                                    <textarea class="form-control" id="summernote" name="pertanyaan" id="pertanyaan" rows="10" required><?=$data['pertanyaan']?></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="jawab_a">Jawaban A</label>
                                                                                    <input type="text" class="form-control" name="jawab_a" id="jawab_a" value="<?=$data['jawab_a']?>" required >
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="jawab_b">Jawaban B</label>
                                                                                    <input type="text" class="form-control" name="jawab_b" id="jawab_b" value="<?=$data['jawab_b']?>" required >
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="jawab_c">Jawaban C</label>
                                                                                    <input type="text" class="form-control" name="jawab_c" id="jawab_c" value="<?=$data['jawab_c']?>" required >
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="jawab_d">Jawaban D</label>
                                                                                    <input type="text" class="form-control" name="jawab_d" id="jawab_d" value="<?=$data['jawab_d']?>" required >
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="kunci">Kunci</label>
                                                                                    <select class="form-control" name="kunci" id="kunci" required >
                                                                                        <option value="">-- Pilih Kunci --</option>
                                                                                        <option value="A" <?=($data['kunci'] == 'A') ? 'selected' : ''?>>A</option>
                                                                                        <option value="B" <?=($data['kunci'] == 'B') ? 'selected' : ''?>>B</option>
                                                                                        <option value="C" <?=($data['kunci'] == 'C') ? 'selected' : ''?>>C</option>
                                                                                        <option value="D" <?=($data['kunci'] == 'D') ? 'selected' : ''?>>D</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary" name="save">Save</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal Delete-->
                                                        <div class="modal fade" id="formSoalDelete<?= $data['id_soal'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Form Berita Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="soal_quiz.php" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" class="form-control" name="id" id="id" value="<?=$data['id_soal'] ?>" required>
                                                                            <h6 style="text-transform:capitalize;font-weight:normal;">Apakah Anda yakin menghapus data ini ?</h6>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary" name="save">Delete</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    $Page++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Soal Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="soal_quiz.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                <div class="modal-body">
                    <div class="form-group">
                        <?php
                        $id = $data['id_soal'];
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
                            <label for="name">Area</label>
                            <input type="text" class="form-control" name="area1" id="item-name1" value="<?= $area ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="lup" id="lup" value="<?=$lup1?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_soal">Jenis Soal</label>
                            <select class="form-control" name="jenis_soal" id="jenis_soal" required>
                                <option value="">-- Pilih Jenis Soal --</option>
                            <?php 
                                $query_jenis = "SELECT * FROM app_tam_jenis WHERE aktif='1'";
                                $hasil_jenis = mysqli_query($con, $query_jenis) or die("Query gagal!");
                                while ($data_jenis = mysqli_fetch_array($hasil_jenis)) {
                            ?>
                                    <option value="<?=$data_jenis['keterangan']?>"><?=$data_jenis['keterangan']?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pertanyaan">Pertanyaan</label>
                            <textarea class="form-control" id="summernote" name="pertanyaan" id="pertanyaan" rows="10" required> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="jawab_a">Jawaban A</label>
                            <input type="text" class="form-control" name="jawab_a" id="jawab_a"required >
                        </div>
                        <div class="form-group">
                            <label for="jawab_b">Jawaban B</label>
                            <input type="text" class="form-control" name="jawab_b" id="jawab_b"required >
                        </div>
                        <div class="form-group">
                            <label for="jawab_c">Jawaban C</label>
                            <input type="text" class="form-control" name="jawab_c" id="jawab_c"required >
                        </div>
                        <div class="form-group">
                            <label for="jawab_d">Jawaban D</label>
                            <input type="text" class="form-control" name="jawab_d" id="jawab_d"required >
                        </div>
                        <div class="form-group">
                            <label for="kunci">Kunci</label>
                            <select class="form-control" name="kunci" id="kunci" required >
                                <option value="">-- Pilih Kunci --</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
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