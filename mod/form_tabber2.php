<?php
require_once("../deft_nav.php");
include("../assets/conn.php");
if ($_GET) {
    extract($_GET, EXTR_OVERWRITE);
}
if ($_POST) {
    extract($_POST, EXTR_OVERWRITE);
}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$ids = $id;
$not_handel = 0;
$tgl = date("Y-m-d H:i:s");

$query = "SELECT a.id,a.tgl,a.login,a.no_pelanggan,a.fastel,a.nama_dm,a.tlp,a.reg,a.jenis,a.`status`,a.kategori,a.reason,a.segment,a.relasi,a.penerima,a.ket,
a.follow,a.upd_qco,a.rec_qco,a.upd_tl,a.rec_tl,a.upd_suport,a.rec_suport,a.tgl_qco1,a.tgl_tl,a.tgl_suport,a.valid,a.input,a.prof_hp,a.prof_email,a.prof_ttl,
a.prof_hoby,a.prof_agama,a.prof_facebook,a.add_on_tsel,a.zone,a.add_on_wifi,b.`name`,c.poin
FROM app_tam_data2 AS a INNER JOIN cc147_main_users AS b ON a.login = b.username INNER JOIN app_tam_jenis AS c ON a.jenis = c.keterangan WHERE a.id = '$id'";
//echo $query;
$hasil = mysqli_query($con, $query);
$data = mysqli_fetch_array($hasil);
//==============================cek handel=================================
//if($jb=="Tabber"){
//$N_taber="SELECT count(*) as jml FROM app_tam_data2 WHERE follow ='2' and `upd_qco` = '$login'";
//$Ne_taber=mysqli_query($con,$N_taber);
//$h_taber=mysqli_fetch_row($Ne_taber);
//}
//if ($h_taber[0] > 60 && $data['upd_qco']==""){
//clearstatcache();
//$location="form_tabber.php?id=$ids";		
//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
//echo "<div class=\"alert alert-danger\">Anda Melebihi Batas Aproval!</div>";
//}
//else 
if ($data['upd_qco'] <> "" && $data['upd_qco'] <> $login) {
    //clearstatcache();
    $location = "form_tabber2.php";
    //echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
    echo "<div class=\"alert alert-danger\">Approval ini sudah di handel $data[upd_qco]</div>";

    $not_handel = 1;
} else if ($login == '') {
    //clearstatcache();
    $location = "form_tabber2.php";
    //echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
    echo "<div class=\"alert alert-danger\">Session user terlogout</div>";

    $not_handel = 1;
} else {
    if ($login <> '') {
        $sql = "UPDATE `app_tam_data2` SET upd_qco='$login' WHERE `id`='$ids'";
        $query = mysqli_query($con, $sql);
    }
}


