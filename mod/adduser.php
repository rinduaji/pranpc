<?php
require_once("../deft_nav.php");
//include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
//$login = $_SESSION['username'];
//$nama = $_SESSION['name'];
$con=mysqli_connect("10.194.176.158","appdev","appdev123","pranpc");
$tgl = date("Y-m-d H:i:s");
$blnin=array('','JANUARI','FEBRUARI','MARET','APRIL','MEI','JUNI','JULI','AGUSTUS','SEPTEMBER','OKTOBER','NOVEMBER','DESEMBER');

if($save){
	
	$username = $txtlogin;
	//echo "$txtlogin";
	$sql="select user_id from cc147_main_users where username='$username' ";
	//echo "$sql";
    $hasil=mysqli_query($con,$sql);
    $row=mysqli_fetch_row($con,$hasil);
    if ($row[0]<>''){
    	
	$rep="Penambahan cc147_main_users gagal.<br>";
}
		else{
	$nama=$txtnama;
	$email = $username."@cctelkom.web.id";
	$password = md5('infomedia');
   $sekarang=date("Y-m-d H:i:s");
   $bulanrek=date("n");
   $tahunrek=date("Y");
   $sarea=$area;
  // $sjabat='Agent TAM';
   $skelompok='43';
   $mktime=mktime();
   
   
	
   $sql3="INSERT INTO cc147_main_users (username, user_email, user_password, user_regdate, user_avatar, name,user_allow_pm,user_allow_pm_file) 
   								VALUES ('$username', '$email', '$password','$mktime' , 'gallery/blank.gif', '$nama', '0', '0')";
   
   //echo $sql3."<br>";

   if(!mysqli_query($con,$sql3)) {$rep="Penambahan cc147_main_users gagal.<br>";}
   
    $sql="select user_id from cc147_main_users where username='$username'";
    $hasil=mysqli_query($con,$sql);
    $row=mysqli_fetch_row($hasil);
    $id_cc147_main_user=$row[0];
	
   
   $sql4="INSERT INTO cc147_main_users_extended (id, user_id, user1,user2,user3,user4,user5,user12,user13) values ('$id_cc147_main_user','$id_cc147_main_user','$txtlogin','$nama','$sjabat','$skelamin','$sarea','nopict.jpg','AKTIF')";
   if(!mysqli_query($con,$sql4)) {$rep="Penambahan cc147_main_users_extended gagal.<br>";}
   //echo $sql4."<br>";

   $sql6="insert into cc147_main_bbuser_group values ('$skelompok','$id_cc147_main_user','0')";
   if(!mysqli_query($con,$sql6)) {$rep="Penambahan cc147_main_bbuser_group gagal.<br>";}
   //echo $sql6."<br>";
	$jbt=substr($sjabat,0,5);
	if($jbt=='Agent'){
   $sql7="insert into app_kelompok values ('$blnin[$bulanrek]-$tahunrek','0','$id_cc147_main_user','0','$skelamin','0','$sjabat','auto','$sekarang')";
   //echo $sql7;
   if(!mysqli_query($con,$sql7)) {$rep="Penambahan app kelompok gagal.<br>";}
	}	
	
	}
    	
	 $txtlogin="";
   $txtnama="";
	
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
							<h4 class="title">CREATE USER<small>  CWC  </small></h4>
							
							

						</div>
				
				<form id='input' name="demoform" action='' method='post' accept-charset='UTF-8'>
					<div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">login</label><br>
					<input class="form-control"
						   type="text"
						   name="txtlogin"	
						   value="<?php echo $txtlogin; ?>"										   
						   placeholder="masukkan login"	
						   onkeypress=""
						   required
					/>
					
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Nama</label>
					<input class="form-control"
						   type="text"
						   name="txtnama"
						   value="<?php echo $txtnama; ?>"
						   placeholder="masukkan Nama"	
						   onkeypress=""
						   required
					/>
					</div>
					</div>

					</div>
					
					
								
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label "style="color:#008B8B">Jenis Kelamin</label>
					<select id="se1" name="skelamin" class="form-control" value="<? echo $skelamin;?>"> 
					<option value="">Jenis Kelamin</option>
					<option value="Pria"<?php if($skelamin=="laki-laki") {echo "selected";}?>> laki-laki </option>
					<option value="Wanita"<?php if($skelamin=="perempuan") {echo "selected";}?>> perempuan </option>
					
					</select>
					</div>
					</div>
					</div>

					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Area</label>
					<select id="se1" name="area" class="form-control" value=""> 
					<option value="">Area</option>
					<option value="Bandung"<?php if($area=="Bandung") {echo "selected";}?>> Bandung </option>
					<option value="Medan"<?php if($area=="Medan") {echo "selected";}?>> Medan </option>
					<option value="Jakarta"<?php if($area=="Jakarta") {echo "selected";}?>> Jakarta </option>
					<option value="Semarang"<?php if($area=="Semarang") {echo "selected";}?>> Semarang </option>
					<option value="Surabaya"<?php if($area=="Surabaya") {echo "selected";}?>> Surabaya </option>
					<option value="Balikpapan"<?php if($area=="Balikpapan") {echo "selected";}?>> Balikpapan </option>
					<option value="Makassar"<?php if($area=="Makassar") {echo "selected";}?>> Makassar </option>
					</select>
					</div>
					</div>
					</div>

					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">jabatan</label>
					<select id="se1" name="sjabat" class="form-control" onChange="document.form1.submit()"> 
					 <?php 
					        $sql="select distinct(kodejabatan) from app_jabatan where status='Aktif' ";
							$hasil=mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($hasil)){
								?>
					<option value="<?php echo $row[0];?>" <?php if($sjabat==$row[0]) {echo "selected";}?>> <?php echo $row[0];?> </option>

					        <?php 
					    	}
					        ?>
					</select>
					</div>
					</div>
					</div>
					
				</div>
				</div>
				<input type="reset" class="btn btn-info" onclick="formReset('form'); return false; value="Reset">
		<input type="submit" name="save" class="btn btn-info" value="Simpan">

                
				</form>
				
				</div>
				</div>	

				</div>
			</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>