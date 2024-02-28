<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
?>


<!doctype html>
<html lang="en">
<form id='input' name="demoform" action='dashboard_fasteldouble.php' method='post' accept-charset='UTF-8'>
	<div class="row ">
	<div align="center" class="panel-heading">
                            <b>DASBOARD DOUBLE INPUT</b>
                        </div>
		<div align="center" class="col-md-5"></div>
		<div align="center" class="col-md-2">
		
			<label>Tanggal</label>
			<input class="form-control" type="text" name="date" id="datepicker_start"  placeholder="ex: 2018-12-31" />	
		</div>
	</div></br>
	<div class="row ">
		<div align="center">
			<tr>
			<input name="search" type="submit" class="btn btn-danger" Value="Generate">
			</tr>
		</div>
		
	</div>
	<?php if(isset($_POST['date'])){
		$tgl_st = $_POST['date'];
	
		
	?>
	</br></br>
	<div class="row ">
		<div class="col-lg-4 col-md-2">
		</div>
		<div class="col-lg-4 col-md-6">
			<table class="table table-bordered table-striped table-responsive row-table " >
							
				<tr>
					<th colspan="3" align="center" >Double Input Tanggal <?php echo $tgl_st;?></th>
				</tr>
				<tr>
					<th align="center" bgcolor="#C05D5A">No</th>
					<th align="center" bgcolor="#C05D5A">No&nbspFastel</th>
					<th align="center" bgcolor="#C05D5A">Pengulangan</th>
				</tr>
	<?php
				$no=1;
				$query="SELECT 
				fastel, count(fastel) as jml
				from app_tam_data2 
				where tgl between '$tgl_st 00:00:00' and '$tgl_st 23:59:59' group BY fastel HAVING count(fastel) > 2 ORDER BY jml desc";
				$hasil = mysqli_query($con,$query) or die ("Query gagal!");
				while($data = mysqli_fetch_array($hasil)) {
					$fastel=$data['fastel'];
					$qw = "SELECT 
						COUNT(DISTINCT login) as login
						FROM app_tam_data2 
						where tgl between '$tgl_st 00:00:00' and '$tgl_st 23:59:59' and `fastel`='$fastel' ;";
					$row = mysqli_query($con,$qw) or die ("Query gagal!");
					$hsl= mysqli_fetch_array($row);
					
					if($hsl['login'] > '1'){
	?>
				<tr>
					<th align="center" ><?php echo $no;?></th>
					<th align="center" ><?php echo $fastel;?></th>
					<th align="center" ><?php echo $hsl['login'];?></th>
				</tr>	
						
	
	<?php			$no++;	
					}
					
				}	
	}
	?>
			</table>
		</div>
	</div>
       
<?php	require_once("../deft_foo.php"); ?>