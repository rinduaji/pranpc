<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
if($tgl==''){$tgl = date("Y-m-d H:i:s");}
if($login!=''){$wlogin="AND a.login = '$login'";}
if($Login!='') {$wlogin="AND a.login = '$Login'";}
if($date!=''){$dt = explode("-",trim($date)); $tgl="$dt[2]-$dt[1]-$dt[0]";}

$dataPerPage = 10;
if(isset($_GET['page']))
{
	$noPage = $_GET['page'];
}
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;
$Page = $offset;



?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='form_agent.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>ORDER TRANSAKSI</b>
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
							<div class="form-group">
								<label style="color:#00BFFF">Login Agent</label>
								<input class="form-control" 
										type="text" 
										name="Login" 
										<?php if ($jb=="Agent"){?> readonly <?php } ?> 
										value='<?php echo "$login";?>'/>
							</div>							
						</tr>
						<tr>
							<input name="search" type="submit" class="btn btn-info" Value="Search">
						</tr>
						</table>
						</div>
						</div>
						<div>
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title">Hasil Searching</h4>
								</div>
								<div style="overflow-x:auto;">								
									<table id="data-table" width="170px" class="table table-hover table-striped">
										<thead>
										    <th align="center"><font color="red" face="Tahoma" size="2">No</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tgl</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Agent</th>
											
											<th align="center"><font color="red" face="Tahoma" size="2">Fastel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama DM</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Telp</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Janji Bayar</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Reg.</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Status Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Validasi</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekom QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Kategori</th>									
											<th align="center"><font color="red" face="Tahoma" size="2">Reason Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Ket</th>
										</thead>
										<tbody>
										<?php
										
											$query="SELECT a.tgl,a.login,b.user2,a.fastel,a.nama_dm,a.tlp,a.penerima,a.reg,a.jenis,a.`status`,a.valid,a.rec_qco,a.kategori,a.reason,a.ket FROM
													app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' $wlogin ORDER BY a.tgl DESC LIMIT $offset, $dataPerPage";
											//echo "$query";
											$Page = $Page + 1;
											$hasil = mysqli_query($con,$query) or die ("Query gagal!");
											while($data = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">$Page</th>
											    <th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
												
												<th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['tlp']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['penerima']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['reg']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['status']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['valid']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['kategori']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['ket']."</th></tr>
												";
												$Page = $Page + 1;
											}
											
										
										?>
										</tbody>
									</table>
									<table>
									<?php
									$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' $wlogin ";
									//echo $query;
									$hasil   = mysqli_query($con,$query);
									$data    = mysqli_fetch_array($hasil);
									$jumData = $data['jumData'];
									$jumPage = ceil($jumData/$dataPerPage);
									if ($noPage > 1) echo  "<td><a href='form_agent.php?page=".($noPage-1)."&site=$site&tgl=$tgl&Login=$Login'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
									echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
									if ($noPage < $jumPage)  echo "<td><a href='form_agent.php?page=".($noPage+1)."&site=$site&tgl=$tgl&Login=$Login'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> "; 
									echo "</br><table><td><strong>Total Data : $jumData</strong></table></td>";
									
									?>
									</table>
								</div>
								</div>
								
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