<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
?>


<!doctype html>
<html lang="en">
<form id='input' name="demoform" action='dashboard_pparule.php' method='post' accept-charset='UTF-8'>
	<div class="row ">
	<div align="center" class="panel-heading">
                            <H3>PPA PER RULE</H3>
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
		$query = "SELECT 
				sum(case when `jenis`='Home Wifi' and `kategori` = 'Agree' and `follow` <>'8'  then 1 else 0 end) /
				sum(case when `jenis`='Home Wifi' then 1 else 0 end) as HW,
				sum(case when `jenis`='IndiBOX' and `kategori` = 'Agree' and `follow` <>'8'  then 1 else 0 end) /
				sum(case when `jenis`='IndiBOX' then 1 else 0 end) as IB,
				sum(case when `jenis`='Indihome 2P to 3P' and `kategori` = 'Agree' and `follow` <>'8'  then 1 else 0 end) /
				sum(case when `jenis`='Indihome 2P to 3P' then 1 else 0 end) as I23,
				sum(case when `jenis`='Mini Pack' and `kategori` = 'Agree' and `follow` <>'8'  then 1 else 0 end) /
				sum(case when `jenis`='Mini Pack' then 1 else 0 end) as MP,
				sum(case when `jenis`='STB Tambahan' and `kategori` = 'Agree' and `follow` <>'8' then 1 else 0 end) /
				sum(case when `jenis`='STB Tambahan' then 1 else 0 end) as ST,
				sum(case when `jenis`='Upgrade Indihome' and `kategori` = 'Agree' and `follow` <>'8' then 1 else 0 end) /
				sum(case when `jenis`='Upgrade Indihome' then 1 else 0 end) as UI
				FROM app_tam_data2 
				WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59';";
		$result = mysqli_query($con,$query);
		$data= mysqli_fetch_array($result);
		
		$dataPoints = array(
		array("label"=> "Home Wifi",  "y"=> sprintf("%.2f",$data['HW']) ),
		array("label"=> "IndiBOX",  "y"=> sprintf("%.2f",$data['IB']) ),
		array("label"=> "Indihome 2P to 3",  "y"=> sprintf("%.2f",$data['I23'])),
		array("label"=> "Mini Pack",  "y"=> sprintf("%.2f",$data['MP']) ),
		array("label"=> "STB Tambahan",  "y"=> sprintf("%.2f",$data['ST']) ),
		array("label"=> "Upgrade Indihome",  "y"=> sprintf("%.2f",$data['UI']) ),
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
	theme: "light1", // "light2", "dark1", "dark2"
	animationEnabled: true, // change to true		
	title:{
		text: "PPA PER RULE"
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