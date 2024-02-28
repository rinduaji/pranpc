<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
//$tgl = date("Y-m-d H:i:s");
if($Login!=''){$wlogin="AND a.login = '$Login'";}
if($date!=''){$dt = explode("-",trim($date)); $tgl="$dt[2]-$dt[1]-$dt[0]";}



?>

<!doctype html>
<html lang="en">
	<title>App Pra NPC</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='form_tot_approve.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>REKAP PEROLEHAN QCO</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						<tr>
							<div class="form-group">
								<label style="color:#00BFFF">Tanggal</label>
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
						<?php if (isset($_POST['search'])){ ?>
						<div>
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title">Rekap QCO</h4>
								</div>
								<div class="table-responsive">									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center" style="color:#008B8B">No.</th>
											<th align="center" style="color:#008B8B">Login</th>
											<th align="center" style="color:#008B8B">Site</th>
											<th align="center" style="color:#008B8B">Nama&nbsp;QCO</th>
											<th align="center" style="color:#008B8B">Jumlah</th>
											<th align="center" style="color:#008B8B">Action</th>
										</thead>
										<tbody>
										<?php
										if($_POST){
											$query="
													select app_tam_data2.upd_qco AS Login,
													cc147_main_users_extended.`user2` AS Nama_QCO,
													cc147_main_users_extended.`user5` AS Site,
													Count(*) as Jml
													FROM
													app_tam_data2
													INNER JOIN cc147_main_users_extended ON app_tam_data2.upd_qco = cc147_main_users_extended.user1 
													WHERE `tgl_qco1` BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59'
													and upd_qco is NOT null 
													and rec_qco is not null
													group by upd_qco";
											//echo "$query";
											$no=1;$jml=0;
											$hasil = mysqli_query($con,$query) or die ("Query gagal!");
											while($data = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Login']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Site']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Nama_QCO']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Jml']."</th>
												
												";
											
											if ($jb=="Agent" || $login<>""){
											echo "<th align=\"center\" type=\"submit\" ><a href=\"form_tot_approve.php?mode=detail&Log=$data[Login]&nm=$data[Nama_QCO]&tgl=$tgl\">Detail</a></th></tr>";}
											$no = $no + 1;
											$jml= $jml+$data['Jml'];
											}
											echo"<tr><th align=\"center\"></th>
												<th align=\"center\"></th>
												<th align=\"center\">Total</th>
												<th align=\"center\">$jml</th>												
												<th align=\"center\"></th>
												</tr>
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
				<?php } ?>
				<?php if ($mode == 'detail'){?>
								<div>									
								<table class="table table-hover table-striped">
									<thead>
										<tr>
										<td >
										<td ><b>Tanggal</b></td>
										<td ><b>:</b></td>
										<td ><b><?php echo "$tgl";?></b></td>
										</tr>
										<td >
										<td ><b>Login ID QCO</b></td>
										<td ><b>:</b></td>
										<td ><b><?php echo "$Log";?></b></td>
										</tr>
										<td >
										<td ><b>Nama</b></td>
										<td ><b>:</b></td>
										<td ><b><?php echo "$nm";?></b></td>
										</tr>
									</thead>
								</table>
								</div>
								<br>
								<div class="table-responsive">									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center" style="color:#008B8B">No.</th>
											<th align="center" style="color:#008B8B">Tanggal</th>
											<th align="center" style="color:#008B8B">Login Agent</th>
											<th align="center" style="color:#008B8B">Nama Agent</th>
											
											<th align="center" style="color:#008B8B">No Fastel</th>
											<th align="center" style="color:#008B8B">Nama DM</th>
											<th align="center" style="color:#008B8B">No Telpon</th>
											<th align="center" style="color:#008B8B">Jenis Call</th>
											<th align="center" style="color:#008B8B">Reason Call</th>
											<th align="center" style="color:#008B8B">Input</th>
											<th align="center" style="color:#008B8B">Rec. QCO</th>
											<th align="center" style="color:#008B8B">Keterangan</th>
										</thead>
										<tbody>		
										<?php
										$query="SELECT a.id,a.tgl,a.login,b.user2,a.fastel,a.nama_dm,a.tlp,a.jenis,a.reason,a.ket,a.input,a.upd_qco,a.rec_qco FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 WHERE a.tgl_qco1 between '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.upd_qco = '$Log' and rec_qco is not null";
											//echo "$query";
											$no=1;$jml=0;
											$hasil = mysqli_query($con,$query) or die ("Query gagal!");
											while($dat = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
												<th align=\"center\" style=\"font-size:10px\">".$dat['tgl']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$dat['login']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$dat['user2']."</th>
												
												<th align=\"center\" style=\"font-size:10px\">".$dat['fastel']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$dat['nama_dm']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$dat['tlp']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$dat['jenis']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$dat['reason']."</th>												
												<th align=\"center\" style=\"font-size:10px\">".$dat['input']."</th>												
												<th align=\"center\" style=\"font-size:10px\">".$dat['rec_qco']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$dat['ket']."</th>
												</tr>
												";
												$no = $no + 1;
											}
										 }?>
				</div>		
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>

<?php	require_once("../deft_foo.php"); ?>
