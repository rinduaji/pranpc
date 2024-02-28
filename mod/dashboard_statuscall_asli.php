<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
?>


<!doctype html>
<html lang="en">
<form id='input' name="demoform" action='dashboard_statuscall.php' method='post' accept-charset='UTF-8'>
	<div class="row ">
	<div align="center" class="panel-heading">
                            <b>DASBOARD STATUS CALL</b>
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
		sum(case when `kategori`='Agree' and `follow` <>'8' then 1 else 0 end) as Agree,
		sum(case when `kategori`<>'Agree' and `follow` <>'8' then 1 else 0 end) as Not_Agree,
		sum(case when `follow` ='8' then 1 else 0 end) as Follow_Up,
		count(id) as transaksi,
		sum(case when `status`='Contacted' then 1 else 0 end) as Contacted,
		sum(case when `status`<>'Contacted' then 1 else 0 end) as Not_Contacted
		FROM app_tam_data2 
		WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59';";

		$result = mysqli_query($con,$query);
		$data= mysqli_fetch_array($result);
		
		
		$query1="SELECT 
		sum(case when `status`='Contacted' then 1 else 0 end) as Contacted,
		sum(case when `status`='Not Contacted' then 1 else 0 end) as Not_Contacted
		FROM app_tam_data2 
		WHERE $whr tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59'";

		$result1 = mysqli_query($con,$query1);
		$data1= mysqli_fetch_array($result1);
		$C=$data1['Contacted'];
		$NC=$data1['Not_Contacted'];
		$T= $C + $NC;
		$PC = sprintf("%.2f",($C/$T)*100);
		$PNC = sprintf("%.2f",($NC/$T)*100);
		$dataPoints = array(
		array("y" => $PC, "legendText" => "$C Contacted", "label" => "Contacted"),
		array("y" => $PNC, "legendText" => "$NC Not Contacted", "label" => "Not Contacted")
		);
		
		
		$query2="SELECT 
		sum(case when `jenis`='Home Wifi' and `status` = 'Contacted'  then 1 else 0 end) as HWC,
		sum(case when `jenis`='Home Wifi' and `status` = 'Not Contacted'  then 1 else 0 end) as HWNC,
		sum(case when `jenis`='IndiBOX' and `status` = 'Contacted'  then 1 else 0 end) as IBC,
		sum(case when `jenis`='IndiBOX' and `status` = 'Not Contacted'  then 1 else 0 end) as IBNC,
		sum(case when `jenis`='Indihome 2P to 3P' and `status` = 'Contacted'  then 1 else 0 end) as I23C,
		sum(case when `jenis`='Indihome 2P to 3P' and `status` = 'Not Contacted'  then 1 else 0 end) as I23NC,
		sum(case when `jenis`='Mini Pack' and `status` = 'Contacted'  then 1 else 0 end) as MPC,
		sum(case when `jenis`='Mini Pack' and `status` = 'Not Contacted'  then 1 else 0 end) as MPNC,
		sum(case when `jenis`='STB Tambahan' and `status` = 'Contacted'  then 1 else 0 end) as STC,
		sum(case when `jenis`='STB Tambahan' and `status` = 'Not Contacted'  then 1 else 0 end) as STNC,
		sum(case when `jenis`='Upgrade Indihome' and `status` = 'Contacted'  then 1 else 0 end) as UIC,
		sum(case when `jenis`='Upgrade Indihome' and `status` = 'Not Contacted'  then 1 else 0 end) as UINC
		FROM app_tam_data2 
		WHERE  tgl between '$tgl_st 00:00:00' and '$tgl_en 23:59:59' ;";

		$result2 = mysqli_query($con,$query2);
		$data2= mysqli_fetch_array($result2);

		$HWC = sprintf("%.2f",($data2['HWC']/($data2['HWNC']+ $data2['HWC']))*100);
		$HWNC = sprintf("%.2f",($data2['HWNC']/($data2['HWNC']+$data2['HWC']))*100);
		$IBC = sprintf("%.2f",($data2['IBC']/($data2['IBNC']+$data2['IBC']))*100);
		$IBNC = sprintf("%.2f",($data2['IBNC']/($data2['IBNC']+$data2['IBC']))*100);
		$I23C = sprintf("%.2f",($data2['I23C']/($data2['I23NC']+$data2['I23C']))*100);
		$I23NC = sprintf("%.2f",($data2['I23NC']/($data2['I23NC']+$data2['I23C']))*100);
		$MPC = sprintf("%.2f",($data2['MPC']/($data2['MPNC']+$data2['MPC']))*100);
		$MPNC = sprintf("%.2f",($data2['MPNC']/($data2['MPNC']+$data2['MPC']))*100);
		$STC = sprintf("%.2f",($data2['STC']/($data2['STNC']+$data2['STC']))*100);
		$STNC = sprintf("%.2f",($data2['STNC']/($data2['STNC']+$data2['STC']))*100);
		$UIC = sprintf("%.2f",($data2['UIC']/($data2['UINC']+$data2['UIC']))*100);
		$UINC = sprintf("%.2f",($data2['UINC']/($data2['UINC']+$data2['UIC']))*100);
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
							<i class="fa fa-pencil-square-o fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge"><h5><b><?php if ($data['transaksi']==''){ echo "0";}else{echo $data['transaksi'];}?></b></h5></div>
							<div>Transaksi</div>
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
		</div>
	</div>
	</div>
			
	<div class="content">
	<div class="container-fluid">
        <div class="row">
			<div class="col-lg-1 col-md-1">				
			</div>
			<div class="col-lg-3 col-md-6">
				<div id="chartContainer">
				</div>
			</div>
			<div class="col-lg-1 col-md-1">				
			</div>
			<div class="col-lg-5 col-md-6">
				<div id="chartContainerBatang">
				</div>
			</div>
		</div>			
	</div>
	</div>
	<div class="row">
	</div>
	<?php
		}	
	?>
	

