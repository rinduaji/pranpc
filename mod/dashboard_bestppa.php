<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];

function maximum($a, $b, $c, $d, $e, $f, $g, $h)
{
 $max = $a; $x = "BANDUNG";
 if ($b > $max){ $max = $b; $x = "BSD"; } 
 if ($c > $max){ $max = $c; $x = "CW"; } 
 if ($d > $max){ $max = $d; $x = "MAKASAR"; } 
 if ($e > $max){ $max = $e; $x = "MALANG"; } 
 if ($f > $max){ $max = $f; $x = "MEDAN"; } 
 if ($g > $max){ $max = $g; $x = "SEMARANG"; } 
 if ($h > $max){ $max = $h; $x = "TANGERANG"; } 
	$arr=[sprintf("%.2f",($max)),$x];
	return $arr;
}
?>


<!doctype html>
<html lang="en">
<form id='input' name="demoform" action='dashboard_bestppa.php' method='post' accept-charset='UTF-8'>
	<div class="row ">
	<div align="center" class="panel-heading">
                            <H3>DASBOARD BEST PPA DAILY</H3>
                        </div>
		<div align="center" class="col-md-5"></div>
		<div align="center" class="col-md-2">
		
			<label>Tanggal</label>
			<input class="form-control" type="text" name="date1" id="datepicker_start"  placeholder="ex: 2018-12-31" />	
		</div>
		
	</div></br>
	<div class="row ">
		<div align="center">
			<tr>
			<input name="search" type="submit" class="btn btn-danger" Value="Generate">
			</tr>
		</div>
		
	</div>
	<?php if(isset($_POST['date1'])){
		$tgl_st = $_POST['date1'];
		
		
		$query="SELECT 
			sum(case when b.user5 = 'BANDUNG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BANDUNG' then 1 else 0 end) as BANDUNG,
			sum(case when b.user5 = 'BSD' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BSD' then 1 else 0 end) as BSD,
			sum(case when b.user5 = 'CW' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'CW' then 1 else 0 end) as CW,
			sum(case when b.user5 = 'Makassar' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Makassar' then 1 else 0 end) as Makassar,
			sum(case when b.user5 = 'Malang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Malang' then 1 else 0 end) as Malang,
			sum(case when b.user5 = 'MEDAN' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'MEDAN' then 1 else 0 end) as MEDAN,
			sum(case when b.user5 = 'Semarang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Semarang' then 1 else 0 end) as Semarang,
			sum(case when b.user5 = 'TANGERANG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'TANGERANG' then 1 else 0 end) as TANGERANG
			FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1
			WHERE  a.tgl between '$tgl_st 00:00:00' and '$tgl_st 23:59:59' and a.jenis='Home Wifi'";
		$result = mysqli_query($con,$query);
		$data= mysqli_fetch_array($result);
		if($data['BANDUNG']==''){$a='0';}else{$a=$data['BANDUNG'];}
		if($data['BSD']==''){$b='0';}else{$b=$data['BSD'];}
		if($data['CW']==''){$c='0';}else{$c=$data['CW'];}
		if($data['Makassar']==''){$d='0';}else{$d=$data['Makassar'];}
		if($data['Malang']==''){$e='0';}else{$e=$data['Malang'];}
		if($data['MEDAN']==''){$f='0';}else{$f=$data['MEDAN'];}
		if($data['Semarang']==''){$g='0';}else{$g=$data['Semarang'];}
		if($data['TANGERANG']==''){$h='0';}else{$h=$data['TANGERANG'];}
		$HomeWifi = [maximum($a,$b,$c,$d,$e,$f,$g,$h)];
		
		
		$query1="SELECT 
			sum(case when b.user5 = 'BANDUNG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BANDUNG' then 1 else 0 end) as BANDUNG,
			sum(case when b.user5 = 'BSD' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BSD' then 1 else 0 end) as BSD,
			sum(case when b.user5 = 'CW' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'CW' then 1 else 0 end) as CW,
			sum(case when b.user5 = 'Makassar' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Makassar' then 1 else 0 end) as Makassar,
			sum(case when b.user5 = 'Malang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Malang' then 1 else 0 end) as Malang,
			sum(case when b.user5 = 'MEDAN' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'MEDAN' then 1 else 0 end) as MEDAN,
			sum(case when b.user5 = 'Semarang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Semarang' then 1 else 0 end) as Semarang,
			sum(case when b.user5 = 'TANGERANG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'TANGERANG' then 1 else 0 end) as TANGERANG
			FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1
			WHERE  a.tgl between '$tgl_st 00:00:00' and '$tgl_st 23:59:59' and a.jenis='IndiBOX'";
		$result1 = mysqli_query($con,$query1);
		$data1= mysqli_fetch_array($result1);
		if($data1['BANDUNG']==''){$a='0';}else{$a=$data1['BANDUNG'];}
		if($data1['BSD']==''){$b='0';}else{$b=$data1['BSD'];}
		if($data1['CW']==''){$c='0';}else{$c=$data1['CW'];}
		if($data1['Makassar']==''){$d='0';}else{$d=$data1['Makassar'];}
		if($data1['Malang']==''){$e='0';}else{$e=$data1['Malang'];}
		if($data1['MEDAN']==''){$f='0';}else{$f=$data1['MEDAN'];}
		if($data1['Semarang']==''){$g='0';}else{$g=$data1['Semarang'];}
		if($data1['TANGERANG']==''){$h='0';}else{$h=$data1['TANGERANG'];}
		$IndiBOX = [maximum($a,$b,$c,$d,$e,$f,$g,$h)];
		
		$query2="SELECT 
			sum(case when b.user5 = 'BANDUNG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BANDUNG' then 1 else 0 end) as BANDUNG,
			sum(case when b.user5 = 'BSD' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BSD' then 1 else 0 end) as BSD,
			sum(case when b.user5 = 'CW' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'CW' then 1 else 0 end) as CW,
			sum(case when b.user5 = 'Makassar' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Makassar' then 1 else 0 end) as Makassar,
			sum(case when b.user5 = 'Malang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Malang' then 1 else 0 end) as Malang,
			sum(case when b.user5 = 'MEDAN' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'MEDAN' then 1 else 0 end) as MEDAN,
			sum(case when b.user5 = 'Semarang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Semarang' then 1 else 0 end) as Semarang,
			sum(case when b.user5 = 'TANGERANG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'TANGERANG' then 1 else 0 end) as TANGERANG
			FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1
			WHERE  a.tgl between '$tgl_st 00:00:00' and '$tgl_st 23:59:59' and a.jenis='Indihome 2P to 3P'";
		$result2 = mysqli_query($con,$query2);
		$data2= mysqli_fetch_array($result2);
		if($data2['BANDUNG']==''){$a='0';}else{$a=$data2['BANDUNG'];}
		if($data2['BSD']==''){$b='0';}else{$b=$data2['BSD'];}
		if($data2['CW']==''){$c='0';}else{$c=$data2['CW'];}
		if($data2['Makassar']==''){$d='0';}else{$d=$data2['Makassar'];}
		if($data2['Malang']==''){$e='0';}else{$e=$data2['Malang'];}
		if($data2['MEDAN']==''){$f='0';}else{$f=$data2['MEDAN'];}
		if($data2['Semarang']==''){$g='0';}else{$g=$data2['Semarang'];}
		if($data2['TANGERANG']==''){$h='0';}else{$h=$data2['TANGERANG'];}
		$Indihome = [maximum($a,$b,$c,$d,$e,$f,$g,$h)];
		
		$query3="SELECT 
			sum(case when b.user5 = 'BANDUNG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BANDUNG' then 1 else 0 end) as BANDUNG,
			sum(case when b.user5 = 'BSD' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BSD' then 1 else 0 end) as BSD,
			sum(case when b.user5 = 'CW' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'CW' then 1 else 0 end) as CW,
			sum(case when b.user5 = 'Makassar' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Makassar' then 1 else 0 end) as Makassar,
			sum(case when b.user5 = 'Malang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Malang' then 1 else 0 end) as Malang,
			sum(case when b.user5 = 'MEDAN' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'MEDAN' then 1 else 0 end) as MEDAN,
			sum(case when b.user5 = 'Semarang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Semarang' then 1 else 0 end) as Semarang,
			sum(case when b.user5 = 'TANGERANG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'TANGERANG' then 1 else 0 end) as TANGERANG
			FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1
			WHERE  a.tgl between '$tgl_st 00:00:00' and '$tgl_st 23:59:59' and a.jenis='Mini Pack'";
		$result3 = mysqli_query($con,$query3);
		$data3= mysqli_fetch_array($result3);
		if($data3['BANDUNG']==''){$a='0';}else{$a=$data3['BANDUNG'];}
		if($data3['BSD']==''){$b='0';}else{$b=$data3['BSD'];}
		if($data3['CW']==''){$c='0';}else{$c=$data3['CW'];}
		if($data3['Makassar']==''){$d='0';}else{$d=$data3['Makassar'];}
		if($data3['Malang']==''){$e='0';}else{$e=$data3['Malang'];}
		if($data3['MEDAN']==''){$f='0';}else{$f=$data3['MEDAN'];}
		if($data3['Semarang']==''){$g='0';}else{$g=$data3['Semarang'];}
		if($data3['TANGERANG']==''){$h='0';}else{$h=$data3['TANGERANG'];}
		$MiniPack = [maximum($a,$b,$c,$d,$e,$f,$g,$h)];
		
		$query4="SELECT 
			sum(case when b.user5 = 'BANDUNG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BANDUNG' then 1 else 0 end) as BANDUNG,
			sum(case when b.user5 = 'BSD' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BSD' then 1 else 0 end) as BSD,
			sum(case when b.user5 = 'CW' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'CW' then 1 else 0 end) as CW,
			sum(case when b.user5 = 'Makassar' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Makassar' then 1 else 0 end) as Makassar,
			sum(case when b.user5 = 'Malang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Malang' then 1 else 0 end) as Malang,
			sum(case when b.user5 = 'MEDAN' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'MEDAN' then 1 else 0 end) as MEDAN,
			sum(case when b.user5 = 'Semarang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Semarang' then 1 else 0 end) as Semarang,
			sum(case when b.user5 = 'TANGERANG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'TANGERANG' then 1 else 0 end) as TANGERANG
			FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1
			WHERE  a.tgl between '$tgl_st 00:00:00' and '$tgl_st 23:59:59' and a.jenis='STB Tambahan'";
		$result4 = mysqli_query($con,$query4);
		$data4= mysqli_fetch_array($result4);
		if($data4['BANDUNG']==''){$a='0';}else{$a=$data4['BANDUNG'];}
		if($data4['BSD']==''){$b='0';}else{$b=$data4['BSD'];}
		if($data4['CW']==''){$c='0';}else{$c=$data4['CW'];}
		if($data4['Makassar']==''){$d='0';}else{$d=$data4['Makassar'];}
		if($data4['Malang']==''){$e='0';}else{$e=$data4['Malang'];}
		if($data4['MEDAN']==''){$f='0';}else{$f=$data4['MEDAN'];}
		if($data4['Semarang']==''){$g='0';}else{$g=$data4['Semarang'];}
		if($data4['TANGERANG']==''){$h='0';}else{$h=$data4['TANGERANG'];}
		$STB = [maximum($a,$b,$c,$d,$e,$f,$g,$h)];
		
		$query5="SELECT 
			sum(case when b.user5 = 'BANDUNG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BANDUNG' then 1 else 0 end) as BANDUNG,
			sum(case when b.user5 = 'BSD' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'BSD' then 1 else 0 end) as BSD,
			sum(case when b.user5 = 'CW' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'CW' then 1 else 0 end) as CW,
			sum(case when b.user5 = 'Makassar' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Makassar' then 1 else 0 end) as Makassar,
			sum(case when b.user5 = 'Malang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Malang' then 1 else 0 end) as Malang,
			sum(case when b.user5 = 'MEDAN' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'MEDAN' then 1 else 0 end) as MEDAN,
			sum(case when b.user5 = 'Semarang' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'Semarang' then 1 else 0 end) as Semarang,
			sum(case when b.user5 = 'TANGERANG' and a.kategori = 'Agree' and a.follow <>'8'  then 1 else 0 end) /
			sum(case when b.user5 = 'TANGERANG' then 1 else 0 end) as TANGERANG
			FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1
			WHERE  a.tgl between '$tgl_st 00:00:00' and '$tgl_st 23:59:59' and a.jenis='Upgrade Indihome'";
		$result5 = mysqli_query($con,$query5);
		$data5= mysqli_fetch_array($result5);
		if($data5['BANDUNG']==''){$a='0';}else{$a=$data5['BANDUNG'];}
		if($data5['BSD']==''){$b='0';}else{$b=$data5['BSD'];}
		if($data5['CW']==''){$c='0';}else{$c=$data5['CW'];}
		if($data5['Makassar']==''){$d='0';}else{$d=$data5['Makassar'];}
		if($data5['Malang']==''){$e='0';}else{$e=$data5['Malang'];}
		if($data5['MEDAN']==''){$f='0';}else{$f=$data5['MEDAN'];}
		if($data5['Semarang']==''){$g='0';}else{$g=$data5['Semarang'];}
		if($data5['TANGERANG']==''){$h='0';}else{$h=$data5['TANGERANG'];}
		$Upgrade = [maximum($a,$b,$c,$d,$e,$f,$g,$h)];
		
	?>
	</br></br>
				
	<div class="content">
	<div class="container-fluid">
        <div class="row">
			<div class="col-lg-3 col-md-3">
			</div>
			<div class="col-lg-6 col-md-6">
				<table class="table table-responsive table-bordered">
						<tr>
								<th colspan="4" align="center" bgcolor="#C05D5A">BEST PPA DAILY</th>
							</tr>
							<tr>
								<th align="center" >Rule</th>
								<th align="center" >Site</th>
								<th align="center" >PPA</th>
								
							</tr>
							<tr>
								<th align="center" >Home Wifi</th>
								<th align="center" ><?php echo $HomeWifi[0][1];?></th>
								<th align="center" ><?php echo $HomeWifi[0][0];?></th>
								
							</tr>
							<tr>
								<th align="center" >IndiBOX</th>
								<th align="center" ><?php echo $IndiBOX[0][1];?></th>
								<th align="center" ><?php echo $IndiBOX[0][0];?></th>
								
							</tr>
							<tr>
								<th align="center" >2P-3P</th>
								<th align="center" ><?php echo $Indihome[0][1];?></th>
								<th align="center" ><?php echo $Indihome[0][0];?></th>
								
							</tr>
							<tr>
								<th align="center" >Mini Pack</th>
								<th align="center" ><?php echo $MiniPack[0][1];?></th>
								<th align="center" ><?php echo $MiniPack[0][0];?></th>
								
							</tr>
							<tr>
								<th align="center" >STB Tambahan</th>
								<th align="center" ><?php echo $STB[0][1];?></th>
								<th align="center" ><?php echo $STB[0][0];?></th>
								
							</tr>
							<tr>
								<th align="center" >Upgrade Indihome</th>
								<th align="center" ><?php echo $Upgrade[0][1];?></th>
								<th align="center" ><?php echo $Upgrade[0][0];?></th>
								
							</tr>
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