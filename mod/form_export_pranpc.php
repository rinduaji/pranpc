<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];


?>

<!doctype html>
<html lang="en">
	<title>App CHURN</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='export_csv_pranpc.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>EXPORT ALL DATA CHURN</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						<tr>
							<div class="form-group">
								<label style="color:#00BFFF">Tanggal Awal</label>
								<input class="form-control"
										   type="date"
										   name="date_awal"
										   required
									/>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<label style="color:#00BFFF">Tanggal Akhir</label>
								<input class="form-control"
										   type="date"
										   name="date_akhir"
										   required
									/>
							</div>
						</tr>
						<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#00BFFF">Agent Site</label>
								<select  name="site" class="form-control" value="<? echo $exp?>">	
									<option value="AllArea"	>All Area</option>
									<option value="Medan"	>Medan</option>
									<option value="Bandung"	>Bandung</option>
									<option value="Jakarta"	>Jakarta</option>
									<option value="Semarang"	>Semarang</option>
									<option value="Surabaya"	>Surabaya</option>
									<option value="Balikpapan"	>Balikpapan</option>
									<option value="Makassar"	>Makassar</option>
									
								</select>		
								</label>
								
							</div>							
						</tr>
						<tr>
							<input name="search" type="submit" class="btn btn-info" Value="Export To CSV">
						</tr>
						</table>
						</div>
						</div>
<?php 

if ($_POST['date'] And $_POST['exp'] And $_POST['site'])
{
	echo "$tgl"; 
	//include "export.php";
}

?>
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>