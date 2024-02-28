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
								  <p>Home WiFi</p>
								  <p>&nbsp;</p>
								  <table border="1" cellpadding="0" cellspacing="0" bordercolor="#999999">
                                    <col width="98">
                                    <col width="163">
                                    <col width="493">
                                    <tr height="21">
                                      <td height="21" width="98"><div align="center"><strong>RULE</strong></div></td>
                                      <td width="163"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                      <td width="651"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                    </tr>
                                    <tr height="105">
                                      <td height="85" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">penawaran    kami sayang jika dilewatkan Pak. Semisal Bpk beli paket data, 2gb saja sdh    45rb, dan hanya bisa digunakan&nbsp; 1 hp.    Kalau disini kami tawarkan paket 50gb dengan kecepatan up to 10M    penambahannya cm 35.200 perbulan sdh pajak 10% dan jg bs penggunaan banyak    org, sangat hemat dan bermanfaatkan pak</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">progarm    yang diberikan tidak terikat pak, jika bapak bisa evaluasi, jika kedepanya    bapak kurang merasa nyaman kita bisa kembalikan lagi kepada bapak tp dgn    program yang kita berikan kami yang dan percaya keluarga bapak jauh lebih    nyaman&quot;. karena PENAMBAHAN Rp xxxx akan dimulai dibulan&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Kan    sayang pak kalau dilewatkan penawaran ini. Silahkan bapak evaluasi dan    Penambahan tarifnya akan mulai dibayarkan dibulan depan. boleh juga    dibandingkan dengan penggunaan provider lain dikuota yang sama. Tentu yang    kami tawarkan lebih banyak manfaatnya dan pastinya lebih murah</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Bapak/ibu    kan sayang programnya boleh dimaksimalkan boleh digunakan bersama keluarga di    rumah dan lebih hemat sampai 12 bulan (1 tahun ke depan) karena penambahan    perbulannya cukup 32rb +ppn 10 % diluar penggunaan lainnya sudah bisa gunakan    50gb dengan kecepatan 10mbps jadi lebih nyaman menggunakan internet    dirumah&nbsp;</td>
                                    </tr>
                                    <tr height="189">
                                      <td height="152" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">kan    sayang pak/bu kalau programnya dilewatkan, karena untuk rekomendasi penawaran    ini saya tidak bisa pastikan apakah kedepannya bapak/ibu akan mendapatkan    kesempatan yang sama atau tidak.jadi jika bpk bersedia berlangganan maka    programnya bs maksimalkan untk penggunaan inetnya&nbsp; karena tarifnya pun sangat murah hanya    penambhan Rp. 32000/bulan + ppn 10% bpk/ibu sudah&nbsp; bisa menikmati fasilitas inet kec 10mbps    dengan kuota 50GB.dan sebagai bahan perbandingan, jika bpk/ibu beli paket    data atau voucher hanya bisa digunakan utk pribadi, sementara untuk program    home wifi ini bisa digunakan oleh seluruh anggota keluarga yang ada dirumah.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="86" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Bapak    / Ibu , khan sayang program nya untuk di lewatkan untuk tarif nya ini sudah    kita berikan dengan tarif promo, jadi hanya dengan penambahan Rp 32.000 +    ppn10%&nbsp; diluar penggunaan lainnya    ,programnya bisa bapak/ Ibu nikmati selama 1 tahun&nbsp; kedepan , dan&nbsp; seluruh anggota keluarga bisa menggunakan    internet wi fi secara bersamaan</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Bapak    / Ibu , khan sayang program nya untuk di lewatkan untuk tarif nya ini sudah    kita berikan dengan tarif promo, jadi hanya dengan penambahan Rp xx saja +    ppn10%&nbsp; diluar penggunaan lainnya,    programnya bisa bapak/ Ibu nikmati selama 1 tahun&nbsp; kedepan , dan&nbsp; seluruh anggota keluarga bisa menggunakan    internet wi fi secara bersamaan...</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="83" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Bapak    / Ibu , khan sayang program nya untuk di lewatkan untuk tarif nya ini sudah    kita berikan dengan tarif promo, jadi hanya dengan penambahan Rp 32.000 +    ppn10%&nbsp; diluar penggunaan lainnya    ,programnya bisa bapak/ Ibu nikmati selama 1 tahun&nbsp; kedepan , dan&nbsp; seluruh anggota keluarga bisa menggunakan    internet wi fi secara bersamaan</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Bapak    / Ibu , khan sayang program nya untuk di lewatkan untuk tarif nya ini sudah    kita berikan dengan tarif promo, jadi hanya dengan penambahan Rp xx saja +    ppn10%&nbsp; diluar penggunaan lainnya    ,programnya bisa bapak/ Ibu nikmati selama 1 tahun&nbsp; kedepan , dan&nbsp; seluruh anggota keluarga bisa menggunakan    internet wi fi secara bersamaan...</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="143" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Kan    sayang pak kalau dilewatkan penawarannya, krn kedepannya bpk blm tentu dpt    penawaran yg sama. Apalagi tarif yg kami tawarkani ini jauh lebih hemat,    cukup dgn penambahan 32 rb plus ppn 10 % ibu dan keluarga sdh nisa dptkan    inet kec 10 Mbps kuota 50 Gb. <br>
                                        Sbg bahan perbandingan klu ibu beli paket data Tsel 2 Gb itu sdh 60rb an,    paket yg&nbsp; kami tawarkan jauh lebuih    hemat pak. 
                                      Jd bs di optimalkan terlebih dahulu programnya, dan penambahan tarif nya    sdh ditagihkan sejak aktif program nya</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Mungkin    saat ini&nbsp; blm begitu memerlukan tp&nbsp; kdpnnya jika&nbsp; memerlukan sewaktu2, tdk perlu antri atau    menghubungi chanel telkom untuk diberikan penawaran ini , tidak semua    pelanggan mendapatkan penawaran spesial dengan harga spesial juga&nbsp;</td>
                                    </tr>
                                    <tr height="21">
                                      <td height="21" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">tidak    ada lagi buffering, intermiten, penggunaan internet akan jauh lebih stabil</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Di    sini kan bapak dengan harga yg sangat terjangkau bapak sudah mendapatkan    kecepatan internet yg tinggi yaitu 10 mbps dengan kuota yg sudah besar 50GB    dan walaupun kuotanya sudah habis bapak masih bisa akses jaringannya    internetnya, hanya saja kecepatannya yg menurun.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Nanti    bisa digunakan keluarganya ataupun cucunya dirumah, atau silakan di    maksimalkan pnggunaannya pak, sayang pak ini klo di lewatkan klo pngajuan pun    belum tentu harga yang didapat semurah harga yang saya tawarkan</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">Iya    pak. Tapi disini krna tlpnya sdh support fiber, keunggulannya bapak sdh bs    menikmati selain tlpn, bapak juga sdh bs menikati internet wifi, dan tarifnya    kami berikan tarif promo slma12 bln dgn penambahan 32k. Untuk jaringannya,    kami pastikan internet dari kami jauh lebih stabil pak</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">Home WiFi</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="651">utk    jaringan internet dari Telkom kami pastikan jauh lebih stabil. Nanti bapak bs    bandingkan..bahkan utk tarifnya skrg kami berikan promo slma 12 bln ckup dgn    penambahan 32k.&nbsp;</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="125" width="98">Home WiFi</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="651">Sayang    sekali jika program nya bapak/ibu lewatkan karna saat ini telkom berikan    tarif promo yg sangat hemat,dengan tarif penambahan perbulan 32ribu+ppn 10%    bapak/ ibu bisa maksimalkan pemakaian WiFi dirumah bersama kluarga. Krn WiFi    bisa digunakan lebih dari satu org, semua kluarga yg ada dirumah bisa pakai    slama 24 jam dengan kuota yg disediakan sbnyak 50Gb.Jadi jika ada kluarga yg    datang krumah bapak/ibu ,ya boleh memanfaatkan nya. Kita pastikan program nya    sangat bermanfaat bagi bapak dan ibu dirumah.&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">Home WiFi</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="651">digali&nbsp; penggunaan inet sebalumnya untuk keperluan    apa? Bila untuk download atau streaming bisa lebih lancar</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">Home WiFi</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="651">di    era teknologi membutuhkan kec yang tinggi bisa searching,browsing sepuasnya    tnpa takut kantong jebol</td>
                                    </tr>
                                    <tr height="189">
                                      <td height="141" width="98">Home WiFi</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="651">Mohon    maaf ya pak untuk ketidaknyamanannya, untuk program yang kemarin kita    tawarkan masih belum bisa di proses, maka dari itu saya menghubungi bapak    agar kedepannya bapak dan keluarga bisa menikmati fasilitas internet dirumah,    kami berikan penawaran khusus buat bpk sekeluarga untuk bs menggunakan    internet di rmh bpk, krn seiring dgn perkembangan informasi saat ini sangat    pesat pak&nbsp; , maka tehnologi dan    informasi adalah 2 hal yg sangat penting pak buat pelanggan, dan dgn    penawaran ini bpk bs mennggunakan internet dgn quota 50 G dan kec 10 M hanya    dgn penambahan 32 rb plus ppn 10 persen , itupun baru dikenakan di bln    dpn&nbsp;</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="99" width="98">Home WiFi</td>
                                      <td>Kecewa dengan Telkom</td>
                                      <td width="651">Mohon    maaf untuk ketidaknyamanannya pak. Kami yakin program yang kami tawarkan ini    tidak akan mengecewakan bapak dan keluarga karena sudah dipilih melalui    rekomendasi kelayakan jaringan dari Telkom. Dan apabila ada kendala, kami    juga memberikan kemudahan untuk bapak dan keluarga membuat laporan pengaduan    melalui aplikasi my indihome agar bapak bisa memonitor progres laporannya    langsung dari aplikasi</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="112" width="98">Home WiFi</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="651">Mohon    maaf atas ketidaknyaman nya pak.../bu... namun bpk/ibu jgn khawatir krn saat    ini utk keluhan pelanggan terkait gangguan fasilitas telkom sdh di permudah    utk laporan nya, bpk/ibu bisa langsung hub call center kami di 147, atau bisa    jg melalui web kami, dan bisa jg melalui aplikasi my indihome. Kami yakin    program yang kami tawarkan ini tidak akan mengecewakan bapak dan keluarga    karena sudah dipilih melalui rekomendasi kelayakan jaringan dari Telkom</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="65" width="98">Home WiFi</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="651">mohon    maaf ya B/I untuk ketidaknyamanan ny kita akan bantu 
                                        konfirmasi untuk kendala B/I saat ini namun jika B/I nanti ada 
                                        kendala lagi boleh B/I laporkan melalui 147 atau boleh langsung ke 
                                      plaza telkom ny B/I</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="77" width="98">Home WiFi</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="651">Baik    pak, sebelumnya maaf ya pak atas ketidaknyamanan bapak 
                                        dengan keluarga. Nanti kita akan bantu proses terlebih dahulu dari 
                                        sistem kita ya pak. Namun apabila dalam 2 atau 3 hari kedepan 
                                        belum ada tindak lanjut atas kendalanya, boleh langsung menghubungi 
                                      kita ya pak ke layanan call center kita di 147</td>
                                    </tr>
                                    <tr height="252">
                                      <td height="171" width="98">Home WiFi</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="651">mohon    maaf atas ketidak nyamanannya pak/bu&hellip;untuk kendalanya akan coba kita bantu    lapor agar&nbsp; kedepannya segera ada    perbaikan dan berfungsi normal kembali..<br>
                                        dan utk penawaran program kami ini, sangat disayangkan sekali jika bpk/ibu    lewatkan begitu saja, karena kedepannya bpk/ibu bisa rasakan manfaat dari    program tersebut. Boleh bpk/ibu bandingkan juga,&nbsp; kita pastikan utk layanan internetnya sudah    super cepat dimana untuk jaringannya sendiri sudah menggunakan fiber    optik. 
                                      dan tentunya ini juga kita berikan hanya untuk PL terpilih saja pak/bu,    dimana bpk/ibu merupakan PL terpilih kami maka tarif yg kami berikan juga    sudah sangat hemat dan spesial, hanya dengan Rp. 32rb/bulan + ppn 10% saja    bpk/ibu sudah bisa menikmati internet dengan kecepatan 10mbps kuota 50GB</td>
                                    </tr>
                                    <tr height="210">
                                      <td height="157" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">Jika    bapak/ibu sudah aktif wifi dengan provider lain,tdk jadi msalah kalau mau    menggunakan wifi dr telkom saat ini.bpk/ibu bisa bandingkan untuk kdepannya    dari segi pemakaian dan tarif,kita yakin dgn internet wifi yg kita berikan    saat ini sangat baik.dr segi pemakaian jaringan nya sudah support dgn jringan    fiber dan tarif yg sangat hemat,dan bila kbutuhan pemakaian internet    bapak/ibu dirumah bnyak bisa mnjadi alternatif dlm pemakaian,bisa mnggunakan    provider telkom bisa juga mnggunakan wifi dr provider lain krn masing2kan    memiliki nama wifi n password yg berbeda.sangat sayang jika dilewatkan    program ini krn tarif sngat hemat dan pemakaian sudah cukup maksimal.jadi    boleh dimanfaatkan ya pak/bu.</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="100" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">mohon    maaf pak atas ketidaknyamananya&quot;kan sayang jikalau bapak lewatkan, 
                                        ini dengan kec 10M Quota 50GB tarif hanya 32.000rb/bulan 
                                        jika dibandingkan jika bapak beli paket data inet, quota 10GB sampai 50rb    dan hanya sendiri saja menggunakan, namun kalau dirumah bisa digunakan dengan    seluruh keluarga dirumah, 24jam penggunaan... 
                                        kalau dibandingkan juga dengan harga normal kec 10M quota 50GB 140.000 
                                      kan jauh lebih hemat masa promo 1 tahun</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">Baik    Bapak / Ibu walaupun sudah mengunakan provider lain khan tidak masalah Bapak    / Ibu. Bapak / Ibu bisa pertimbangkan dari segi tarif dan kecepatan yg kita    berikan. Kalau dengan paket data, tarif utk Quota 50GByte kan lebih mahal    Bapak / Ibu. Tapi dengan Homewifi/Internetwifi Hanya dengan penambahan Rp xx    + ppn 10% saja diluar penggunaan lainnya setiap bulan...</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="86" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">1.    mohon maaf pak untuk produk yg bpk gunakan saat ini dikec brp mbps pak? Dan    perbulannya bpk bayarkan brp? Kalau di kami lebih murah pak apalagi ini    promonya 12 bulan lho pak. Cukup dg penambahan perbulan 32k +ppn 10% bpk sdh    bisa menikmati inet kec 10mbps dg kuota 50 Gb kan sangat murah sekali pak dan    jika kuota hbs bpk masih bs menikmati inetnya dg kec 512kbps</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">2.    baik pak/bu jika paketan data bpk hnya bisa gunakan sendiri kalau home wifi    ini bisa digunakan serumah pak dan lebih hemat. Bayangkan pak Misal bpk    menggunakan paketan data, minimal per orang mengeluarkan uang 50k dan ada brp    orang yg tinggal di rumah bpk. sedangkan disini bpk cukup&nbsp; dg penambahan perbulan 32k +ppn 10% bpk sdh    bisa menikmati inet kec 10mbps dg kuota 50 Gb kan sangat murah sekali pak dan    sudah bisa digunakan rame-rame</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="69" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">kalau    pket data kan mahal ibu minim 1bln 50rb dn itupun tdk abis dlm 1bln ,klau ini    kan dg pnmbahan 32000 +ppn 10 % kec lebih stabil dibanding paket data bisa    digunkan 1 kluarga kan jauh lbih hemat ibu dibanding paket data yg biasanya    ibu dpt kisaran 6Gb itupun tdk bisa dipkek dengan banyak orang&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">Bisa    dibandingkan keunggulan produk kami krn dengan cukup menambhkan Rp.xxx tiap    bulan sdh mendapatkan kec.10 Mbps dan qoutanya 50 GB/100 GB dan perlu    diketahui tdk semua pelangan punya kesempatan ini.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">Selama    12 bulan bpk/ibu diberikn promo 32rb /bulan yg mana tarif normalnya 140rb per    blnnya maka disini ada penghematan biaya 108rb tiap bulan selama 12 bulan    jadi tentunya sangat perlu dipertimbagkan penawaran kami</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">Sudah    pakai fiber optik lebih cepat lebih stabil, bpk tidak perlu beli paketan lagi    bisa inet dirumah paketan kan mahal pak. sayang pak klo dilewatkan diberikan    tarif khusus pak.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">Home WiFi</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="651">iya    buk, utk yg indihome kan d nmr lain..ini nmr yg ini mendapatkan penawaran    khusus ibuk juga bs menikmati internet wifi dgn tarif promo slma 12 bulan    buk, cukup dgn penambahan 32k</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="87" width="98">Home WiFi</td>
                                      <td>Tarif Mahal</td>
                                      <td width="651">Penawaran    ini cukup murah bapak. Karena untuk harga kuota yang sama bapak harus    membayar lebih dari yang kami tawarkan. Hanya dengan penambahan 32 ribu + ppn    10% perbulan bapak sudah mendapatkan kuota internet 50 gb dengan kecepatan 10    mbps. Setara dengan bapak menonton 50 film kualitas bluray dalam 1 bulan.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">Boleh    bapak/ibu bandingkan harga paket data saat ini 10 gb saja diatas 50rban.    Namun .. disini telkom berikan bapak bukan hanya 10gb melainkan sudah 50gb    hanya dengan menambahkan biaya berlangganan per bulannya 32rb + ppn 10%    diluar penggunaan lainnya jika ada&nbsp;</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="95" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">Kita    pastikan ini tarif yg paling hemat yg kita berikan kpda bpk/ibu.krn dengan    penambahan perbulan 32ribu+ppn10% bapak/ibu sudah mndapatkan kuota internet    sbnyak 50Gb. Bila kita bandingkan dgn pmakaian paket data, kuota 4GB saja    tarif nya sudah sampai kurang lebih 50ribu. Jadi sangat sayang jika bpk/ibu    lewatkan pemakaian program internet WiFi dr telkom.<br>                                      </td>
                                    </tr>
                                    <tr height="168">
                                      <td height="122" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">karena    sayang ya pak/bu jika dilewatkan karena untuk saat ini sudah jauh dihematkan    oleh telkom hanya dengan penambahan Rp 32.000 bapak/ibu sudah bisa menikmati    kuota 50gb dgn kec. 10mbps karena kalau dibandingkan dengan paket data ini    sudah jauh lebih hemat pak/bu, jadi jika bpk bersedia maka&nbsp; bapak/ibu bisa maksimalkan penggunaannya,    dan lagi jika dibandingkan dengan tarif normal saat ini sampai 140 rbu, jadi    dsni krna kita sedang ada promo kita berikan tarif promo yg bisa bpak/ibu    nikmati hanya dgn penambahan 32 rbu saja + ppn 10%.&nbsp;</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="92" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">Baik    Bu sebagai bahan pertimbangan untuk beli paket data dengan Qoata 50Gbyte    tarifnya lebih mahal, dan hanya bisa di gunakan sendiri saja, berbeda dengan    Home wi fi yang kita tawarkan saat ini, selain kecepatannya lebih    stabil,harga yang cukup hemat, bisa di gunakan semua anggota keluarga, dan    saat ini jika bapak/ ibu setuju, maka akan mendapatkan promo sampai dengan 12    bulan kedepan</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="76" width="98">Home WiFi</td>
                                      <td>Tarif Mahal</td>
                                      <td width="651">Sayang    jika ibu lewatkan program yang di berikan khusus kepada ibu , dan untuk tarif    nya ini sudah kita berikan dengan tarif promo, jadi hanya dengan penambahan    Rp 32.000 + ppn10%&nbsp; diluar penggunaan    lainnya ,programnya bisa bapak/ Ibu nikmati selama 1 tahun&nbsp; kedepan , dan&nbsp; seluruh anggota keluarga bisa menggunakan    internet wi fi secara bersamaan...</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">sangat    sayang pak jika dibandingkan kalau bapak beli paket data handpone lebih    mahal,dan hanya bisa digunakan sendiri, kalau dgn home wifi bisa digunakan    semua keluarga dan tarif yg diberikan juga sangat hemat pak dengan kec 10 m    quota 50 GB diberrya 32.000rb/bln</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="89" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">tidak    ingin dimaksimalkan terlebih dahulu pak/bu untuk 
                                        penggunaannya karena kan sayang ya pak/bu jika dilewatkan karena 
                                        untuk saat ini sudah jauh dihematkan oleh telkom hanya dengan 
                                        penambahan Rp 32.000 bapak/ibu sudah bisa menikmati kuota 50gb 
                                        dgn kec. 10mbps karena kalau dibandingkan dengan paket data ini 
                                        sudah jauh lebih hemat pak/bu, jadi boleh bapak/ibu maksimalkan 
                                      penggunaannya terlebih dahulu</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="95" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">Baik    Bapak/ Ibu sebagai bahan pertimbangan untuk beli paket data dengan Qoata    50Gbyte tarifnya lebih mahal, dan hanya bisa di gunakan sendiri saja, berbeda    dengan Home wi fi yang kita tawarkan saat ini, selain kecepatannya lebih    stabil, bisa di gunakan semua anggota keluarga, apabila bapak/ Ibu setuju,    akan mendapatkan harga promo sampai dengan 12 bulan kedepan, penambahan Rp xx    + pajak 10% di luar pemakaian lainnya ...</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="90" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">tidak    ingin dimaksimalkan terlebih dahulu pak/bu untuk 
                                        penggunaannya karena kan sayang ya pak/bu jika dilewatkan karena 
                                        untuk saat ini sudah jauh dihematkan oleh telkom hanya dengan 
                                        penambahan Rp 32.000 bapak/ibu sudah bisa menikmati kuota 50gb 
                                        dgn kec. 10mbps karena kalau dibandingkan dengan paket data ini 
                                        sudah jauh lebih hemat pak/bu, jadi boleh bapak/ibu maksimalkan 
                                      penggunaannya terlebih dahulu</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="95" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">Baik    Bapak/ Ibu sebagai bahan pertimbangan untuk beli paket data dengan Qoata    50Gbyte tarifnya lebih mahal, dan hanya bisa di gunakan sendiri saja, berbeda    dengan Home wi fi yang kita tawarkan saat ini, selain kecepatannya lebih    stabil, bisa di gunakan semua anggota keluarga, apabila bapak/ Ibu setuju,    akan mendapatkan harga promo sampai dengan 12 bulan kedepan, penambahan Rp xx    + pajak 10% di luar pemakaian lainnya ...</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="81" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">&nbsp;Sangat disayangkan pak/bu kalau dilewatkan    penawarannya, krn kedepannya bpk/ibu blm tentu mendapatkan penawaran yg    sama.
                                      Sebagai bahan perbandingan jika bpk/ibu pakai Tsel 2GB sudah barang tentu    bayar sekitar 60 ribuan, disini cukup dgn penambahan Rp. 32rb + ppn 10%    bpk/ibu sudah memperoleh kuota 50 GB dgn kecepatan 10 Mbps, kan tentunya jauh    kebih hemat utk bpk/ibu.&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">klau    psg baru kan mahal ibuk nah ini kmi berika hrga trjangkau tanpa ada teknisi    yg dtg dan tdk ada biaya instalasi ibuk sudah bisa mnikmati kec inet 10 mbps    kuota 50gb dg tarf khusus pnambhan 32k +pon 10%&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">Dengan    adanya trif yang terjangaku ibu tidak perlu mengunakan paketan data lagi dan    untuk produk ini sudh bisa di gunakan untuk seluruh keluarga, disamping harga    yang lumayan bisa bersaing dengan quota peketan yang ibu/bapak gunkan selama    ini .</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">Penambahan    yg kami tawarkan tdk mahal bpk krn penambahan harga perbulan&nbsp; yang kami sampaikan lebih murah dari harga    normalnya sekian xxx</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">Home WiFi</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="651">Kami    pastikan ini tdk mahal pak krn ini penawaran khusus bagi pelanggan setia    telkom ( tdk smua pelanggan mendapatkan penawaran ini )&nbsp;</td>
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