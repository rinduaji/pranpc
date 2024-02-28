<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$tgl = date("Y-m-d H:i:s");
if (isset($_POST['Save']) ){
	// status call: not connect	
	if($status=="Not Contacted" || $status=="Follow Up Recall")
		{   
			if ($pelanggan=="" or $fastel==""  or $login=="" or $nama_dm=="" or $tlp=="" or $reg=="" or $status=="" or $jenis=="" or $kategori=="")
			{	
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			}else{
				
				if ($status=="Not Contacted"  ){ $follow = '1';}
				elseif ($status=="Follow Up Recall") { $follow = '8';}


				//$telp="SELECT count(*) as jml FROM app_tam_data2 WHERE tlp = '$tlp'";
				//$tlep=mysqli_query($con,$telp);
				$sql="INSERT INTO app_tam_data2 (tgl,login,no_pelanggan,fastel,nama_dm,tlp,reg,jenis,`status`,kategori,ket,follow,valid,input,add_on_tsel,zone,add_on_wifi) VALUES ('$tgl','$login','$pelanggan','$fastel','$nama_dm','$tlp','$reg','$jenis','$status','$kategori','$ket','$follow','Not Valid','New','$add','$zone','$add_on_wifi')";
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
		if ($pelanggan=="" or $fastel==""  or $login=="" or $nama_dm=="" or $tlp=="" or $reg=="" or $status=="" or $jenis=="" or $kategori=="" or $reason=="" or $ket=="" or $follow=="")
		{	
		echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
		}else{
		  $sql="INSERT INTO app_tam_data2 (tgl,login,nama_dm,tlp,`status`,no_pelanggan,reg,fastel,penerima,relasi,jenis,kategori,segment,reason,Ket,follow,valid,input,add_on_tsel,zone,add_on_wifi) VALUES ('$tgl','$login','$nama_dm','$tlp','$status','$pelanggan','$reg','$fastel','$penerima','$relasi','$jenis','$kategori','$segment','$reason','$ket','$follow','Not Valid','New','$add','$zone','$add_on_wifi')";
		  $query = mysqli_query($con,$sql);
			//echo $sql;
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
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
					<div class="card card-plain">
						<div class="header">
							<h4 class="title">INPUT CWC <small>Form Input Data Agent <?php echo $nama; ?></small></h4>	
						</div>
				
				<form id='input' name="demoform" action='input.php' method='post' accept-charset='UTF-8'>
					<div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">No Pelanggan / No Internet</label><br>
					<input class="form-control"
						   type="text"
						   name="pelanggan"	
						   value="<?php echo $pelanggan; ?>"										   
						   placeholder="masukkan no pelanggan"	
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
					<label class="control-label">No Fastel</label>
					<input class="form-control"
						   type="text"
						   name="fastel"
						   value="<?php echo $fastel; ?>"
						   placeholder="masukkan no fastel"	
						   onkeypress="return isNumberKey(event)"
						   required
					/>
					</div>
					</div>					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Nama DM/ Pemilik</label>
					<input class="form-control"
						   type="text"
						   name="nama_dm"
						   value="<?php echo $nama_dm; ?>"
						   placeholder="masukkan nama pemilik"
						   required
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">No Telepon</label>
					<input class="form-control"
						   type="text"
						   name="tlp"
						   value="<?php echo $tlp; ?>"
						   placeholder="masukkan no telepon"	
						   onkeypress="return isNumberKey(event)"
						   required
					/>
					</div>
					</div>

					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Regional</label>
					<select id="se1" name="reg" class="form-control" value="<? echo $reg;?>"> 
					<option value="">Pilih Regional</option>
					<option value="I"<?php if($reg=="I") {echo "selected";}?>> I </option>
					<option value="II"<?php if($reg=="II") {echo "selected";}?>> II </option>
					<option value="III"<?php if($reg=="III") {echo "selected";}?>> III </option>
					<option value="IV"<?php if($reg=="IV") {echo "selected";}?>> IV </option>
					<option value="V"<?php if($reg=="V") {echo "selected";}?>> V </option>
					<option value="VI"<?php if($reg=="VI") {echo "selected";}?>> VI </option>
					<option value="VII"<?php if($reg=="VII") {echo "selected";}?>> VII </option>
					</select>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Offering</label>
					<select id="se2" name="zone" class="form-control" value="<? echo $zone;?>">
					<option value="">Pilih Offering</option>
					<option value="1" <?php if ($zone=="1"){echo "selected";}?>> 1</option>
					<option value="2" <?php if ($zone=="2"){echo "selected";}?>> 2</option>
					<option value="3" <?php if ($zone=="3"){echo "selected";}?>> 3</option>
					<option value="4" <?php if ($zone=="4"){echo "selected";}?>> 4</option>
					<option value="5" <?php if ($zone=="5"){echo "selected";}?>> 5</option>
					</select>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">				
					<label class="control-label">Campaign</label>
					<select  name="jenis" class="form-control" onChange="document.demoform.submit()">
					<option value=" ">Pilih Campaign</option>
					<?php  
						$qsk=mysqli_query($con,"SELECT * FROM app_tam_jenis WHERE `aktif`='1'");						
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
					<label class="control-label">Status call</label>
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
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Kategori</label>
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
					</div>
					<div>
					<?php if( $status == "Contacted"){?>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Reason Call</label>
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
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Selisih Harga</label>
					<input class="form-control"
						   type="text"
						   name="add"
						   value="<?php echo $add; ?>"
						   placeholder="Masukkan Selisih Harga"	
						   onkeypress="return isNumberKey(event)"
						   required
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Harga</label>
					<input class="form-control"
						   type="text"
						   name="add_on_wifi"
						   value="<?php echo $add_on_wifi; ?>"
						   placeholder="Masukkan Harga"	
						   onkeypress="return isNumberKey(event)"
						   required
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Nama Penerima</label>
					<input class="form-control"
						   type="text"
						   name="penerima"
						   value="<?php echo $penerima; ?>"
						   placeholder="Masukkan Nama Penerima"	
						   required
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Relasi</label>
					<select id="se2" name="relasi" class="form-control" value="<?php echo $relasi;?>">
					<option value="">Pilih Relasi</option>
					<option value="Pemilik"  >Pemilik</option>
					<option value="Suami/istri"  >Suami/istri</option>
					<option value="Anak"  >Anak</option>
					<option value="Anggota keluarga lain"  >Anggota keluarga lain</option>
					<option value="Sewa / Kontrak / Kos"  >Sewa / Kontrak / Kos</option>
					<option value="Karyawan"  >Karyawan</option>
					<option value="Lain-lain"  >Lain-lain</option>
					</select>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Segmen</label>
					<select id="se2" name="segmen" class="form-control" value="<?php echo $segmen;?>">
					<option value="Kantor"  >Kantor</option>
					<option value="Rumah"  >Rumah</option>
					<option value="Ruko/Rukan"  >Ruko/Rukan</option>
					<option value="Warnet"  >Warnet</option>
					<option value="Yayasan/Sekolah"  >Yayasan/Sekolah</option>
					<option value="Rumah Sakit"  >Rumah Sakit</option>
					<option value="Lain - lain"  >Lain - lain</option>
					</select>
					</div>
					</div>
					</div>
					
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Keterangan (Tidak boleh ada tanda " dan ')</label>
					<textarea class="form-control" name="ket" rows="5" value="<?php echo $ket;?>"></textarea>
					</div>
					</div>
					<?php }if ( $status == "Follow Up Recall" || $status=="Not Contacted"){?>
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label">Keterangan</label>
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
		<input type="submit" name="Save" class="btn btn-danger" value="Approve"<?php if ( $status=='' ){ ?> disabled<?php } else if ( $status=='Contacted Recall' && $kategori=="" && $ket==""){ ?> disabled <?} else if ( $status=='Not Contacted' && $kategori==""){ ?> disabled<?php } else if ($status=="Contacted" && ($kategori=="" || $reason=="" )){?> disabled<?php }else if ($status=="Follow Up Recall" && $kategori=="" ){?> disabled<?php }?>>

                
				</form>
				</div>
				</div>	

				</div>
			</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>