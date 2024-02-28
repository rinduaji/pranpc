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
$location = "form_wo_profilling.php";
// $login_qco = NULL;
$query_qco = mysqli_query($con, "SELECT qco FROM cc147_main_users WHERE `username`='$login_user_qco'");
while ($data_qco = mysqli_fetch_row($query_qco)) {
	$login_qco = $data_qco[0];
}

$query_wo_profilling = mysqli_query($con, "SELECT * FROM app_wo_profilling WHERE `login`='$login' AND `id`='$id'");
while ($data_wo = mysqli_fetch_array($query_wo_profilling)) {
	$email_dbprofile = $data_wo['email_dbprofile'];
	$email_myih = $data_wo['email_myih'];
	$hp_dbprofile = $data_wo['hp_dbprofile'];
	$hp_myih = $data_wo['hp_myih'];
	$fastel = $data_wo['fastel'];
	$speed = $data_wo['speed'];
}

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

if($_POST['submit_form'] == "ok"){
if (isset($_POST['Save'])) {

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
					VALUES ('$tgl','$username','$nama_agent','$area_agent','$jenis','$status','$kategori','$reason','$keterangan','$follow','New','Not Valid','$no_call_hp','$no_call_pilih','$fastel')";
			// echo $sql;
			$query = mysqli_query($con, $sql);

			$sql_update_status_profilling = "UPDATE app_wo_profilling SET kategori='$kategori', status='0', lup='$tgl', login = '$username' WHERE id='$id'";
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
				if ($no_call_pilih == ""  or $no_call_hp == "" or $keterangan == "" or $email_dbprofile_status == "" or $email_myih_status == "" or $hp_dbprofile_status == "" or $hp_myih_status == "") {
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				}
				else {
					$sql = "INSERT INTO app_tam_profilling (tgl,login,nama_agent,area,email_dbprofile,email_dbprofile_status,email_myih,email_myih_status,hp_dbprofile,hp_dbprofile_status,hp_myih,hp_myih_status,fastel,
					speed,tgl_verifikasi,jenis,status,kategori,reason,keterangan,follow,input,valid,no_call_hp,no_call_pilih,new_email1,new_email2,new_telp1,new_telp2) 
					VALUES ('$tgl','$username','$nama_agent','$area_agent','$email_dbprofile_form','$email_dbprofile_status','$email_myih_form','$email_myih_status','$hp_dbprofile_form','$hp_dbprofile_status',
					'$hp_myih_form','$hp_myih_status','$fastel','$speed','$tgl_verifikasi','$jenis','$status','$kategori','$reason','$keterangan','$follow','New','Not Valid','$no_call_hp','$no_call_pilih',
					'$new_email1','$new_email2','$new_telp1','$new_telp2')";
					$query = mysqli_query($con, $sql);
					// print_r($sql);
					// die();
					$cek = 'sukses';
				}
			}
			else {
				$sql = "INSERT INTO app_tam_profilling (tgl,login,nama_agent,area,email_dbprofile,email_dbprofile_status,email_myih,email_myih_status,hp_dbprofile,hp_dbprofile_status,hp_myih,hp_myih_status,fastel,
					speed,tgl_verifikasi,jenis,status,kategori,reason,keterangan,follow,input,valid,no_call_hp,no_call_pilih,new_email1,new_email2,new_telp1,new_telp2) 
					VALUES ('$tgl','$username','$nama_agent','$area_agent','$email_dbprofile_form','$email_dbprofile_status','$email_myih_form','$email_myih_status','$hp_dbprofile_form','$hp_dbprofile_status',
					'$hp_myih_form','$hp_myih_status','$fastel','$speed','$tgl_verifikasi','$jenis','$status','$kategori','$reason','$keterangan','$follow','New','Not Valid','$no_call_hp','$no_call_pilih',
					'$new_email1','$new_email2','$new_telp1','$new_telp2')";
				$query = mysqli_query($con, $sql);
				$cek = 'sukses';
				// echo $sql;
			}
			// print_r($reason);
			if($kategori == "Not Agree") {
				$sql_update_status_profilling = "UPDATE app_wo_profilling SET kategori='$kategori', status='1', lup='$tgl', login = '$username' WHERE id='$id'";
				mysqli_query($con, $sql_update_status_profilling);
			}
			else {
				$sql_update_status_profilling = "UPDATE app_wo_profilling SET kategori='$kategori', status='1', lup='$tgl', login = '$username' WHERE id='$id'";
				// print_r($sql_update_status_profilling);
				mysqli_query($con, $sql_update_status_profilling);
			}
			
			if($cek == 'sukses') {
				clearstatcache();
				echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
			}
		}
	}
}
}
// print_r($reason);
?>
<script>
	function Reload() {
		location.reload();
	}
