<?php
require_once("../deft_nav.php");
include("../assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}
$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl = date("Y-m-d H:i:s");

if($login<>""){ $whr= "AND login='$login'";}
?>

<!doctype html>
<html lang="en">
	<title>REFERENSI</title>
<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='list_recall.php' method='post' accept-charset='UTF-8'>
						<div>
						
						<div class="row">
						<div class="col-md-12">
						  <div class="card ">
							  <div class="header">
								  <h4 align="center" class="title"><a href="monpros.php">Jobdesk</a> || <a href="p3k.php">P3K</a></h4>
						    </div>
						    <div style="overflow-x:auto;"><a href="p3k.php"></a>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/job_spv_tl.jpg" width="941" height="479"></p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/job_ops2.jpg" width="931" height="497"></p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/job_qc.jpg" width="919" height="529"></p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/job_hr.jpg" width="942" height="251"></p>
						      <p>&nbsp;</p>
						      <p><img src="../agency/img/job_agent.jpg" width="889" height="279"></p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
						      <p>&nbsp;</p>
					        </div>
						  </div>
						</div>

                    
                </div>
						
						</div>
					</form>	
				</div>
			</div>
			</div>
		</div>
</html>
<?php	require_once("../deft_foo.php"); ?>