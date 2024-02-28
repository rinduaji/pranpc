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
$area = $_SESSION['area'];
$nama = $_SESSION['name'];
$upd_qco = $_SESSION['upd_qco'];
$tgl = date("Y-m-d H:i:s");
$tanggal_sekarang = date("Y-m-d");
$location = "list_follow_profilling.php";
// $login_qco = NULL;
$query_qco = mysqli_query($con, "SELECT qco FROM cc147_main_users WHERE `username`='$login_user_qco'");
while ($data_qco = mysqli_fetch_row($query_qco)) {
	$login_qco = $data_qco[0];
}


$query="SELECT * FROM app_tam_profilling WHERE id='$id'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_array($hasil);

if(isset($no_call)) {
	if($no_call == 'TIDAK BISA DI CALL') {
		$no_call_pilih = $no_call;
		$no_call_hp = 'TIDAK ADA NOMOR';
	}
	else {
		$data_call = explode("-",$no_call);
		$no_call_pilih = $data_call[0];
		$no_call_hp = $data_call[1];
	}
}

if (isset($_POST['back']) ){
	clearstatcache();
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}
	
if (isset($_POST['Save']) ){
	// status call: not connect	
			// status call: not connect	
	if ($status == "Not Contacted" || $status == "NOT CONTACTEBLE") {
		if ($no_call_pilih == ""  or $no_call_hp == "" or $keterangan == "" ) {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			$cek = "kosong";
		} else {

			$follow = '1';

			//$telp="SELECT count(*) as jml FROM app_tam_profilling WHERE tlp = '$tlp'";
			//$tlep=mysqli_query($con,$telp);
			

			$sql = "INSERT INTO app_tam_profilling (tgl,login,nama_agent,area,jenis,status,kategori,reason,keterangan,follow,input,valid,no_call_hp,no_call_pilih,fastel) 
					VALUES ('$tgl','$username','$nama_agent','$area_agent','$jenis','$status','$kategori','$reason','$keterangan','$follow','Follow Up','Not Valid','$no_call_hp','$no_call_pilih','$fastel')";
			// echo $sql;
			$query = mysqli_query($con, $sql);

			$sql_update_status_profilling = "UPDATE app_wo_profilling SET status='0', lup='$tgl', login = '$username' WHERE id='$id'";
			mysqli_query($con, $sql_update_status_profilling);
			
			clearstatcache();
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
		}
	}
	// status call: connect
	// print_r($kategori);
	else if ($status == "Contacted") {
		if ($no_call_pilih == ""  or $no_call_hp == ""  or $keterangan == "" ) {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			$cek = "kosong";
		} else {
			if($kategori == "Agree"){
				if ($no_call_pilih == ""  or $no_call_hp == ""  or $email_dbprofile_status == "" or $email_myih_status == "" or $hp_dbprofile_status == "" or $hp_myih_status == "" or $keterangan == "" ) {
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				}
				else {
					$sql = "INSERT INTO app_tam_profilling (tgl,login,nama_agent,area,email_dbprofile,email_dbprofile_status,email_myih,email_myih_status,hp_dbprofile,hp_dbprofile_status,hp_myih,hp_myih_status,fastel,
					speed,tgl_verifikasi,jenis,status,kategori,reason,keterangan,follow,input,valid,no_call_hp,no_call_pilih,new_email1,new_email2,new_telp1,new_telp2) 
					VALUES ('$tgl','$username','$nama_agent','$area_agent','$email_dbprofile_form','$email_dbprofile_status','$email_myih_form','$email_myih_status','$hp_dbprofile_form','$hp_dbprofile_status',
					'$hp_myih_form','$hp_myih_status','$fastel','$speed','$tgl_verifikasi','$jenis','$status','$kategori','$reason','$keterangan','$follow','Follow Up','Not Valid','$no_call_hp','$no_call_pilih',
					'$new_email1','$new_email2','$new_telp1','$new_telp2')";
					$query = mysqli_query($con, $sql);
					// print_r($sql);
					// die();
					$cek = 'sukses';
				}
			}
            elseif($kategori == "Follow Up"){
				$sql = "INSERT INTO app_tam_profilling (tgl,login,nama_agent,area,email_dbprofile,email_dbprofile_status,email_myih,email_myih_status,hp_dbprofile,hp_dbprofile_status,hp_myih,hp_myih_status,fastel,
					speed,tgl_verifikasi,jenis,status,kategori,reason,keterangan,follow,input,valid,no_call_hp,no_call_pilih,new_email1,new_email2,new_telp1,new_telp2) 
					VALUES ('$tgl','$username','$nama_agent','$area_agent','$email_dbprofile_form','$email_dbprofile_status','$email_myih_form','$email_myih_status','$hp_dbprofile_form','$hp_dbprofile_status',
					'$hp_myih_form','$hp_myih_status','$fastel','$speed','$tgl_verifikasi','$jenis','$status','$kategori','$reason','$keterangan','$follow','Follow Up','Not Valid','$no_call_hp','$no_call_pilih',
					'$new_email1','$new_email2','$new_telp1','$new_telp2')";
				$query = mysqli_query($con, $sql);
				$cek = 'sukses';
				// echo $sql;
			}
			else {
				$sql = "INSERT INTO app_tam_profilling (tgl,login,nama_agent,area,email_dbprofile,email_dbprofile_status,email_myih,email_myih_status,hp_dbprofile,hp_dbprofile_status,hp_myih,hp_myih_status,fastel,
					speed,tgl_verifikasi,jenis,status,kategori,reason,keterangan,follow,input,valid,no_call_hp,no_call_pilih,new_email1,new_email2,new_telp1,new_telp2) 
					VALUES ('$tgl','$username','$nama_agent','$area_agent','$email_dbprofile_form','$email_dbprofile_status','$email_myih_form','$email_myih_status','$hp_dbprofile_form','$hp_dbprofile_status',
					'$hp_myih_form','$hp_myih_status','$fastel','$speed','$tgl_verifikasi','$jenis','$status','$kategori','$reason','$keterangan','$follow','Follow Up','Not Valid','$no_call_hp','$no_call_pilih',
					'$new_email1','$new_email2','$new_telp1','$new_telp2')";
				$query = mysqli_query($con, $sql);
				$cek = 'sukses';
				// echo $sql;
			}
			// print_r($reason);
			if($kategori == "Not Agree") {
				$sql_update_status_profilling = "UPDATE app_wo_profilling SET status='1', lup='$tgl', login = '$username' WHERE id='$id'";
				mysqli_query($con, $sql_update_status_profilling);
			}
			else {
				$sql_update_status_profilling = "UPDATE app_wo_profilling SET status='1', lup='$tgl', login = '$username' WHERE id='$id'";
				// print_r($sql_update_status_profilling);
				mysqli_query($con, $sql_update_status_profilling);
			}
			
			clearstatcache();
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
		}
	}
}
				