</script>
<SCRIPT language=Javascript>
	function isNumberKey(evt) {
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
						<h4 class="title">INPUT WO PROFILLING <small> >>> <?php echo $login; ?></small></h4>
						<br>
					</div>
					<form id='form1' name="demoform" action='input_wo_profilling.php?id=<?=$id?>' method='post' accept-charset='UTF-8'>
						<input type="hidden" name="nama_agent" value="<?=$nama?>">
						<input type="hidden" name="area_agent" value="<?=$area?>">
						<input type="hidden" name="username" value="<?=$login?>">
						<input type="hidden" name="login_user_qco" value="<?=$login?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
						<div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<?php
												if(isset($no_call)) {
													if($no_call == 'TIDAK BISA DI CALL') {
														$sel_call3 = 'selected';
													}
													elseif($no_call == 'HP DB PROFILE-'.$hp_dbprofile) {
														$sel_call1 = 'selected';
													}
													elseif($no_call == 'HP MYIH-'.$hp_myih) {
														$sel_call2 = 'selected';
													}
												}
										?>
										<label class="control-label" style="color:#008B8B">NO HP CALL</label>
										<select name="no_call" class="form-control" onChange="document.demoform.submit()" required>
											<option value="">-- PILIH NO HP YANG DICALL --</option>
											<option value="<?='HP DB PROFILE-'.$hp_dbprofile?>" <?=$sel_call1?>>HP DB PROFILE - <?=$hp_dbprofile?></option>
											<option value="<?='HP MYIH-'.$hp_myih?>" <?=$sel_call2?>> HP MYIH - <?=$hp_myih?> </option>
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
										<input class="form-control" type="text" name="fastel" value="<?php echo $fastel; ?>" placeholder="masukkan Fastel" required readonly/>
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
										<input class="form-control" type="email" name="email_dbprofile_form" value="<?php echo $email_dbprofile; ?>" placeholder="masukkan Email DB Profile" readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">STATUS EMAIL DB PROFILE</label>
										<select name="email_dbprofile_status" class="form-control">
											<option value="">-- STATUS EMAIL DB PROFILE --</option>
											<option value="OK" <?=($email_dbprofile_status == 'OK')?'selected':''?>>OK</option>
											<option value="NOK" <?=($email_dbprofile_status == 'NOK')?'selected':''?>>NOK</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">EMAIL MYIH</label>
										<input class="form-control" type="email" name="email_myih_form" id="email_myih_form" value="<?php echo $email_myih; ?>" placeholder="masukkan Email MYIH"  readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">STATUS EMAIL MYIH</label>
										<select name="email_myih_status" class="form-control">
											<option value="">-- STATUS EMAIL MYIH --</option>
											<option value="OK" <?=($email_myih_status == 'OK')?'selected':''?>>OK</option>
											<option value="NOK" <?=($email_myih_status == 'NOK')?'selected':''?>>NOK</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">HP DB PROFILE</label>
										<input class="form-control" type="text" name="hp_dbprofile_form" value="<?php echo $hp_dbprofile; ?>" placeholder="masukkan HP DB Profile" onKeyPress="return isNumberKey(event)" readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">STATUS HP DB PROFILE</label>
										<select name="hp_dbprofile_status" class="form-control">
											<option value="">-- STATUS HP DB PROFILE --</option>
											<option value="OK" <?=($hp_dbprofile_status == 'OK')?'selected':''?>>OK</option>
											<option value="NOK" <?=($hp_dbprofile_status == 'NOK')?'selected':''?>>NOK</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">HP MYIH</label>
										<input class="form-control" type="text" name="hp_myih_form" id="hp_myih_form" value="<?php echo $hp_myih; ?>" placeholder="masukkan HP MYIH" onKeyPress="return isNumberKey(event)" readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">STATUS HP MYIH</label>
										<select name="hp_myih_status" class="form-control">
											<option value="">-- STATUS HP MYIH --</option>
											<option value="OK" <?=($hp_myih_status == 'OK')?'selected':''?>>OK</option>
											<option value="NOK" <?=($hp_myih_status == 'NOK')?'selected':''?>>NOK</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">SPEED</label>
										<input class="form-control" type="text" name="speed" value="<?php echo $speed; ?>" placeholder="masukkan Speed" required  readonly/>
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
										<input class="form-control" type="email" name="new_email1" value="<?php echo $new_email1; ?>" placeholder="masukkan new email 1"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NEW EMAIL 2</label>
										<input class="form-control" type="email" name="new_email2" value="<?php echo $new_email2; ?>" placeholder="masukkan new email 2" />
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NEW NO TELEPON 1</label>
										<input class="form-control" type="text" name="new_telp1" value="<?=$new_telp1?>" placeholder="masukkan no telepon 1" onKeyPress="return isNumberKey(event)"/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NEW NO TELEPON 2</label>
										<input class="form-control" type="text" name="new_telp2" value="<?=$new_telp2?>" placeholder="masukkan no telepon 2" onKeyPress="return isNumberKey(event)"/>
									</div>
								</div>
							</div>
							<?php
							}
							?>
							<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" style="color:#008B8B">Keterangan </label>
									<textarea class="form-control" id="keterangan" name="keterangan" rows="5" ><?php echo $keterangan; ?></textarea>
								</div>
							</div>
						<input class="form-control" type="hidden" name="follow" value="<?php echo $follow; ?>" readonly required />
						</div>
				</div>
				<!-- <input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value=" Reset">
				<input type="submit" name="Save" class="btn btn-danger" value="Simpan" <?php if ($status == '') { ?> disabled<?php } else if ($status == 'Contacted Recall' && $kategori == "" && $ket == "") { ?> disabled <?} else if ( $status=='Not Contacted' && $kategori=="" ){ ?> disabled<?php } else if ($status == "Contacted" && ($kategori == "" || $reason == "")) { ?> disabled<?php } else if ($status == "Follow Up Recall" && $kategori == "") { ?> disabled<?php } ?> onclick="confirm('Apakah anda yakin inputan sesuai yang diinginkan?');"> -->
				<button class="btn btn-danger" onClick="formReset('form'); return false;">Reset</button>
				<button name="Save" class="btn btn-danger" <?php if ($status == '') { ?> disabled<?php } else if ($status == 'Contacted Recall' && $kategori == "" && $ket == "") { ?> disabled <?} else if ( $status=='Not Contacted' && $kategori=="" ){ ?> disabled<?php } else if ($status == "Contacted" && ($kategori == "" || $reason == "")) { ?> disabled<?php } else if ($status == "Follow Up Recall" && $kategori == "") { ?> disabled<?php } ?>>Simpan</button>

			</form>
			<!-- Button to Open the Modal -->

				<!-- The Modal -->
			</div>
		</div>

	</div>
