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
					
			
					<form id='input' name="demoform" action='list_follow_profilling.php' method='post' accept-charset='UTF-8'>
						<div>
						
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title">LIST FOLLOW UP PROFILLING</h4>
								</div>
								<div style="overflow-x:auto;">
									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal.</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											
											<th align="center"><font color="red" face="Tahoma" size="2">No Fastel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Email DB Profile</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Email MYIH</th>
											<th align="center"><font color="red" face="Tahoma" size="2">HP DB Profile</th>
											<th align="center"><font color="red" face="Tahoma" size="2">HP MYIH</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Speed</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal Verifikasi</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan.</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>
										</thead>
										<tbody>
										<?php
	
										$query="SELECT * FROM app_tam_profilling  WHERE follow = '8' AND input ='New' $whr ORDER BY tgl Desc";
										
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr><th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['email_dbprofile']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['email_myih']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['hp_dbprofile']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['hp_myih']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['speed']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl_verifikasi']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['keterangan']."</th>
											";
										if ($jb=="Agent" || $login<>""){
										echo "<th align=\"center\" type=\"submit\"><a href=\"form_follow_profilling.php?id=".$data['id']."\">Follow Up</a></th>";}
											
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