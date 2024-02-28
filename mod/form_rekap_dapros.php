<?php
require_once("../deft_nav.php");
include("../assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d H:i:s");
if($Login!=''){$wlogin="AND a.login = '$Login'";}
if($date!=''){$dt = explode("-",trim($date)); $tgl="$dt[2]-$dt[1]-$dt[0]";}

?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">		
					<form id='input' name="demoform" action='form_rekap_dapros.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>FORM DAPROS AGENT</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						<tr>
							<div class="form-group">
								<label>Tanggal</label>
								<input class="form-control"
										   type="text"
										   name="date"
										   id="datepicker"
										   placeholder="ex: 2018-12-31"
										   required
									/>
							</div>
						</tr>
						
						<tr>
							<input name="search" type="submit" class="btn btn-info" Value="Search">
						</tr>
						</table>
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title">Rekap DAPROS Agent</h4>
								</div>
								
								<div style="overflow-x:auto;">
									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">NO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Site</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Regional</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rule</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Work Order</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Return</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Decline</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login Webcare</th>
											
											
										</thead>
										<tbody>
										<?php
										if (isset($_POST['search'])){
											
											
											$query="SELECT 
											* FROM app_tam_dapros where tgl between '$tgl 00:00:00' and '$tgl 23:59:59'";
											//echo "$query";
											$no = 1;
											$hasil = mysqli_query($con,$query);
											while($data = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['site']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['reg']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['wo']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['retur']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['decline']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['webcare']."</th>
												
												";
												
											$no = $no + 1;
											
											}
											echo"<tr><th align=\"center\"></th>
												
												";
										}
										?>
										</tbody>
									</table>
									
								</div>
								
							</div>
						</div>
						</div>
						
						</div>
					</form>	
				</div>
			</div></div></div>
</html>
<?php	require_once("../deft_foo.php"); ?>