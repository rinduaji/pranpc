<!doctype html>
<html lang="en">
<title>App TAM</title>
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

<?php

	include("../assets/conn.php"); include("../assets/script.php"); 
	
?>
</head>

<body>

<div class="wrapper">
	<div class="sidebar" style="background-color: #e00000" data-color="red" data-image="">

	<!--
		Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
		Tip 2: you can also add an image using data-image tag
	-->
		
		
		<div class="sidebar-wrapper container-fluid" style="overflow:hidden;">
			<span calss="imgContainer" >
			<img src="../agency/img/infomedia.png">
			</span>
			<ul class="nav">
			
				
				
				
				<?php  
				if ($_SESSION['jabatan']=='Agent TAM' ) {
				?>
				<li><a href="dashboard.php"><i class="pe-7s-graph"></i><p>Dashboard</p></a></li>
				<li><a data-toggle="collapse" href="#coll1" ><i class="pe-7s-note"></i><p>Menu Agent<b class="caret"></b></p></a>
					<div class="collapse" id="coll1">
						<ul class="nav">
							<li><a href="input.php">Input CWC</a></li>
							<li><a href="form_agent.php">List Order Transaksional</a></li>
							<li><a href="list_recall.php">List Recall</a></li>
							<li><a href="list_follow.php">List Follow Up</a></li>
							<li><a href="form_rekap_agent.php" >Rekap Call Agent</a></li>
						</ul>
					</div>
				</li>
				<?php } else if ($_SESSION['jabatan']=='Koordinator TAM' || $_SESSION['jabatan']=='Supervisor TAM DCS' || $_SESSION['jabatan']=='Tabber TAM'){	?>
				<li><a href="dashboard_staff.php"><i class="pe-7s-graph"></i><p>Dashboard</p></a></li>
				<li><a data-toggle="collapse" href="#coll3" ><i class="pe-7s-notebook"></i><p><?php Echo $_SESSION['jb'];?><b class="caret"></b></p></a>
					<div class="collapse" id="coll3">
						<ul class="nav">
							<li><a href="input.php">Input CWC</a></li>
							<li><a href="form_agent.php">List Order Transaksional</a></li>
							<li><a href="form_export.php">Export Data</a></li>
							<li><a href="list_totrecall.php?mode=list">List Agent Recall </a></li>
							<li><a href="form_rekap_agent.php" >Rekap Call Agent</a></li>
							<li><a href="rekap_site.php" >Rekap Agree</a></li>
							<li><a href="approve.php">Approve</a></li>
							<li><a href="approve_recall.php">Approve Recall QCO</a></li>
							<li><a href="myhandel.php">Myhandle</a></li>
							<li><a href="form_tot_approve.php">Rekap Perolehan QCO</a></li>
						</ul>
					</div>
				</li>
				<?php } else if($_SESSION['jabatan']=='Duktek'){?>
				<li><a href="dashboard_staff.php"><i class="pe-7s-graph"></i><p>Dashboard</p></a></li>
				<li><a data-toggle="collapse" href="#coll1" ><i class="pe-7s-note"></i><p>Menu Agent<b class="caret"></b></p></a>
					<div class="collapse" id="coll1">
						<ul class="nav">
							<li><a href="input.php">Input CWC</a></li>
							<li><a href="form_agent.php">List Order Transaksional</a></li>
							<li><a href="list_recall.php">List Recall</a></li>
							<li><a href="list_follow.php">List Follow Up</a></li>
							<li><a href="form_rekap_agent.php" >Rekap Call Agent</a></li>
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll3" ><i class="pe-7s-notebook"></i><p>Menu Spv<b class="caret"></b></p></a>
					<div class="collapse" id="coll3">
						<ul class="nav">
							<li><a href="input.php">Input CWC</a></li>
							<li><a href="form_agent.php">List Order Transaksional</a></li>
							<li><a href="form_export.php">Export Data</a></li>
							<li><a href="list_totrecall.php?mode=list">List Agent Recall </a></li>
							<li><a href="form_rekap_agent.php" >Rekap Call Agent</a></li>
							<li><a href="rekap_site.php" >Rekap Agree</a></li>
							<li><a href="approve.php">Approve</a></li>
							<li><a href="approve_recall.php">Approve Recall QCO</a></li>
							<li><a href="myhandel.php">Myhandle</a></li>
							<li><a href="form_tot_approve.php">Rekap Perolehan QCO</a></li>
						</ul>
					</div>
				</li>
				<li><a data-toggle="collapse" href="#coll4" ><i class="pe-7s-notebook"></i><p>Menu Duktek<b class="caret"></b></p></a>
					<div class="collapse" id="coll4">
						<ul class="nav">							
							<li><a href="adduser.php" >Create User Agent</a></li>
						</ul>
					</div>
				</li>
				<?php }?>
				<li><a href="search.php"><i class="pe-7s-search"></i><p>Search</p></a></li>
				
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#">
                                
								<marquee width=600><p>Aplikasi CWC Tele-Account Management</p></marquee>
                            </a>
                        </li>
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="#">
                               <p><?php echo substr($_SESSION['name'],0,60); ?></p>
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