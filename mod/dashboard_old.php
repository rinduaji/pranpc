<?php
include("../libchart/classes/libchart.php");
require_once("../deft_nav.php");
include("./assets/conn.php"); 
$jb = $_SESSION["jb"];
$login = $_SESSION['username'];
if($jb=='Agent'){$whr="login = '$login' and";}
$tgl_now=date("Y-m-d");
//$tgl_now="2018-08-09";
$query="SELECT sum(case when `kategori`='Agree' then 1 else 0 end) as Agree,
sum(case when `kategori`='Agree' and `follow`in('2','3') then 1 else 0 end) as OnProcess,
sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` in('1','6') then 1 else 0 end) as NotValid,
sum(case when `kategori`='Agree' and `Valid`='Valid' and `follow` ='6'then 1 else 0 end) as Valid,
count(id) as transaksi,
sum(case when `status`='Contacted' then 1 else 0 end) as Contacted,
sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` ='5' then 1 else 0 end) as Recall
FROM app_tam_data2 
WHERE $whr tgl between '$tgl_now 00:00:00' and '$tgl_now 23:59:59'";

$result = mysqli_query($con,$query);
$data= mysqli_fetch_array($result);
?>

<style>
   
    .bigicon {
        font-size:30px;
        color:white;
    }

    .panel{
        border-radius:0;        
    }

    .stats-item{        
        padding:1;     
        min-height:35;   

    }

    .header-item{
        font-size:15px;
        color:white;
    }

    .data-item {
        font-size:18px;
        color: black;
    }
</style>

<!doctype html>
<html lang="en">
	
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
                                    <i class="fa fa-hourglass-start fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><h5><b><?php if ($data['OnProcess']==''){ echo "0";}else{echo $data['OnProcess'];}?></b></h5></div>
                                    <div>OnProcess</div>
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
                                    <div class="huge"><h5><b><?php if ($data['NotValid']==''){ echo "0";}else{echo $data['NotValid'];}?></b></h5></div>
                                    <div>NotValid</div>
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
                                    <div class="huge"><h5><b><?php if ($data['Valid']==''){ echo "0";}else{echo $data['Valid'];}?></b></h5></div>
                                    <div>Valid</div>
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
                                    <div class="huge"><h5><b><?php if ($data['Recall']==''){ echo "0";}else{echo $data['Recall'];}?></b></h5></div>
                                    <div>Recall</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
					</div>
				
				
				
				</div><br><br>
                <?php
				if($jb<>'Agent'){
					$query2="SELECT sum(case when `follow` ='2' then 1 else 0 end) as QCO,
					sum(case when `follow` ='3' then 1 else 0 end) as TL
					FROM app_tam_data2 
					WHERE $whr tgl between '$tgl_now 00:00:00' and '$tgl_now 23:59:59'";
					
					$result2 = mysqli_query($con,$query2);
					$data2= mysqli_fetch_array($result2);
					
				?>	
				<div class="row" >
					<div class="col-lg-2 col-md-4">
					</div>
					<div class="col-lg-4 col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa fa-server fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><h4><b><?php if ($data2['QCO']==''){ echo "0";}else{echo $data2['QCO'];}?></b></h4></div>
                                    <div>Need Approve QCO</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
					</div>
					<div class="col-lg-4 col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa fa-server fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><h4><b><?php if ($data2['TL']==''){ echo "0";}else{echo $data2['TL'];}?></b></h4></div>
                                    <div>Need Approve TL</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
					</div>
				</div>
					
					
					
				<?php } ?>



            </div>
        </div>
<?php	require_once("../deft_foo.php"); ?>