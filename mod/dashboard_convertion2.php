<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
?>


<!doctype html>
<html lang="en">
<form id='input' name="demoform" action='dashboard_convertion2.php' method='post' accept-charset='UTF-8'>
	<div class="row ">
	<div align="center" class="panel-heading">
                            <H3>DASBOARD CONVERTION RATE DAN CONSUME RATE</H3>
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
		
		$query="SELECT 
		sum(case when `kategori`='Agree' and `status` ='Contacted' then 1 else 0 end) as Agree,
		sum(case when `kategori`='Not Agree' and `status` ='Contacted' then 1 else 0 end) as Not_Agree,
		sum(case when `kategori` ='Follow UP' and `status` ='Contacted' then 1 else 0 end) as Follow_Up,
		count(id) as transaksi,
		sum(case when `status`='Contacted' then 1 else 0 end) as Contacted,
		sum(case when `status`<>'Contacted' then 1 else 0 end) as Not_Contacted
		FROM app_tam_data2 
		WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59';";

		$result = mysqli_query($con,$query);
		$data= mysqli_fetch_array($result);
		$da=$data['Agree'];
		$df=$data['Follow_Up'];
		$dna=$data['Not_Agree'];
		$A=sprintf("%.2f",($data['Agree']/$data['transaksi'])*100);
		$F=sprintf("%.2f",($data['Follow_Up']/$data['transaksi'])*100);
		$NA=sprintf("%.2f",($data['Not_Agree']/$data['transaksi'])*100);
		
		
		$dataPoints = array(
		array("y" => $A, "legendText" => "$da Agree", "label" => "Agree"),
		array("y" => $F, "legendText" => "$df Follow Up", "label" => "Follow Up"),
		array("y" => $NA, "legendText" => "$dna Not Agree", "label" => "Not Agree")
		);
		
		$query1="SELECT 
		COUNT(DISTINCT login) as login
		FROM app_tam_data2 
		WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' and `jenis`='CT0' and `kategori` = 'Agree' and `follow` <>'8'";
		$result1 = mysqli_query($con,$query1);
		$data1= mysqli_fetch_array($result1);
		//echo $query1;
		$query2="SELECT 
		COUNT(DISTINCT login) as login
		FROM app_tam_data2 
		WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' and `jenis`='PRA NPC' and `kategori` = 'Agree' and `follow` <>'8'";
		$result2 = mysqli_query($con,$query2);
		$data2= mysqli_fetch_array($result2);
		//echo $data3['login'];;
		
		

		$query7="SELECT 
		sum(case when `jenis`='CT0' and `follow` <>'8'  then 1 else 0 end) as HW,
		sum(case when `jenis`='PRA NPC' and `follow` <>'8'  then 1 else 0 end) as IB,
		
		FROM app_tam_data2 
		WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59'";
		$result7 = mysqli_query($con,$query7);
		$data7= mysqli_fetch_array($result7);
		
		$query8="SELECT 
		sum(case when `jenis`='CT0' and `status` = 'Contacted'  then 1 else 0 end) as HWC,
		sum(case when `jenis`='CT0' and `status` = 'Not Contacted'  then 1 else 0 end) as HWNC,
		sum(case when `jenis`='PRA NPC' and `status` = 'Contacted'  then 1 else 0 end) as IBC,
		sum(case when `jenis`='PRA NPC' and `status` = 'Not Contacted'  then 1 else 0 end) as IBNC,
		
		FROM app_tam_data2 
		WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' ;";

		$result8 = mysqli_query($con,$query8);
		$data8= mysqli_fetch_array($result8);

		$HWC = sprintf("%.2f",($data8['HWC']/($data8['HWNC']+ $data8['HWC']))*100);
		$HWNC = sprintf("%.2f",($data8['HWNC']/($data8['HWNC']+$data8['HWC']))*100);
		$IBC = sprintf("%.2f",($data8['IBC']/($data8['IBNC']+$data8['IBC']))*100);
		$IBNC = sprintf("%.2f",($data8['IBNC']/($data8['IBNC']+$data8['IBC']))*100);
		
		$quer="SELECT  COUNT(DISTINCT reason) as jml
				FROM app_tam_data2 
				WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' and `status` = 'Contacted' and kategori = 'Not Agree'";
			$resul = mysqli_query($con,$quer);
			$dat = mysqli_fetch_array($resul);
			$lim = $dat['jml'];
			if($lim <= '5'){ $limit="0,5";}
			else if ($lim > '5'){$a = $lim - 5; $limit="$a,$lim";}
		$query9="SELECT  reason, COUNT(reason) as jml
				FROM app_tam_data2 
				WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' and `status` = 'Contacted' and kategori = 'Not Agree'
				GROUP BY reason ORDER BY jml ASC LIMIT $limit";
		$result9 = mysqli_query($con,$query9);
		
		$quer1="SELECT  COUNT(DISTINCT kategori) as jml
				FROM app_tam_data2 
				WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' and `status` = 'Not Contacted'";
			$resul1 = mysqli_query($con,$quer1);
			$dat1 = mysqli_fetch_array($resul1);
			$lim1 = $dat1['jml'];
			if($lim1 <= '5'){ $limit1="0,5";}
			else if ($lim1 > '5'){$a = $lim1 - 5; $limit1="$a,$lim";}
		$query10="SELECT  kategori, COUNT(kategori) as jml
					FROM app_tam_data2 
					WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' and `status` = 'Not Contacted' 
					GROUP BY kategori ORDER BY jml asc LIMIT $limit1";
		$result10 = mysqli_query($con,$query10);
		
	?>
	</br></br>
	<div class="content">
        <div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-handshake-o fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><h5><b><?php if ($data['Agree']==''){ echo "0";}else{echo $data['Agree'];}?></b></h5></div>
							<div>Agree</div>
						</div>
					</div>
				</div>
				
			</div>
			</div>
			<div class="col-lg-2 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-remove fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><h5><b><?php if ($data['Not_Agree']==''){ echo "0";}else{echo $data['Not_Agree'];}?></b></h5></div>
							<div>Not&nbspAgree</div>
						</div>
					</div>
				</div>
				
			</div>
			</div>
			<div class="col-lg-2 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-hourglass-start fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><h5><b><?php if ($data['Follow_Up']==''){ echo "0";}else{echo $data['Follow_Up'];}?></b></h5></div>
							<div>Follow&nbspUp</div>
						</div>
					</div>
				</div>
				
			</div>
			</div>			
			<div class="col-lg-2 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-signal fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><h5><b><?php if ($data['Contacted']==''){ echo "0";}else{echo $data['Contacted'];}?></b></h5></div>
							<div>Contacted</div>
						</div>
					</div>
				</div>
				
			</div>
			</div>
			<div class="col-lg-2 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-volume-control-phone fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><h5><b><?php if ($data['Not_Contacted']==''){ echo "0";}else{echo $data['Not_Contacted'];}?></b></h5></div>
							<div>Not&nbspContacted</div>
						</div>
					</div>
				</div>
				
			</div>
			</div>
			<div class="col-lg-2 col-md-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-pencil-square-o fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><h5><b><?php if ($data['transaksi']==''){ echo "0";}else{echo $data['transaksi'];}?></b></h5></div>
							<div>Jumlah Transaksi</div>
						</div>
					</div>
				</div>
				
			</div>
			</div>
		</div>
	</div>
	</div>
			
	<div class="content">
	<div class="container-fluid">
        <div class="row">
			
			<div class="col-lg-3 col-md-1">	
				<div style="height: 200px;">
					<table class="table table-responsive table-bordered">
						<tr>
							<th colspan="3" align="center" bgcolor="#C05D5A">Convertion Rate</th>
						</tr>
						<tr>
							<th align="center" >Agree</th>
							<th align="center" ><?php echo $da;?></th>
							<th align="center" ><?php echo $A ;?>%</th>
						</tr>
						<tr>
							<th align="center" >Follow UP</th>
							<th align="center" ><?php echo $df;?></th>
							<th align="center" ><?php echo $F ;?>%</th>
						</tr>
						<tr>
							<th align="center" >Not Agree </th>
							<th align="center" ><?php echo $dna;?></th>
							<th align="center" ><?php echo $NA ;?>%</th>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-lg-5 col-md-6">
				<table class="table table-responsive table-bordered">
						<tr>
								<th colspan="4" align="center" bgcolor="#C05D5A">Consume Rate</th>
							</tr>
							<tr>
								<th align="center" >Rule</th>
								<th align="center" >Jumlah Agent</th>
								<th align="center" >Jumlah Data</th>
								<th align="center" >AVG Consume Agent</th>
							</tr>
							<tr>
								<th align="center" >CT0</th>
								<th align="center" ><?php if ($data1['login']==''){ echo "0";}else{echo $data1['login'];}?></th>
								<th align="center" ><?php if ($data7['HW']==''){ echo "0";}else{echo $data7['HW'];}?></th>
								<th align="center" ><?php if ($data7['HW']/$data1['login']==''){ echo "0";}else{echo sprintf("%.2f",$data7['HW']/$data1['login']);}?> </th>
							</tr>
							<tr>
								<th align="center" >PRA NPC</th>
								<th align="center" ><?php if ($data2['login']==''){ echo "0";}else{echo $data2['login'];}?></th>
								<th align="center" ><?php if ($data7['IB']==''){ echo "0";}else{echo $data7['IB'];}?></th>
								<th align="center" ><?php if ($data7['IB']/$data2['login']==''){ echo "0";}else{echo sprintf("%.2f",$data7['IB']/$data2['login']);}?> </th>
							</tr>
							
						</table>
			</div>
			
			<div class="col-lg-4 col-md-3">
				<table class="table table-responsive table-bordered">
						<tr>
								<th colspan="4" align="center" bgcolor="#C05D5A">Status Call Per Rule</th>
							</tr>
							<tr>
								<th align="center" >Rule</th>
								<th align="center" >Contacted</th>
								<th align="center" >Not Contacted</th>
								
							</tr>
							<tr>
								<th align="center" >CT0</th>
								<th align="center" ><?php echo "$HWC %";?></th>
								<th align="center" ><?php echo "$HWNC %";?></th>
								
							</tr>
							<tr>
								<th align="center" >PRA NPC</th>
								<th align="center" ><?php echo "$IBC %";?></th>
								<th align="center" ><?php echo "$IBNC %";?></th>
								
							</tr>
							
						</table>
			</div>
		</div>			
	</div>
	</div>
	<div class="content">
	<div class="container-fluid">
        <div class="row">
			<div class="col-lg-6 col-md-6">
				<table class="table table-responsive table-bordered">
						<tr>
								<th colspan="4" align="center" bgcolor="#C05D5A">Reason Call</th>
							</tr>
							<tr>
								<th align="center" >Reason</th>
								<th align="center" >Jumlah</th>							
							</tr>
							<?php						
								while($data9 = mysqli_fetch_array($result9)) {			
							?>
							<tr>
								<th align="center" ><?php echo $data9['reason']; ?></th>
								<th align="center" ><?php echo $data9['jml']; ?></th>
							</tr>
							<?php
							}
							?>
						</table>
			</div>
			<div class="col-lg-6 col-md-6">
				<table class="table table-responsive table-bordered">
						<tr>
								<th colspan="4" align="center" bgcolor="#C05D5A">Not Contacted Call</th>
							</tr>
							<tr>
								<th align="center" >Reason</th>
								<th align="center" >Jumlah</th>							
							</tr>
							<?php						
								while($data10 = mysqli_fetch_array($result10)) {			
							?>
							<tr>
								<th align="center" ><?php echo $data10['kategori']; ?></th>
								<th align="center" ><?php echo $data10['jml']; ?></th>
							</tr>
							<?php
							}
							?>
						</table>
			</div>
		</div>
	</div>
	</div>
	<?php
		}	
	?>
	
      
</br></br></br></br></br></br></br></br></br>

<?php	require_once("../deft_foo.php"); ?>