<script>
var HWC = <?php echo $HWC; ?>;
var HWNC = <?php echo $HWNC; ?>;
var IBC = <?php echo $IBC; ?>;
var IBNC = <?php echo $IBNC; ?>;
var I23C = <?php echo $I23C; ?>;
var I23NC = <?php echo $I23NC; ?>;
var MPC = <?php echo $MPC; ?>;
var MPNC = <?php echo $MPNC; ?>;
var STC = <?php echo $STC; ?>;
var STNC = <?php echo $STNC; ?>;
var UIC = <?php echo $UIC; ?>;
var UINC = <?php echo $UINC; ?>;
console.log(UINC)
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainerBatang", {
	animationEnabled: true,
	title:{
		text: "STATUS CALL PER RULE"
	},	
	axisY: {
		title: "Contacted",
		suffix: "%",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "Not Contacted",
		suffix: "%",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Contacted %",
		legendText: "Contacted",
		showInLegend: true, 
		indexLabel: "{y}",
		yValueFormatString: "#,##0\"%\"",
		dataPoints:[
			{ label: "Home Wifi", y: HWC },
			{ label: "IndiBOX", y: IBC },
			{ label: "2P-3P", y: I23C },
			{ label: "Mini Pack", y: MPC },
			{ label: "STB Tambahan", y: STC },
			{ label: "Upgrade Indihome", y: UIC }
		]
	},
	{
		type: "column",	
		name: "Not Contacted %",
		legendText: "Not Contacted",
		axisYType: "secondary",
		showInLegend: true,
		indexLabel: "{y}",
		yValueFormatString: "#,##0\"%\"",
		dataPoints:[
			{ label: "Home Wifi", y: HWNC},
			{ label: "IndiBOX", y: IBNC },
			{ label: "2P-3P", y: I23NC },
			{ label: "Mini Pack", y: MPNC },
			{ label: "STB Tambahan", y: STNC },
			{ label: "Upgrade Indihome", y: UINC }
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
	
	
<script type="text/javascript">
    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Status Call Daily"
            },
            animationEnabled: false,
            legend: {
                fontSize: 14,
                fontFamily: "Helvetica"
            },
			width: 320,
			height: 260,
            theme: "light2",
            data: [
            {
                type: "doughnut",
				startAngle: 90,
                indexLabelFontFamily: "Garamond",
                indexLabelFontSize: 12,
                indexLabel: "{label} {y}%",
                startAngle: -20,
                showInLegend: true,
                toolTipContent: "{legendText} {y}%",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });
        chart.render();
    });
</script>       
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<?php	require_once("../deft_foo.php"); ?>