?>
<script>
function Reload() {
    location.reload();
}
</script>
<SCRIPT language=Javascript>
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
}
</SCRIPT>
<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
					<div class="card card-plain">
						<div class="header">
							<h4 class="title">CWC TAM NAS<small>   Form Input Follow UP Profilling &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $nama; ?></small></h4>	
						</div>
				
				<form id='input' name="demoform" action='form_follow_profilling.php?id=<?php echo "$id";?>' method='post' accept-charset='UTF-8'>
				<input type="hidden" name="login_user_qco" value="<?=$login?>">
					<div>
						<!-- <input class="form-control" type="hidden" name="login" value="<?php echo $data['login']; ?>" readonly required/> -->
						<input type="hidden" id="submit_form" name="submit_form" value="">
						
                        <input type="hidden" name="nama_agent" value="<?=$nama?>">
						<input type="hidden" name="login_user_qco" value="<?=$login?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
                        <div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<?php
                                        // print_r($data['hp_myih']);
												if(isset($no_call)) {
													if($no_call == 'TIDAK BISA DI CALL') {
														$sel_call3 = 'selected';
													}
													elseif($no_call == 'HP DB PROFILE-'.$data['hp_dbprofile']) {
														$sel_call1 = 'selected';
													}
													elseif($no_call == 'HP MYIH-'.$data['hp_myih']) {
														$sel_call2 = 'selected';
													}
												}
										?>
										<label class="control-label" style="color:#008B8B">NO HP CALL</label>
										<select name="no_call" class="form-control" onChange="document.demoform.submit()" required>
											<option value="">-- PILIH NO HP YANG DICALL --</option>
											<option value="<?='HP DB PROFILE-'?><?=(isset($hp_dbprofile))?$hp_dbprofile:$data['hp_dbprofile']?>" <?=$sel_call1?>>HP DB PROFILE - <?=(isset($hp_dbprofile))?$hp_dbprofile:$data['hp_dbprofile']?></option>
											<option value="<?='HP MYIH-'?><?=(isset($hp_myih))?$hp_myih:$data['hp_myih']?>" <?=$sel_call2?>> HP MYIH - <?=(isset($hp_myih))?$hp_myih:$data['hp_myih']?> </option>
											<option value="TIDAK BISA DI CALL" <?=$sel_call3?>>TIDAK BISA DI CALL</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Campaign/Rule</label>
										<select name="jenis" class="form-control" onChange="document.demoform.submit()" readonly>
											<option value=" ">Pilih Campaign</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE `aktif`='1' AND jenis='1'");
											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[1] == "Profilling") {
													$sel = "selected";
													$id_jenis = $rsk[0];
												} else {
													$sel = "";
												}
												echo "<option value=\"$rsk[1]\" $sel> $rsk[1] </option>";
												$k++;
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Status Call</label>
										<select name="status" class="form-control" onChange="document.demoform.submit()">
											<option value=" ">Pilih Status call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_status WHERE `jenis`= '$id_jenis' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[2] == $status) {
													$sel = "selected";
													$id_status = $rsk[1];
												} else {
													$sel = "";
												}
												
												if($no_call == 'TIDAK BISA DI CALL') {
													if($rsk[2] == 'Not Contacted') {
														echo "<option value=\"$rsk[2]\" $sel> $rsk[2]</option>";
													}
												}
												elseif($no_call == '') {

												}
												else {
													echo "<option value=\"$rsk[2]\" $sel> $rsk[2]</option>";
												}
												$k++;
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kategori</label>
										<select name="kategori" class="form-control" onChange="document.demoform.submit()">
											<option value=" ">Pilih Kategori call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_kategori WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[3] == $kategori) {
													$sel = "selected";
													$id_kategori = $rsk[2];
												} else {
													$sel = "";
												}
												echo "<option value=\"$rsk[3]\" $sel> $rsk[3] </option>";
												$k++;
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Reason Call</label>
											<select name="reason" class="form-control" onChange="document.demoform.submit()" <?=($status == 'Not Contacted')?'disabled':'enabled'?>>
												<option value=" ">Pilih Reason Call</option>
												<?php
												$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `kategori`= '$id_kategori' and `aktif`='1'");

												$k = 1;
												while ($rsk = mysqli_fetch_row($qsk)) {
													if ($rsk[4] == $reason) {
														$sel = "selected";
														$follow = $rsk[6];
													} else {
														$sel = "";
													}
													echo "<option value=\"$rsk[4]\" $sel> $rsk[4]</option>";
													$k++;
												}
												?>
											</select>
										</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">FASTEL</label>
										<input class="form-control" type="text" name="fastel" value="<?=($fastel == NULL)?$data['fastel']:$fastel ?>" placeholder="masukkan Fastel" required readonly/>
									</div>
								</div>
							</div>
							<?php
							if($status == 'Contacted' AND ($no_call != '' OR $no_call != 'TIDAK BISA DI CALL')) {
							?>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">EMAIL DB PROFILE</label>
										<input class="form-control" type="email" name="email_dbprofile_form" value="<?=($email_dbprofile == NULL)?$data['email_dbprofile']:$email_dbprofile?>" placeholder="masukkan Email DB Profile" readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">STATUS EMAIL DB PROFILE</label>
										<select name="email_dbprofile_status" class="form-control">
											<option value="">-- STATUS EMAIL DB PROFILE --</option>
											<option value="OK" <?=(isset($email_dbprofile_status)?(($email_dbprofile_status == 'OK')?'selected':''):(($data['email_dbprofile_status'] == 'OK')?'selected':''))?>>OK</option>
											<option value="NOK" <?=(isset($email_dbprofile_status)?(($email_dbprofile_status == 'NOK')?'selected':''):(($data['email_dbprofile_status'] == 'NOK')?'selected':''))?>>NOK</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">EMAIL MYIH</label>
										<input class="form-control" type="email" name="email_myih_form" id="email_myih_form" value="<?=($email_myih == NULL)?$data['email_myih']:$email_myih?>" placeholder="masukkan Email MYIH"  readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">STATUS EMAIL MYIH</label>
										<select name="email_myih_status" class="form-control">
											<option value="">-- STATUS EMAIL MYIH --</option>
											<option value="OK" <?=(isset($email_myih_status)?(($email_myih_status == 'OK')?'selected':''):(($data['email_myih_status'] == 'OK')?'selected':''))?>>OK</option>
											<option value="NOK" <?=(isset($email_myih_status)?(($email_myih_status == 'NOK')?'selected':''):(($data['email_myih_status'] == 'NOK')?'selected':''))?>>NOK</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">HP DB PROFILE</label>
										<input class="form-control" type="text" name="hp_dbprofile_form" value="<?=($hp_dbprofile == NULL)?$data['hp_dbprofile']:$hp_dbprofile?>" placeholder="masukkan HP DB Profile" onKeyPress="return isNumberKey(event)" readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">STATUS HP DB PROFILE</label>
										<select name="hp_dbprofile_status" class="form-control">
											<option value="">-- STATUS HP DB PROFILE --</option>
											<option value="OK" <?=(isset($hp_dbprofile_status)?(($hp_dbprofile_status == 'OK')?'selected':''):(($data['email_dbprofile_status'] == 'OK')?'selected':''))?>>OK</option>
											<option value="NOK" <?=(isset($hp_dbprofile_status)?(($hp_dbprofile_status == 'NOK')?'selected':''):(($data['email_dbprofile_status'] == 'NOK')?'selected':''))?>>NOK</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">HP MYIH</label>
										<input class="form-control" type="text" name="hp_myih_form" id="hp_myih_form" value="<?=($hp_myih == NULL)?$data['hp_myih']:$hp_myih?>" placeholder="masukkan HP MYIH" onKeyPress="return isNumberKey(event)" readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">STATUS HP MYIH</label>
										<select name="hp_myih_status" class="form-control">
											<option value="">-- STATUS HP MYIH --</option>
											<option value="OK" <?=(isset($hp_myih_status)?(($hp_myih_status == 'OK')?'selected':''):(($data['hp_myih_status'] == 'OK')?'selected':''))?>>OK</option>
											<option value="NOK" <?=(isset($hp_myih_status)?(($hp_myih_status == 'NOK')?'selected':''):(($data['hp_myih_status'] == 'NOK')?'selected':''))?>>NOK</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">SPEED</label>
										<input class="form-control" type="text" name="speed" value="<?=($speed == NULL)?$data['speed']:$speed?>" placeholder="masukkan Speed" required  readonly/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">TANGGAL VERIFIKASI</label>
										<input class="form-control" type="date" name="tgl_verifikasi" value="<?=$tanggal_sekarang?>" placeholder="masukkan Tanggal Verifikasi" required readonly/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NEW EMAIL 1</label>
										<input class="form-control" type="email" name="new_email1" value="<?=($new_email1 == NULL)?$data['new_email1']:$new_email1?>" placeholder="masukkan new email 1"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NEW EMAIL 2</label>
										<input class="form-control" type="email" name="new_email2" value="<?=($new_email2 == NULL)?$data['new_email2']:$new_email2?>" placeholder="masukkan new email 2" />
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NEW NO TELEPON 1</label>
										<input class="form-control" type="text" name="new_telp1" value="<?=($new_telp1 == NULL)?$data['new_telp1']:$new_telp1?>" placeholder="masukkan no telepon 1" onKeyPress="return isNumberKey(event)"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NEW NO TELEPON 2</label>
										<input class="form-control" type="text" name="new_telp2" value="<?=($new_telp2 == NULL)?$data['new_telp2']:$new_telp2?>" placeholder="masukkan no telepon 2" onKeyPress="return isNumberKey(event)"/>
									</div>
								</div>
							</div>
							<?php
							}
							?>
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" style="color:#008B8B">Keterangan </label>
									<textarea class="form-control" id="keterangan" name="keterangan" rows="5"  oninput="validateInput(this)"><?=($keterangan == NULL)?$data['keterangan']:$keterangan?></textarea>
								</div>
							</div>
						<input class="form-control" type="hidden" name="follow" value="<?php echo $follow; ?>" readonly required />
                    </div>
				</div>
				<input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value="Reset">
		<input type="submit" name="Save" class="btn btn-danger" value="Save">
		<input name="back" type="submit"class="btn btn-danger" Value="Back" value="back">

                
				</form>
				</div>
				</div>	

				</div>
			</div>
		</div>
		<script>
		$(document).ready(function() {
			$('#js-example-basic-multiple').select2();
			$("#js-example-basic-multiple").select2("readonly", true);
		});

		var rupiah = document.getElementById('rupiah');
	if(rupiah){
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
	}
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
		</script>
<?php	require_once("../deft_foo.php"); ?>