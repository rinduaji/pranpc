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
    <style type="text/css">
<!--
.style1 {
	color: #333333;
	font-weight: bold;
}
.style3 {font-family: "Times New Roman", Times, serif}
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
									<h4 align="left" class="title"><a href="referensi.php">Referensi Script Anti Decline</a> | <strong><a href="referensi_produk.php">Referensi Keunggulan Produk</a></strong> | <strong><a href="referensi_tarif.php">Referensi Tarif Normal</a></strong> | <strong><a href="referensi_faq.php">FAQ Penawaran</a></strong></h4>
							  </div>
								<div style="overflow-x:auto;">
								  <p>&nbsp;</p>
								  <p>2P-3P</p>
								  <p align="right"><strong>Another Rule </strong>| <a href="referensi1.php">Home WiFi</a> | <a href="referensi2.php">Minipack</a> | <a href="referensi3.php">STB Tambahan</a> | <a href="referensi4.php">TM OLO</a> | <a href="referensi5.php">Upgrade Reguler</a></p>
								  <p align="left">
								    <label></label>
								    <label></label>
								  </p>
								  <table border="2" cellpadding="0" cellspacing="0" bordercolor="#333333" bgcolor="#000066">
                                    <col width="76">
                                    <col width="163">
                                    <col width="702">
                                    <tr height="21">
                                      <td width="76" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center" class="style1">                                        RULE</div></td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center" class="style1">                                        REASON DECLINE</div></td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center" class="style1">                                        REFERENSI    SCRIPT PENAWARAN</div></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style3">program    nya bisa dimanfaatkan / dimaksimalkan untuk tarifnya penambahan 60k+ppn 10%    juga dikenakan mulai bulan depan, dan tdk semua pelanggan mendapatkan    penawaran ini &amp; keunggulannya modem sudah hybrid ( kualitas nya sudah    high definisi ) tv nya tidak perlu tv khusus dengan tv tabung juga bisa    dipergunakan. jdi fungsinya nanti seperti smart tv.</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">apakah    tidak disayangkan bu/pak ini penawarannya hanya 1 kali,selain itu benefit    yang bpk/ibu dapatkan juga banyak sekali dengan tarif yang hemat seperti    keunggulan nya sendiri ibu/bpk bisa,tv on demand,karaoke. bpk/ibu juga sdh    bisa mengakses langsung dari TV yang bpk/ibu gunakan</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">dengan    migrasi ke program 3p yang semula bapak hanya menikmati internet dan telpon    saja, selanjutnya bapak bisa menikmati layanan tv kabelnya juga yang tentunya    disini akan memberikan manfaat yang lebih ke pada bapak dan keluarga, contoh    bapak tidak perlu khawatir dengan tontonan anak anak karena bapak bisa    mengontrol dan mengaturnya besar harapan kami bapak akan selalu mempergunakan    program kami</td>
                                    </tr>
                                    <tr height="42">
                                      <td width="76" height="42" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">ibu/bapak    untuk programnya memang tidak semua kami hubungi, jadi hanya pelanggan2 yg    direkomndasikan langsung dari telkom saja yang bisa mendapatkan program ini</td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">sangat    disayangkan jika bapak tidak berlangganan program yang kami tawarkan, karena    program yang saat ini kami tawarkan hanya untuk pelanggan pilihan, yang    dilihat dari pemabayarn selalu lancar.silakan bapak program ini akan sangat    bermanfaat buat bapak dan keluarga</td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">bapak    bisa memaksimalkan / manfaatkan/ evaluasi / membandingkan/ mengoptimalkan    programnya, untuk penambahan tarif&hellip;. Sudah berjalan begitu program aktif,    bulan depan masih prorata bulan kedua dan seterusnya penambahan full&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">silahkan    bisa ibu maksimalkan dan untuk kedepannya bisa ibu evaluasi lebih bagus tv    antena biasa atau menggunakan usee tv indihome. Tapi saya yakin ini akan    lebih efektif ketika ibu pergunakana karena hargnyanya hanya 60/120rbu</td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">apakah    tidak disayangkan bu/pak ini penawarannya hanya 1 kali,selain itu benefit    yang bpk/ibu dapatkan juga banyak sekali dengan tarif yang hemat seperti    keunggulan nya sendiri ibu/bpk bisa,tv on demand,karaoke. bpk/ibu juga sdh    bisa mengakses langsung dari TV yang bpk/ibu gunakan</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="76" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">untuk    saat ini mungkin belum perlu pak, namun dengan pesatnya perkembangan    teknologi, nanti bpk/ibu tidak hanya bisa menonton usee tv tp juga browsing    dan streaming youtube melalui tv krn 
                                      STB nya sudah hybrid pak/bu. 
                                      selain itu usee tv jg memiliki keunggulan fitur play back, pause and rewind    dan juga record pak/bu</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">sayang    untuk dilewatkan pak/bu, penawarannya tidak kita berikan kepada semua    pelanggan setiap saat, jd hanya untuk yang terpilih saat ini saja yg bisa    mendapatkannya,&nbsp; nah ini kita yakin    untuk programnya sangat nyaman untuk bersama keluarga di rumah, karena selain    bapak mendapatkan 86 channelnya, bapak bs internetan, bahkan karokean&nbsp; dari tvnya</td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Sayang    sekali apabila dilewatkan penawaran ini pak. Karena program ini tidak    terikat, bapak bisa evaluasi benefit dan manfaatnya dan tarifnya akan    dibayarkan mulai bulan depan. Selanjutnya kami kembalikan ke bapak, tapi kami    yakin bapak akan lanjut berlangganan karena manfaat dan benefitnya sangat    banyak untuk bapak dan keluarga</td>
                                    </tr>
                                    <tr height="126">
                                      <td width="76" height="102" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Baik    sebenarnya sangat sayang bila dilewatkan untuk penawaran ini, bpk/ibu tidak    perlu khawatir karena programnya tergantung dgn kenyamanan bpk/ibu dan    keluarga saja, maksudnya boleh dimaksimalkan penggunaannya, boleh dirasakan    benefitnya jadi sembari dinikmatin layanan useetv ini bersama keluarga    sekalian dievaluasi penggunaannya,, kita pastikan programnya bermanfaat untuk    bpk/ibu untuk dinikmatin. untuk penambahannya pun cukup hemat hanya ...    Setiap bulannya selama berlangganan, penambahannya pun baru mulai bulan    depan.</td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Program    nya kan sifatnya rekomendasi penawaran bu jadi tdk semua nomor salah satu nya    dinomor ibu..benefitnya sudah cukup banyak selain channel terbaru yg    diberikan alat nya pun sdh yg terbaru stb hybird kualitasnya sdh hd jadi    nanti tv ibu akan disetting spt smart tv..</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">sangat    sayang jikalau bpk/ibu lewatkan, krn program kita rekomendasi penawaran    langsung dari pusat, diberikan hanya PL telkom yg terpilih, jadi tidak semua    nomor mendapatkannya, dan jika ibu / bpk bersedia berlangganan maka&nbsp; utk programnya ini boleh bpk/ibu optimalkan    senyamannya bpk/ibu, krn utk penambhan juga baru dikenakan di bln dpn, tapi    nanti ketika programnya sudah dipasangkan atau sudah aktif disistem</td>
                                    </tr>
                                    <tr height="105">
                                      <td width="76" height="105" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">tp    sangat syg jikalau bpk lewatkn, karena program kita rekomendasi penawaran    lgsg dri pusat, dan utk programnya boleh bpk optimalkan senyaman bpk, krn utk    penambhan juga bukan ditambahkan skrg, tpi nanti ketika program sudh dipsgkan    atau sudah aktif disistem, jd kita yakin kdepannya sudh sgt bermanfaat dgn    bpk dn keluarga, krn kedepannya tv bpk sudh multifungsi, selain bisa menonton    bpk juga sudah bisa akses inet lgsg dri tvnya, jd pemakainnya sdh jauh    efektif dan janggih penggunaaanya</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">baik,    sangat di sayangkan pak/buk utk melewatkan program ini, karna penawarannya    tidak semua pelanggan telkom kita bu/pak, hanya utk pelanggan terpilih saja    kita berikan pak/buk,&nbsp;&nbsp; kita yakin    untuk programnya sangat bermanfaat&nbsp;    untuk di nikmati bersama keluarga di rumah, karena nntj selain bapak    bisa menikmati 86 channelnya, bapak bs juga internetan, browing, yotube,    streaming dan karokean&nbsp; dari langsung    dri tv bapak/ibu saat ini.</td>
                                    </tr>
                                    <tr height="147">
                                      <td width="76" height="94" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">baik    B/I untuk program ny kan khusus kita berikan kepada pelanggan 
                                      terpilih saja jadi tidak semua pelanggan mendapatkan penawaran ny <br>
                                      dan untuk program ny pun boleh B/I maksimalkan senyaman ny B/I 
                                      karna untuk pembayaran ny masih di bulan depan dan nanti ny B/I 
                                      sudah bisa menikmati 86 channel terbaik dari telkom ny baik lokal 
                                      dan internasional ny, dan B/I juga sudah bisa melakukan browsing, 
                                      youtube, streaming ataupun karokean langsung dari tv B/I</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Boleh    di maksimalkan penggunaannya pak dan bapak bandingkan dengan penggunaan bapak    yang sebelumnya,&nbsp; karena saya sgt yakin    ini sgt bermanfaat untuk bpk,&nbsp; karena    selain bisa menikmati chanel tmbhn bpk juga bisa inet an lgsg dr TV nya,&nbsp; untuk program kita juga pemakaiannya    senyaman bpk saja, jadi bisa di evaluasi pemakainnya pak namun penambahan 60    k + ppn 10% nya sudah di tagihkan yah pak.</td>
                                    </tr>
                                    <tr height="147">
                                      <td width="76" height="88" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">baik    B/I untuk program ny kan khusus kita berikan kepada pelanggan 
                                      terpilih saja jadi tidak semua pelanggan mendapatkan penawaran ny <br>
                                      dan untuk program ny pun boleh B/I maksimalkan senyaman ny B/I 
                                      karna untuk pembayaran ny masih di bulan depan dan nanti ny B/I 
                                      sudah bisa menikmati 86 channel terbaik dari telkom ny baik lokal 
                                      dan internasional ny, dan B/I juga sudah bisa melakukan browsing, 
                                      youtube, streaming ataupun karokean langsung dari tv B/I</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="124" bordercolor="#999999" bgcolor="#CCCCCC">2P-3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Sangat    di sayangkan jika bapak melewatkan penawaran ini,bapak akan sangat di    untungkan karena bapak nanti sudah bisa langsung internetan dri televisi    bapak krn bapak akan d brikan alat terbaru yaitu decoder hybrid yg berbasis    android.jd televisi bapak nanti itu selain untuk internetan bisa juga untuk    karaoke,streaming video,sosial media,browsing langsung dr televisi nya,jd    lebih puas,dan bapak juga akan d berikan 86 channel unggulan lokal dan    international,dan pak tarifnya pun sudah d beri tarif khusus,tarifnya hanya    penambahan 60 rb + ppn 10% setiap bulan nya berlaki selama berlanggana,dan    kita pastika tidak akan ada kenaikan penambahan tarif lg untuk program ini,    krn ini bukan promo pak...klu promo kan 2 bulan 3 bulan,kalau ini tetap pak</td>
                                    </tr>
                                    <tr height="105">
                                      <td width="76" height="105" bordercolor="#999999" bgcolor="#CCCCCC">2P-3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Belum    perlu saat ini</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Bpk    tdk perlu khawatir saya yakin bahwa program ini akan sangat bermanfaat bagi    bpk kedpnnya, sehubungan dgn perkembangan tehnologi maka kebutuhan akan    tayangan TV juga akan semakin meningkat pak&nbsp;    ( benefit ) dan tarif penambahan XX rupiah sudah bs mendapatkan sekian    chanel sehingga dgn penawaran ini tarif perchanelnya juga sangat hemat    pak&nbsp; , sehingga dr penawaran ini bpk bs    mendapatkan variasi tayangan TV semakin banyak dgn tarif yg hemat&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Jarang    Digunakan</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Pak/bu    program ini kami berikan setiap bulan dan setiap hari selama 24 jam    penuh.<br>
                                      Dan tidak mungkin bpk/ibu 24 jam itu tidak berada dirumah. Jadi kalau    misalnya bpk/ibu sudah di rumah atau sedang libur, bpk/ibu bisa menonton    tayangan usee tv dgn keluarga bpk/ibu.</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Kecewa    dengan Telkom</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Mohon    maaf untuk ketidaknyamanannya pak. Kami yakin program yang kami tawarkan ini    tidak akan mengecewakan bapak dan keluarga karena sudah dipilih melalui    rekomendasi kelayakan jaringan dari Telkom. Dan apabila ada kendala, kami    juga memberikan kemudahan untuk bapak dan keluarga membuat laporan pengaduan    melalui aplikasi my indihome agar bapak bisa memonitor progres laporannya    langsung dari aplikasi</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Kecewa    dengan Telkom</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Sebelumnya    Mohon maaf utk ketidaknyamanan nya ya bu..kita harapkan kedepan nya utk    penggunaan program yg ibu gunakan saat ini bisa berfungsi dengan normal..jadi    memang saat ini ibu mendapatkan rekomendasi penawaran dengan tarif khusus dan    benefitnya pun sdh cukup banyak yg ibu dapatkan channelnya banyak dan    terbaru..alat stb nya pun sdh disediakan yg kualitas hd jadi bisa lgsg    internetan dari tv ibu..</td>
                                    </tr>
                                    <tr height="126">
                                      <td width="76" height="108" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Kecewa    dengan Telkom</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Sebelumnya    Mohon maaf utk ketidaknyamanan nya ya pak/bu..kita harapkan kedepan nya utk    penggunaan program yg bpk/ibu gunakan saat ini bisa berfungsi dengan    baik..<br>
                                      dan jika bpk / ibu bersedia berlangganan maka program ini bs dimaksimalkan    untuk penggunaanya .. Karena dengan penambahan useetv ini bpk/ibu selain bisa    memaksimalkan layanan televisi dengan 86 channel di dalamnya, juga bisa    memaksimalkan layanan internetnya, karna dari layar televisi bpk/ibu nanti    sdh bisa internetan, browsing, youtube bahkan karokean.</td>
                                    </tr>
                                    <tr height="42">
                                      <td width="76" height="42" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td bordercolor="#999999" bgcolor="#CCCCCC">Kecewa dengan Telkom</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Mohon    maaf untuk ketidaknyamanannya. Tapi kami yakin bapak tidak kecewa dengan    penawaran ini karena untuk prosesnya sudah dimudahkan dan sudah melalui    survey kelayakan jaringan</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Kecewa    dengan Telkom</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">mohon    maaf ya B/I untuk ketidaknyamanan ny kita akan bantu 
                                      konfirmasi untuk kendala B/I saat ini namun jika B/I nanti ada <br>
                                      kendala lagi boleh B/I laporkan melalui 147 atau boleh langsung ke 
                                      plaza telkom ny B/I</td>
                                    </tr>
                                    <tr height="42">
                                      <td width="76" height="42" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Kecewa    dengan Telkom</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Mohon    maaf&nbsp; pak atas ketidaknyamanan nya    ,kita pastikan kedepannya&nbsp; hal tersebut    tdk terjadi lagi, semoga kedepannya program telkom yg bapak gunakan semakin    membaik kedepannya.</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="74" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Kecewa    dengan Telkom</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">mohon    maaf ya B/I untuk ketidaknyamanan ny kita akan bantu 
                                      konfirmasi untuk kendala B/I saat ini namun jika B/I nanti ada 
                                      kendala lagi boleh B/I laporkan melalui 147 atau boleh langsung ke 
                                      plaza telkom ny B/I</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P-3P</td>
                                      <td bordercolor="#999999" bgcolor="#CCCCCC">Kecewa dengan Telkom</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Mohon    maaf ya ibu untuk ketidaknyamanan ny kita akan bantu konfirmasi untuk kendala    Ibu saat ini namun jika Ibu nanti ada kendala lagi boleh Ibu laporkan melalui    147 atau boleh langsung ke <br>
  plaza telkom nya , kemudian infokan program penawaran nya&nbsp;</td>
                                    </tr>
                                    <tr height="69">
                                      <td width="76" height="69" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Sudah    menggunakan provider lain</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Sebagai    perbandingan dgn produk yg lain biasanya tv kabel mempergunakan parabola,Utk    keunggulan UseeTV ini diakses melalui jaringan internet sehingga lebih stabil    dan jaringan sdh handal ( fiber optik ) --&gt; dengan    catatan tidak    menyebutkan nama provider lain</td>
                                    </tr>
                                    <tr height="69">
                                      <td width="76" height="69" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Sudah    menggunakan provider lain</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Dengan    menggunakan Indihome Migrasi 2P to 3P jaringan nya lebih stabil di banding    dengan provider lain, karena untuk indihome sendiri sudah menggunakan FO,    jadi tidak akan terganggu pengaruh dari cuaca--&gt; dengan    catatan tidak    menyebutkan nama provider lain</td>
                                    </tr>
                                    <tr height="147">
                                      <td width="76" height="114" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Sudah    menggunakan provider lain</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Selain    itu fasilitas UseeTV memiliki 7 kelebihan diantaranya - TVOD ( Tv on demand )    bisa menonton film &amp; acara favorit yg terlewatkan hingga 7 hari    kebelakang - VOD ( Video on demand ) UseeTV Cable menyajikan berbagai macam    film bagi Anda film nasional,internasional, dokumenter,sport dll melalui menu    VIDEOS Pda EPG - Pause / Play &amp; Rewind jika bpk / ibu sedang sibuk masak    atau ke toilet bisa di pause &amp; play kembali maupun rewind - Video    recorder bisa merekam suatu program acara maupun film favorit&nbsp; - Karaoke - Mendengarkan musik dari    berbagai genre ( pop,r&amp;b, jazz &amp; rock ) - Parental block yaitu bisa    memblock atau mengunci tayangan film dewasa melalui remote useetv</td>
                                    </tr>
                                    <tr height="147">
                                      <td width="76" height="121" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Sudah    menggunakan provider lain</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Selain    itu fasilitas UseeTV memiliki 7 kelebihan diantaranya - TVOD ( Tv on demand )    bisa menonton film &amp; acara favorit yg terlewatkan hingga 7 hari    kebelakang - VOD ( Video on demand ) UseeTV Cable menyajikan berbagai macam    film bagi Anda film nasional,internasional, dokumenter,sport dll melalui menu    VIDEOS Pda EPG - Pause / Play &amp; Rewind jika bpk / ibu sedang sibuk masak    atau ke toilet bisa di pause &amp; play kembali maupun rewind - Video    recorder bisa merekam suatu program acara maupun film favorit&nbsp; - Karaoke - Mendengarkan musik dari    berbagai genre ( pop,r&amp;b, jazz &amp; rock ) - Parental block yaitu bisa    memblock atau mengunci tayangan film dewasa melalui remote useetv</td>
                                    </tr>
                                    <tr height="42">
                                      <td width="76" height="42" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Sudah    menggunakan provider lain</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">benefit    : jadi dengan program migrasi useetv ini bpk bisa mengakses inet melalui tv,    misalnya nonton youtube streaming, maupun browsing.</td>
                                    </tr>
                                    <tr height="42">
                                      <td width="76" height="42" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Sudah    menggunakan provider lain</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">silahkan    ibu pergunakan agar bisa merasakan perbedaannya antara tv biasa dan tv cable    dari indihome. Karna dari segi kualitas gambar dan suara jauh lebih jernih    dan bagus</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Sudah    menggunakan provider lain</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Baik,    begini pak, alat yg kami berikan ini bukan sperti tv Kabel biasa pak karna    tdak ada pada tv kabel lainnya, nanti selain bak sudah bisa menikmati 86    channel dan bs internetan dari tv bapam langsung, utk channel yg tdak bisa    bapak menontonnya hari ini boleh bapak kembalikan selama 7 hari pak jdi kita    pastikan bapak tdak akan ketinggalan menonton channelnya. kita pastikan bapak    akan nyaman pak utk penggunaan program kita ini.</td>
                                    </tr>
                                    <tr height="126">
                                      <td width="76" height="126" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Sudah    menggunakan provider lain</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">baik    pak disini untuk programnya kan bisa bapak banding kan,boleh bapak rasakan    benefit nya yg sudah bisa internetan langsung dari tv,lengkap juga dgn 86    chanel yg bervariatif dan tentunya edukatif. Dan nantinya pak di program ini    lengkap juga dgn vitur video on demand,video recording,dan rewind&nbsp; tv. Dan program khusus yg sudah bisa    karokean langsung dar&igrave; tv.yg kita yakin pak untuk vitur2 ini tidak ada di    penyedia tv kabel lainnya.jadi silahkan di manfaatkan dan di evaluasi untuk    programnya dan bpk juga diberikan tarif penambahan khusus/ bulannya hanya 60    rb + pajak 10 %. Dan tagihannya berjalan di bulan depan ya pak.</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P-3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Sudah    menggunakan provider lain</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Baik...begini    Bapak / Ibu , untuk penawaran Usee TV kita ini , alat yang kita berikan    berupa STB Hybrid, selain Bapak / Ibu bisa menikmati channel yang di sediakan    , dari televisi Bapak / Ibu juga bisa Internetan, nonton youtube, streaming    dan Bapak / ibu bisa juga menikmati fitur lainnya&nbsp; seperti TV on demand, Video on demand,    serta ada fitur pause dan rewind, dan bisa saya pastikan bapak/ Ibu akan jauh    lebih nyaman...</td>
                                    </tr>
                                    <tr height="42">
                                      <td width="76" height="42" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">disinikan    penambahannya hanya 60 ribu , utk biaya pemasangan tidak dikenakan biaya    tambahan lagi seperti fasilitas remote, stb, kabel difasilitasi oleh    kami.&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td width="76" height="42" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">pembayarannya    kan mulai bulan depan dan itupun masih dengan prorata atau beluk full    penambahannya baru bulan kedua full 60rbu/120rbu. Dan untuk pemasangan sudah    kami gratiskan jadi ibu tidak perlu khawatir lg</td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="63" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">bp/ibu    berhak mendapatkan tarif khusus xxxx + ppn 10% ,dg bln dpn/bln pertama    dikenakan tarif prorata dan bln selanjutnya dikenakan tarif normal per bln    nya . Dan bpk/ibu bsa akses tvod,vod,karaoke yg sblmnya melalui hp ya pak/bu,    tetapi stlh berlangganan bpk/ibu bsa ,mengakses youtube,tvod,streaming dll    melalui televisi</td>
                                    </tr>
                                    <tr height="105">
                                      <td width="76" height="76" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC"><p>Penawaran y diberikan khusus pelanggan terpilih saja pak/bu  dan tarif penambahan y pun dberikan tarif khusus hanya 60000 plus ppn 10% ini  selamanya bukan promo beberapa bulan saja dan pemasangan y pun sudah kami  gratiskan alat instalasi termasuk dekodernya sudah dsediakan jd bapak /ibu tdk  perlu memberikan uang tips apapun kepada petugas kami&nbsp;</p></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="69" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Penambahan    yg kami tawarkan tdk mahal pak/bu krn harga promo ini berlaku selama bpk/ibu    berlangganan program yg kami tawarkan <br>
                                      Kami pastikan ini tdk mahal pak/bu krn ini penawaran khusus bagi pelanggan    setia Telkom (tdk smua plg mendapatkan penawaran ini )</td>
                                    </tr>
                                    <tr height="63">
                                      <td width="76" height="47" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Bapak    jangan khawatir karena ini bs dievaluasi (coba dl)&nbsp; untuk penggunaanya, tapi saya yakin ini    sangat bermafaat bagi bapak dan keluarga, karena sifatnya juga TIDAK TERIKAT    namun untuk tarif (sebutkan tarifnya) sudah mulai berjalan</td>
                                    </tr>
                                    <tr height="105">
                                      <td width="76" height="105" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td bordercolor="#999999" bgcolor="#CCCCCC">Tarif Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Bapak,    tarif yang kami tawarkan cukup murah. Hanya dengan penambahan 60 rb + ppn 10%    perbulan, bapak bisa menikmati 86 channel terbaik dari lokal maupun    international. Selain itu ibu diberikan setup box agar ditelevisinya bisa    mlakukan browsing dan streaming youtube&nbsp;    Selain itu bapak juga bisa nonton siaran 7 hari yang lalu apabila    tidak sempat menonton livenya dan juga karaoke langsung dari televisi    layaknya smart tv seharga belasan juta rupiah</td>
                                    </tr>
                                    <tr height="126">
                                      <td width="76" height="98" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Bapak,    tarif yang kami tawarkan cukup murah. Hanya dengan penambahan 60 rb + ppn 10%    perbulan, bapak bisa menikmati 86 channel terbaik dari lokal maupun    international. Selain itu bpk diberikan setup box agar ditelevisinya bisa    mlakukan browsing dan streaming youtube&nbsp;    Selain itu bapak juga bisa nonton siaran 7 hari yang lalu apabila    tidak sempat menonton livenya dan juga karaoke langsung dari televisi    layaknya smart tv seharga belasan juta rupiah. Dan program khusus yg sudah    bisa karokean langsung dar&igrave; tv.yg kita yakin pak/bu untuk vitur2 ini tidak    ada di penyedia tv kabel lainnya</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Bapak    tidak perlu&nbsp; khawatir karna utk program    kta ini pak boleh bapak manfaatkan senyaman bapak,&nbsp; boleh bapak evaluasi juga krn utk tarifnya    mulai di tagihkan di bulan depan, kita berikan tarif khusus saja pak hanya    menambah 66 ribu rupiah saja perbulan itu sudah trmasuk ppn 10 persen pak    flat setiap bulannya selama berlangganan. Senyaman bapak saja.&nbsp;&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr height="126">
                                      <td width="76" height="104" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Sangat    sayang sekali ibu lewatkan program nya karna tdk semua nomor yg mendapatkan    penawaran nya salah satunya di nomor ibu<br>
  Tarifnya pun ibu diberikan tarif khusus hanya penambahan 66rb setiap bulan    selama berlanggan jadi bukan dengan tarif promo yg sewaktu2 bisa    berubah..penambahan nya pun baru dimulai dibulan depan itupun masih prorata    nanti baru mulai full dibulan kedua nya.jika ibu bersedia berlangganan maka    ibu bs memaksimalkan penggunaan programnya dan saya pastikan ini sangat    efektif buat ibu , krn programnya berkualitas&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">kan    sayang pak/bu, karena program nya ini tidak terikat dan boleh di evaluasi ,    krn penambahan 60 rb plus ppn 10 persen akan mulai berjalan di bln dpn untuk    pembayaran bulan pertama&nbsp; saja masih di    proratakan kemudian bulan selanjutnya penuh /full penambahannya .. tarif yg    sangat hemat tentunya untuk penggunaan tv kabel yang sudah seperti smart    tv,,bisa nonton channel, streaming, internetan dan karokean&nbsp;</td>
                                    </tr>
                                    <tr height="168">
                                      <td width="76" height="94" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">baik    B/I disini kan B/I sudah diberikan tarif khusus ny dengan 
                                      penambahan 60.000 saja + ppn 10% selama berlangganan B/I sudah 
                                      bisa menikmati 86 channel terbaik dari telkom ny baik lokal dan 
                                      internasional ny, dan B/I juga sudah bisa melakukan browsing, 
                                      youtube, streaming ataupun karokean langsung dari tv B/I dan pada 
                                      saat pemasangan B/I tidak perlu memberikan uang apapun kepada 
                                      petugas kita karna untuk biaya pemasangan serta instalasinya sudah 
                                      digratiskan oleh pihak telkom</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="67" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Kan    sangat sayang pak,&nbsp; karena disini bapak    langsung direcomendasikan dari telkomnya jdi bapak diberikan tarif khusus dan    ini juga tidak ke semua pelnggan, kita berikan hanya kepada pelanggan    terpilih saja dan untuk tarif juga bapak diberikan tarif khusus dengan    penambahan 60k + ppn 10% per bulan sudah bisa bapak nikmati selama    berlangganan.</td>
                                    </tr>
                                    <tr height="168">
                                      <td width="76" height="88" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">baik    B/I disini kan B/I sudah diberikan tarif khusus ny dengan 
                                      penambahan 60.000 saja + ppn 10% selama berlangganan B/I sudah 
                                      bisa menikmati 86 channel terbaik dari telkom ny baik lokal dan 
                                      internasional ny, dan B/I juga sudah bisa melakukan browsing, 
                                      youtube, streaming ataupun karokean langsung dari tv B/I dan pada 
                                      saat pemasangan B/I tidak perlu memberikan uang apapun kepada 
                                      petugas kita karna untuk biaya pemasangan serta instalasinya sudah 
                                      digratiskan oleh pihak telkom</td>
                                    </tr>
                                    <tr height="105">
                                      <td width="76" height="105" bordercolor="#999999" bgcolor="#CCCCCC">2P - 3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">untuk    programnya kan sangat disayngkan pak/IBU untu penawarannya kan tidka setiap    harinya ada, dan untuk program kita boleh ibu/bapak coba dulu evaluasi dulu    gimana benefit dari programnya dan untuk tarif 60 rbu + ppn 10%&nbsp; itu sudah berjalan mulai di bulan depan dan    seterusnya setiap bulan selama bapak/ibu berlanganan jdi boleh ibu/bpak    evaluasi gmna internetan dri tv boleh menikmtai 86 chanel dan fitur2 yang    tersedia kita yakin programnya ini sangat bermanfaat dan pasti menguntungkan    buat ibu dan keluarga&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td width="76" height="84" bordercolor="#999999" bgcolor="#CCCCCC">2P-3P</td>
                                      <td bordercolor="#999999" bgcolor="#CCCCCC">Tarif Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Baik    pak , untuk penawaran nya ini kan kita berikan hanya untuk nomor yang    terpilih saja pak bukan untuk semua pelanggan indihome, dan untuk tarif    penambahan perbulannya pun bpk di beri tarif penambahan khusus hanya di 60rb    + pajak 10% ,jika bapak bersedia berlangganan bapak bisa bandingkan nantinya    dengan benefit yang bapak dapatkan bersama keluarga karena kita yakin    programnya sangat bermanfaat.</td>
                                    </tr>
                                    <tr height="105">
                                      <td width="76" height="105" bordercolor="#999999" bgcolor="#CCCCCC">2P-3P</td>
                                      <td width="163" bordercolor="#999999" bgcolor="#CCCCCC">Tarif    Mahal</td>
                                      <td width="849" bordercolor="#999999" bgcolor="#CCCCCC">Bpk    tdk perlu khawatir saya yakin bahwa program ini akan sangat bermanfaat bagi    bpk kedpnnya, sehubungan dgn perkembangan tehnologi maka kebutuhan akan    tayangan TV juga akan semakin meningkat pak&nbsp;    ( benefit ) dan tarif penambahan XX rupiah sudah bs mendapatkan sekian    chanel sehingga dgn penawaran ini tarif perchanelnya juga sangat hemat    pak&nbsp; , sehingga dr penawaran ini bpk bs    mendapatkan variasi tayangan TV semakin banyak dgn tarif yg hemat&nbsp;&nbsp;</td>
                                    </tr>
                                  </table>
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