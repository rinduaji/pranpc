<?php
require_once("../deft_nav.php");
include("./assets/conn.php");
if ($_GET) {
	extract($_GET, EXTR_OVERWRITE);
}
if ($_POST) {
	extract($_POST, EXTR_OVERWRITE);
}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d");
$prevN = mktime(0, 0, 0, date("m"), date("d") - 70, date("Y"));
$last = date("Y-m-d", $prevN);
if ($Login != '') {
	$wlogin = "AND a.login = '$Login'";
}
if ($date != '') {
	$dt = explode("-", trim($date));
	$tgl = "$dt[2]-$dt[1]-$dt[0]";
}
if ($logagent <> '') {
	$wr = "AND a.login = $logagent";
}
if ($fastel <> '') {
	$wr = "AND a.fastel = $fastel";
}
if ($site == 'AllArea') {
	$area = "";
} else {
	$area = "b.user5 = '$site' AND";
}


$dataPerPage = 300;
if(isset($_GET['page']))
{
$noPage = $_GET['page'];
}
else $noPage = 1;
$offset = ($noPage - 1) * $dataPerPage;



$query = "SELECT * FROM app_wo_profilling WHERE login='$login' and status='0' AND tgl_upload = '$tgl' ORDER BY lup ASC";


//$Page = $offset;
?>

<!-- <!doctype html> -->
<html lang="en">
<title>App TAM</title>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					<div align="center" class="panel-heading">
						<b>DATA WO PROFILLING</b>
					</div>
					<div>
						<div>
							<div class="row">
								<div class="col-md-12">
									<div class="card" style="margin-top: 20px;">
										<div class="header">
											<h4 class="title" style="color:#008B8B">DATA WO PROFILLING</h4>
										</div>
										<div style="overflow-x:auto;">
											<table class="table table-hover table-striped">
												<thead>
													<th align="center">
														<font color="red" face="Tahoma" size="2">No.
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Tgl Upload
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Fastel
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Email_DBProfile
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Email_MyIH
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">HP_DBProfile
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">HP_MyIH
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Speed
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Kategori
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">LUP
													</th>
													<th align="center">
														<font color="red" face="Tahoma" size="2">Action
													</th>
												</thead>
												<tbody>
													<?php
													$Page = $Page + 1;
													$jml = 0;
													//echo $query;
													$hasil = mysqli_query($con, $query) or die("Query gagal!");
													while ($data = mysqli_fetch_array($hasil)) {
														echo "<tr>
																<th align=\"center\" style=\"font-size:10px\">$Page</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['tgl_upload'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['fastel'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['email_dbprofile'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['email_myih'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['hp_dbprofile'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['hp_myih'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['speed'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['kategori'] . "</th>
																<th align=\"center\" style=\"font-size:10px\">" . $data['lup'] . "</th>			
																<th align=\"center\" style=\"font-size:10px\">
																<a href=\"input_wo_profilling.php?id=".$data['id']."\" class=\"btn btn-primary\">INPUT WO</a>
																</th>
															</tr>
														";

														$Page = $Page + 1;
													}

													?>
												</tbody>
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
<?php require_once("../deft_foo.php"); ?>