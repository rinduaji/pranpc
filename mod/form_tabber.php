<?php
require_once("../deft_nav.php");
include("../assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$ids=$id;
$not_handel=0;
$tgl = date("Y-m-d H:i:s");

$query="SELECT a.id,a.tgl,a.login,a.no_pelanggan,a.fastel,a.nama_dm,a.tlp,a.reg,a.jenis,a.`status`,a.kategori,a.reason,a.ket,b.`name`,a.upd_qco,c.poin
FROM app_tam_data2 AS a INNER JOIN cc147_main_users AS b ON a.login = b.username INNER JOIN app_tam_jenis AS c ON a.jenis = c.keterangan WHERE a.id = '$id'";
//echo $query;
$hasil = mysqli_query($con,$query);
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
if ($data['upd_qco']<>"" && $data['upd_qco']<>$login)
{
	//clearstatcache();
	$location="form_tabber.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Approval ini sudah di handel $data[upd_qco]</div>";
	
	$not_handel=1;
}
else if ($login=='')
{
	//clearstatcache();
	$location="form_tabber.php";		
	//echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Session user terlogout</div>";
	
	$not_handel=1;
}
else {
	if ($login<>''){
	$sql="UPDATE `app_tam_data2` SET upd_qco='$login' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	}
}


if (isset($_POST['valid']) ){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$pn="$data[poin]";
	$sql="UPDATE `app_tam_data2` SET follow = '6' , `rec_qco`='$rec_qco', upd_qco='$login' , tgl_qco1='$tgl' , valid='Valid', prof_hp='$pn' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}
}else if (isset($_POST['tl']) ){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$sql="UPDATE `app_tam_data2` SET follow = '3', `rec_qco`='$rec_qco', upd_qco='$login' , tgl_qco1='$tgl' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}}
else if (isset($_POST['novalid']) ){
if ($rec_qco=="") {
	clearstatcache();
	$location="form_tabber.php?id=$ids";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
	echo "<div class=\"alert alert-danger\">Rekomendasi QCO Harus Diisi!</div>";
}else{
	$sql="UPDATE `app_tam_data2` SET follow = '6', `rec_qco`='$rec_qco', upd_qco='$login' , tgl_qco1='$tgl',valid='Not Valid' WHERE `id`='$ids'";
	$query=mysqli_query($con,$sql);
	clearstatcache();
	$location="myhandel.php";		
	echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
}}

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
				
				<form id='input' name="demoform" action='form_tabber.php?id=<?php echo "$ids";?>' method='post' accept-charset='UTF-8'>
					<div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Login Agent</label><br>
					<input class="form-control"
						   type="text"
						   name="login"										  
						   value="<?php echo $data['login']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Nama Agent</label><br>
					<input class="form-control"
						   type="text"
						   name="login"										  
						   value="<?php echo $data['name']; ?>"
						   readonly
					/>
					</div>
					</div>
					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Tanggal</label><br>
					<input class="form-control"
						   type="text"
						   name="tgl"										  
						   value="<?php echo $data['tgl']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">No Pelanggan</label><br>
					<input class="form-control"
						   type="text"
						   name="pelanggan"	
						   value="<?php echo $data['no_pelanggan']; ?>"
						   readonly						   
					/>					
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">No Fastel</label>
					<input class="form-control"
						   type="text"
						   name="fastel"
						   value="<?php echo $data['fastel']; ?>"
						   readonly
					/>
					</div>
					</div>					
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Nama DM/Pemilik</label>
					<input class="form-control"
						   type="text"
						   name="nama_dm"
						   value="<?php echo $data['nama_dm']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">No Telepon</label>
					<input class="form-control"
						   type="text"
						   name="tlp"
						   value="<?php echo $data['tlp']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Regional</label>
					<input class="form-control"
						   type="text"
						   name="reg"
						   value="<?php echo $data['reg']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Jenis Call / Poin</label>
					<input class="form-control"
						   type="text"
						   name="jenis"
						   value="<?php echo $data['jenis']; echo' / '; echo $data['poin']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
					<div class="form-group">				
					<label class="control-label" style="color:#008B8B">Status call</label>
					<input class="form-control"
						   type="text"
						   name="status"
						   value="<?php echo $data['status']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Kategori</label>
					<input class="form-control"
						   type="text"
						   name="kategori"
						   value="<?php echo $data['kategori']; ?>"
						   readonly
					/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Reason Call</label>
					<input class="form-control"
						   type="text"
						   name="reason"
						   value="<?php echo $data['reason']; ?>"
						   readonly
					/>
					</div>
					</div>
					</div>	
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Keterangan Agent</label>
					<textarea class="form-control" name="ket"  rows="5" ><?php echo $data['ket'];?></textarea>
					</div>
					</div>
					<div class="col-md-12">
					<div class="form-group">
					<label class="control-label" style="color:#008B8B">Rekomendasi QCO</label>
					<textarea class="form-control" name="rec_qco"  rows="5" ></textarea>
					</div>
					</div>
				</div>
				</div>
				<?php if ($not_handel == 1 OR $login == '')
				{ 
					?><a href="http://localhost/apptam/mod/approve.php">
					   <input type="button" value="Back" />
					  </a><?php
				}
				else if ($not_handel == 0 OR $login <> ''){
				?>
				<input type="submit" name="valid" class="btn btn-info" value="Valid">
				<input type="submit" name="tl" class="btn btn-info" value="Return to TL">
				<input type="submit" name="novalid" class="btn btn-info" value="Not Valid">
				<?php } ?>
                
				</form>
				
				</div>
				</div>	

				</div>
			</div>
		</div>
<?php	require_once("../deft_foo.php"); ?>