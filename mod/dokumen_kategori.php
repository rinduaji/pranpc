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

if(isset($save)) {
    if ($id_kategori == "") {
        $query_insert = "INSERT INTO dokumen_kategori (nama_kategori, `status`) VALUES ('$nama_kategori', '$status')";

        if (!mysqli_query($con, $query_insert)) {
            die("Query gagal dijalankan: " . mysqli_errno($con) .
            " - " . mysqli_error($con));
        } else {                
            echo "<script>alert('Data berhasil Disimpan.');window.location='dokumen_kategori.php';</script>";
        }
    }
    else {
        if($aksi == 'delete'){
            $query_delete = "DELETE FROM dokumen_kategori WHERE id_kategori='$id_kategori'";
            if (!mysqli_query($con, $query_delete)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                        " - " . mysqli_error($con));
            } else {
                echo "<script>alert('Data berhasil dihapus.');window.location='dokumen_kategori.php';</script>";
            }
        }
        else {
            $query = "UPDATE dokumen_kategori SET nama_kategori='$nama_kategori', `status`='$status' WHERE id_kategori='$id_kategori'";
            if (!mysqli_query($con, $query)) {
                die("Query gagal dijalankan: " . mysqli_errno($con) .
                        " - " . mysqli_error($con));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='dokumen_kategori.php';</script>";
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
                        <b>DOKUMEN KATEGORI</b>
                    </div>
                    <div>
                        <div>
                            <button class="btn btn-primary btn" style="margin: 20px 20px" data-toggle="modal" data-target="#formBeritaAdd">Tambah Data</button>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <div class="header">
                                            <h4 class="title" style="color:#008B8B">DATA DOKUMEN KATEGORI</h4>
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
                                                    $query = "SELECT * FROM dokumen_kategori";
                                                    $hasil = mysqli_query($con, $query) or die("Query gagal!");
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        echo "<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['nama_kategori'] . "</th>
                                                        <th align=\"center\" style=\"font-size:10px\">" . $data['status'] . "</th>
                                            <th align=\"center\" style=\"font-size:10px\">
                                                <button class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#formSoalEdit" . $data['id_kategori'] . "\">Update</button>
                                                <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#formSoalDelete" . $data['id_kategori'] . "\">Delete</button>
                                            </th>";

                                                    ?>
                                                    <div class="modal fade" id="formSoalEdit<?= $data['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Dokumen Kategori Edit</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="dokumen_kategori.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <?php
                                                                                $id_kategori = $data['id_kategori'];
                                                                                ?>
                                                                                
                                                                                <input type="hidden" class="form-control" name="aksi" id="aksi" value="edit" required>
                                                                                <input type="hidden" class="form-control" name="id_kategori" id="id_kategori" value="<?php echo $id_kategori; ?>" required>
                                                                                <div class="form-group">
                                                                                    <label for="nama_kategori">Nama Kategori</label>
                                                                                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="<?= $data['nama_kategori']; ?>" required>
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
                                                        <div class="modal fade" id="formSoalDelete<?= $data['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="Form Berita" aria-hidden="true" data-backdrop="false">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Dokumen Kategori Delete</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="dokumen_kategori.php" method="POST" id="FormRekom_qa">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" class="form-control" name="aksi" id="aksi" value="delete" required>
                                                                            <input type="hidden" class="form-control" name="id_kategori" id="id_kategori" value="<?=$data['id_kategori'] ?>" required>
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
                <h5 class="modal-title" id="exampleModalLabel">Dokumen Kategori Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="dokumen_kategori.php" enctype="multipart/form-data" method="POST" id="FormRekom_qa">
                <div class="modal-body">
                    <div class="form-group">
                        <?php
                        $id_kategori = $data['id_kategori'];
                        ?>
                        <input type="hidden" class="form-control" name="id_kategori" id="id_kategori" value="<?=$id_kategori?>" required>
                        <label for="nama_kategori">Nama Kategori</label>
                        <div class="form-group">
                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="<?= $data['nama_kategori']; ?>" required>
                        </div>
                                                                                <div class="form-group">
                                                                                    <label for="status">Status</label>
                                                                                    <select class="form-control" name="status" id="status" required>
                                                                                        <option value="">-- Pilih Status --</option>
                                                                                        <option value="AKTIF" <?=($data['status']=='AKTIF')? 'selected': '' ?> >AKTIF</option>
                                                                                        <option value="NON AKTIF" <?=($data['status']=='NON AKTIF')? 'selected': '' ?> >NON AKTIF</option>
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