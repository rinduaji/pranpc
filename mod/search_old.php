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
						<div>
						<div align="center" class="panel-heading">
                            <b>SEARCH ORDER TRANSAKSIONAL</b>
                        </div>
						<div class="row">
						<div align="center" class="col-md-4">
						<table class="table table-hover table-striped">
						<tr>
							<div class="form-group">
								<label>No Pelanggan</label>
								<input class="form-control" name="pelanggan" >
							</div>
						</tr>
						<tr>	
							<div class="form-group">
								<label>No Fastel</label>
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
									<h4 class="title">Hasil Searching</h4>
								</div>
								<div class="table-responsive">
									
									<table id="data-table" class="table table-hover table-striped">
										<thead>
											<th align="center">Tanggal.</th>
											<th align="center">Login</th>
											<th align="center">Agent</th>
											<th align="center">No Pelanggan</th>
											<th align="center">Nama DM</th>
											<th align="center">Telp</th>
											<th align="center">Reg.</th>
											<th align="center">Jenis Call</th>
											<th align="center">Status Call</th>
											<th align="center">Kategori</th>
											<th align="center">Segment</th>
											<th align="center">Reason Call</th>
											<th align="center">Keterangan</th>
										</thead>
										<tbody>
										<?php
										if (isset($_POST['search'])){
											if ($pelanggan=="" AND $fastel=="")
											{  
												echo "<div class=\"alert alert-danger\">Mohon periksa kembali! No Pelanggan atau Fastel belum di isi !</div>";
											}
											
											$query="SELECT a.tgl,a.login,b.user2,a.no_pelanggan,a.nama_dm,a.tlp,a.reg,a.jenis,a.`status`,a.kategori,a.segment,a.reason,a.ket
											FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
											WHERE b.user1 = a.login AND (a.no_pelanggan like '$pelanggan' OR a.fastel like '$fastel') ";
											$hasil = mysqli_query($con,$query) or die ("Query gagal!");
											while($data = mysqli_fetch_array($hasil)) {
											echo"<th align=\"center\">".$data['tgl']."</th>
												<th align=\"center\">".$data['login']."</th>
												<th align=\"center\">".$data['user2']."</th>
												<th align=\"center\">".$data['no_pelanggan']."</th>
												<th align=\"center\">".$data['nama_dm']."</th>
												<th align=\"center\">".$data['tlp']."</th>
												<th align=\"center\">".$data['reg']."</th>
												<th align=\"center\">".$data['jenis']."</th>
												<th align=\"center\">".$data['status']."</th>
												<th align=\"center\">".$data['kategori']."</th>
												<th align=\"center\">".$data['segment']."</th>
												<th align=\"center\">".$data['reason']."</th>
												<th align=\"center\">".$data['ket']."</th></tr>
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
						
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>