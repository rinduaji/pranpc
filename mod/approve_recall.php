<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];

$tgl=date("Y-m-d");
$prevN = mktime(0, 0, 0, date("m"), date("d") - 70, date("Y"));
$last = date("Y-m-d", $prevN);

if($jb=="Tabber"){$whr="WHERE a.follow = '2' AND a.input = 'Recall' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY `id`";}
else {$whr="WHERE a.follow ='9' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' ORDER BY `id`";}

$Need_taber="SELECT count(*) as jml FROM app_tam_data2 WHERE follow = '2' AND input = 'Recall'";
$Ned_taber=mysqli_query($con,$Need_taber);
$hasil_taber=mysqli_fetch_row($Ned_taber);
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='approve_recall.php' method='post' accept-charset='UTF-8'>
								<div class="row">
								<div class="col-md-12">
								<div class="card ">
									<div class="header">
										<h4 class="title">APPROVE ORDER RECALL TRANSAKSI QCO</h4>
										</div>
								<div style="overflow-x:auto;">									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">No</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</th>
											
											<th align="center"><font color="red" face="Tahoma" size="2">No Fastel</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama DM</th>
											<th align="center"><font color="red" face="Tahoma" size="2">No Telpon</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Jenis Call</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Reason Call</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Input</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Keterangan Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login QCO1</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi QCO1</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login TL</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Rekomendasi TL</th>	
											<th align="center"><font color="red" face="Tahoma" size="2">Action</th>	
											
										</thead>
										<tbody>
										<?php
	
										$query="SELECT a.id,a.tgl,a.login,b.user2,a.fastel,a.nama_dm,a.tlp,a.jenis,a.reason,a.ket,a.upd_qco,a.rec_qco,a.upd_tl,a.rec_tl,a.upd_qco,a.input ,a.upd_suport FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr";
										//echo "$query";
										$no = 1;
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tgl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>
															
											<th align=\"center\" style=\"font-size:10px\">".$data['fastel']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['nama_dm']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tlp']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['reason']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['input']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['ket']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['upd_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_qco']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['upd_tl']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['rec_tl']."</th>
											
											";
										if ($jb=="Tabber" && $data['upd_qco']==""){echo "<th align=\"center\"><a href=\"form_tabber.php?id=$data[id]\">Approve</a></th>";}
										else if ($jb=="Tabber" && $data['upd_qco']<>"$uname"){echo "<th align=\"center\">Handel $qco</th>";}
										else if ($jb=="Tabber" && $data['upd_qco']=="$uname"){echo "<th align=\"center\"><a href=\"form_tabber.php?id=$data[id]\">My Approve</a></th>";}
										else if ($jb=="Supervisor"){echo "<th align=\"center\"><a href=\"form_spv.php?id=$data[id]\">Approve</a></th>";}										
										else if ($jb=="Koordinator"){echo "<th align=\"center\">$qco | $tl </a></th>";}
										else { echo "<th align=\"center\">#</a></th>";}
										
										$no = $no + 1;	
										}
										echo"</tr>";

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