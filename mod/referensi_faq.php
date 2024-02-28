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
    <style type="text/css">
<!--
.style1 {
	color: #333333;
	font-weight: bold;
}
-->
    </style>
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
									<h4 class="title"><strong>FAQ Penawaran</strong></h4>
							  </div>
								<div style="overflow-x:auto;">
								  <p>&nbsp;</p>
								  <p>&nbsp;</p>
								  <table border="1" cellpadding="0" cellspacing="0">
                                    <col width="67">
                                    <col width="215" span="4">
                                    <col width="182">
                                    <tr height="21">
                                      <td width="67" height="21" bordercolor="#666666" bgcolor="#CCCCCC"><div align="center" class="style1">Rule</div></td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC"><div align="center" class="style1">QUESTION</div></td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC"><div align="center" class="style1">ANSWER</div></td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC"><div align="center" class="style1">DO</div></td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC"><div align="center" class="style1">DONT'S</div></td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC"><div align="center" class="style1">INFO    KESEPAKATAN</div></td>
                                    </tr>
                                    <tr height="68">
                                      <td width="67" height="68" bordercolor="#666666" bgcolor="#CCCCCC">All</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Apakah    boleh menyampaikan kalimat&quot; rekomendasi penawaran dari telkom&quot;?</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Boleh    (note: rekomendasi penawaran)</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Kalimat    &quot;rekomendasi penawaran&quot; harus disampaikan secara utuh, dan    informasi harga harus disampaikan dengan jelas.</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    boleh menyampaikan &quot;harga tidak berubah&quot; atau &quot;harganya tetap    selama2nya&quot;. (khawatir pelanggan manafsirkan harganya tetap tidak    berubah)</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="68">
                                      <td width="67" height="68" bordercolor="#666666" bgcolor="#CCCCCC">All</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Ketika    pelanggan menanyakan tagihan Totalnya sebaiknya simulasi tagihan total    pelanggan yang benar dan supaya tidak terjadi komplain?</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Total    tagihan terakhir (all i-payment)+ tarif penambahan upgrade.<br>
                                      Boleh total setelah pajak, boleh diiringi dengan PPN 10%</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Sekitar    (sebutkan harga total tagihan terakhir termasuk PPN, misal 330rb) rupiah,    ditambah biaya penambahan upgrade + PPn biaya upgrade.</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    boleh jika agen menyampaikan simulasi hanya biaya inet saja.</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="85">
                                      <td width="67" height="85" bordercolor="#666666" bgcolor="#CCCCCC">All</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Apakah    boleh mnyampaikan bahwa tarif flat / tetap&nbsp;    setiap bulan ?</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    boleh. Karena membuat persepsi yg berbeda di pelanggan terhadap tagihan    setiap bulannya (ada komponen tagihan pemakaian telepon, denda, dll).</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Informasikan    kepada pelanggan : &quot;ada tambahan tarif (sebutkan add on yg ditawarkan)    sebesar (sebutkan harganya sesuai program) flat setiap bulan pak/ bu&quot;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    boleh menggunakan tarif flat / tetap&nbsp;    setiap bulan (tanpa diikuti tarif, mis : 20ribu). Karena membuat    persepsi yg berbeda di pelanggan terhadap tagihan setiap bulannya (ada    komponen tagihan pemakaian telepon, denda, dll).</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="51">
                                      <td width="67" height="51" bordercolor="#666666" bgcolor="#CCCCCC">All</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Apabila    dalam penyebutan no tumpangan terlewat&nbsp;    1 angka , tapi saat akad dibacakan&nbsp;    AO dengan lengkap, apakah valid?</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Valid<br>
                                      Kecuali habit</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">-</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">-</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="221">
                                      <td width="67" height="221" bordercolor="#666666" bgcolor="#CCCCCC">All</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">dari    keterbatasan CP pelanggan yang tidak aktif di webcare, apakah boleh kita    mengambil CP dari aplikasi starclick ?</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Boleh,    tapi pertanggung jawaban CP diserahkan ke operasional (Spv operasional    TAM).<br>
                                        Aturan Decision Maker (DM) tetap sama (hanya yang ada di 3 aplikasi    starclik / webcare / myCX).<br>
                                        DM yg boleh :<br>
                                        1. pemilik fastel, <br>
                                        2. pemilik rumah baru krn blm balik nama (ada pernyataan dari penerima    telepon),<br>
                                        3. suami / istri dari pemilik fastel (wajib 6B), <br>
                                        4. anak dari pemilik fastel yg sdh tua atau meninggal, <br>
                                      5. jika perusahaan / kantor / usaha / lembaga / sekolah : harus pemilik /    pengelola / pimpinan / bagian keuangan.</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">-</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">-</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="51">
                                      <td width="67" height="51" bordercolor="#666666" bgcolor="#CCCCCC">All</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Apakah    boleh menggunakan, diberikan penawaran khusus dari telkom?</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Boleh</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="102">
                                      <td width="67" height="102" bordercolor="#666666" bgcolor="#CCCCCC">All</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Apakah    boleh menggunakan harga lebih hemat (dibanding channel lain)</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    boleh membandingkan harga dengan channel lain, kecuali pelanggan menanyakan    lebih detail tarif reguler (case pak ari). <br>
                                      Harga lebih murah di TAM hanya berlaku untuk upgrade, 2P3P (STB 20rb, paket    USeeTV Entry 40rb).</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Alternatif    lain, sampaikan kepada pelanggan bahwa aktivasi lebih mudah (tidak perlu    datang ke plasa atau telpon 147), pelanggan setuju langsung bisa    dinikmati.&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    boleh membandingkan harga dengan channel lain, kecuali pelanggan menanyakan    lebih detail tarif reguler (case pak ari). <br>
                                      Harga lebih murah di TAM hanya berlaku untuk upgrade, 2P3P (STB 20rb, paket    USeeTV Entry 40rb).</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="68">
                                      <td width="67" height="68" bordercolor="#666666" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Dari    data 2p banyak yang hanya menggunakan telepon saja tidak menggunakan inet    (data prospek) di awal pelanggan bilang indihome setelah di caring penawaran    2p tenyata inet tidak dipasang</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    bisa dilanjutkan penawaran jika pelanggan tidak punya inet</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    bisa dilanjutkan penawaran jika pelanggan tidak punya inet</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="68">
                                      <td width="67" height="68" bordercolor="#666666" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Untuk    IKR / instalasi, apa agent tidak boleh&nbsp;    menyebutkan di akhir (posisi di return) agent baru ingat belum    menyampaikan biaya IKR&nbsp; tapi ttp    disebutkan. Bukan tidak ada larangan harus disebutkan di awal / di akhir</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    ada biaya IKR utk proses 2P3P</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Note:    tidak ada biaya IKR.&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    ada biaya IKR utk proses 2P3P</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="51">
                                      <td width="67" height="51" bordercolor="#666666" bgcolor="#CCCCCC">STB TAMBAHAN</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Boleh    atau tidak jika kita menggunakan perbandingan tarif normal , tanpa    menyebutkan nama chanel (147/ plasa telkom)</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    boleh, karena biaya sama untuk all Channel</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Bapak    Ibu tidak perlu datang ke plasa, atau telepon 147 untuk dapat menikmati    program (sebutkan programnya), jadi lebih efisien dan mudah</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Tidak    boleh, karena biaya sama tuk all Channel</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Keputusan    Quality<br>
                                        By: Pak Ening<br>
                                      Jakarta 8 Oktober 2018</td>
                                    </tr>
                                    <tr height="51">
                                      <td width="67" height="51" bordercolor="#666666" bgcolor="#CCCCCC">HOMEWIFI</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Apakah    boleh agent membuatkan user name dan password pelanggan?&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Jika    memang permintaan pelanggan, boleh<br>
                                      User dan password diinformasikan kepada pelanggan</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Telco    Quality<br>
                                        By: Bu Silvy, Atina, YS&amp; tim<br>
                                      9 November 2018</td>
                                    </tr>
                                    <tr height="51">
                                      <td width="67" height="51" bordercolor="#666666" bgcolor="#CCCCCC">ALL</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Apakah    setelah pelanggan menolak 3 kali, penawaran tdiak boleh dilanjutkan?</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Boleh    untuk pelangga yang masih memberikan respon positif<br>
                                      Agent wajib empati dengan kondis pelanggan</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Telco    Quality<br>
                                        By: Bu Silvy, Atina, YS&amp; tim<br>
                                      9 November 2018</td>
                                    </tr>
                                    <tr height="68">
                                      <td width="67" height="68" bordercolor="#666666" bgcolor="#CCCCCC">ALL</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Jika    Pelanggan mau konfirm pihak lain ( 2 kali ) dan agent melanjutkan offeringnya    dan di akhir Pelanggan bersedia apakah boleh divalidkan ?&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Boleh,    selama posisi kuat untuk dijadikan PJ dan ada pertanyaan (apakah    bpk/ibu juga berwenang memutuskan persetujuan penawaran ini? Atau kami harus    atau perlu menghubungi juga / kembali ke....?)</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">Telco    Quality<br>
                                        By: Bu Silvy, Atina, YS&amp; tim<br>
                                      9 November 2018</td>
                                    </tr>
                                    <tr height="85">
                                      <td width="67" height="85" bordercolor="#666666" bgcolor="#CCCCCC">ALL</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">Apakah    diperbolehkan menyampaikan tarif normal sebagai pembanding harga supaya    meyakinkan plg bahwa tarif yg disampaikan benar2 hemat (karena saat ini tarif    normal tidak diperkenankan disampaikan sebelum plg bertanya)</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="215" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                      <td width="182" bordercolor="#666666" bgcolor="#CCCCCC">&nbsp;</td>
                                    </tr>
                                  </table>
								  <p>&nbsp;</p>
								  <p><a href="referensi.php">back</a></p>
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