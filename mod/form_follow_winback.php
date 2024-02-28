<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$tgl = date("Y-m-d H:i:s");

$query="SELECT * FROM app_tam_winback AS a INNER JOIN app_tam_jenis AS b ON a.jenis = b.keterangan WHERE id='$id'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_row($hasil);
$login=$data[2];
$nama_agent=$data[3];
$upd_qco=$data[17];

if($no_telp==''){$no_telp=$data[4];}
if($fastel==''){$fastel=$data[5];}
if($nama_plg==''){$nama_plg=$data[6];}
if($msisdn_v1==''){$msisdn_v1=$data[7];}
if($msisdn_v2==''){$msisdn_v2=$data[8];}
if($area==''){$area=$data[9];}
if($reg==''){$reg=$data[10];}
if($branch==''){$branch=$data[11];}
if($service_type==''){$service_type=$data[12];}
if($speed==''){$speed=$data[13];}
if($bill_n0==''){$bill_n0=$data[14];}
if($bill_n1==''){$bill_n1=$data[15];}
if($arpu==''){$arpu=$data[16];}
if($hasil_nego==''){$hasil_nego=$data[17];}
if($janji_bayar==''){$janji_bayar=$data[18];}
if($jenis==''){$jenis=$data[19];}
if($ket==''){$ket=$data[23];}
if($id_jenis==''){$id_jenis=$data[33];}
	
if (isset($_POST['back']) ){
	clearstatcache();
	$location="list_follow_winback.php";
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	}
	
