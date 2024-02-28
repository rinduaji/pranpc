<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
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
					
			
					<form id='input' name="demoform" action='search.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>SEARCH ORDER TRANSAKSI</b>
                        </div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						<tr>
							<div class="form-group">
								<label style="color:#008B8B">No Plg/No Inet</label>
								<input class="form-control" name="pelanggan" >
							</div>
						</tr>
						<tr>	
							<div class="form-group">
								<label style="color:#008B8B">No Fastel</label>
								<input class="form-control" name="fastel" >
							</div>							
						</tr>
						<tr>
							<input name="search" type="submit" class="btn btn-danger" Value="Search">
						</tr>
						</table>
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Hasil Searching</h4>
								</div>
								<div style="overflow-x:auto;">
									
									<table id="data-table" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">Tgl</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Site</th>
											<th align="center"><font color="red" face="Tahoma" size="2">No Plg</th>
											<th align="center"><font color="red" face="Tahoma" size="2">No Fastel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama DM</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Telp</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Penerima</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Reg</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Valid</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Reason Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Input</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Ket</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Upd QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekom QCO</th>
										</thead>
										<tbody>
										<?php
										if (isset($_POST['search'])){
											if ($pelanggan=="" AND $fastel=="")
											{  
												echo "<div class=\"alert alert-danger\">Mohon periksa kembali! No Pelanggan atau Fastel belum di isi !</div>";
											}
											
											$query="SELECT a.tgl,a.login,b.user2,b.user5,a.no_pelanggan,a.fastel,a.nama_dm,a.tlp,a.penerima,a.reg,a.jenis,a.`status`,a.valid,a.kategori,a.reason,a.ket,a.input,a.upd_qco,a.rec_qco
											FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
											WHERE b.user1 = a.login AND (a.no_pelanggan like '$pelanggan' OR a.fastel like '$fastel') ";
											$hasil = mysqli_query($con,$query) or die ("Query gagal!");
											while($data = mysqli_fetch_array($hasil)) {
											echo"<th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['user5']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['no_pelanggan']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>										
												<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['tlp']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['penerima']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['reg']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['ket']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
												</tr>
												";
											}

										}
										?>
										</tbody>
									</table>
									
								</div>
							</div>
						</div>

                    
                </div>
						
						
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>