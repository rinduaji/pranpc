<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$tgl = date("Y-m-d H:i:s");

$query="SELECT * FROM app_tam_pranpc AS a INNER JOIN app_tam_jenis AS b ON a.jenis = b.keterangan WHERE id='$id'";
$hasil = mysqli_query($con,$query);
$data = mysqli_fetch_row($hasil);
$login=$data[2];
$nama_agent=$data[3];
$upd_qco=$data[23];

if($fastel==''){$fastel=$data[4];}
if($no_telp==''){$no_telp=$data[5];}
if($msisdn==''){$msisdn=$data[6];}
if($area==''){$area=$data[7];}
if($reg==''){$reg=$data[8];}
if($witel==''){$witel=$data[9];}
if($produk==''){$produk=$data[10];}
if($speed==''){$speed=$data[11];}
if($total==''){$total=$data[12];}
if($hasil_nego==''){$hasil_nego=$data[13];}
if($janji_bayar==''){$janji_bayar=$data[14];}
if($jenis==''){$jenis=$data[15];}
if($ket==''){$ket=$data[19];}
if($id_jenis==''){$id_jenis=$data[29];}
	
if (isset($_POST['back']) ){
	clearstatcache();
	$location="list_follow_pranpc.php";
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
				$sql="UPDATE `app_tam_pranpc` SET `follow`='1'  WHERE (`id`='$id')";
				$query=mysqli_query($con,$sql);
				
				$sql = "INSERT INTO app_tam_pranpc (tgl,login,fastel,no_telp,nama_agent,msisdn,area,reg,witel,produk,speed,total,jenis,status,kategori,reason,follow,ket,upd_qco,input,valid) 
					VALUES ('$tgl','$login','$fastel','$no_telp_field','$nama_agent','$msisdn','$area','$reg','$witel','$produk','$speed','$total','$jenis','$status','$kategori','$reason','$follow','$ket','$login_qco','New','Not Valid')";
				
				//echo $sql;
				$query = mysqli_query($con,$sql);
				clearstatcache();
				$location="list_follow_pranpc.php";		
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
		  
			$sql="UPDATE `app_tam_pranpc` SET `follow`='1'  WHERE (`id`='$id')";
			$query=mysqli_query($con,$sql);
			
			$sql = "INSERT INTO app_tam_pranpc (tgl,login,fastel,no_telp,nama_agent,msisdn,area,reg,witel,produk,speed,total,jenis,status,kategori,reason,follow,ket,upd_qco,input,valid,hasil_nego,janji_bayar) 
					VALUES ('$tgl','$login','$fastel','$no_telp_field','$nama_agent','$msisdn','$area','$reg','$witel','$produk','$speed','$total','$jenis','$status','$kategori','$reason','$follow','$ket','$login_qco','New','Not Valid','$hasil_nego','$janji_bayar')";
			// print_r($sql);
			$query = mysqli_query($con,$sql);
			//echo $sql;
			clearstatcache();
			$location="list_follow_pranpc.php";		
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
							<h4 class="title">CWC TAM NAS CHURN<small>   Form Input Follow &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $nama; ?></small></h4>	
						</div>
				
				<form id='input' name="demoform" action='form_follow_pranpc.php?id=<?php echo "$id";?>' method='post' accept-charset='UTF-8'>
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