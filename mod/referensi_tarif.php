<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
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
	<title>Referensi TAM</title>
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
									<h4 class="title"><strong>Referensi Tarif Normal</strong></h4>
									<p class="title">&nbsp;</p>
							  </div>
								<div style="overflow-x:auto;">
								  <table border="1" cellpadding="0" cellspacing="0">
                                    <col width="128">
                                    <col width="461">
                                    <tr height="14">
                                      <td height="14" colspan="2" bordercolor="#333333" bgcolor="#CCCCCC"><div align="center"><strong>REFERENSI HARGA PAKET INTERNET NORMAL (TELKOM)</strong></div></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC">10 Mbps</td>
                                      <td width="421" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <div align="left">210.000 </div></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC">20 Mbps</td>
                                      <td width="421" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <div align="left">310.000 </div></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC">30 Mbps</td>
                                      <td width="421" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <div align="left">470.000 </div></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC">40 Mbps</td>
                                      <td bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <div align="left">570.000 </div></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC">50 Mbps</td>
                                      <td bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <div align="left">670.000 </div></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC">100 Mbps</td>
                                      <td bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <div align="left">1.220.000 </div></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC"></td>
                                      <td bordercolor="#333333" bgcolor="#CCCCCC"></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" colspan="2" bordercolor="#333333" bgcolor="#CCCCCC">HARGA NORMAL HOME    WIFI</td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC">10 Mbps kuota    50 Gb</td>
                                      <td bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <div align="left">140.000 </div></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC">10 Mbps kuota    100 Gb</td>
                                      <td bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <div align="left">170.000 </div></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC"></td>
                                      <td bordercolor="#333333" bgcolor="#CCCCCC"></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" colspan="2" bordercolor="#333333" bgcolor="#CCCCCC">REFERENSI TARIF TELP NORMAL (ke SELULER)</td>
                                    </tr>
                                    <tr height="42">
                                      <td width="177" height="42" bordercolor="#333333" bgcolor="#CCCCCC">Tarif Panggilan Dari Pstn Ke Seluler</td>
                                      <td width="421" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;- ada pembedaan tarif berdasarkan jarak dan    waktu<br>
                                        &nbsp;- mulai dari 900 s.d 2650 rupiah per    20 detik<br>
                                      &nbsp;- info detail di MyKISS (Tarif    Panggilan Dari Pstn Ke Seluler)</td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" bordercolor="#333333" bgcolor="#CCCCCC"></td>
                                      <td bordercolor="#333333" bgcolor="#CCCCCC"></td>
                                    </tr>
                                    <tr height="14">
                                      <td height="14" colspan="2" bordercolor="#333333" bgcolor="#CCCCCC">REFERENSI TARIF ANTAR SELULER</td>
                                    </tr>
                                    <tr height="28">
                                      <td height="28" bordercolor="#333333" bgcolor="#CCCCCC">TELKOMSEL</td>
                                      <td width="421" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;- telpon sesama TELKOMSEL : mulai dari Rp    650 s.d Rp 850 per menit<br>
                                      &nbsp;- telpon ke operator lain : mulai    dari Rp 1500 per 30 detik</td>
                                    </tr>
                                    <tr height="28">
                                      <td height="28" bordercolor="#333333" bgcolor="#CCCCCC">INDOSAT</td>
                                      <td width="421" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;- telpon sesama INDOSAT : mulai dari Rp 50    s.d Rp 150 per 30 detik<br>
                                      &nbsp;- telpon ke operator lain : mulai    dari Rp 250 s.d Rp 500 per 30 detik</td>
                                    </tr>
                                    <tr height="28">
                                      <td height="28" bordercolor="#333333" bgcolor="#CCCCCC">AXIS - XL</td>
                                      <td width="421" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;- telpon sesama AXIS-XL : Rp 250 per 15    detik<br>
                                      &nbsp;- telpon ke operator lain : Rp 900    per menit</td>
                                    </tr>
                                    <tr height="28">
                                      <td height="28" bordercolor="#333333" bgcolor="#CCCCCC">XL</td>
                                      <td width="421" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;- telpon sesama XL : Rp 10 per detik<br>
                                      &nbsp;- telpon ke operator lain : Rp 20    per detik</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" bordercolor="#333333" bgcolor="#CCCCCC">3</td>
                                      <td width="421" bordercolor="#333333" bgcolor="#CCCCCC">&nbsp;- telpon sesama TRI : Rp 10 per detik<br>
                                      &nbsp;- telpon ke operator lain : Rp 399    per menit (panggilan lokal) dan Rp 1.000 per menit (panggilan jarak jauh)</td>
                                    </tr>
                                  </table>
								  <p>&nbsp;</p>
								  <p><img src="../assets/img/tarif.jpg" width="891" height="748"></p>
								  <p>&nbsp;</p>
								  <p><a href="referensi.php">back</a></p>
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