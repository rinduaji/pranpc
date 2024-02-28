<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
?>


<!doctype html>
<html lang="en">
<form id='input' name="demoform" action='dashboard_activity.php' method='post' accept-charset='UTF-8'>
	<div class="row ">
	<div align="center" class="panel-heading">
                            <b>DASBOARD ACTIVITY</b>
                        </div>
		<div align="center" class="col-md-3"></div>
		<div align="center" class="col-md-3">
		
			<label>Tanggal Start</label>
			<input class="form-control" type="text" name="date1" id="datepicker_start"  placeholder="ex: 2018-12-31" />	
		</div>
		<div align="center" class="col-md-3">
			<label>Tanggal End</label>
			<input class="form-control" type="text" name="date2" id="datepicker_end" placeholder="ex: 2018-12-31" />
		</div>
	</div></br>
	<div class="row ">
		<div align="center">
			<tr>
			<input name="search" type="submit" class="btn btn-danger" Value="Generate">
			</tr>
		</div>
		
	</div>
	<?php if(isset($_POST['date1']) && isset($_POST['date2'])){
		$tgl_st = $_POST['date1'];
		$tgl_en = $_POST['date2'];
		$query0="SELECT DISTINCT convert(a.tgl, DATE) as tanggal, 
					b.user5 AS Site,
					count(a.id) AS Jumlah
					from 
					app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
					where tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' group BY b.user5;
					";
		$hasil = mysqli_query($con,$query0) or die ("Query gagal!");
	?>
	</br></br>
	<div class="row ">
	<div class="col-lg-4 col-md-2">
	</div>
					<div class="col-lg-4 col-md-6">
						<table class="table table-bordered table-striped table-responsive row-table " >
							
							<tr>
								<th colspan="2" align="right" bgcolor="#C05D5A">Aktivity Per Site</th>
							</tr>
							<?php
							$tot=0;
							
							while($data = mysqli_fetch_array($hasil)) {
							$tot = $tot + $data['Jumlah'];
							echo"<tr>
							<th text-align=\"center\" >".$data['Site']."</th>
							<th text-align=\"right\">".$data['Jumlah']."</th>
							</tr>";					
							}
							echo"<tr>
							<th align=\"center\" bgcolor=\"#C3716F\">Total</th>
							<th align=\"center\" bgcolor=\"#C3716F\">".$tot."</th>
							</tr>";
							
							?>
							
						</table>
					
					</div>
					
					<div class="col-lg-3 col-md-12">
					
					
					</div>
				</div>
	<?php
					
	}
		
	
	?>
       
<?php	require_once("../deft_foo.php"); ?>