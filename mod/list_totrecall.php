<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d H:i:s");

?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='list_totrecall.php?mode=list' method='post' accept-charset='UTF-8'>
						<div>
						
						
							<div class="card ">
								<div class="header">
									<h4 class="title">LIST TOTAL RECALL AGENT</h4>
								</div>
							
								<div class="row">
								<div class="col-md-12">
								<div class="table-responsive">
									<?php if ($mode=='list'){ ?>
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">No</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jumlah</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>											
										</thead>
										<tbody>
										<?php
	
										$query="SELECT Distinct a.login,b.user2,count(*) as jumlah FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1  WHERE  follow ='5' GROUP by a.login ASC ";
										$no = 1;
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jumlah']."</th>				
											
											";
										$log = $data['login'];
										if ($jb=="Agent" || $login<>""){
										echo "<th align=\"center\" type=\"submit\" ><a href=\"list_totrecall.php?mode=detail&log=$log\">Detail</a></th>";}
										$no = $no + 1;	
										}
										echo"</tr>";

										?>
										</tbody>
									</table>
									<?php } 
									else if ($mode=='detail'){
									?>
									<div class="row">
									<div class="col-md-12">
									<div style="overflow-x:auto;">
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center">No</th>											
											<th align="center">Tanggal</th>
											<th align="center">Login Agent</th>
											<th align="center">Nama Agent</th>
											<th align="center">No Pelanggan</th>
											<th align="center">Nama Pelanggan</th>
											<th align="center">No Fastel</th>												
											<th align="center">Reg</th>	
											<th align="center">Jenis</th>	
											<th align="center">Status</th>	
											<th align="center">Nama DM</th>	
											<th align="center">Hub. DM</th>	
											<th align="center">Kategori</th>	
											<th align="center">Segmen</th>	
											<th align="center">Reason Call</th>	
											<th align="center">Input Call</th>	
											<th align="center">Keterangan</th>	
											<th align="center">Rekomendasi QCO</th>	
											<th align="center">Upd QCO</th>		
										</thead>
										<tbody>
										<?php
	
										$query="SELECT a.tgl,a.login,b.user2,a.no_pelanggan,a.nama_dm,a.fastel,a.reg,a.jenis,a.`status`,a.penerima,a.relasi,a.kategori,a.segment,a.reason,a.input,a.ket,a.upd_qco, a.rec_qco  FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1  WHERE  a.follow ='5' AND a.login = '$log'";
										$no = 1;
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr><th align=\"center\">$no</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['no_pelanggan']."</th>				
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reg']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['penerima']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['relasi']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['segment']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ket']."</th>											
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>

											";
										$no = $no + 1;
											
										}
										echo"</tr>";

										?>
										</tbody>
									</table>
									</div>
									</div>
									</div>
									
									
									<?php } ?>
								</div>
								</div>
								</div>
							
						
						
						</div>
					</form>	
					</div>
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>