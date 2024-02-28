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

$file_dokumen = $_FILES['file_dokumen']['name'];
//cek dulu jika ada gambar dokumen_upload jalankan coding ini

$query_site = "SELECT * FROM cc147_main_users a INNER JOIN cc147_main_users_extended b ON a.username=b.user1 WHERE b.user1='$login'";
$hasil_site = mysqli_query($con, $query_site) or die("Query gagal!");


    $query = "SELECT a.id_dokumen, a.judul_dokumen, a.file_dokumen, a.id_item, a.deskripsi, a.kode_dokumen, a.tanggal_berlaku, a.tanggal_verifikasi, b.nama_item, b.id_kategori, c.nama_kategori FROM dokumen_upload as a , dokumen_item as b, dokumen_kategori as c WHERE a.id_item=b.id_item AND b.id_kategori=c.id_kategori AND c.`status` = 'AKTIF' AND b.`status` = 'AKTIF' order by a.judul_dokumen, c.nama_kategori, b.nama_item ASC";
    
//    print_r($aksi);       

if($aksi== "tambah") {
             if($file_dokumen != ""){
                    
                $ekstensi_diperbolehkan_data = array('doc', 'docx', 'xls', 'xlsx','pdf'); //ekstensi file gambar yang bisa diupload 
                $x_data = explode('.', $file_dokumen); //memisahkan nama file dengan ekstensi yang diupload
                $ekstensi_data = strtolower(end($x_data));
                $data_tmp_data = $_FILES['file_dokumen']['tmp_name'];
                $angka_acak_data     = rand(1, 999);
                $nama_data_baru = $angka_acak_data . '-' . $file_dokumen; //menggabungkan angka acak dengan nama file sebenarnya
                // print_r($nama_data_baru);
                if (in_array($ekstensi_data, $ekstensi_diperbolehkan_data) === true) {
                    move_uploaded_file($data_tmp_data, 'file_document_control/' . $nama_data_baru); //memindah file gambar ke folder gambar
                    $query_insert = "INSERT INTO dokumen_upload (judul_dokumen, id_item, deskripsi, kode_dokumen, tanggal_berlaku, tanggal_verifikasi, file_dokumen) VALUES ('$judul_dokumen', '$id_item', '$deskripsi', '$kode_dokumen', '$tanggal_berlaku', '$tanggal_verifikasi', '$nama_data_baru')";
                    // print_r($query_insert);
                    // die();
                    if (!mysqli_query($con, $query_insert)) {
                        die("Query gagal dijalankan: " . mysqli_errno($con) .
                            " - " . mysqli_error($con));
                    } else {
                        //tampil alert dan akan redirect ke halaman dokumen_upload.php
                        //silahkan ganti dokumen_upload.php sesuai halaman yang akan dituju
                        echo "<script>alert('Data berhasil disimpan Berserta File ditambah.');window.location='dokumen_upload.php';</script>";
                    }
                }
            }
            else {
                $query_insert = "INSERT INTO dokumen_upload (judul_dokumen, id_item, deskripsi, kode_dokumen, tanggal_berlaku, tanggal_verifikasi) VALUES ('$judul_dokumen', '$id_item', '$deskripsi', '$kode_dokumen', '$tanggal_berlaku', '$tanggal_verifikasi')";

                // periska query apakah ada error
                if (!mysqli_query($con, $query)) {
                    die("Query gagal dijalankan: " . mysqli_errno($con) .
                        " - " . mysqli_error($con));
                } else {
                    //tampil alert dan akan redirect ke halaman dokumen_upload.php
                    //silahkan ganti dokumen_upload.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil disimpan.');window.location='dokumen_upload.php';</script>";
                }
            }
}
else {
    if($aksi == 'delete'){
        $query_delete = "DELETE FROM dokumen_upload WHERE id_dokumen='$id_dokumen'";
        // mysqli_query($con, $query_delete);
        if (!mysqli_query($con, $query_delete)) {
            die("Query gagal dijalankan: " . mysqli_errno($con) .
                    " - " . mysqli_error($con));
        } else {
            //tampil alert dan akan redirect ke halaman dokumen_upload.php
            //silahkan ganti dokumen_upload.php sesuai halaman yang akan dituju
            unlink('file_document_control/' . $nama_file);
            echo "<script>alert('Data berhasil dihapus.');window.location='dokumen_upload.php';</script>";
        }
    }
    else if($aksi == 'edit'){
                if($file_dokumen != ""){
 
                    $ekstensi_diperbolehkan_data = array('doc', 'docx', 'xls', 'xlsx','pdf', 'pptx', 'ppt'); //ekstensi file gambar yang bisa diupload 
                    $x_data = explode('.', $file_dokumen); //memisahkan nama file dengan ekstensi yang diupload
                    $ekstensi_data = strtolower(end($x_data));
                    $data_tmp_data = $_FILES['file_dokumen']['tmp_name'];
                    $angka_acak_data     = rand(1, 999);
                    $nama_data_baru = $angka_acak_data . '-' . $file_dokumen; //menggabungkan angka acak dengan nama file sebenarnya
                    
                    if (in_array($ekstensi_data, $ekstensi_diperbolehkan_data) === true) {
                        unlink('file_document_control/' . $nama_file);
                        move_uploaded_file($data_tmp_data, 'file_document_control/' . $nama_data_baru); //memindah file gambar ke folder gambar
                   
                        $query_update = "UPDATE dokumen_upload SET judul_dokumen='$judul_dokumen', deskripsi='$deskripsi', id_item='$id_item', tanggal_verifikasi='$tanggal_verifikasi', tanggal_berlaku='$tanggal_berlaku', file_dokumen='$nama_data_baru' WHERE id_dokumen='$id_dokumen'";
                        if (!mysqli_query($con, $query_update)) {
                            die("Query gagal dijalankan: " . mysqli_errno($con) .
                                    " - " . mysqli_error($con));
                        } else {
                            //tampil alert dan akan redirect ke halaman dokumen_upload.php
                            //silahkan ganti dokumen_upload.php sesuai halaman yang akan dituju
                            echo "<script>alert('Pengubahan Data berhasil disimpan berserta file.');window.location='dokumen_upload.php';</script>";
                        }
                    }
                }
                else {
                    
                    $query = "UPDATE dokumen_upload SET judul_dokumen='$judul_dokumen', deskripsi='$deskripsi', id_item='$id_item', tanggal_verifikasi='$tanggal_verifikasi', tanggal_berlaku='$tanggal_berlaku' WHERE id_dokumen='$id_dokumen'";
                    if (!mysqli_query($con, $query_update)) {
                        die("Query gagal dijalankan: " . mysqli_errno($con) .
                            " - " . mysqli_error($con));
                    } else {
                        //tampil alert dan akan redirect ke halaman dokumen_upload.php
                        //silahkan ganti dokumen_upload.php sesuai halaman yang akan dituju
                        echo "<script>alert('Pengubahan Data berhasil.');window.location='dokumen_upload.php';</script>";
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
                        <b>Dokumen Upload</b>
                    </div>
                    <div>
                        <div class="row row-centered">
                            <button class="btn btn-primary btn" style="margin: 20px 20px" data-toggle="modal" data-target="#formBeritaAdd">Tambah Data</button>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="header">
                                            <h4 class="title" style="color:#008B8B">Data Dokumen Upload</h4>
                                        </div>
                                        <div style="overflow-x:auto;">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">No.
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Nama Kategori
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Nama Item
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Judul Dokumen
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Deskripsi
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Kode Dokumen
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Tanggal Berlaku
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Tanggal Verifikasi
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Nama File Dokumen
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
                                                    // if ($_SESSION['jabatan'] == 'Agent TAM') {
                                                    //     $hasil = mysqli_query($con, $query_agent) or die("Query gagal!");
                                                    // } else {
                                                        $hasil = mysqli_query($con, $query) or die("Query gagal!");
                                                    // }
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        echo "<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['nama_kategori'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['nama_item'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['judul_dokumen'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['deskripsi'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['kode_dokumen'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['tanggal_berlaku'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['tanggal_verifikasi'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\"><a href=\"file_document_control/" . $data['file_dokumen'] . "\" class=\"btn btn-info\" /><strong>" . $data['file_dokumen'] . "</strong></a></th>
                                                        <th align=\"center\" style=\"font-size:10px\">";
                                            //             if ($_SESSION['jabatan'] == 'Agent TAM') {
                                            //                 echo "<button class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#formBeritaView" . $data['id_dokumen'] . "\">Lihat</button>
                                            // </th>
                                            // ";
                                            //             } else {
                                                            echo "<button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#formBeritaEdit" . $data['id_dokumen'] . "\">Update</button>
                                                <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#formBeritaDelete" . $data['id_dokumen'] . "\">Delete</button>
                                            </th>
                                            ";
                                                        // }
                                                    ?>


                                                        <!-- Modal Edit-->
                                                        <div class="modal fade" id="formBeritaEdit<?= $data['id_dokumen'] ?>" tabindex="-1" role="dialog" aria-labelledby="Dokumen Upload" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Dokumen Upload Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="dokumen_upload.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <?php
                                                                                $id_dokumen = $data['id_dokumen'];
                                                                                ?>
                                                                                <input type="hidden" class="form-control" name="id_dokumen" id="id_dokumen" value="<?php echo $id_dokumen; ?>" required>
                                                                                <input type="hidden" class="form-control" name="aksi" id="aksi" value="edit" required>
                                                                                <input type="hidden" class="form-control" name="nama_file" id="nama_file" value="<?=$data['file_dokumen']?>" required>
                                                                                <div class="form-group">
                                                                                    <label for="id_item">Kategori dan Item Dokumen</label>    
                                                                                    <select class="form-control" name="id_item" id="id_item" required>
                                                                                    <option value="">-- Pilih Kategori dan Item Dokumen --</option>
                                                                                    <?php
                                                                                    $query_item = "SELECT a.id_kategori, a.nama_kategori, b.id_item, b.nama_item, b.`status` FROM dokumen_kategori as a INNER JOIN dokumen_item as b ON a.id_kategori = b.id_kategori WHERE b.`status` = 'AKTIF' ORDER BY id_kategori, nama_item ASC";
                                                                                    $hasil_item = mysqli_query($con, $query_item) or die("Query gagal!");
                                                                                    while ($data_item = mysqli_fetch_array($hasil_item)) {
                                                                                    ?>
                                                                                        <option value="<?=$data_item['id_item']?>" <?=($data['id_item'] == $data_item['id_item']) ? 'selected' : '' ?>><?=$data_item['nama_kategori']?> | <?=$data_item['nama_item']?></option>
                                                                                    <?php
                                                                                    }
                                                                                    ?>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="judul_dokumen">Judul_dokumen Dokumen</label>
                                                                                    <input type="text" class="form-control" name="judul_dokumen" id="judul_dokumen" value="<?= $data['judul_dokumen'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="deskripsi">Deskripsi</label>
                                                                                    <textarea class="form-control" name="deskripsi" id="summernote" rows="10" required><?= $data['deskripsi'] ?></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="kode_dokumen">Kode Dokumen</label>
                                                                                    <input type="text" class="form-control" name="kode_dokumen" id="kode_dokumen" value="<?= $data['kode_dokumen'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="tanggal_berlaku">Tanggal Berlaku</label>
                                                                                    <input type="date" class="form-control" name="tanggal_berlaku" id="tanggal_berlaku" value="<?= $data['tanggal_berlaku'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="tanggal_verifikasi">Tanggal Verifikasi</label>
                                                                                    <input type="date" class="form-control" name="tanggal_verifikasi" id="tanggal_verifikasi" value="<?= $data['tanggal_verifikasi'] ?>" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="file_dokumen">File</label>
                                                                                    <input type="file" class="form-control" name="file_dokumen" id="file_dokumen" required>
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

                                                        <!-- Modal Delete-->
                                                        <div class="modal fade" id="formBeritaDelete<?= $data['id_dokumen'] ?>" tabindex="-1" role="dialog" aria-labelledby="Dokumen Upload" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Dokumen Upload Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="dokumen_upload.php" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" class="form-control" name="id_dokumen" id="id_dokumen" value="<?=$data['id_dokumen'] ?>" required>
                                                                            <input type="hidden" class="form-control" name="aksi" id="aksi" value="delete" required>
                                                                            <input type="hidden" class="form-control" name="nama_file" id="nama_file" value="<?=$data['file_dokumen']?>" required>
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
<div class="modal fade" id="formBeritaAdd" tabindex="-1" role="dialog" aria-labelledby="Dokumen Upload" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dokumen Upload Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="dokumen_upload.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                <div class="modal-body">
                    <div class="form-group">
                        <?php
                        $id_dokumen = $data['id_dokumen'];
                        ?>
                        <input type="hidden" class="form-control" name="id_dokumen" id="id_dokumen" required>
                        <input type="hidden" class="form-control" name="aksi" id="aksi" value="tambah" required>
                        <div class="form-group">
                            <label for="id_item">Kategori dan Item Dokumen</label>    
                            <select class="form-control" name="id_item" id="id_item" required>
                            <option value="">-- Pilih Kategori dan Item Dokumen --</option>
                            <?php
                            $query_item = "SELECT a.id_kategori, a.nama_kategori, b.id_item, b.nama_item, b.`status` FROM dokumen_kategori as a INNER JOIN dokumen_item as b ON a.id_kategori = b.id_kategori WHERE b.`status` = 'AKTIF' ORDER BY id_kategori, nama_item ASC";
                            $hasil_item = mysqli_query($con, $query_item) or die("Query gagal!");
                            while ($data_item = mysqli_fetch_array($hasil_item)) {
                            ?>
                                <option value="<?=$data_item['id_item']?>"><?=$data_item['nama_kategori']?> | <?=$data_item['nama_item']?></option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="judul_dokumen">Judul_dokumen Dokumen</label>
                            <input type="text" class="form-control" name="judul_dokumen" id="judul_dokumen" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="summernote" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kode_dokumen">Kode Dokumen</label>
                            <input type="text" class="form-control" name="kode_dokumen" id="kode_dokumen" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_berlaku">Tanggal Berlaku</label>
                            <input type="date" class="form-control" name="tanggal_berlaku" id="tanggal_berlaku" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_verifikasi">Tanggal Verifikasi</label>
                            <input type="date" class="form-control" name="tanggal_verifikasi" id="tanggal_verifikasi" required>
                        </div>
                        <div class="form-group">
                            <label for="file_dokumen">File</label>
                            <input type="file" class="form-control" name="file_dokumen" id="file_dokumen" required>
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