if (isset($_POST['Save']) ){
	// status call: not connect	
	if($status=="Not Contacted" || $status=="Follow Up Recall")
		{   
			if ($fastel == ""  or $no_telp_field == "" or $ket == "" or $status=="" or $jenis=="" or $kategori=="")
			{	
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			}else{
				if ($status=="Not Contacted"){$follow = '8'; $kets="";}
				else if ($status=="Follow Up Recall"){$follow = '8';}
				$sql="UPDATE `app_tam_winback` SET `follow`='1'  WHERE (`id`='$id')";
				$query=mysqli_query($con,$sql);
				
				$sql = "INSERT INTO app_tam_winback (tgl,login,fastel,no_telp,nama_agent,nama_plg,msisdn_v1,msisdn_v2,area,reg,branch,service_type,speed,bill_n0,bill_n1,arpu,jenis,status,kategori,reason,follow,ket,upd_qco,input,valid) 
					VALUES ('$tgl','$login','$fastel','$no_telp_field','$nama_agent','$nama_plg','$msisdn_v1','$msisdn_v2','$area','$reg','$branch','$service_type','$speed','$bill_n0','$bill_n1','$arpu_field','$jenis','$status','$kategori','$reason','$follow','$ket','$login_qco','New','Not Valid')";
				
				//echo $sql;
				$query = mysqli_query($con,$sql);
				clearstatcache();
				$location="list_follow_winback.php";		
				echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
			}
		}
		// status call: connect
	else if($status=="Contacted")
	{
		if ($fastel == ""  or $no_telp_field == "" or $ket == ""  or $reason == "" or $hasil_nego == ""  or $janji_bayar == "")
		{	
		echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
		}else{
		  
			$sql="UPDATE `app_tam_winback` SET `follow`='1'  WHERE (`id`='$id')";
			$query=mysqli_query($con,$sql);
			
			$sql = "INSERT INTO app_tam_winback (tgl,login,fastel,no_telp,nama_agent,nama_plg,msisdn_v1,msisdn_v2,area,reg,branch,service_type,speed,bill_n0,bill_n1,arpu,jenis,status,kategori,reason,follow,ket,upd_qco,input,valid,hasil_nego,janji_bayar) 
					VALUES ('$tgl','$login','$fastel','$no_telp_field','$nama_agent','$nama_plg','$msisdn_v1','$msisdn_v2','$area','$reg','$branch','$service_type','$speed','$bill_n0','$bill_n1','$arpu_field','$jenis','$status','$kategori','$reason','$follow','$ket','$login_qco','New','Not Valid','$hasil_nego','$janji_bayar')";
			
			$query = mysqli_query($con,$sql);
			//echo $sql;
			clearstatcache();
			$location="list_recall_winback.php";		
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
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
							<h4 class="title">CWC TAM NAS WINBACK<small>   Form Input Follow &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $nama; ?></small></h4>	
						</div>
				
				<form id='input' name="demoform" action='form_follow_winback.php?id=<?php echo "$id";?>' method='post' accept-charset='UTF-8'>
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
										<label class="control-label" style="color:#008B8B">NAMA PELANGGAN</label>
										<input class="form-control" type="text" name="nama_plg" value="<?php echo $nama_plg; ?>" placeholder="Masukkan Nama Pelanggan" readonly/>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">MSISDN V1</label>
										<input class="form-control" type="text" name="msisdn_v1" value="<?php echo $msisdn_v1; ?>" placeholder="Masukkan MSISDN V1" readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">MSISDN V2</label>
										<input class="form-control" type="text" name="msisdn_v2" value="<?php echo $msisdn_v2; ?>" placeholder="Masukkan MSISDN V2" readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">AREA</label>
										<input class="form-control" type="text" name="area" value="<?php echo $area; ?>" placeholder="Masukkan Area" readonly/>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">REGIONAL</label>
										<input class="form-control" type="text" name="reg" value="<?php echo $reg; ?>" placeholder="Masukkan Regional" readonly/>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">BRANCH</label>
										<input class="form-control" type="text" name="branch" value="<?php echo $branch; ?>" placeholder="Masukkan Branch" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">SERVICE TYPE</label>
										<input class="form-control" type="text" name="service_type" value="<?php echo $service_type; ?>" placeholder="Masukkan Service Type" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">SPEED</label>
										<input class="form-control" type="text" name="speed" value="<?php echo $speed; ?>" placeholder="Masukkan Speed" readonly/>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">BILL N0</label>
										<input class="form-control" type="text" name="bill_n0" value="<?php echo $bill_n0; ?>" placeholder="Masukkan Bill N0" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">BILL N1</label>
										<input class="form-control" type="text" name="bill_n1" value="<?php echo $bill_n1; ?>" placeholder="Masukkan Bill N1" readonly/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">ARPU</label>
										<input class="form-control" type="text" name="arpu_field" value="<?=isset($arpu_field)?$arpu_field : $arpu; ?>" placeholder="Masukkan Arpu" onKeyPress="return isNumberKey(event)"/>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" style="color:#008B8B">Campaign/Rule</label>
										<select name="jenis" class="form-control" onChange="document.demoform.submit()" readonly>
											<option value=" ">Pilih Campaign</option>
											<?php
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_jenis WHERE `aktif`='1' and `jenis`= '$id_jenis'");
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
											$qsk = mysqli_query($con, "SELECT * FROM app_tam_status WHERE `jenis`= '$id_jenis' and `aktif`='1'");

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
                                <?php 
                                    if( $kategori == "Agree") {
                                ?>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">NEGOSIASI PEMBAYARAN</label>
                                        <select id="se2" name="hasil_nego" class="form-control" value="<? echo $hasil_nego;?>"> 
                                            <option value="">Pilih Hasil Nego</option>
                                            <option value="Bayar Denda"<?php if($hasil_nego=="Bayar Denda") {echo "selected";}?>> Bayar Denda </option>
                                            <option value="Bayar Lunas"<?php if($hasil_nego=="Bayar Lunas") {echo "selected";}?>> Bayar Lunas </option>
                                            <option value="Dengan Diskon"<?php if($hasil_nego=="Dengan Diskon") {echo "selected";}?>> Dengan Diskon </option>
                                            <option value="Diangsur"<?php if($hasil_nego=="Diangsur") {echo "selected";}?>> Diangsur </option>
                                            <option value="Ganti Paket"<?php if($hasil_nego=="Ganti Paket") {echo "selected";}?>> Ganti Paket </option>
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
                            <?php } ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" style="color:#008B8B">KETERANGAN</label>
                                        <textarea class="form-control" id="ket" name="ket" rows="5" ><?php echo $ket; ?></textarea>
                                    </div>
                                </div>
                            </div>
					    <input class="form-control"
						   type="hidden"
						   name="follow"										  
						   value="<?php echo $follow; ?>"
						   readonly
						   required
					/>
				</div>
				</div>
				<input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value="Reset">
		<input type="submit" name="Save" class="btn btn-danger" value="Save"<?php if ( $status=='' ){ ?> disabled<?php } else if ( $status=='Contacted Recall' && $kategori=="" && $ket==""){ ?> disabled <?} else if ( $status=='Not Contacted' && $kategori==""){ ?> disabled<?php } else if ($status=="Contacted" && ($kategori=="" || $reason=="" )){?> disabled<?php }else if ($status=="Follow Up Recall" && $kategori=="" ){?> disabled<?php }?>>
		<input name="back" type="submit"class="btn btn-danger" Value="Back" value="back">

                
				</form>
				<? php 
				if (isset($_POST['Save']) ){echo "test"; }
				
				
				?>
				</div>
				</div>	

				</div>
			</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>