if (isset($_POST['Save'])) {
    if ($rec_qco == "" OR $penanggung_jawab == "" OR $pernyataan == "" OR $penawaran == "" OR $kontrak == "" OR $rekaman == "" OR $lain == "") {
        clearstatcache();
        $location = "form_tabber2.php?id=$ids";
        echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
        echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
    } else {
        $pn = "$data[poin]";
        if ($penanggung_jawab == "Not Ok" OR $pernyataan == "Not Ok" OR $penawaran == "Not Ok" OR $kontrak == "Not Ok" 
        OR $rekaman == "Not Ok" OR $lain == "Not Ok") {
            var_dump($penanggung_jawab.' '.$pernyataan.' '.$penawaran.' '.$kontrak.' '.$rekaman.' '.$lain);
            $sql = "UPDATE `app_tam_data2` SET follow = '5' , `rec_qco`='$rec_qco', upd_qco='$login' , tgl_qco1='$tgl' , valid='Not Valid', prof_hp='$pn' WHERE `id`='$ids'";
            $query = mysqli_query($con, $sql);

            $sql1 = "INSERT INTO `app_tam_data_trans` (tgl, login, no_pelanggan, fastel, nama_dm, tlp, reg, jenis, status, kategori, reason, segment, relasi, 
                penerima, ket, follow, upd_qco, rec_qco, upd_tl, rec_tl, upd_suport, rec_suport, tgl_qco1, tgl_tl,tgl_suport, valid, input, prof_agama, 
                prof_facebook, add_on_tsel, penanggung_jawab, penawaran, pernyataan, kontrak, rekaman, lain, id_data2, prof_hp) VALUES 
                ('" . $data['tgl'] . "', '" . $data['login'] . "', '" . $data['no_pelanggan'] . "', '" . $data['fastel'] . "', '" . $data['nama_dm'] . "', '"
                . $data['tlp'] . "', '" . $data['reg'] . "', '" . $data['jenis'] . "', '" . $data['status'] . "', '" . $data['kategori'] . "', '" . $data['reason'] . "', '"
                . $data['segment'] . "', '" . $data['relasi'] . "', '" . $data['penerima'] . "', '" . $data['ket'] . "', '5', '$login', '$rec_qco', '" . $data['upd_tl'] . "', '"
                . $data['rec_tl'] . "', '" . $data['upd_suport'] . "', '" . $data['rec_suport'] . "', '$tgl', '" . $data['tgl_tl'] . "', '"
                . $data['tgl_suport'] . "', 'Not Valid', '" . $data['input'] . "', '" . $data['prof_agama'] . "', '"
                . $data['prof_facebook'] . "', '" . $data['add_on_tsel'] . "', '$penanggung_jawab', '$penawaran', '$pernyataan', '$kontrak', '$rekaman', '$lain', 
                '$ids', '$pn')";
            $query1 = mysqli_query($con, $sql1);

            clearstatcache();
            $location = "myhandel.php";
            echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
        } else {
            $sql = "UPDATE `app_tam_data2` SET follow = '6' , `rec_qco`='$rec_qco', upd_qco='$login' , tgl_qco1='$tgl' , valid='Valid', prof_hp='$pn' WHERE `id`='$ids'";
            $query = mysqli_query($con, $sql);

            $sql1 = "INSERT INTO `app_tam_data_trans` (tgl, login, no_pelanggan, fastel, nama_dm, tlp, reg, jenis, status, kategori, reason, segment, relasi, 
                penerima, ket, follow, upd_qco, rec_qco, upd_tl, rec_tl, upd_suport, rec_suport, tgl_qco1, tgl_tl,tgl_suport, valid, input, prof_agama, 
                prof_facebook, add_on_tsel, penanggung_jawab, penawaran, pernyataan, kontrak, rekaman, lain, id_data2, prof_hp) VALUES 
                ('" . $data['tgl'] . "', '" . $data['login'] . "', '" . $data['no_pelanggan'] . "', '" . $data['fastel'] . "', '" . $data['nama_dm'] . "', '"
                . $data['tlp'] . "', '" . $data['reg'] . "', '" . $data['jenis'] . "', '" . $data['status'] . "', '" . $data['kategori'] . "', '" . $data['reason'] . "', '"
                . $data['segment'] . "', '" . $data['relasi'] . "', '" . $data['penerima'] . "', '" . $data['ket'] . "', '6', '$login', '$rec_qco', '" . $data['upd_tl'] . "', '"
                . $data['rec_tl'] . "', '" . $data['upd_suport'] . "', '" . $data['rec_suport'] . "', '$tgl', '" . $data['tgl_tl'] . "', '"
                . $data['tgl_suport'] . "', 'Valid', '" . $data['input'] . "', '" . $data['prof_agama'] . "', '"
                . $data['prof_facebook'] . "', '" . $data['add_on_tsel'] . "', '$penanggung_jawab', '$penawaran', '$pernyataan', '$kontrak', '$rekaman', '$lain', 
                '$ids', '$pn')";
            $query1 = mysqli_query($con, $sql1);

            clearstatcache();
            $location = "myhandel.php";
            echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<title>App PRA NPC</title>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="header">
                        <h4 class="title">Form QCO </h4>
                    </div>

                    <form id='input' name="demoform" action='form_tabber2.php?id=<?php echo "$ids"; ?>' method='post' accept-charset='UTF-8'>
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Login Agent</label><br>
                                        <input class="form-control" type="text" name="login" value="<?php echo $data['login']; ?>" readonly />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Nama Agent</label><br>
                                        <input class="form-control" type="text" name="login" value="<?php echo $data['name']; ?>" readonly />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Tanggal</label><br>
                                        <input class="form-control" type="text" name="tgl" value="<?php echo $data['tgl']; ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">No Pelanggan</label><br>
                                        <input class="form-control" type="text" name="pelanggan" value="<?php echo $data['no_pelanggan']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">No Fastel</label>
                                        <input class="form-control" type="text" name="fastel" value="<?php echo $data['fastel']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Nama DM/Pemilik</label>
                                        <input class="form-control" type="text" name="nama_dm" value="<?php echo $data['nama_dm']; ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">No Telepon</label>
                                        <input class="form-control" type="text" name="tlp" value="<?php echo $data['tlp']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Regional</label>
                                        <input class="form-control" type="text" name="reg" value="<?php echo $data['reg']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Jenis Call / Poin</label>
                                        <input class="form-control" type="text" name="jenis" value="<?php echo $data['jenis'];
                                                                                                    echo ' / ';
                                                                                                    echo $data['poin']; ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Status call</label>
                                        <input class="form-control" type="text" name="status" value="<?php echo $data['status']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Kategori</label>
                                        <input class="form-control" type="text" name="kategori" value="<?php echo $data['kategori']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">Reason Call</label>
                                        <input class="form-control" type="text" name="reason" value="<?php echo $data['reason']; ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" style="color:#008B8B">Keterangan Agent</label>
                                    <textarea class="form-control" name="ket" rows="5"><?php echo $data['ket']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" style="color:#008B8B">Rekomendasi QCO</label>
                                    <textarea class="form-control" name="rec_qco" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Penanggung Jawab</label>
                                        <select class="form-control" name="penanggung_jawab" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Penawaran dan Caring</label>
                                        <select class="form-control" name="penawaran" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Pernyataan Kejadian</label>
                                        <select class="form-control" name="pernyataan" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Disclaimer atau Kontrak</label>
                                        <select class="form-control" name="kontrak" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Rekaman</label>
                                        <select class="form-control" name="rekaman" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Lain - lain (Isolir atau salah No. Fastel)</label>
                                        <select class="form-control" name="lain" style="width: 25%">
                                            <option value="">--- Pilihan ---</option>
                                            <option value="Ok">Ok</option>
                                            <option value="Not Ok">Not Ok</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <?php if ($not_handel == 1 or $login == '') {
                ?><a href="http://localhost/apptam/mod/approve.php">
                        <input type="button" value="Back" />
                    </a><?php
                    } else if ($not_handel == 0 or $login <> '') {
                        ?>
                    <input type="submit" name="Save" class="btn btn-info" value="Save">
                    <input type="reset" name="reset" class="btn btn-info" value="reset">
                <?php } ?>

                </form>

            </div>
        </div>

    </div>
</div>
</div>
<?php require_once("../deft_foo.php"); ?>