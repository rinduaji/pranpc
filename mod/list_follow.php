<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d H:i:s");

if($login<>""){ $whr= "AND login='$login'";}
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='list_follow.php' method='post' accept-charset='UTF-8'>
						<div>
						
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title">LIST FOLLOW UP</h4>
								</div>
								<div style="overflow-x:auto;">
									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal.</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											
											<th align="center"><font color="red" face="Tahoma" size="2">No Fastel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama DM</th>
											<th align="center"><font color="red" face="Tahoma" size="2">No Telp</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan.</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi QCO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi TL</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>
										</thead>
										<tbody>
										<?php
	
										$query="SELECT id,tgl,login,fastel,nama_dm,ket,tlp,rec_qco,rec_tl FROM app_tam_data2  WHERE follow = '8' AND input ='New' $whr ORDER BY tgl Desc";
										
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr><th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											
											<th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tlp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ket']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_tl']."</th>
											";
										if ($jb=="Agent" || $login<>""){
										echo "<th align=\"center\" type=\"submit\"><a href=\"form_follow.php?id=".$data['id']."\">Follow Up</a></th>";}
											
										}
										echo"</tr>";

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