<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
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
					<form id='input' name="demoform" action='form_rekap_agent.php' method='post' accept-charset='UTF-8'>
						<div>
						<div align="center" class="panel-heading">
                            <b>REKAP CALL AGENT</b>
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
								
								<label class="control-label" style="color:#00BFFF">Campaign/ Jenis Call</label>
								<select  name="jenis" class="form-control">
								<option value="">All Jenis Call</option>
								<?php  
									$qsk=mysqli_query($con,"SELECT * FROM app_tam_jenis WHERE `aktif`='1'");						
									$k=1;
									while ($rsk=mysqli_fetch_row($qsk))
									{
									if ($rsk[1]==$jenis){$sel="selected";$id_jenis=$rsk[0];}else{$sel="";}
									echo "<option value=\"$rsk[1]\" $sel> $rsk[1] </option>";
									$k++;
									}
								?>
								</select>
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
									<h4 class="title">Hasil Rekap Call Agent</h4>
								</div>
								
								<div style="overflow-x:auto;">
									
									<table id="data-table" width="150px" class="table table-hover table-striped">
										<thead>
											<th align="center"><font color="red" face="Tahoma" size="2">NO</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Login</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Nama Agent</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Agree</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Valid</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Not Agree</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Follow UP</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Total Contacted</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Busy</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Invalid Phone Number</th>
											<th align="center"><font color="red" face="Tahoma" size="2">RNA</th>
											<th align="center"><font color="red" face="Tahoma" size="2">MailBox</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Total Not Contacted</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Total Call</th>
											
										</thead>
										<tbody>
										<?php
										if (isset($_POST['search'])){
											
											
											$query="SELECT 
											(a.login),(b.user2), 
											sum(case when a.`status`='Contacted' then 1 else 0 end) as contacted,
											sum(case when a.`kategori`='Agree' then 1 else 0 end) as Agree,
											sum(case when a.`Valid`='Valid' then 1 else 0 end) as Valid,
											sum(case when a.`kategori`='Not Agree' then 1 else 0 end) as Not_Agree ,
											sum(case when a.`kategori`='Follow UP' then 1 else 0 end) as Follow_UP,
											sum(case when a.`status`='Not Contacted' then 1 else 0 end) as not_contacted , 
											sum(case when a.`kategori`='Line Busy' then 1 else 0 end) as Busy,
											sum(case when a.`kategori`='Invalid Phone Number' then 1 else 0 end) as Invalid_Phone_Number,
											sum(case when a.`kategori`='Telepon Tidak Diangkat - RNA' then 1 else 0 end) as RNA,
											sum(case when a.`kategori`='Mail Box - Memo' then 1 else 0 end) as MailBox,
											count(a.`status`) as total   
											FROM app_tam_data2 AS a LEFT JOIN cc147_main_users_extended AS b ON a.login = b.user1 
											where  a.tgl between '$tgl 00:00:00' and '$tgl 23:59:59' $jenisx  group by a.login order by login DESC";
											//echo "$query";
											$no = 1;
											$hasil = mysqli_query($con,$query);
											while($data = mysqli_fetch_array($hasil)) {
											echo"<tr><th align=\"center\" style=\"font-size:10px\">$no</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['login']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['user2']."</th>												
												<th align=\"center\" style=\"font-size:10px\">".$data['Agree']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Valid']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Not_Agree']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Follow_UP']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['contacted']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Busy']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['Invalid_Phone_Number']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['RNA']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['MailBox']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['not_contacted']."</th>
												<th align=\"center\" style=\"font-size:10px\">".$data['total']."</th></tr>
												";
												
											$no = $no + 1;
											$contacted = $contacted + $data['contacted']; 
											$Agree = $Agree + $data['Agree']; 
											$Valid = $Valid + $data['Valid'];
											$Not_Agree = $Not_Agree + $data['Not_Agree']; 
											$Follow_UP = $Follow_UP + $data['Follow_UP']; 
											$not_contacted = $not_contacted + $data['not_contacted']; 
											$Busy = $Busy + $data['Busy']; 
											$Invalid_Phone_Number = $Invalid_Phone_Number + $data['Invalid_Phone_Number']; 
											$RNA = $RNA + $data['RNA']; 
											$Announcer = $Announcer + $data['Announcer']; 
											$total = $total + $data['total'];
											}
											echo"<tr><th align=\"center\"></th>
												<th align=\"center\"></th>
												<th align=\"center\">Total</th>
												
												<th align=\"center\">$Agree</th>
												<th align=\"center\">$Valid</th>
												<th align=\"center\">$Not_Agree</th>
												<th align=\"center\">$Follow_UP</th>
												<th align=\"center\">$contacted</th>
												<th align=\"center\">$Busy</th>
												<th align=\"center\">$Invalid_Phone_Number</th>
												<th align=\"center\">$RNA</th>
												<th align=\"center\">$Announcer</th>
												<th align=\"center\">$not_contacted</th>
												<th align=\"center\">$total</th></tr>
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
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>