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
.style2 {color: #333333}
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
									<h4 class="title"><strong>Referensi Keunggulan Produk</strong></h4>
									<p class="title">&nbsp;</p>
							  </div>
								<div style="overflow-x:auto;">
								  <table border="1" cellpadding="0" cellspacing="0" bordercolor="#999999">
                                    <col width="106">
                                    <col width="445">
                                    <col width="615">
                                    <col width="165">
                                    <tr height="24">
                                      <td width="101" height="24" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center" class="style1">PRODUK</div></td>
                                      <td width="379" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center" class="style1">DESKRIPSI    PRODUK</div></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center" class="style1">KEUNGGULAN</div></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><div align="center" class="style1">KETERANGAN</div></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="101" height="714" rowspan="18" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">STB TAMBAHAN</span></td>
                                      <td width="379" rowspan="18" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Dengan    Hybrid Box Tambahan kita bisa menikmati tayangan UseeTV yang beragam di    televisi yang berbeda dalam waktu yang bersamaan. Dengan Hybrid Box Tambahan    berbasis Android ini kita bisa merasakan pengalaman menggunakan Smart TV    bahkan pada TV biasa sekalipun. Melakukan browsing, streaming, mengakses    aplikasi, ataupun menonton YouTube dapat dilakukan dengan mudah menggunakan    Hybrid Box Tambahan</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Hybrid    Box IndiHome memiliki tampilan gambar pada layar lebih jernih dan jelas</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Mempunyai kemampuan untuk memutar konten video    dengan resolusi HD dan 4K</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="484" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Memiliki fitur layaknya perangkat Android    dengan dukungan aplikasi yang beragam (browsing, streaming)</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Memiliki external storage yang dapat ditambah    dengan koneksi USB dan micro SD</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Port USB bisa digunakan untuk hal lain seperti    external IP Camera</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="484" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Memiliki layanan OTT yang memberikan kemampuan    bagi pelanggan untuk mengakses ribuan konten video</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="484" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">STB juga juga dapat didigunakan pada berbagai    perangkat lainya (Monitor atau infokus di dukung kabel HDMI)</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="484" height="84" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">TV on Demand merupakan layanan yang dapat digunakan untuk menayangkan ulang    acara-acara live TV tertentu dengan rentang waktu 7 (tujuh) hari ke belakang.    Misalnya, Anda dapat menyaksikan kembali pertandingan sepak bola tim favorit    Anda yang pertandingannya terlewat beberapa hari</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="126">
                                      <td width="484" height="126" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Video-on-demand (disingkat    VOD), Fitur yang memungkinkan Pelanggan untuk    dapat memilih sendiri (on demand) film dan series pilihan yang disediakan di    waktu yang diinginkan.<br>
                                      Pilihan:<br>
                                      1. iflix (gratis)<br>
                                      2. catchplay (berbayar)<br>
                                      3. hooq (berbayar)</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="484" height="84" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Video Recorder pada Usee TV merupakan layanan penyimpanan yang disediakan    oleh UseeTV dan dapat Anda gunakan untuk menyimpan program pilihan dari    berbagai channel yang tersedia. Selain itu, Anda juga dapat merekam    video/program TV yang sedang tayang maupun yang akan tayang.&nbsp;</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Karaoke, Nikmati konten karaoke menarik untuk si kecil di menu Karaoke    On Demand</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Fitur Playback, Anda bisa menonton ulang acara TV kesukaan hingga 7 hari</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="484" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Bisa pause, tekan Pause pada remote control untuk menghentikan tayangan    dan jika Anda siap untuk kembali menonton, tekan Play</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="484" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Untuk menonton kembali dan menonton momen awal    program, tekan Rewind. Ketika    Anda mencapai titik yang ingin Anda tonton, tekan Play.</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Memiliki fitur layaknya perangkat Android    dengan dukungan aplikasi yang beragam</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Memiliki external storage yang dapat ditambah    dengan koneksi USB dan micro SD</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Port USB bisa digunakan untuk hal lain seperti    external IP Camera</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Akses Foto dan Video via Home Media</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="101" height="5192" rowspan="108" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">MINIPACK</span></td>
                                      <td width="379" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EGG    CHANNEL Saluran 24/7 yang menampilkan liga dan turnamen eSports terbesar, dan    yang terbaik dalam hiburan game. Permainan seperti Dota 2, Liga Legends, CS:    GO, FIFA Online 3, Hearthstone dan banyak lagi. Program-program unggulan :    ESL ONE HAMBURG: GRAND FINAL, 2017 HATSUNE MIKU EXPO MALAYSIA, CLASH ROYALE    WORLD FINALS</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">GALAXY Channel film Hollywood dengan lebih dari    200 judul baru setiap tahunnya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">PELANGI Program yang menayangan hiburan    film-film lawas indonesia gratis sinetron indonesia dan film-film indonesia    terlaris di masanya dari tayangan tahun 90an, 2000 dan sampai saat ini</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">ZEE BIOSKOP Channel yang menayangkan film    Blockbuster Bollywood dan juga berbagai hiburan India selama 24 jam yang    sudah di dubbing ke Bahasa Indonesia, channel ini menayangkan Film berbagai    genre seperti Drama, Action, Comedy, Romantis, Horor, juga Serial Drama    Premium dan Talk Show</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">SPACETOON PLUS Spacetoon menayangkan    animasi-animasi kartun anak. Saluran Spacetoon boleh ditontoni oleh semua    lapisan masyarakat</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CNN INDONESIA Channel yang menyiarkan berita    tentang Indonesia dan dunia dengan menampilkan isu - isu terkini, fitur yang    menarik dan penting tentang Indonesia</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">USEE PRIME Channel In-House yang menyajikan    tayangan-tayangan berkualitas dan unggulan untuk memenuhi kebutuhan anda</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">U CHANNEL Saluran ini memiliki genre gospel    (kristiani) dengan program-program unggulan : Embun Sepanjang Hari, Good    News, Live Full Lives</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">BABY FIRST Channel yang menginspirasi dan    mengedukasiuntuk ibu dan anak</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">HOREE CHANNEL Channel yang menampilkan    pendidikan untuk anak dengan cara yang menghibur. Channel berbahasa Indonesia    sehingga emudahkan anak dalam menonton dan mengerti bahasanya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="379" height="84" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DUNIA ANAK Dari animasi hingga drama, berbagai    entertaiment yang menyediakan beragam kesempatan belajar dalam bahasa, sains,    komputer, studi sosial dan banyak bidang lainnya. Saluran ini untuk membantu    anak-anak menjadi penonton aktif dan berpetualang sekaligus melibatkan    anggota keluarga lainnya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">TV EDUKASI TVE adalah sebuah stasiun televisi    di Indonesia. Stasiun televisi ini khusus ditujukan untuk menyebarkan    informasi di bidang pendidikan dan berfungsi sebagai media pembelajaran    masyarakat</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DUCK TV Channel yang berisi hiburan dan edukasi    untuk anak-anak</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EAT &amp; GO Merupakan saluran televise    berlangganan di Indonesia yang khusus menyiarkan acara-acara yang berhubungan    dengan petualangan dan wisata kuliner tiap daerah yang dikunjungi</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INSERT Saluran televisi yang memberikan berita    entertaiment dan liputan mendalam tentang televisi, film, musik, selebriti,    fashion, kecantikan, dan gaya hidup - semua budaya. Dibawakan oleh host artis    secara santai dan hangat</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DUNIA LAIN Saluran televisi yang khusus    menyiarkan acara-acara yang berhubungan dengan misteri dan cerita-cerita    mitos para penduduk di suatu tempat</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">SHOWCASE Saluran hiburan umum utama yang    menawarkan infotainment talkshow menghibur dan menyenangkan seputar selebriti    terbaru, rangkaian gaya hidup yang trendi dan program malam akhir yang    canggih semua dalam satu saluran</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">BIOSKOP INDONESIA Saluran hiburan yang    menawarkan film-film box office Indonesia. Saluran ini juga menyertakan    subjudul berbahasa Inggris dalam setiap film yang ditayangkan</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">PRAMBORS CHANNEL Channel musik non-stop yang    siap menemani kawula muda dengan kumpulan video klip terhits</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">T-MUSIC Saluran televisi sebelumnya dikenal    dengan nama Allegro ini merupakan saluran khusus menyiarkan acara-acara yang    berhubungan dengan musik</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">BLOOMBERG Jaringan berita yang mengoptimalkan    bisnis dan finansial, serta bertujuan untuk memudahkan pencarian info    keuangan</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL NEWSASIA Liputan berita Asia-Pasifik    yang menampilkan Bisnis, Dunia, Olahraga, Hiburan, Teknologi, Kesehatan, dan    Gaya Hidup</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL MQTV Stasiun televisi lokal Kota    Bandung dengan siaran bernuansa Islam&nbsp;</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL    BASIC</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Chinese Ancient Costume Drama Channel Saluran    tentang serial China yang popular dan penuh sejarah</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DINASTY    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Kaku TV for Kid menayangkan tayangan anak di    China</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DINASTY    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Panda Channel Saluran tentang panda yang    tersaji dalam 24 jam</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DINASTY    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Populer Entertainment Channe channel yang    memfokuskan pada hiburan yang populer, reality show dan pencarian bakat</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DINASTY    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Kungfu TV Fokus pada tayangan tentang kungfu    dii China. Termasuk didalamnya film, drama, pertandingan dan dokumenter</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DINASTY    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Zhejiang TV Channel hiburan yang populer    bertahun tahun untuk para kaula muda di China</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DINASTY    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Shenzhen TV Salah satu TV yang berpengaruh di    China.Sangat banyak komunitas Shenzen yang ada di Indonesia</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DINASTY    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Dongnan TV Berasal dari provinsi Fujian.    Karakter channel ini merupakan berita dan hiburan yang banyak disukai oleh    komunitas China di Indonesia</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DINASTY    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX FAMILY MOVIES Channnel yang menyenangkan,    dengan konten animasi yang cocok untuk keluarga serta film untuk segala usia    untuk dinikmati bersama-sama</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX LIFE / STARWORLD Saluran hiburan terkemuka    di Asia bagi perempuan, yang berfokus untuk memberikan hiburan terbaik dan    menawarkan akses eksklusif untuk drama, komedi, reality show, dan acara    lainnya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">K &ndash; PLUS CHANNEL Saluran hiburan Korea yang    menampilkan serial drama, variety show, film dan program gaya hidup K-pop,    kecantikan dan fashion</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">NAT GEO CHANNEL Channel bagi para pemirsa yang    memiliki keingintahuan yang tinggi. Nat Geo akan mengubah cara anda melihat    dunia dengan menyediakan tayangan yang berani, penuh petualangan, dan    menegangkan</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">NAT GEO WILD Channel yang membawa anda lebih    dekat dengan satwa liar dan menceritakan kisah &ndash; kisah yang tak terlupakan    dari kerajaan hewan</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX SPORTS 1 Menampilkan laga laga top    sepakbola dan olahraga lainnya. Membawa anda untuk melihat dimensi baru dalam    olahraga</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX SPORTS 2 Membawa anda untuk melihat dimensi    baru dalam olahraga-olahraga eksklusif yang diminati oleh kalangan    profesional</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX SPORTS 3 Membawa anda untuk melihat dimensi    baru dalam olahraga otomotif dan ekstrim yang memacu adrenalin</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">KBS WORLD Jendela utama Anda untuk konten    hiburan populer Korea selama 24 jam/hari. Selain itu juga terdapat berita    nasional dan internasional, drama, serta musik dari korea</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">WAKU WAKU JAPAN saluran hiburan yang    menayangkan program TV Jepang, yang seluruh program TV dapat disaksikan dalam    bahasa setempat</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FLIK CHANNEL Channel film indonesia yang telah    di restorasi, juga menampilkan film produksi original FLIK dan koleksi yang    beragam dari berbagai jenis aliran film yang menggambarkan industri film    Indonesia</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">NHK WORLD TV Channel general entertainment    Jepang yang tersedia dalam bahasa Inggris. Meliputi drama, reality show,    dokumenter, musik, olahraga, berita, dan lainnya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FASHIONTV Saluran TV yang menyiarkan siaran    secara 24/7 tentang fesyen yang didirikan oleh Michel Adam Lisowski seorang    kelahiran Polandia dan disiarkan independen dari kantor pusat di Paris,    London dan Wina. khusus didedikasikan untuk fesyen, glamour kecantikan, dan    gaya hidup</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FASHION ONE Saluran televisi Amerika Serikat    yang khusus menayangkan acara tentang fesyen. Fashion One berpusat di Los    Angeles dan memiliki kantor produksi di Hong Kong, Paris, Milan, London, dan    New York</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">EXTRA    HD / INDI HD</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">GOLF (GOLF + dan GOLF Channel ) Sebuah channel    yang menampilkan tayangan Golf kelas dunia, serta menjadi sumber dan sarana    informasi, aspirasi &amp; gaya hidup bagi para pecinta golf, komunitas, dan    pemain golf profesional</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIGOLF</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">NHK WORLD PREMIUM menayangkan Program hiburan    dan drama televisi Jepang</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIJAPAN</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">BOOMERANG Saluran hiburan yang lucu, dalam    lingkungan yang aman yang akan membuat anak &ndash; anak atau kaum muda dan orang    tua menikmati tayangan kartun bersama-sama</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIKIDS</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CARTOON NETWORK Mencerminkan semangat dan    energi anak &ndash; anak dalam tayangan animasi yang menghibur dan menyenangkan.    Berisikan kisah pertemanan, petualangan, action, komedi dan keunikan dari    sebuah animasi dalam kehidupan anak-anak</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIKIDS</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">NICKELODEON Nickleodeon merupakan saluran untuk    anak pra sekolah. Menyediakan acara yangmenstimulasi, mendidik, melibatkan    dan mengembangkan pikiran</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIKIDS</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">NICK JR Nickleodeon merupakan saluran untuk    anak pra sekolah. Menyediakan acara yangmenstimulasi, mendidik, melibatkan    dan mengembangkan pikiran</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIKIDS</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DISNEY CHANNEL Menayangkan program berkualitas    untuk anak dan keluarga melalui serial, film dan program lain</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIKIDS</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DISNEY JUNIOR Disney Junior merupakan tempat    ajaib yang penuh dengan kegembiraan bersama berbagai karakter kesayangan    anak-anak, cerita-cerita yang dipercaya oleh para orang tua, dan kualitas    yang terpercaya dari Disney</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIKIDS</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CELESTIAL MOVIES Program film yang disiarkan 24    jam non-stop. Film ini menggunakan film-film drama action berbahasa Mandarin</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    1</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CINEMA WORLD Channel film yang memberikan    hiburan baru diluar Hollywood, tontonan terbaik dan film pemenang    penghargaan, sukses di box-office dunia, film favorit kritikus dari seluruh    dunia</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    1</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX ACTION MOVIES Didedikasikan untuk tema    program yang unik dan stunts dengan showcase yang lebih baik hits favorit dan    fitur tindakan ikonik dari seluruh dunia</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    1</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX MOVIES Menayangkan konten premiere film &ndash;    film Hollywood pemenang Award secara eksklusif</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    1</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">STAR CHINESE MOVIE Saluran premium film    Mandarin No. 1 yang menyediakan kombinasi dari film blockbuster Asia dan film    pemenang penghargaan. Bahasa akan ditampilkan dalam bahasa mandarin</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    1</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">STAR CHINESE MOVIE LEGEND Menampilkan selama    film &ndash; film top Hongkong tahun 70an hingga 90an, yang dibintangi antara lain    oleh Jackie Chan, Jet Li, Bruce Lee, Sammo Hung, dan aktor top lainnya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    1</span></td>
                                    </tr>
                                    <tr height="34">
                                      <td width="379" height="34" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">HBO CHANNEL Sentra film blockbuster Hollywood    terbaik dan seri HBO Originals yang tayang perdana di layar kaca dengan    tematik konten setiap bulannya</span></td>
                                      <td width="484" rowspan="5" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">&bull; Menonton channel-channel yang diinginkan    menjadi lebih mudah dan fleksibel sesuai keinginan Anda<br>
&bull; Keunggulan jika berlangganan Indimovie 2 atau indimovie 2 lite selain    bisa menikmati tayangan di Live TV Pelanggan jg mendapatkan fitur tambahan yaitu    HBO ON demand yaitu&nbsp; fitur tambahan    yang memungkinkan pelanggan untuk dapat memilih sendiri (on demand) film dan    serial pilihan yang disediakan di waktu yang diinginkan...&nbsp;</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    2</span></td>
                                    </tr>
                                    <tr height="34">
                                      <td width="379" height="34" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">HBO SIGNATURE Rumah bagi seri HBO Originals,    film &ndash; film spesial dan kumpulan serial yang mendapatkan penghargaan dari    sinema film internasional</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">HBO FAMILY Ditujukan sebagai tontonan keluarga,    yang menawarkan film dan serial yang menyenangkan dan ceria bagi seluruh    anggota keluarga</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">HBO HITS Saluran yang menayangkan film &ndash; film    blockbuster Hollywood terbaik dan top hits box office dengan tematik konten</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    2</span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="379" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CINEMAX menayangkan beragam film yg sarat aksi,    penuh ketegangan, komedi maupun fiksi ilmiah</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDIMOVIE    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CNN INTERNATIONAL Channel yang memberikan    berita terkini seputar ekonomi, politik, sosial dan berbagai peristiwa dunia    selama 24 jam</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDINEWS</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">BEIN SPORTS 1 Membawa para penggemar olahraga    ke dalam siaran langsung pertandingan, berita dan analisa dari liga-liga top    khususya liga Inggris dan kompetisi di seluruh dunia, serta konten eksklusif    yang belum pernah disiarkan sebelumnya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDISPORT</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">BEIN SPORTS 2 Membawa para penggemar olahraga    ke dalam siaran langsung pertandingan, berita dan analisa dari liga-liga top    khususnya liga Spanyol dan kompetisi di seluruh dunia, serta konten eksklusif</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDISPORT</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">BEIN SPORTS 3 Membawa para penggemar olahraga    ke dalam siaran langsung pertandingan, berita dan analisa dari liga-liga top    khususnya liga Perancis dan Liga Amerika Serikat dan kompetisi di seluruh    dunia, serta konten eksklusif</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDISPORT</span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="379" height="84" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">NBA TV Menampilkan kehidupan pemain bola basket    individual, dokumenter yang berfokus pada tim NBA tertentu dan mengarsipkan    siaran dari game-game terkenal. Menawarkan liputan non-stop dari semua    tindakan yang terdiri dari NBA, WNBA dan Liga Pengembangan NBA. Dengan    program unggulan : THE STARTERS, NBA GAMETIME, EXTENSIVE NBA PLAYOFFS &amp;    FINALS COVERAGE</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDISPORT</span></td>
                                    </tr>
                                    <tr height="126">
                                      <td width="379" height="126" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">USEE SPORT Paket channel olahraga unggulan    berisi pertandingan maupun liputan special contoh : liga gojek (liga 1,2) dan    tayangan olahraga lainnya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">&bull;    Menonton channel-channel yang diinginkan menjadi lebih mudah dan fleksibel    sesuai keinginan Anda<br>
&bull; Bukan hanya bisa menyaksikan liga gojek tapi bisa menyaksikan olahraga    lain seperti Proliga (volley),IBL (basket),pertandingan E-SPORT seperti mobile    legend dan AOV,<br>
                                      nascar (balap mobil luar negeri),bugar (senam),sepak bola wanita dunia dan    siaran ulang piala dunia.</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDISPORT2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">AXN CHANNEL Channel hiburan terbaik Asia yang    menampilkan drama seri terbaik, film blockbuster, program seri realitas serta    produksi original</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    1</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">COMEDY CENTRAL&nbsp;</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    1</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">ENTERTAINMENT CHANNEL E! menghadirkan tayangan    yang berhubungan dengan hiburan, reality, film, dan kadang-kadang seri    spesial. Khususnya bagi kaum remaja dan keluarga</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    1</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">HISTORY CHANNEL Menghadirkan hiburan dengan    kualitas terbaik yang mengantarkan penontonnya dengan sejarah yang cukup    mendalam dan informatif</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    1</span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="379" height="84" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">GEM CHANNEL (S GEM) Saluran ini menampilkan    drama dan komedi, komedi dan variety entertainment pertama yang dijalankan    dan eksklusif, mulai dari Jepang dan juga wilayah Asia lainnya termasuk    China, Hong Kong dan Taiwan. Program unggulan : MAY I BLACKMAIL YOU?, KISS    THAT KILLS, THE QUEST SEASON 7</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    1</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">ONE CHANNEL (S ONE) Menampilkan program drama    dan hiburan Korea Selatan terbaru. Ini termasuk drama prime time yang dipilih    dalam waktu 24 jam setelah debut debut mereka di Korea. Program-program    unggulan : LIVE UP TO YOUR NAME, CHEESE IN THE TRAP, HEART SIGNAL</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    1</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">MTV Saluran televisi musik dan hiburan    internasional 24 jam. MTV adalah merek hiburan remaja terbesar di dunia untuk    penggemar music, seniman, dan pelopor dalam menciptakan program inovatif    untuk kaum muda</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    1</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">ANIMAX CHANNEL Animax menayangkan    animasi-animasi kartun anak. Saluran Animax boleh ditontoni oleh semua    lapisan masyarakat</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX CRIME Saluran hiburan yang fokus kepada    tayangan kejahatan, penyelidikan , dan kriminalitas</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DIVA Universal menayangkan drama, komedi, seri    talk show, dan serial reality TV. Program Film juga mengudara pada saluran    ini</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">LIFETIME CHANNEL Lifetime menghadirkan tayangan    modern yang berani dan seru, lewat reality show, serial drama, dan film &ndash;    film terbaik, khususnya bagi kaum perempuan dan keluarga</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">SONY CHANNEL Tayangan drama, komedi dan gaya    hidup, dan yang paling akhir dalam film Hollywood yang enak, semuanya    disampaikan langsung dari AS</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CRIME &amp; INVESTIGATION CHANNEL Channel    pertama dan satu &ndash; satunya di Asia yang mempersembahkan ragam cerita kriminal    dan mengekplorasi misteri yang sulit dipecahkan</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FYI CHANNEL Channel yang akan menginspirasi    kehidupan, sehingga mampu mengajak melakukan hal &ndash; hal lain yang tidak biasa    dalam keseharian anda</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">INDITAINMENT    2</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">ANIPLUS CHANNEL Menghadirkan premiere seri-seri    anime Jepang dan eksklusif setiap minggunya, menghadirkan drama, action,    sci-fi/fantasy dan komedi berdasarkan manga dan video game populer</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX Menayangkan hiburan, olahraga, faktual dan    film premiere Hollywood pemenang Award secara eksklusif</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">ARRIANG</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">AUSTRALIA +</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FIGHT SPORT</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FRANCE 24</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DW TV</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FX CHANNEL Menayangkan konten drama dan komedi.    FX landasan beresonansi terutama dengan penonton laki-laki</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">FOX CHANNEL menayangkan&nbsp;</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">KIX CHANNEL Kix merupakan saluran yang    menampilkan acara mixed martial arts events, action movies, extreme sports    dan classic martial arts masterpieces. Dengan konten action mengagumkan dari    seluruh Asia, yang dibuat khusus untuk pemirsa Asia</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">STAR CHINESE CHANNEL Saluran hiburan Mandarin    yang terkemuka di Asia. Saluran ini menyajikan berbagai jenis rancangan    termasuk serial drama, talkshow, game show, lifestyle, dan masih banyak lagi</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">AMC AMC membawa film favorit Anda &amp; serial    TV original dalam satu saluran</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">THRILL CHANNEL Saluran film pertama dan hanya    di Asia didedikasikan untuk genre horor. Saluran ini mengutamakan siaran film    horor Hollywood dan Asia tetapi juga menyiarkan program lain termasuk drama    supranatural Barat</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Red By HBO</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DA VINCI LEARNING Da Vinci Learning adalah    saluran televisi edukasi yang inovatif, yang bertujuan memancing rasa ingin    tahu semua kelompok umur, untuk bersama-sama menjelajahi dunia pendidikan</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DREAMWORKS Channel anak yang menawarkan kepada    keluarga tayangan animasi yang menghibur. Tampil lebih segar dengan konten    original tiap tahunnya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">NAT GEO PEOPLE Channel yang menampilkan gaya    hidup melalui hiburan faktual menyenangkan dengan menjelajahi tempat-tempat    dan budaya menarik. Menampilkan cerita makanan dan wisata terbaik</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">V CHANNEL Channel musik yang memberikan program    terbaik kepada generasi muda yang juga akan dipandu oleh VJ populer</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CNBC ASIA Channel yang memberikan berita bisnis    dan perkembangan pasar saham terkini</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">AFC Saluran khusus yang menayangkan program    masak, kuliner dan traveling dari berbagai negara terutama Asia, dengan    program-program unggulan : At Home With Marinka, Gordons Ultimate Home    Cooking, Bake with Anna Olson</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">TVN CHANNEL Saluran no.1 TV berbayar di Korea.    Menjadi pemimpin tren konten, menyediakan hiburan umum terbaik melalui    rangkaian variety show top-rated, drama hit memecahkan rekor, pertunjukan    musik kelas dunia, program gaya hidup terdepan, dan produksi asli bertabur    bintang khusus untuk pemirsa Asia</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">DISCOVERY CHANNEL Channel dikhususkan untuk    menciptakan hiburan dengan kualitas terbaik di dunia. Menawarkan kepada    pemirsa rangkaian hiburan non-fiksi berkualitas tinggi dari sifat, sains dan    teknologi blue-chip, sejarah kuno dan kontemporer, film dokumenter    petualangan, budaya dan topikal</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="379" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">C MUSIC TV Saluran televisi musik Inggris yang    didedikasikan untuk video musik klasik dan soundtrack</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="379" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">CHANNEL ALJAZEERA menyajikan berita, analisis,    dokumenter, debat langsung, isu terkini, bisnis, dan olahraga. Al Jazeera    English bermarkas di empat kota, yaitu Doha, Kuala Lumpur, London, dan    Washington, DC</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menonton    channel-channel yang diinginkan menjadi lebih mudah dan fleksibel sesuai    keinginan Anda</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE    ESSENTIAL</span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="101" height="609" rowspan="9" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE REGULER</span></td>
                                      <td width="379" rowspan="9" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Layanan    Internet yang sangat cepat dan stabil menggunakan media penghantar kabel    Fiber Optik<br>
                                        <br>                                      
                                      </span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Cepat, Jaringan fiber optic mampu    mentransfer data (bandwith) hingga ratusan Mbps baik (Upload/Download), jauh    lebih cepat dibandingkan jaringan kabel koaksial atau kabel tembaga</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="484" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Stabil, Dibandingkan dengan media penghantar yang lain, kabel optik    jauh lebih unggul dalam hal kestabilan jaringan internet. Saat dilakukan    sharing internet atau di gunakan secara bersamaan jaringan internet    menggunakan fiber optik sangat stabil.</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="484" height="84" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Handal, Media penghantar Fiber Optik merupakan teknologin paling    canggih saat ini selain mampu memberikan kecepatan dan kestabilan dalam ber    internet, kabel fiber optik juga mempu bertahan dalam kondisi cuaca apapun    seperti serangan petir dan gangguan elekromagnet.&nbsp; Sehingga perangkat elektronik yang    terhubung dengan jaringan Indihome lebih aman</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="484" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Canggih, Teknologi fiber optic merupakan teknologi penghantaran data    tercanggih dan terbaru yang digunakan dalam layanan fixed broadband</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="294">
                                      <td width="484" height="294" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Pengguna lebih banyak<br>
                                      Referensi pengguanan:<br>
                                      10 Mbps:<br>
&bull; Dapat digunakan oleh 2 pengguna internet dalam satu rumah.<br>
&bull; Bisa digunakan oleh 3 &ndash; 4 smartphone / tablet, begitu juga pada PC /    Laptop. <br>
20Mbps &ndash; 50 Mbps:<br>
&bull; Dapat digunakan oleh 3 hingga 8 pengguna internet dalam satu rumah. <br>
&bull; Bisa digunakan oleh 4 hingga 15 smartphone / tablet, serta PC / Laptop. <br>
&bull; Sesuai bagi pengguna dengan kebutuhan browsing, download file, lagu dan    video, streaming Youtube video HD dan video OTT.<br>
                                      100 Mbps:<br>
&bull; Dapat digunakan lebih dari 10 pengguna internet dalam satu rumah, atau    gedung multifungsi lainnya. <br>
&bull; Bisa digunakan lebih dari 15 smartphone / tablet, serta PC / Laptop.</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Youtube-an lancar tanpa buffering</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Harga lebih hemat</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Cocok untuk game online</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Jangkauan wifi sd 15 meter</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="101" height="630" rowspan="14" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">2P-3P</span></td>
                                      <td width="379" rowspan="14" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Program    penambahan layanan&nbsp; tv interaktif, yang    memberikan tayangan&nbsp; berkualitas dan    memberikan berbagai macam fitur yang tidak ada di penyedia layanan lainnya</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Menggunakan    STB Hybrid</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Output resolusi layar yang jernih dengan    pilihan HD</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Merasakan pengalaman Smart TV bahkan pada TV    biasa</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="484" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Useetv juga dapat di nikmati oleh berbagai    perangkat lainya (Monitor atau infokus di dukung kabel HDMI), dan dapat di    bagi menjadi beberapa tv</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="484" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UseeTV menggunakan teknologi    adaptive streaming yang memungkinkan layanan    UseeTV tetap jalan pada kecepatan internet minimum yang didapat. Kualitas    gambar video disesuaikan dengan kecepatan internet yang diperoleh</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="484" height="84" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">TV on Demand merupakan layanan yang dapat digunakan untuk menayangkan ulang    acara-acara live TV tertentu dengan rentang waktu 7 (tujuh) hari ke belakang.    Misalnya, Anda dapat menyaksikan kembali pertandingan sepak bola tim favorit    Anda yang pertandingannya terlewat beberapa hari</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="126">
                                      <td width="484" height="126" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Video-on-demand (disingkat    VOD), Fitur yang memungkinkan Pelanggan untuk    dapat memilih sendiri (on demand) film dan series pilihan yang disediakan di    waktu yang diinginkan.<br>
                                      Pilihan:<br>
                                      1. iflix (gratis)<br>
                                      2. catchplay (berbayar)<br>
                                      3. hooq (berbayar)</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="484" height="84" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Video Recorder pada Usee TV merupakan layanan penyimpanan yang disediakan    oleh UseeTV dan dapat Anda gunakan untuk menyimpan program pilihan dari    berbagai channel yang tersedia. Selain itu, Anda juga dapat merekam    video/program TV yang sedang tayang maupun yang akan tayang.&nbsp;</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Karaoke, Nikmati konten karaoke menarik untuk si kecil di menu Karaoke    On Demand</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Fitur Playback, Anda bisa menonton ulang acara TV kesukaan hingga 7 hari</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="484" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Bisa pause, tekan Pause pada remote control untuk menghentikan tayangan    dan jika Anda siap untuk kembali menonton, tekan Play</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="42">
                                      <td width="484" height="42" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Untuk menonton kembali dan menonton momen awal    program, tekan Rewind. Ketika    Anda mencapai titik yang ingin Anda tonton, tekan Play.</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Bisa Browsing Internet</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Bisa Streaming YouTube</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="20">
                                      <td width="101" height="209" rowspan="10" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">UPGRADE GAMER</span></td>
                                      <td width="379" rowspan="10" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Layanan HSI Gamer merupakan layanan internet    dengan value added service berupa gimik benefit yang akan diberikan oleh Game    Publishers. Benefit yang diberikan dapat berupa in-game items, in-game    currency, double experience/drop rate, dan lainnya.</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Mendapatkan    domain dan IP Pool khusus yang akan didaftarkan oleh Game Publishers</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Pengguna lebih banyak</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Kecepatan lebih cepat dari paket sebelumnya</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Download lebih cepat</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Upload lebih cepat</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Lebih stabil&nbsp;</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Koneksi lancar tidak terpengaruh cuaca</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Untuk main games lebih lancar dan stabil</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Tidak buffering saat menonton youtube</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Tidak putus-putus</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="101" height="42" rowspan="2" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">TM</span></td>
                                      <td width="379" rowspan="2" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Komunikasi telepon dengan keunggulan biaya    nelpon lebih murah dan kualitas suara yang jernih</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Lebih    murah</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Kualitas suara lebih jernih</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="84">
                                      <td width="101" height="231" rowspan="6" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">HOME WIFI</span></td>
                                      <td width="379" rowspan="6" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">layanan internet reguler dengan kecepatan 10    Mbps kepada<br>
                                      pelanggan new homewifi (1P) dengan diberikan paket khusus</span></td>
                                      <td width="484" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Handal, Media penghantar Fiber Optik    merupakan teknologin paling canggih saat ini selain mampu memberikan    kecepatan dan kestabilan dalam ber internet, kabel fiber optik juga mempu    bertahan dalam kondisi cuaca apapun seperti serangan petir dan gangguan    elekromagnet.&nbsp; Sehingga perangkat    elektronik yang terhubung dengan jaringan Indihome lebih aman</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="63">
                                      <td width="484" height="63" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Canggih, Teknologi fiber optic merupakan teknologi penghantaran data    tercanggih dan terbaru yang digunakan dalam layanan fixed broadband</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Pengguna lebih banyak</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Youtube-an lancar tanpa buffering</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Harga lebih hemat</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                    <tr height="21">
                                      <td width="484" height="21" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2">Jangkauan wifi sd 15 meter</span></td>
                                      <td width="118" bordercolor="#999999" bgcolor="#CCCCCC"><span class="style2"></span></td>
                                    </tr>
                                  </table>
								  <p><a href="referensi.php">back</a></p>
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