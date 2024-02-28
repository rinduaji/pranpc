<?php
require_once("../deft_nav.php");
include("../assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$site = $_SESSION['area'];
$tgl = date("Y-m-d H:i:s");

if (isset($_POST['Save']) ){

			if ($wo=="" or $return=="" or $decline=="" or $webcare=="")
			{	
			echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Input Anda ada yang belum di isi !</div>";
			}
			else
			{
				$sql="INSERT INTO app_tam_dapros (tgl,login,reg,jenis,wo,retur,decline,webcare,site) VALUES ('$tgl','$login','$reg','$jenis','$wo','$return','$decline','$webcare','$site')";
				echo $sql;
				$query = mysqli_query($con,$sql);
				//clearstatcache();
				$location="input_dapros.php";		
				echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
				//echo $sql;
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
							<h4 class="title">Data Prospek<small> Agent  <?php echo $nama; ?></small></h4>	
						</div>
				<form id='input' name="demoform" action='input_dapros.php' method='post' accept-charset='UTF-8'>
					<div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Jumlah WO</label><br>
					<input class="form-control"
						   type="text"
						   name="wo"	
						   value="<?php echo $wo; ?>"										   
						   placeholder="masukkan jml wo"	
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
					<label class="control-label">Jumlah Return</label>
					<input class="form-control"
						   type="text"
						   name="return"
						   value="<?php echo $return; ?>"
						   placeholder="masukkan jml return"	
						   onkeypress="return isNumberKey(event)"
						   required
					/>
					</div>
					</div>					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label">Jumlah Decline</label>
					<input class="form-control"
						   type="text"
						   name="decline"
						   value="<?php echo $decline; ?>"
						   placeholder="masukkan jml decline"
						   required
					/>
					</div>
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
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">				
					<label class="control-label">Campaign/Rule</label>
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
					<label class="control-label">Login MyCX</label>
					<input class="form-control"
						   type="text"
						   name="webcare"
						   value="<?php echo $webcare; ?>"
						   placeholder="masukkan login webcare"	
						   required
					/>
					</div>
					</div>		
					
				</div>
				</div>
				<input type="reset" class="btn btn-danger" onclick="formReset('form'); return false; value="Reset">
		        <input type="submit" name="Save" class="btn btn-danger" value="Simpan">

                
				</form>
				</div>
				</div>	

				</div>
			</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>