</div>
</div>

<script>

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
// $(document).ready(function(){
//   $('#tlp').bind('copy paste cut',function(e) {
//     e.preventDefault(); //disable cut,copy,paste
//     alert('cut,copy & paste options are disabled !!');
//   });
// });

$(document).ready(function(event) {
    $('#form1').submit(function(event){
		var msg = "Detail Inputan Anda : \n\Login Agent : " + (($('input[name=login_user_qco]').val())?$('input[name=login_user_qco]').val():" - ") + "\nNama Agent : " + (($('input[name=nama_agent]').val())?$('input[name=nama_agent]').val():" - ") +"\nEMAIL DB PROFILE : " + (($('input[name=email_dbprofile]').val())?$('input[name=email_dbprofile]').val():" - ") + "\nEMAIL MYIH : " + (($('input[name=email_myih]').val())?$('input[name=email_myih]').val():" - ") + "\nHP DB PROFILE : " + (($('input[name=hp_dbprofile]').val())?$('input[name=hp_dbprofile]').val():" - ")  +  "\nHP MYIH : " + (($('input[name=hp_myih]').val())?$('input[name=hp_myih]').val():" - ")  + "\nFASTEL : " + (($('input[name=fastel]').val())?$('input[name=fastel]').val():" - ")  + "\nSPEED : " + (($('input[name=speed]').val())?$('input[name=speed]').val():" - ")  +"\nCampaign / Rule : " + (($('select[name=jenis]').val())?$('select[name=jenis]').val():" - ") + "\nStatus Call : " + (($('select[name=status]').val())?$('select[name=status]').val():" - ") + "\nKategori : " + (($('select[name=kategori]').val())?$('select[name=kategori]').val():" - ") + "\nReason Call : " + (($('select[name=reason]').val())?$('select[name=reason]').val():" - ") + "\n\nApakah anda yakin data inputan telah sesuai?";
		
		if($('select[name=status]').val() == " " || $('select[name=kategori]').val() == " ") {
			window.alert('Status Call dan Kategori Wajib Di Isi !!!');
		}
		else if($('textarea[name=keterangan]').val() == "") {
			window.alert('Keterangan Wajib Di Isi !!!');
		}
		else {
			if(window.confirm(msg) == true) {
				var inputVal = $('select[name=no_call]').val();
				console.log(inputVal);
				// var gfg = $.isNumeric(inputVal);
				
				userPreference = "Data saved successfully!";
				// document.getElementById("submit_form").value = "ok";
				if(inputVal) {
					$('#submit_form').val("ok");
					// document.getElementById("").setAttribute("submit_form", "ok");	
					window.alert(userPreference);
				}
				else {
					window.alert('inputan NO CALL harus diisi !!!');
				}
			}else{
				event.preventDefault();
			}
		}
		//add stuff here
    });

	$( "#btnKirim" ).click(function() {
		let login = "<?=$login?>";
		let nama = "<?=$nama?>";
		let nama_pelanggan = $("#nama_pelanggan").val();
		let no_fastel = $("#no_fastel").val();
		let no_cp = $("#no_cp").val();
		let detail_keterangan = $("#detail_keterangan").val();
		if(login != "" && nama != "" && nama_pelanggan != "" && no_fastel != "" && no_cp != "" && detail_keterangan != "") {

			$.ajax({
				url: "http://10.194.176.158/cwctam_v2/api/send_ganguan_to_wita.php",
				type: "POST",
				dataType: "JSON",
				data: {
					login: login,
					nama: nama,
					jastel: no_fastel,
					nama_pelanggan: nama_pelanggan,
					cp_pelanggan: no_cp,
					keterangan: detail_keterangan
				},
				success: function(data)
				{
					console.log(data);
					$('#formInputWita').modal('hide');
					swal("Success", "Data Berhasil Di Kirim ke WITA oleh Agent!", "success");
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					swal("Gagal", "Data Gagal Di Kirim ke WITA oleh Agent!", "error");
				}
			});
		}
		else {
			swal("Gagal", "Isi Semua Data!", "info");
		}
	});
});


</script>
<?php require_once("../deft_foo.php"); ?>