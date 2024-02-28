<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$tgl=date("Y-m-d");
$prevN = mktime(0, 0, 0, date("m"), date("d") - 70, date("Y"));
$last = date("Y-m-d", $prevN);
if($tgl==''){$tgl = date("Y-m-d H:i:s");}
if($Login!=''){$wlogin="AND a.login = '$Login'";}
if($date!=''){$dt = explode("-",trim($date)); $tgl="$dt[2]-$dt[1]-$dt[0]";}
if($logagent<>''){$wr="AND a.login = $logagent";}
if($fastel<>''){$wr="AND a.fastel = $fastel";}
if($site=='AllArea'){$area="";}
else{$area="AND b.user5 = '$site'";}

//$dataPerPage = 20;
//if(isset($_GET['page']))
//{
//	$noPage = $_GET['page'];
//}
//else $noPage = 1;
//$offset = ($noPage - 1) * $dataPerPage;

if($jb=="Tabber"){$whr="WHERE $area a.follow LIKE '%2%' AND (`upd_qco` = ' ' OR `upd_qco` IS NULL) $wr ORDER BY `tgl` asc ";}
//AND a.input = 'New' AND upd_qco is NULL
else if ($jb=="Supervisor"){$whr="WHERE $area a.follow = '3' AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
}										
else {$whr="WHERE $area a.follow in ('4','3','2','7') AND tgl between '$last 00:00:01' AND  '$tgl 23:59:59' $wr ORDER BY `tgl` asc";
}
if($jb=="Tabber"){

$query="SELECT DISTINCT convert(a.tgl, DATE) as tanggal, b.user5 as Site, 
sum(case when `kategori`='Agree' then 1 else 0 end) as Agree,
sum(case when `kategori`='Agree' and `follow`in('2','3') then 1 else 0 end) as OnProcess,
sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` in('1','6') then 1 else 0 end) as NotValid,
sum(case when `kategori`='Agree' and `Valid`='Valid' and `follow` ='6'then 1 else 0 end) as Valid,
count(a.id) as transaksi,
sum(case when `status`='Contacted' then 1 else 0 end) as Contacted,
sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` ='5' then 1 else 0 end) as Recall
FROM app_tam_data2 AS a
INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
WHERE a.tgl between '$tgl 00:00:00' and '$tgl 23:59:59' $area group by b.user5";
//echo $query;
}else{
	$query="SELECT DISTINCT convert(a.tgl, DATE) as tanggal, b.user5 as Site,  
sum(case when `kategori`='Agree' then 1 else 0 end) as Agree,
sum(case when `kategori`='Agree' and `follow`in('2','3') then 1 else 0 end) as OnProcess,
sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` in('1','6') then 1 else 0 end) as NotValid,
sum(case when `kategori`='Agree' and `Valid`='Valid' and `follow` ='6'then 1 else 0 end) as Valid,
count(a.id) as transaksi,
sum(case when `status`='Contacted' then 1 else 0 end) as Contacted,
sum(case when `kategori`='Agree' and `Valid`='Not Valid' and `follow` ='5' then 1 else 0 end) as Recall
FROM app_tam_data2 AS a
INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 
WHERE a.tgl between '$tgl 00:00:00' and '$tgl 23:59:59' $area group by b.user5";
//echo $query;
}
$Page = $offset;
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form id='input' name="demoform" action='rekap_site.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>REKAP AGREE</b>
                        </div>
						<div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						
						<tr>
							<div class="form-group">
								<label>Tanggal</label>
								<input class="form-control"
										   type="text"
										   name="date"
										   id="datepicker"
										   placeholder="ex: 2018-12-31"
										   required
									/>
							</div>
						</tr>
							
							<tr>	
							<div class="form-group">
								
								<label class="control-label">Agent Site</label>
								<select  name="site" class="form-control" value="<? echo $exp?>">	
									<option value=""	>Pilih</option>
									<option value="AllArea"	>All Area</option>
									<option value="Bandung"	>Bandung</option>
									<option value="CW"  	>CW</option>
									<option value="BSD"  	>BSD</option>
									<option value="Malang"  >Malang</option>
									<option value="Makassar">Makassar</option>
									<option value="Medan"  	>Medan</option>
									<option value="Semarang">Semarang</option>
								</select>		
								</label>
								
							</div>							
						</tr>
							<tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title">Rekap per hari</h4>
								</div>
								<?php
								if (isset($_POST['search'])){
								if ($site=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Agent Site belum dipilih !</div>";
								}
								}
								?>
								<div style="overflow-x:auto;">
									<table class="table table-hover table-striped">
										<thead>
											
											<th align="center"><font color="red" face="Tahoma" size="2">Area</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Tanggal</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Agree</th>
											<th align="center"><font color="red" face="Tahoma" size="2">OnProcess</th>
											<th align="center"><font color="red" face="Tahoma" size="2">NotValid</th>				
											<th align="center"><font color="red" face="Tahoma" size="2">Valid</th>
											<th align="center"><font color="red" face="Tahoma" size="2">Contacted</th>											
											<th align="center"><font color="red" face="Tahoma" size="2">Recall</th>
																			
										</thead>
										<tbody>
										<?php
										//$Page = $Page + 1;$jml=0;
										//echo $query;
										$hasil = mysqli_query($con,$query) or die ("Query gagal!");
										while($data = mysqli_fetch_array($hasil)) {
										echo"<tr>
										
											<th align=\"center\" style=\"font-size:10px\">".$data['Site']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['tanggal']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['Agree']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['OnProcess']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['NotValid']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['Valid']."</th>
											<th align=\"center\" style=\"font-size:10px\">".$data['Contacted']."</th>											
											<th align=\"center\" style=\"font-size:10px\">".$data['Recall']."</th>
												
											";
								
										//if ($jb=="Tabber" && $data['upd_qco']==""){echo "<th align=\"center\"><a href=\"form_tabber.php?id=$data[id]\">Approve</a></th>";}
										//else if ($jb=="Tabber" && $data['upd_qco']<>"$uname"){echo "<th align=\"center\">Handel $qco</th>";}
										//else if ($jb=="Tabber" && $data['upd_qco']=="$uname"){echo "<th align=\"center\"><a href=\"form_tabber.php?id=$data[id]\">My Approve</a></th>";}
										//else if ($jb=="Supervisor"){echo "<th align=\"center\"><a href=\"form_spv.php?id=$data[id]\">Approve</a></th>";}										
										//else if ($jb=="Koordinator"){echo "<th align=\"center\">$qco | $tl </a></th>";}
										//else { echo "<th align=\"center\">#</a></th>";}
										//$Page = $Page + 1;										
										}										
										
										?>
										</tbody>
									</table>
									
								</div>
								<table>
								<?php
								//$query   = "SELECT COUNT(*) AS jumData FROM app_tam_data2 as a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 $whr ";
								//echo $query;
								$hasil   = mysqli_query($con,$query);
								$data    = mysqli_fetch_array($hasil);
								//$jumData = $data['jumData'];
								//$jumPage = ceil($jumData/$dataPerPage);
								//if ($noPage > 1) echo  "<td><a href='approve.php?page=".($noPage-1)."&site=$site'><img src='../assets/img/prev.png' alt='Previous Page' width='16' height='16 border='0'></a></td>";
								//echo "<td><input type='text' name='pageno' value='$noPage/$jumPage' size='5' readonly></td>";
								//if ($noPage < $jumPage)  echo "<td><a href='approve.php?page=".($noPage+1)."&site=$site'><img src='../assets/img/next.png' alt='Next Page' width='16' height='16 border='0'></a></td> "; 
								//echo "</br><table><td><strong>Total Data : $jumData</strong></table></td>";
								
								if ($_POST['date'] And $_POST['exp'] And $_POST['site'])
								{
									echo "$tgl"; 
									//include "export.php";
								}
								
								?>
								</table>
								</div>
								
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