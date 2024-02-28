<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$tgl = date("Y-m-d H:i:s");
//$tglbyr = date("Y-m-d H:i:s");
$dt = explode("-",trim($tglbyr)); 
$tglbyr="$dt[2]-$dt[1]-$dt[0]";

if (isset($_POST['Save']) ){
	// status call: not connect	
	if($status=="Not Contacted" || $status=="Follow Up Recall")
		{   
			if ($fastel==""  or $login=="" or $nama_dm=="" or $tlp=="" or $reg=="" or $status=="" or $jenis=="" or $kategori=="")
			{	
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			}else{
				
				if ($status=="Not Contacted"  ){ $follow = '1';}
				elseif ($status=="Follow Up Recall") { $follow = '8';}


				//$telp="SELECT count(*) as jml FROM app_tam_data2 WHERE tlp = '$tlp'";
				//$tlep=mysqli_query($con,$telp);
				$sql="INSERT INTO app_tam_data2 (tgl,login,fastel,nama_dm,tlp,reg,jenis,`status`,kategori,ket,follow,valid,input) VALUES ('$tgl','$login','$fastel','$nama_dm','$tlp','$reg','$jenis','$status','$kategori','$ket','$follow','Not Valid','New')";
				//echo $sql;
				$query = mysqli_query($con,$sql);
				clearstatcache();
				$location="input.php";		
				echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
			}
		}
		// status call: connect
	else if($status=="Contacted")
	{
		if ( $fastel==""  or $login=="" or $nama_dm=="" or $tlp=="" or $reg=="" or $status=="" or $jenis=="" or $kategori=="" or $reason=="" or $ket=="" or $follow=="" )
		{	
		echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
		}else{
		/////nambah//////
		if ($kategori=="Agree"){
		$sql="INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,penerima,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$tglbyr','$jenis','$kategori','$reason','$ket','$follow','Not Valid','New','$add')";
		  
        }else{ 
		$sql="INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,reg,fastel,jenis,kategori,reason,Ket,follow,valid,input,add_on_tsel) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$reg','$fastel','$jenis','$kategori','$reason','$ket','$follow','Not Valid','New','$add')";
        }
		  $query = mysqli_query($con,$sql);
			echo $sql;
			clearstatcache();
			$location="input.php";
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
	<title>App PRA NPC</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
					<div class="card card-plain">
						<div class="header">
							<h4 class="title">INPUT CWC <small>  <?php echo $login; ?></small></h4>	
						</div>
				
				<form id='input' name="demoform" action='input.php' method='post' accept-charset='UTF-8'>
					<div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">No Fastel *</label>
					<input class="form-control"
						   type="text"
						   name="fastel"
						   value="<?php echo $fastel; ?>"
						   placeholder="masukkan no fastel"	
						   onkeypress="return isNumberKey(event)"
						   required
					/>
					<input class="form-control"
						   type="hidden"
						   name="login"										  
						   value="<?php echo $login; ?>"
						   readonly
						   required
					/>
					</div>
					</div>					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Nama DM/Pemilik *</label>
					<input class="form-control"
						   type="text"
						   name="nama_dm"
						   value="<?php echo $nama_dm; ?>"
						   placeholder="masukkan nama pemilik"
						   required
					/>
					</div>
					</div>	
					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">No. CP/Dial *</label>
					<input class="form-control"
						   type="text"
						   name="tlp"
						   value="<?php echo $tlp; ?>"
						   placeholder="masukkan No CP"	
						   onkeypress="return isNumberKey(event)"
						   required
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Regional</label>
					<select id="se1" name="reg" class="form-control" value="<? echo $reg;?>"> 
					<option value="">Pilih Area</option>
					<option value="Area 1"<?php if($reg==" Area 1") {echo "selected";}?>> Area 1 </option>
					<option value="Area 2"<?php if($reg=="Area 2") {echo "selected";}?>> Area 2 </option>
					<option value="Area 3"<?php if($reg=="Area 3") {echo "selected";}?>> Area 3 </option>
					<option value="Area 4"<?php if($reg=="Area 4") {echo "selected";}?>> Area 4 </option>
					</select>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">				
					<label class="control-label" style="color:#008B8B">Campaign/Rule *</label>
					<select  name="jenis" class="form-control" onChange="document.demoform.submit()">
					<option value=" ">Pilih Campaign</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT * FROM app_tam_jenis WHERE `aktif`='1' AND jenis <> '1'");						
						$k=1;
						while ($rsk=mysqli_fetch_row($qsk))
						{
						if ($rsk[1]==$jenis){$sel="selected";$id_jenis=$rsk[0];}else{$sel="";}
						echo "<option value=\"$rsk[1]\" $sel> $rsk[1] </option>";
						$k++;
						}
					?>
					</select>
					</div>
					</div>				
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Status Call *</label>
					<select name="status" class="form-control" onChange="document.demoform.submit()">
					<option value=" ">Pilih Status call</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT * FROM app_tam_status WHERE `jenis`= '$id_jenis' and `aktif`='1'");
						
						$k=1;
						while ($rsk=mysqli_fetch_row($qsk))
						{
						if ($rsk[2]==$status){$sel="selected";$id_status=$rsk[1];}else{$sel="";}
						echo "<option value=\"$rsk[2]\" $sel> $rsk[2]</option>";
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
					<label class="control-label" style="color:#008B8B">Kategori *</label>
					<select name="kategori" class="form-control" onChange="document.demoform.submit()">
					<option value=" ">Pilih Status call</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT * FROM app_tam_kategori WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `aktif`='1'");
						
						$k=1;
						while ($rsk=mysqli_fetch_row($qsk))
						{
						if ($rsk[3]==$kategori){$sel="selected"; $id_kategori=$rsk[2];}else{$sel="";}
						echo "<option value=\"$rsk[3]\" $sel> $rsk[3] </option>";
						$k++;
						}
					?>					
					</select>
					</div>
					</div>
					
					
					<?php if( $status == "Contacted"){?>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Reason Call *</label>
					<select name="reason" class="form-control" onChange="document.demoform.submit()">
					<option value=" ">Pilih Reason Call</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT  * FROM app_tam_reason WHERE `jenis`= '$id_jenis' and `status`='$id_status' and `kategori`= '$id_kategori' and `aktif`='1'");
						
						$k=1;
						while ($rsk=mysqli_fetch_row($qsk))
						{
						if ($rsk[4]==$reason){$sel="selected";$follow=$rsk[6];}else{$sel="";}
						echo "<option value=\"$rsk[4]\" $sel> $rsk[4]</option>";
						$k++;
						}
					?>				
					
					</select>
					</div>
					</div>
					
					<?php if( $kategori == "Agree"){?>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Negosiasi Pembayaran *</label>
					<select id="se2" name="add" class="form-control" value="<? echo $add;?>"> 
					<option value="">Pilih hasil nego</option>
					<option value="Bebas denda"<?php if($add=="Bebas denda") {echo "selected";}?>> Bebas denda </option>
					<option value="Bayar lunas"<?php if($add=="Bayar lunas") {echo "selected";}?>> Bayar lunas </option>
					<option value="PDD 6 (Bayar 5 Bulan, Free 1 Bulan) "<?php if($add=="PDD 6 (Bayar 5 Bulan, Free 1 Bulan) ") {echo "selected";}?>> PDD 6 (Bayar 5 Bulan, Free 1 Bulan) </option>
					<option value="PDD 12 (Bayar 9 Bulan, Free 3 Bulan)"<?php if($add=="PDD 12 (Bayar 9 Bulan, Free 3 Bulan)") {echo "selected";}?>> PDD 12 (Bayar 9 Bulan, Free 3 Bulan) </option>
					<option value="Diangsur"<?php if($add=="Diangsur") {echo "selected";}?>> Diangsur </option>
					<option value="Diskon 5%"<?php if($add=="Diskon 5%") {echo "selected";}?>> Diskon 5% </option>
					<option value="Diskon 10%"<?php if($add=="Diskon 10%") {echo "selected";}?>> Diskon 10%</option>
					<option value="Diangsur"<?php if($add=="Diangsur") {echo "selected";}?>> Diangsur </option>
					<option value="Ganti Paket"<?php if($add=="Ganti Paket") {echo "selected";}?>> Ganti Paket</option>
					<option value="Denda + Diskon"<?php if($add=="Denda + Diskon") {echo "selected";}?>> Denda + Diskon</option>


					</select>
					</div>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">
					<table class="table table-hover table-striped">
					<tr>
						<div class="form-group" >
							<label class="control-label" style="color:#008B8B">Tanggal Janji Bayar *</label>
							<input class="form-control"
									   type="text"
									   name="tglbyr"
									   id="datepicker"
									   placeholder="ex: 2020-04-10"
									   required
								/>
						</div>
					</tr>		
					<?php } ?>
					
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Keterangan (Tidak boleh ada karakter " dan ') *</label>
					<textarea class="form-control" name="ket" rows="5" value="<?php echo $ket;?>"></textarea>
					</div>
					</div>
					<?php }if ( $status == "Follow Up Recall" || $status=="Not Contacted"){?>
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Keterangan</label>
					<textarea class="form-control" name="ket" rows="5" value="<?php echo $ket;?>"></textarea>
					</div>
					</div>
					<?php }?>
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
		<input type="submit" name="Save" class="btn btn-danger" value="Simpan"<?php if ( $status=='' ){ ?> disabled<?php } else if ( $status=='Contacted Recall' && $kategori=="" && $ket==""){ ?> disabled <?} else if ( $status=='Not Contacted' && $kategori==""){ ?> disabled<?php } else if ($status=="Contacted" && ($kategori=="" || $reason=="" )){?> disabled<?php }else if ($status=="Follow Up Recall" && $kategori=="" ){?> disabled<?php }?>>

                
				</form>
				</div>
				</div>	

				</div>
			</div>
		</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>