<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
?>


<!doctype html>
<html lang="en">
<form id='input' name="demoform" action='dashboard_ppasite.php' method='post' accept-charset='UTF-8'>
	<div class="row ">
	<div align="center" class="panel-heading">
                            <H3>PPA PER SITE</H3>
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
		$tgl = $_POST['date'];
		
		$query = "SELECT 
				sum(case when a.kategori = 'Agree' and a.follow <> '8' and b.user5 = 'BANDUNG' then 1 else 0 end) /
				sum(case when b.user5 = 'BANDUNG' then 1 else 0 end) as BDG,
				sum(case when a.kategori = 'Agree' and a.follow <> '8' and b.user5 = 'BSD' then 1 else 0 end) /
				sum(case when b.user5 = 'BSD' then 1 else 0 end) as BSD,
				sum(case when a.kategori = 'Agree' and a.follow <> '8' and b.user5 = 'CW' then 1 else 0 end) /
				sum(case when b.user5 = 'CW' then 1 else 0 end) as CW,
				sum(case when a.kategori = 'Agree' and a.follow <> '8' and b.user5 = 'Makassar' then 1 else 0 end) /
				sum(case when b.user5 = 'Makassar' then 1 else 0 end) as MKS,
				sum(case when a.kategori = 'Agree' and a.follow <> '8' and b.user5 = 'Malang' then 1 else 0 end) /
				sum(case when b.user5 = 'Malang' then 1 else 0 end) as MLG,
				sum(case when a.kategori = 'Agree' and a.follow <> '8' and b.user5 = 'MEDAN' then 1 else 0 end) /
				sum(case when b.user5 = 'MEDAN' then 1 else 0 end) as MDN,
				sum(case when a.kategori = 'Agree' and a.follow <> '8' and b.user5 = 'Semarang' then 1 else 0 end) /
				sum(case when b.user5 = 'Semarang' then 1 else 0 end) as SMG,
				sum(case when a.kategori = 'Agree' and a.follow <> '8' and b.user5 = 'TANGERANG' then 1 else 0 end) /
				sum(case when b.user5 = 'TANGERANG' then 1 else 0 end) as TGR
				FROM app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1
				WHERE  a.tgl between '$tgl 00:00:00' and '$tgl 23:59:59';";
		$result = mysqli_query($con,$query);
		$data= mysqli_fetch_array($result);
		
		$dataPoints = array(
		array("label"=> "BANDUNG",  "y"=> sprintf("%.2f",$data['BDG']) ),
		array("label"=> "BSD",  "y"=> sprintf("%.2f",$data['BSD']) ),
		array("label"=> "CW",  "y"=> sprintf("%.2f",$data['CW'])),
		array("label"=> "MAKASAR",  "y"=> sprintf("%.2f",$data['MKS']) ),
		array("label"=> "MALANG",  "y"=> sprintf("%.2f",$data['MLG']) ),
		array("label"=> "MEDAN",  "y"=> sprintf("%.2f",$data['MDN']) ),
		array("label"=> "SEMARANG",  "y"=> sprintf("%.2f",$data['SMG']) ),
		array("label"=> "TANGERANG",  "y"=> sprintf("%.2f",$data['TGR']) ),
		);
		
	?>
	</br></br>
	<div class="content">
	<div class="container-fluid">
        <div class="row">
			<div class="col-lg-3 col-md-6">
			</div>
			<div class="col-lg-6 col-md-6">
				<div id="chartContainer">
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php
		}	
	?>
	
	
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light2", "dark1", "dark2"
	animationEnabled: true, // change to true		
	title:{
		text: "PPA PER SITE"
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "column",
		indexLabel: "{y}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}
	]
});
chart.render();

}
</script>  
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br>
<?php	require_once("../deft_foo.php"); ?>