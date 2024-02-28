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

$month = date("m", strtotime($tgl));
$year = date("Y", strtotime($tgl));

if(isset($save)) {
    if ($id_item == "") {
        $query_insert = "INSERT INTO dokumen_item (nama_item, id_kategori, `status`) VALUES ('$nama_item', '$id_kategori', '$status')";
        // print_r($query_insert);
        if (!mysqli_query($con, $query_insert)) {
            die("Query gagal dijalankan: " . mysqli_errno($con) .
            " - " . mysqli_error($con));
        } else {                
            echo "<script>alert('Data berhasil Disimpan.');window.location='dokumen_item.php';</script>";
        }
    }
    else {
        if($aksi == 'delete'){
            $query_delete = "DELETE FROM dokumen_item WHERE id_item='$id_item'";
            if (!mysqli_query($con, $query_delete)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                        " - " . mysqli_error($con));
            } else {
                echo "<script>alert('Data berhasil dihapus.');window.location='dokumen_item.php';</script>";
            }
        }
        else {
            $query = "UPDATE dokumen_item SET nama_item='$nama_item', id_kategori='$id_kategori', `status`='$status' WHERE id_item='$id_item'";
            if (!mysqli_query($con, $query)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                        " - " . mysqli_error($con));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='dokumen_item.php';</script>";
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
                        <b>DOKUMEN ITEM</b>
                    </div>
                    <div>
                        <div>
                            <button class="btn btn-primary btn" style="margin: 20px 20px" data-toggle="modal" data-target="#formBeritaAdd">Tambah Data</button>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="header">
                                            <h4 class="title" style="color:#008B8B">Data Dokumen Item</h4>
                                        </div>
                                        <div style="overflow-x:auto;">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">NO
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Nama Kategori
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Nama Item
                                                    </th>
                                                    <th align="center">
                                                        <font color="red" face="Tahoma" size="2">Status
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
                                                    $query = "SELECT a.id_kategori, a.nama_kategori, b.id_item, b.nama_item, b.`status` FROM dokumen_kategori as a INNER JOIN dokumen_item as b ON a.id_kategori = b.id_kategori WHERE b.`status` = 'AKTIF' ORDER BY id_kategori, nama_item ASC";
                                                    $hasil = mysqli_query($con, $query) or die("Query gagal!");
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        echo "<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['nama_kategori'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['nama_item'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['status'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">
                                                <button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#formSoalEdit" . $data['id_item'] . "\">Update</button>
                                                <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#formSoalDelete" . $data['id_item'] . "\">Delete</button>
                                            </th>";

                                                    ?>
                                                    <div class="modal fade" id="formSoalEdit<?= $data['id_item'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Dokumen Item Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="dokumen_item.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <?php
                                                                                $id_item = $data['id_item'];
                                                                                ?>
                                                                                <input type="hidden" class="form-control" name="aksi" id="aksi" value="edit" required>
                                                                                <input type="hidden" class="form-control" name="id_item" id="id_item" value="<?php echo $id_item; ?>" required>
                                                                                <div class="form-group">
                                                                                    <label for="id_kategori">Nama Kategori</label>
                                                                                    <select class="form-control" name="id_kategori" id="id_kategori" required>
                                                                                        <option value="">-- Pilih Nama Kategori --</option>
                                                                                    <?php 
                                                                                        $query_jenis = "SELECT id_kategori, nama_kategori FROM dokumen_kategori WHERE `status`='AKTIF' ORDER BY nama_kategori ASC";
                                                                                        $hasil_jenis = mysqli_query($con, $query_jenis) or die("Query gagal!");
                                                                                        while ($data_jenis = mysqli_fetch_array($hasil_jenis)) {
                                                                                    ?>
                                                                                            <option value="<?=$data_jenis['id_kategori']?>" <?=($data['id_kategori'] == $data_jenis['id_kategori']) ? 'selected' : '' ?>><?=$data_jenis['nama_kategori']?></option>
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                    </select>
                                                                                </div>
                                                                                <label for="nama_item">Nama Item</label>
                                                                                <div class="form-group">
                                                                                    <input type="text" name="nama_item" id="nama_item" class="form-control" value="<?=$data['nama_item']?>" required>
                                                                                </div>
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="status">Status</label>
                                                                                    <select class="form-control" name="status" id="status" required>
                                                                                        <option value="">-- Pilih Status --</option>
                                                                                        <option value="AKTIF" <?=($data['status']=='AKTIF')? 'selected': '' ?>>AKTIF</option>
                                                                                        <option value="NON AKTIF" <?=($data['status']=='NON AKTIF')? 'selected': '' ?>>NON AKTIF</option>
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
                                                        <div class="modal fade" id="formSoalDelete<?= $data['id_item'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Dokumen Item Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="dokumen_item.php" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" class="form-control" name="aksi" id="aksi" value="delete" required>
                                                                            <input type="hidden" class="form-control" name="id_item" id="id_item" value="<?=$data['id_item'] ?>" required>
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
                <h5 class="modal-title" id="exampleModalLabel">Dokumen Item Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="dokumen_item.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                <div class="modal-body">
                    <div class="form-group">
                        <?php
                        $id_item = $data['id_item'];
                        ?>
                        <input type="hidden" class="form-control" name="id_item" id="id_item" required>
                        <div class="form-group">
                                                                                    <label for="id_kategori">Nama Kategori</label>
                                                                                    <select class="form-control" name="id_kategori" id="id_kategori" required>
                                                                                        <option value="">-- Pilih Nama Kategori --</option>
                                                                                    <?php 
                                                                                        $query_jenis = "SELECT id_kategori, nama_kategori FROM dokumen_kategori WHERE `status`='AKTIF' ORDER BY nama_kategori ASC";
                                                                                        $hasil_jenis = mysqli_query($con, $query_jenis) or die("Query gagal!");
                                                                                        while ($data_jenis = mysqli_fetch_array($hasil_jenis)) {
                                                                                    ?>
                                                                                            <option value="<?=$data_jenis['id_kategori']?>"><?=$data_jenis['nama_kategori']?></option>
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                    </select>
                                                                                </div>
                        <label for="nama_item">Nama Item</label>
                        <div class="form-group">
                            <input type="text" name="nama_item" id="nama_item" class="form-control" value="" required>
                        </div>
                                                                                
                                                                                <div class="form-group">
                                                                                    <label for="status">Status</label>
                                                                                    <select class="form-control" name="status" id="status" required>
                                                                                        <option value="">-- Pilih Status --</option>
                                                                                        <option value="AKTIF" <?=($data['status']=='AKTIF')? 'selected': '' ?>>AKTIF</option>
                                                                                        <option value="NON AKTIF" <?=($data['status']=='NON AKTIF')? 'selected': '' ?>>NON AKTIF</option>
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