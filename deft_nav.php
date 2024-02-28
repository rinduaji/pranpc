<!doctype html>
<html lang="en">
<title>App PRA_NPC</title>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/Infomedia.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="../assets/css/animate.min.css" rel="stylesheet"/>

	<!-- Light Bootstrap Table core CSS    -->
	<link href="../assets/css/bootstrap-dashboard-light.css" rel="stylesheet"/>

	<!-- Fonts and icons     -->
	<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	
	<link href="../agency/awesome/css/font-awesome.min.css" rel="stylesheet" type='text/css'/>
	
	
	<!-- Datepicker and auto complete   -->
	<link rel="stylesheet" href="../assets/css/datepicker-jquery-ui.css"/>
	<link rel="stylesheet" href="../assets/css/awesomplete.css" />
	<script src="../assets/js/awesomplete.js" async></script>
	<script src="../assets/js/jquery-112.js"></script>
	<script src="../assets/js/jquery-ui.js"></script>
	<script src="../assets/js/canvasjs.min.js"></script>

<?php

	include("../assets/conn.php"); include("../assets/script.php"); 
	
?>
</head>

<body>

<div class="wrapper">
	<div class="sidebar" style="background-color: #000000" data-color="Black" data-image="">

	<!--
		Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
		Tip 2: you can also add an image using data-image tag
	-->
		
		
		<div class="sidebar-wrapper container-fluid" style="overflow:auto;">
			<span calss="imgContainer" >
			<img src="../agency/img/info4.png">
			</span>
			<ul class="nav">
			
				
				
				
				<?php  
				if ($_SESSION['jabatan']=='Agent TAM' ) {
				?>
				<li><a href="dashboard.php"><i class="pe-7s-graph3"></i><p>Dashboard</p></a></li>
				<li><a data-toggle="collapse" href="#coll1" ><i class="pe-7s-note"></i><p>Menu Agent<b class="caret"></b></p></a>
					<div class="collapse" id="coll1">
						<ul class="nav">
							<li><a href="input.php">Input CWC</a></li>
							<li><a href="form_wo_pranpc.php">WO CHURN</a></li>
							<li><a href="form_wo_winback.php">WO Winback</a></li>
							<li><a href="form_wo_profilling.php">WO Profilling</a></li>
							<li><a href="form_agent.php">List Order Transaksi</a></li>
							<li><a href="list_recall.php">List Recall</a></li>
							<li><a href="list_recall_winback.php">List Recall Winback</a></li>
							<li><a href="list_follow.php">List Follow Up</a></li>
							<li><a href="list_follow_pranpc.php">List Follow Up CHURN</a></li>
							<li><a href="list_follow_winback.php">List Follow Up Winback</a></li>
							<li><a href="list_follow_profilling.php">List Follow Up Profilling</a></li>
							<li><a href="form_rekap_agent.php" >Rekap Call Agent</a></li>
							<li><a href="script_retensi.php" >Script Offering Retensi</a></li>
							<li><a href="script_pranpc.php" >Script Anti Decline</a></li>	
							<li><a href="cek_jawaban_salah_agent.php">Cek Jawaban Quiz</a></li>
							<li><a href="monpros_agent.php">Jobdesk</a></li>
							<li><a href="news.php">News</a></li>
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
				<?php }  else if ($_SESSION['jabatan']=='Koordinator TAM' || $_SESSION['jabatan']=='Supervisor TAM DCS' || $_SESSION['jabatan']=='Tabber TAM' ){	?>
				<li><a href="dashboard_staff.php"><i class="pe-7s-graph1"></i><p>Dashboard</p></a></li>
				<li><a data-toggle="collapse" href="#coll3" ><i class="pe-7s-display2"></i><p><?php Echo $_SESSION['jb'];?><b class="caret"></b></p></a>
					<div class="collapse" id="coll3">
						<ul class="nav">
						   
							<li><a href="approve.php">Approve</a></li>
							<li><a href="approve_recall.php">Approve Recall QCO</a></li>
							<li><a href="form_export.php">Export Data</a></li>
							<li><a href="form_export_winback.php">Export Data Winback</a></li>
							<li><a href="form_export_profilling.php">Export Data Profilling</a></li>
							<li><a href="form_export_pranpc.php">Export Data CHURN</a></li>
							<li><a href="form_export2.php">Export Data Tapping QCO</a></li>
							<li><a href="form_agent.php">List Order Transaksi</a></li>							
							<li><a href="list_totrecall.php?mode=list">List Agent Recall </a></li>							
							<li><a href="myhandel.php">Myhandle</a></li>
							<li><a href="form_rekap_agent.php" >Rekap Call Agent</a></li>
							<li><a href="rekap_site.php" >Rekap Call Agree</a></li>		
							<li><a href="form_tot_approve.php">Rekap Perolehan QCO</a></li>
							<li><a href="script_retensi.php" >Script Offering Retensi</a></li>
							<li><a href="script_pranpc.php" >Script Anti Decline</a></li>
							
							<li><a href="soal_quiz.php">Soal Quiz</a></li>
							<li><a href="list_quiz_update.php">Aktivasi Login Agent</a></li>
							<li><a href="report_quiz.php">Report Quiz</a></li>
							<li><a href="cek_jawaban_salah.php">Cek Jawaban Quiz</a></li>
							<li><a href="monpros.php">Jobdesk</a></li>
							<li><a href="news.php">News</a></li>
						</ul>
					</div>
				</li>				
				<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
				
				<?php } else if ($_SESSION['jabatan']=='Analisis' ){
				?>
				<li><a href="dashboard_staff.php"><i class="pe-7s-graph"></i><p>Dashboard</p></a></li>
				<li><a data-toggle="collapse" href="#coll4" ><i class="pe-7s-home"></i><p>Menu Analisis<b class="caret"></b></p></a>
					<div class="collapse" id="coll4">
						<ul class="nav">
							<li><a href="dashboard_activity.php">Dashboard Activity</a></li>
							<li><a href="dashboard_convertion2.php">Dashboard Convertion</a></li>
                            
							
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll3" ><i class="pe-7s-display2"></i><p>Menu SPV<b class="caret"></b></p></a>
					<div class="collapse" id="coll3">
						<ul class="nav">
						    
							<li><a href="approve.php">Approve</a></li>
							<li><a href="approve_recall.php">Approve Recall QCO</a></li>
							<li><a href="form_export.php">Export Data</a></li>
							<li><a href="form_export_winback.php">Export Data Winback</a></li>
							<li><a href="form_export_profilling.php">Export Data Profilling</a></li>
							<li><a href="form_export_pranpc.php">Export Data CHURN</a></li>
							<li><a href="form_export2.php">Export Data Tapping QCO</a></li>
							<li><a href="form_agent.php">List Order Transaksi</a></li>							
							<li><a href="list_totrecall.php?mode=list">List Agent Recall </a></li>							
							<li><a href="myhandel.php">Myhandle</a></li>
							<li><a href="form_rekap_agent.php" >Rekap Call Agent</a></li>
							<li><a href="rekap_site.php" >Rekap Call Agree</a></li>
							<li><a href="form_tot_approve.php">Rekap Perolehan QCO</a></li>
							<li><a href="script_retensi.php" >Script Offering Retensi</a></li>
							<li><a href="script_pranpc.php" >Script Anti Decline</a></li>
							<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
							
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
				<?php } else if ($_SESSION['jabatan'] == 'Document Control') { ?>
						<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="dokumen_kategori.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Kategori</a></li>
									<li><a href="dokumen_item.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Item</a></li>
									<li><a href="dokumen_upload.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Upload</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
									<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
								</ul>
							</div>
						</li>
				<?php }	else if($_SESSION['jabatan']=='Duktek'){?>
				<li><a href="dashboard_staff.php"><i class="pe-7s-graph2"></i><p>Dashboard</p></a></li>
				
				<li><a data-toggle="collapse" href="#coll1" ><i class="pe-7s-note"></i><p>Menu Agent<b class="caret"></b></p></a>
					<div class="collapse" id="coll1">
						<ul class="nav">
							<li><a href="input.php" >Input CWC</a></li>
							<li><a href="form_wo_pranpc.php">WO CHURN</a></li>
							<li><a href="form_wo_winback.php">WO Winback</a></li>
							<li><a href="form_wo_profilling.php">WO Profilling</a></li>
							<li><a href="form_agent.php" >List Order Transaksi</a></li>
							<li><a href="list_recall.php" >List Recall</a></li>
							<li><a href="list_recall_winback.php" >List Recall Winback</a></li>
							<li><a href="list_follow.php" >List Follow Up</a></li>
							<li><a href="list_follow_winback.php" >List Follow Up Winback</a></li>
							<li><a href="list_follow_profilling.php" >List Follow Up Profilling</a></li>
							<li><a href="form_rekap_agent.php" >Rekap Call Agent</a></li>
						</ul>
					</div>
				</li>		
				
				<li><a data-toggle="collapse" href="#coll3" ><i class="pe-7s-display2"></i><p>Menu Spv<b class="caret"></b></p></a>
					<div class="collapse" id="coll3">
						<ul class="nav">
						    
						    <li><a href="approve.php">Approve</a></li>
							<li><a href="approve_recall.php">Approve Recall QCO</a></li>
							<li><a href="form_export.php">Export Data</a></li>
							<li><a href="form_export_winback.php">Export Data Winback</a></li>
							<li><a href="form_export_profilling.php">Export Data Profilling</a></li>
							<li><a href="form_export_pranpc.php">Export Data CHURN</a></li>
							<li><a href="form_export2.php">Export Data Tapping QCO</a></li>
							<li><a href="list_totrecall.php?mode=list">List Agent Recall </a></li>
							<li><a href="form_agent.php">List Order Transaksi</a></li>							
							<li><a href="myhandel.php">Myhandle</a></li>
							<li><a href="form_rekap_agent.php" >Rekap Call Agent</a></li>
							<li><a href="rekap_site.php" >Rekap Call Agree</a></li>	
							<li><a href="form_tot_approve.php">Rekap Perolehan QCO</a></li>
							<li><a href="script_retensi.php" >Script Offering Retensi</a></li>
							<li><a href="script_pranpc.php" >Script Anti Decline</a></li>
							
						</ul>
					</div>
				</li>
				
				<li><a data-toggle="collapse" href="#coll4" ><i class="pe-7s-config"></i><p>Menu IT<b class="caret"></b></p></a>
					<div class="collapse" id="coll4">
						<ul class="nav">							
							<li><a href="adduser.php" >Create User Agent</a></li>
							<li><a href="dashboard_activity.php">Dashboard Activity</a></li>
							<li><a href="dashboard_convertion2.php">Dashboard Convertion</a></li>
							<li><a href="soal_quiz.php">Soal Quiz</a></li>
							<li><a href="list_quiz_update.php">Aktivasi Login Agent</a></li>
							<li><a href="report_quiz.php">Report Quiz</a></li>
							<li><a href="cek_jawaban_salah.php">Cek Jawaban Quiz</a></li>
							<li><a href="news.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;News</a></li>
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll5"><i class="pe-7s-note"></i>
								<p>Menu Document Control<b class="caret"></b></p>
							</a>
							<div class="collapse" id="coll5" style="font-size:12px;">
								<ul class="nav">
									<li><a href="dokumen_kategori.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Kategori</a></li>
									<li><a href="dokumen_item.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Item</a></li>
									<li><a href="dokumen_upload.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen Upload</a></li>
									<li><a href="report_dokumen.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dokumen</a></li>
								</ul>
							</div>
						</li>
				<?php }?>
				<li><a href="form_passwordd.php"><i class="pe-7s-tools"></i><p>Ganti Password</p></a></li>
				<li><a href="search.php"><i class="pe-7s-search"></i><p>Search</p></a></li>
				
				
            </ul>
    	</div>
    </div>

    <div class="main-panel" >
        <nav class="navbar navbar-default navbar-fixed" >
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
					<?php
						$query_marquee = "SELECT * FROM news ORDER BY tanggal DESC LIMIT 1";
						$hasil_marquee = mysqli_query($con, $query_marquee);
						$total_marquee = mysqli_num_rows($hasil_marquee);

						if ($total_marquee > 0) {
							while ($row1 = mysqli_fetch_array($hasil_marquee)) {
								echo '
								<li>
									<a href="#">
									<marquee width=600 style="color:#008B8B">
										<p>Silahkan Baca News Terbaru ('.$row1['judul'].')</p>
									</marquee>
									</a>
								</li>
							  ';
							}	
						}
						?>
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="#">
                               <p><?php echo substr($_SESSION['name'],0,90); ?></p>
							   <p><?php echo substr($_SESSION['area'],0,60); ?></p>
                            </a>
                        </li>
                        <li>
                            <a href="zero_session.php">
                                <p>LOG OUT</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>