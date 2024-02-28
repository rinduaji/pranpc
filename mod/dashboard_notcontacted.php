<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
?>


<!doctype html>
<html lang="en">
<form id='input' name="demoform" action='dashboard_notcontacted.php' method='post' accept-charset='UTF-8'>
	<div class="row ">
	<div align="center" class="panel-heading">
                            <H3>DASBOARD TOP NOT CONTACTED</H3>
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
		$quer="SELECT  COUNT(DISTINCT kategori) as jml
				FROM app_tam_data2 
				WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' and `status` = 'Not Contacted'";
			$resul = mysqli_query($con,$quer);
			$dat = mysqli_fetch_array($resul);
			$lim = $dat['jml'];
			if($lim <= '5'){ $limit="0,5";}
			else if ($lim > '5'){$a = $lim - 5; $limit="$a,$lim";}
		$query1="SELECT  kategori, COUNT(kategori) as jml
					FROM app_tam_data2 
					WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' and `status` = 'Not Contacted' 
					GROUP BY kategori ORDER BY jml asc LIMIT $limit";
		$result1 = mysqli_query($con,$query1);

	?>
	</br></br>
	<div class="content">
	<div class="row ">
					
	<div class="col-lg-3 col-md-6">
		
	</div>
	
		
	<div class="col-lg-6 col-md-6">
		<div id="chartContainer1" style="height: 300px; width: 100%;">				
		</div>
	</div>
	</div>
	</div>



 
</br></br></br></br></br></br></br></br></br></br></br></br>
	<?php					
	}
	?>

	

<script>
window.onload = function () {
	
var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title: {
		text: "Top 5 Kategori Not Contacted",
	},
	axisX: {
		interval: 1,		
	},
	axisY: {
		title: "Jumlah Kategori Not Contacted",
	},
	data: [{
		type: "bar",
		indexLabel: "{y}",
		bevelEnabled: true,
		dataPoints: [
		<?php
						
			while($data1 = mysqli_fetch_array($result1)) {			
		?>
			{ label: "<?php echo $data1['kategori']; ?>", y: <?php echo $data1['jml']; ?>,  },
		<?php
			}
		?>
		
		]
	}]
});
chart.render();
}
</script> 		    
<?php	require_once("../deft_foo.php"); ?>