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
									<h4 class="title"><a href="referensi.php">Referensi Script Anti Decline</a> | <strong><a href="referensi_produk.php">Referensi Keunggulan Produk</a></strong> | <strong><a href="referensi_tarif.php">Referensi Tarif Normal</a></strong> | <strong><a href="referensi_faq.php">FAQ Penawaran</a></strong></h4>
							  </div>
								<div style="overflow-x:auto;">
								  <p>&nbsp;</p>
								  <p>TM OLO</p>
								  <p>&nbsp; </p>
								  <table border="1" cellpadding="0" cellspacing="0" bordercolor="#999999">
                                    <col width="98">
                                    <col width="163">
                                    <col width="493">
                                    <tr height="21">
                                      <td height="21" width="98"><div align="center"><strong>RULE</strong></div></td>
                                      <td width="163"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                      <td width="493"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105">TM OLO</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Utk    program Add On TM OLO sebagai bahan perbandingan bisa dipergunakan oleh bpk /    ibu,Jika Dirasa lebih effisien dan bnyk manfaatnya ibu / bpk bisa    mempergunakan programnya selama berlangganan &amp; saya yakin ibu akan lebih    nyaman dgn penambahan program yang saat ini saya sampaikan, tarifnya pun    sangan murah hanya di XXXX + PPN 10% saja</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84">TM OLO</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Bapak    tidak perlu khawatir untuk tagihan pertama (sebutkan bulannya) itu akan di    kenakan prorata (belum di hitung full) sesuai dengan penggunaan bapak/ibu,    dan mulai terhitung tagihan normal itu nanti di bulan kedua (sebutkan nama    bulan)</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84">TM OLO</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Dengan    tarif penambahan hanya xxx + ppn 10% sangat hemat sekali dikarenakan    programnya pun berlaku selama berlangganan atau s.d 31 Maret 2018, Dan tdk    semua pelanggan mendapatkan penawaran&nbsp;    promo ini, hanya pelanggan Terpilih saja yang memndapatkan penawaran    khusus ini.</td>
                                    </tr>
                                  </table>
								  <p>&nbsp;</p>
								  <p>&nbsp;</p>
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