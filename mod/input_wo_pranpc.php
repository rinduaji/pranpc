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
$location = "form_wo_pranpc.php";
// $login_qco = NULL;
$query_qco = mysqli_query($con, "SELECT qco FROM cc147_main_users WHERE `username`='$login_user_qco'");
while ($data_qco = mysqli_fetch_row($query_qco)) {
	$login_qco = $data_qco[0];
}

$query_wo_pranpc = mysqli_query($con, "SELECT * FROM app_wo_pranpc WHERE `login`='$login' AND `id`='$id'");
while ($data_wo = mysqli_fetch_array($query_wo_pranpc)) {
	$fastel = $data_wo['fastel'];
	$no_telp = $data_wo['no_telp'];
	$msisdn = $data_wo['msisdn'];
	$area = $data_wo['area'];
	$reg = $data_wo['reg'];
	$witel = $data_wo['witel'];
	$produk = $data_wo['produk'];
	$speed = $data_wo['speed'];
	$total = $data_wo['total'];
	$rule = $data_wo['rule'];
}

if($_POST['submit_form'] == "ok"){
if (isset($_POST['Save'])) {

	// status call: not connect	
	if ($status == "Not Contacted" || $status == "Follow Up Recall") {
		if ($fastel == ""  or $no_telp_field == "" or $ket == "" ) {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			$cek = "kosong";
		} else {

			$follow = '1';

			//$telp="SELECT count(*) as jml FROM app_tam_pranpc WHERE tlp = '$tlp'";
			//$tlep=mysqli_query($con,$telp);
			

			$sql = "INSERT INTO app_tam_pranpc (tgl,login,fastel,no_telp,nama_agent,msisdn,area,reg,witel,produk,speed,total,jenis,status,kategori,reason,follow,ket,upd_qco,input,valid) 
					VALUES ('$tgl','$username','$fastel','$no_telp_field','$nama_agent','$msisdn','$area','$reg','$witel','$produk','$speed','$total','$jenis','$status','$kategori','$reason','$follow','$ket','$login_qco','New','Not Valid')";
			// echo $sql;
			$query = mysqli_query($con, $sql);

			$sql_update_status_pranpc = "UPDATE app_wo_pranpc SET kategori='$kategori', status='0', lup='$tgl', login = '$username' WHERE id='$id'";
			mysqli_query($con, $sql_update_status_pranpc);
			
			clearstatcache();
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
		}
	}
	// status call: connect
	// print_r($kategori);
	else if ($status == "Contacted") {
		if ($fastel == ""  or $no_telp_field == "" or $ket == ""  or $reason == "" ) {
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !".$no_telp_field."</div>";
			$cek = "kosong";
		} else {
			if($kategori == "Agree"){
				if ($hasil_nego == ""  or $janji_bayar == "") {
					echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
					$cek = "kosong";
				}
				else {
					$sql = "INSERT INTO app_tam_pranpc (tgl,login,fastel,no_telp,nama_agent,msisdn,area,reg,witel,produk,speed,total,jenis,status,kategori,reason,follow,ket,upd_qco,input,valid,hasil_nego,janji_bayar) 
					VALUES ('$tgl','$username','$fastel','$no_telp_field','$nama_agent','$msisdn','$area','$reg','$witel','$produk','$speed','$total','$jenis','$status','$kategori','$reason','$follow','$ket','$login_qco','New','Not Valid','$hasil_nego','$janji_bayar')";

					$query = mysqli_query($con, $sql);
					// print_r($sql);
					// die();
					$cek = 'sukses';
				}
			}
			else {
				$sql = "INSERT INTO app_tam_pranpc (tgl,login,fastel,no_telp,nama_agent,msisdn,area,reg,witel,produk,speed,total,jenis,status,kategori,reason,follow,ket,upd_qco,input,valid) 
					VALUES ('$tgl','$username','$fastel','$no_telp_field','$nama_agent','$msisdn','$area','$reg','$witel','$produk','$speed','$total','$jenis','$status','$kategori','$reason','$follow','$ket','$login_qco','New','Not Valid')";

				$query = mysqli_query($con, $sql);
				$cek = 'sukses';
				// echo $sql;
			}
			// print_r($reason);
			if($kategori == "Decline") {
				$sql_update_status_pranpc = "UPDATE app_wo_pranpc SET kategori='$kategori', status='1', lup='$tgl', login = '$username' WHERE id='$id'";
				mysqli_query($con, $sql_update_status_pranpc);
			}
			else {
				$sql_update_status_pranpc = "UPDATE app_wo_pranpc SET kategori='$kategori', status='1', lup='$tgl', login = '$username' WHERE id='$id'";
				// print_r($sql_update_status_pranpc);
				mysqli_query($con, $sql_update_status_pranpc);
			}
			
			clearstatcache();
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL=' . $location . '">';
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
						<h4 class="title">INPUT WO CHURN <small> >>> <?php echo $login; ?></small></h4>
						<br>
					</div>
					<form id='form1' name="demoform" action='input_wo_pranpc.php?id=<?=$id?>' method='post' accept-charset='UTF-8'>
						<input type="hidden" name="nama_agent" value="<?=$nama?>">
						<input type="hidden" name="area_agent" value="<?=$area?>">
						<input type="hidden" name="username" value="<?=$login?>">
						<input type="hidden" name="login_user_qco" value="<?=$login?>">
						<input type="hidden" id="submit_form" name="submit_form" value="">
						<div>
                            <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">FASTEL</label>
										<input class="form-control" type="text" name="fastel" value="<?php echo $fastel; ?>" placeholder="Masukkan Fastel" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">NO TELEPON</label>
										<input class="form-control" type="text" name="no_telp_field" value="<?=isset($no_telp_field)?$no_telp_field : $no_telp; ?>" placeholder="Masukkan No Telepon" onKeyPress="return isNumberKey(event)"/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">MSISDN</label>
										<input class="form-control" type="text" name="msisdn" value="<?php echo $msisdn; ?>" placeholder="Masukkan MSISDN" readonly/>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">AREA</label>
										<input class="form-control" type="text" name="area" value="<?php echo $area; ?>" placeholder="Masukkan Area" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">REGIONAL</label>
										<input class="form-control" type="text" name="reg" value="<?php echo $reg; ?>" placeholder="Masukkan Regional" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">WITEL</label>
										<input class="form-control" type="text" name="witel" value="<?php echo $witel; ?>" placeholder="Masukkan Witel" readonly/>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">PRODUK</label>
										<input class="form-control" type="text" name="produk" value="<?php echo $produk; ?>" placeholder="Masukkan Service Type" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">SPEED</label>
										<input class="form-control" type="text" name="speed" value="<?php echo $speed; ?>" placeholder="Masukkan Speed" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">TOTAL</label>
										<input class="form-control" type="text" name="total" value="<?php echo $total; ?>" placeholder="Masukkan Total" readonly/>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Campaign/Rule</label>
										<select name="jenis" class="form-control" onChange="document.demoform.submit()" readonly>
											<!-- <option value=" ">Pilih Campaign</option> -->
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE `aktif`='1' AND jenis='39'");
											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[1] == $jenis) {
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
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_status WHERE `jenis`= '39' and `aktif`='1'");

											$k = 1;
											while ($rsk = mysqli_fetch_row($qsk)) {
												if ($rsk[2] == $status) {
													$sel = "selected";
													$id_status = $rsk[1];
												} else {
													$sel = "";
												}

												echo "<option value=\"$rsk[2]\" $sel> $rsk[2]</option>";
												$k++;
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Kategori</label>
										<select name="kategori" class="form-control" onChange="document.demoform.submit()">
											<option value=" ">Pilih Kategori call</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_kategori WHERE `jenis`= '39' and `status`='$id_status' and `aktif`='1'");

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
                            </div>
                            <?php
							    if($status == 'Contacted') {
							?>
                            <div class="row">
								<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" style="color:#008B8B">Reason Call</label>
											<select name="reason" class="form-control" onChange="document.demoform.submit()" <?=($status == 'Not Contacted')?'disabled':'enabled'?>>
												<option value=" ">Pilih Reason Call</option>
												<?php
												$qsk = mysqli_query($con, "SELECT  * FROM app_tam_reason WHERE `jenis`= '39' and `status`='$id_status' and `kategori`= '$id_kategori' and `aktif`='1'");

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
                                <?php 
                                    if( $kategori == "Agree") {
                                ?>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">NEGOSIASI PEMBAYARAN</label>
                                        <select id="se2" name="hasil_nego" class="form-control" value="<? echo $hasil_nego;?>"> 
                                            <option value="">Pilih Hasil Nego</option>
                                            <option value="Akan Membayar Lunas" <?php if($hasil_nego=="Akan Membayar Lunas") {echo "selected";}?>> Akan Membayar Lunas </option>
                                            <option value="PDD 6 (Bayar 5 Bulan, Free 1 Bulan)" <?php if($hasil_nego=="PDD 6 (Bayar 5 Bulan, Free 1 Bulan)") {echo "selected";}?>> PDD 6 (Bayar 5 Bulan, Free 1 Bulan) </option>
                                            <option value="PDD 12 (Bayar 9 Bulan, Free 3 Bulan)"<?php if($hasil_nego=="PDD 12 (Bayar 9 Bulan, Free 3 Bulan)") {echo "selected";}?>> PDD 12 (Bayar 9 Bulan, Free 3 Bulan) </option>
                                        </select>
                                    </div>
                                </div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="control-label" style="color:#008B8B">TANGGAL JANJI BAYAR</label>
                                            <input class="form-control" type="date" name="janji_bayar" value="<?php echo $janji_bayar;?>" required />
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
							</div>
                            <?php
                                }
                            ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">KETERANGAN</label>
                                        <textarea class="form-control" id="ket" name="ket" rows="5" ><?php echo $ket; ?></textarea>
                                    </div>
                                </div>
                            <div class="row">
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
		var msg = "Detail Inputan Anda : \n\Login Agent : " + (($('input[name=login_user_qco]').val())?$('input[name=login_user_qco]').val():" - ") + "\nNama Agent : " + (($('input[name=nama_agent]').val())?$('input[name=nama_agent]').val():" - ") +"\nfastel : " + (($('input[name=fastel]').val())?$('input[name=fastel]').val():" - ")  + "\nCampaign / Rule : " + (($('select[name=jenis]').val())?$('select[name=jenis]').val():" - ") + "\nStatus Call : " + (($('select[name=status]').val())?$('select[name=status]').val():" - ") + "\nKategori : " + (($('select[name=kategori]').val())?$('select[name=kategori]').val():" - ") + "\nReason Call : " + (($('select[name=reason]').val())?$('select[name=reason]').val():" - ") + "\n\nApakah anda yakin data inputan telah sesuai?";
		
		if($('select[name=status]').val() == " " || $('select[name=kategori]').val() == " ") {
			window.alert('Status Call dan Kategori Wajib Di Isi !!!');
		}
		else if($('textarea[name=keterangan]').val() == "") {
			window.alert('Keterangan Wajib Di Isi !!!');
		}
		else {
			if(window.confirm(msg) == true) {
				var inputVal = $('input[name=fastel]').val();
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
					window.alert('inputan Fastel harus diisi !!!');
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