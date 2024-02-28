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
								  <p>Minipack</p>
								  <p>&nbsp;</p>
								  <table border="1" cellpadding="0" cellspacing="0" bordercolor="#666666">
                                    <col width="98">
                                    <col width="163">
                                    <col width="493">
                                    <tr height="21">
                                      <td height="21" width="98"><div align="center"><strong>RULE</strong></div></td>
                                      <td width="163"><div align="center"><strong>REASON DECLINE</strong></div></td>
                                      <td width="493"><div align="center"><strong>REFERENSI    SCRIPT PENAWARAN</strong></div></td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td>Alternatif selain    youtube</td>
                                      <td width="493">Kalau    youtube tdk ada pengawasan dari orang tua bisa mengkhawatirkan pak..krna    konten dan tayangannya bebas di akses oleh anak-anak, tetapi utk channel    disney, dll kan full kartun dan tayangan nya mendidik. Jd bapak tdk perlu    khawatir jika meninggalkan putra-putrinya saat menonton tv</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">dan    program yg kami sampaikan untuk saat ini saja,karena kami tidak menjamin    dilain waktu bpk/ibu masih mendapatkan program yg sama dgn tarif khususnya.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Ibu,kebetulan    untuk program yang saya tawarkan sifatnya penawaran khusus ya, bu, Jadi tarif    yg kita berikan juga tarif khusus dan tidak semua pelanggan mendapatkan    penawaran menarik ini&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Ibu    kebetulan program ini berlaku hanya untuk hari ini ya, bu, karena saya&nbsp; tidak menjamin kedepannya ada tawaran    seperti ini lagi ya.. Jadi ibu silahkan maksimalkan programnya karena    penambahan tarif yang kita berikan juga flat selama ibu berlangganan ditarif    rp xxx</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Ibu    kebetulan program ini berlaku hanya untuk hari ini ya, bu, karena saya&nbsp; tidak menjamin kedepannya ada tawaran    seperti ini lagi ya.. Jadi ibu silahkan maksimalkan programnya karena    penambahan tarif yang kita berikan juga flat selama ibu berlangganan ditarif    rp xxx</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">disini    ibu/bpk bisa memaksimalkan untuk programnya bu/pak sbg bahan perbandingan krn    penambahan tarif khususnya hanya rpxx+ppn10% , dan tidak semua pelanggan kita    berikan penawaran menarik ini , selain itu bpk/ibu dan keluarga sdh bisa    menikmati channel tambahan favorit keluarga dirumah, jadi tdk bosan dengan    tanyangan yg sudah ada saat ini saja&nbsp;</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    bapak bersedia berlangganan bapak bisa membandingkan kwalitas dan chanel yang    bapak miliki, disini bapak akan mendapatkan fariasi chanel yang lebih banyak,    tentunya akan menambah reverensi keluarga juga untuk menikmati tontonan yang    berkwalitas, program ini sangat bagus dan kami berharap bapak akan tetap    berlangganan</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">bapak    bisa memanfaatkan program ini dengan penambahan biaya&hellip;..,program ini hanya di    tawarkan kepada pelanggan pelanggan tertentu saja, ami yakin program yg kami    tawarkan saat ini adalah salah satu program yang&nbsp; bermanfaat untuk ibu/bapak dan keluarga    nikmati</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    bapak bersedia berlangganan bapak bisa membandingkan kwalitas dan chanel yang    bapak miliki, disini bapak akan mendapatkan fariasi chanel yang lebih banyak,    tentunya akan menambah reverensi keluarga juga untuk menikmati tontonan yang    berkwalitas, program ini sangat bagus dan kami berharap bapak akan tetap    berlangganan</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">bapak    bisa memaksimalkan programnya, untuk penambahan tarif&hellip;. Sudah berjalan begitu    program aktif, bulan depan masih prorata bulan kedua dan seterusnya    penambahan full&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">penawaran    kami sangat bagus sayang kalau dilewatkan, bapak akan mendapatkan variasi    chanel yang lebih banyak</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    memang dirasa sangat menguntungkan dan bermanfaat buat bapak dan keluarga    maka bapak bisa berlangganan sampai kapanpun, bapak bisa juga bisa menambah    berlangganan chanel yang lain juga</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">dan    program yg kami sampaikan untuk saat ini saja,karena kami tidak menjamin    dilain waktu bpk/ibu masih mendapatkan program yg sama dgn tarif khususnya.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">mohon    maaf ibu/bpk alasannya sendiri kenapa ya bu/pak? karena kan disini channel    nya pun sudah hd pak dimana kualitas gambar dan suaranya sudah sangat jernih    spt tampilan dibioskop jadi akan sangat disayangkan sekali pak/bu melewatkan    penawarannya,karena tdk semua pelanggan mendapatkan penawaran yang sama    pak/bu.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Untuk    paket Xtra HD selain bapak bisa menikmati 14 Channel , untuk tampilannya juga    sudh di rubah menjadi HD, sehingga untuk tampilan dan suaranya jauh lebih    baik</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Disini    bapak memiliki anak yang masih kecil? disini dengan channel indikids lite ,    untuk anak bapak bisa mendapatkan hiburan dari Disney Junior dan Disney    channel, jadi bapak lebih bisa mengawasi anak bapak tanpa harus main di luar.</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Mungkin    untuk bapak belum perlu, tp saya yakin anggota keluarga bapak seperti anak    dan istri bapak pasti sering menyaksikan drama - drama Asia, seperti dari    Korea, Hongkong ataupun Cina, jd disini kami merekomendasikan bapak untuk    berlangganan Paket Inditaiment Lite HD yang berisi Sony One dan Sony Gem    dengan penambahan hanya 20K. Ini sudah hemat sekali pak, karna berisi    Hiburan, Drama dan Variety Show.</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Apakah    bisa menyaksikan siaran piala dunia yg sudah berlalu setengah tahun lalu?    Sebaiknya tdk perlu disampaikan siaran ulang piala dunia</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Offering    Indimovie 2 atau indimovie 2 lite<br>
                                        Keunggulan jika berlangganan Indimovie 2 atau indimovie 2 lite selain bisa    menikmati tayangan di Live TV <br>
                                        Pelanggan jg mendapatkan fitur tambahan yaitu HBO ON demand <br>
                                        yaitu&nbsp; fitur tambahan yang    memungkinkan pelanggan untuk dapat memilih sendiri (on demand) film dan    serial pilihan yang disediakan di waktu yang diinginkan.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">apakah    tidak sayang pak/bu jika bapak/ibu melewatkan penawaran dari telkom    ini?..disinikan untuk no indihome bapak/ibu resmi mendapatkan penawaran dari    telkom ut bisa menikmati channel unggulan dari indihome&hellip;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Bapak/    ibu boleh evaluasi, namun untuk tarif (sebutkan tarifnya) sudah mulai    berjalan dan kami yakin bapak/ ibu akan puas menikmati channel2 unggulan dari    kami</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Bapak/ibu    tidak perlu khawatir karena program ini bisa dievaluasi untuk penggunaanya    sifatnya juga tidak terikat namun untuk tarif (sebutkan tarifnya) sudah mulai    berjalan ,&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">bapak    bisa memaksimalkan / manfaatkan/ evaluasi / membandingkan/ mengoptimalkan    programnya, untuk penambahan tarif&hellip;. Sudah berjalan begitu program aktif,    bulan depan masih prorata bulan kedua dan seterusnya penambahan full&nbsp;</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Kan    sayang pak kalau dilewatkan penawaran ini. Silahkan bapak evaluasi dan    tarifnya akan mulai dibayarkan dibulan depan. Karena program yang kami    tawarkan ini cukup bervariasi mulai dari penambahan 15 ribu + ppn 10% yang    bisa disesuaikan dengan kebutuhan bapak dan keluarga. (terlebih dahulu    dihilangkan)</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">sangat    syg sekali kalua bpk/ibu... melewatkan penawaran ini, krn tdk semua no    indihome mndptkan penawaran lgsg oleh telkom, hanya no yg terpilih saja.    Disini bpk bisa evaluasi utk programnya, jk bpk merasa nyaman silahkan bpk    lanjutkan, dan utk tarifnya penambahan 20,000 +ppn 10% akan ditambahkan mulai    dibulan depan.</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Sayang    sekali pak, karenakan Bapak bisa maksimalkan untuk programnya ini pak    senyaman bapak, kita yakin programnya ini bermanfaat untuk bpk dan keluarga    dirumah karena tayangan nya sudah lebih berfariasi pak. Jd bapak bisa    evaluasi/maksimalkan untuk programnya dan untuk tayanganya bisa ditonton    semua kalangan dlm keluarga pak. dan dari sisi tarifnya sudah akan mulai di    tambahkan mulai bulan depan<br>                                      </td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">biasanya    menggunakan / nonton useetv pada saat liburan saja atau bagaimana bapak&hellip;    (tunggu respon pelanggan), dengan program yang kami tawarkan ini maka bapak    dan keluarga berkesempatan untuk menonton tayangan2 TV yg lbh beraneka ragam    krn&nbsp; bapak akan mendapatkan chanel yang    lebih bervariatif dari yang bapak miliki saat ini</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Sayang    sekali bpk,&nbsp; krna disini bpk&nbsp; pelanggan terpilih kita, tdak semua    pelanggan yg mendapatkan kesempatan ini bpk,&nbsp;    bapak akan mendapatkan chanel yang lebih berfariatif dari segi harga i    harga yang kami sampaikan sangat hemat bapak karena tidak dihitung per    chanel, dengan penambahan XX rupiah plus ppn 10 persen tiap bulan&nbsp;&nbsp; Bapak bersama keluarga sudah mendapatkan    penambahan XX Chanel, sehingga tontonan bapak lebih berfariatif</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Mungkin    saat ini ibu blm begitu memerlukan tp&nbsp;    kdpnnya jika ibu memerlukan sewaktu2, ibu tdk perlu antri atau    menghubungi chanel telkom untuk diberikan penawaran ini, krn tdk smua    pelanggan mendapatkan penawaran ini, dr segi tarif untuk harga yang kami    sampaikan sangat hemat ibu karena tidak dihitung per chanel, dengan    penambahan xx rupiah plus ppn 10 persen &hellip;. ibu bersama keluarga sudah    mendapatkan penambahan xx Chanel, sehingga tontonan bapak lebih bervariasi</td>
                                    </tr>
                                    <tr height="210">
                                      <td height="210" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Baik    pak, sangat sayang pak, jika bapak melewatkan programnya&nbsp; ini <br>
                                        pak... <br>
                                        Karena untuk program ini merupakan channel channel unggulan dari <br>
                                        telkom, yang hanya kita berikan untuk pelanggan2 terpilih kita, <br>
                                        dengan penambahan hanya RpX bapak sudah bisa menikmati <br>
                                        (sebutkan benefit) di tiga hari kedepan, dan pembayarannya pun <br>
                                        belum ditagihkan di bulan ini pak, namun di bulan depan, dan itupun <br>
                                        masih belum full.<br>
                                        Jadi bapak dan keluarga boleh evaluasi, maksimalkan, dan optimalkan <br>
                                        terlebih dahulu penggunaannya senyaman nya bapak dengan keluarga.&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Bapak    / Ibu bisa maksimalkan penggunaan programnya, karena untuk    tayangan-tayangannya pun juga sudah lebih bervariasi, dan untuk programnya    pun Bapak / Ibu bisa evaluasi senyamannya krn tarifnya baru diberlakukan    mulai bulan depan ya Pak/ Bu.</td>
                                    </tr>
                                    <tr height="210">
                                      <td height="210" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Baik    pak, sangat sayang pak, jika bapak melewatkan programnya&nbsp; ini <br>
                                        pak... <br>
                                        Karena untuk program ini merupakan channel channel unggulan dari <br>
                                        telkom, yang hanya kita berikan untuk pelanggan2 terpilih kita, <br>
                                        dengan penambahan hanya RpX bapak sudah bisa menikmati <br>
                                        (sebutkan benefit) di tiga hari kedepan, dan pembayarannya pun <br>
                                        belum ditagihkan di bulan ini pak, namun di bulan depan, dan itupun <br>
                                        masih belum full.<br>
                                        Jadi bapak dan keluarga boleh evaluasi, maksimalkan, dan optimalkan <br>
                                        terlebih dahulu penggunaannya senyaman nya bapak dengan keluarga.&nbsp;</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">apa    tidak sayang pak, karena program yang kita berikan ini merupakan channel    unggulan dari indhihome, selain menarik juga bersifat edukatif sehingga kita    yakin dan percaya kedepanya bapak dan keluarga jauh merasa lebih nyamaan    penggunaaan useetv, dan ini sifatnya juga tidak terikat, bapak bisa    maksimalkan terlebih dahulu jika kedepanya bapak kurang merasa nyaman kita    kembalikan lagi kepada bapak namun bln depan tagihan sudah berjalan</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">sangat    d sayangkan skali penawarannya tidak berlangsung lama utk pelanggan tertentu    khusus hr ini kami berikan, tayangannya sangat menarik silahkan d maksimalkan    programnya (infokan benefit channel).. nanti jk sudah aktif prog billingnya    mulai d tmbahkan k tag bulan dpn b. sran akami silahkan dimaksimalkan mulai    dari sekarang krn penawarannya tidak berlangsung lama . diberikan khusus dari    telkom dan programnya sangant menarik dan mehibur .penambahannya pun sangat    terjangkau.</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="168" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Nah    ibu ini kan penawarannya bertujuan utk memaksimalkan kembali penggunaan    useetv nya ibu karna kan sayang jika jarang digunakan sementara tagihan    useetvnya&nbsp; sdh satu paket di    INDIHOMEnya. agar tontonannya jauh lebih menarik bs memaksimalkan penawaran    kami karna tmbhn biayanya jg sngt terjangkau Rpxxx sdh bs menikmati (infokan    benefit), sangat disayangkan sx bpk/ibu krn inikan programx diberikan khusus    PL tertentu sj yg menjadi pilihan dr telkom, tontonanx jg sangat menarik ada    .... (sebutkan jenis tayangannya) dan kami akan sangat yakin bpk/ibu akan    sangat puas dgn penambahan channelx</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    bapak/Ibu bersedia berlangganan maka bapak/Ibu bisa memaksimalkan    tayangan-tayangan dari program yang kami tawarkan,krna saya yakin Bapak/Ibu    akan merasa program ini sangat menguntungkan buat bp/ibu dan keluarga, dan    untuk berlangganan Program ini Bapak/Ibu sudah di berikan tarif Khusus dari    Telkom,tarif khusus hanya untuk pelanggan2 tertentu saja.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">yang    saya tawarkan saat ini suda terjamin mutu dan gambarnya bu karna sudah HD    serta tarif yang di berikan lebih terjangaku dibanding ibu nonton serial di    bioskop atau striming melalui internet.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Mungkin    saat ini&nbsp; blm begitu memerlukan tp&nbsp; kdpnnya jika&nbsp; memerlukan sewaktu2, tdk perlu antri atau    menghubungi chanel telkom untuk diberikan penawaran ini , tidak semua    pelanggan mendapatkan penawaran spesial dengan harga spesial juga&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">channel    atau tayangan kami memiliki keunggulan bisa disimpan dan diputar ulang sesuai    dengan waktu yang diinginkan pak, maksimal sampai 7 hari. Jadi kalau bpk/ibu    tidak sedang di rumah, tayangannya bisa diputar saat bpk/ibu sudah    kembali&quot;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">yang    kami tawarkan saat ini kualitasnya HD pak (high definition), jadi tayangannya    lebih jernih, lebih bagus&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Pengunaan    indihomenya sdh 3P bu..sayang jika tayangan tvnya tdk&nbsp; dipergunakan&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Jika    jarang dirumah pak/ibu justru bisa memanfaatkan fitur TV on demand dimana    kita bisa menonton tayangan tV sd 7 hari kebelakang dan jika pak/ibu sibuk    bekerja ini bisa digunakan untuk refresh saat liburan shg pada saat masuk    kerja lagi sdh fresh.</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Silahkan    bisa dimaksimalkan sambil dievaluasi ke sepannya. Jika nanti tetap ingin    bapak/ ibu lanjutkan silahkan, kebijakan ke depan kami kembalikan ke    pelanggan, namun begitu program aktif, bulan dpn sudah di kenakan tagihan,&nbsp; <br>
                                        Menunggu respon pelanggan<br>
                                        (Info tarif).. jadi silahkan disa dimaksimalkan sambil di evaluasi, karena    program juga tidak mengikat</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">MINIPACK</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">&nbsp;chanel yang kami tawarkan adalah chanel    khusus untuk pelnggan terpilih saja yang masuk ke prospek spesial, untuk itu    kami wajib menyampaikan&nbsp; pnawaran yg    sangat penting ini kpd bp/ibu , agar kiranya bisa digunakan sebagai bahan    pertimbangan referensi chanel tambahan yang sangat bermanfaat serta&nbsp; meningkatkan pengalaman&nbsp; acara yang lebih banyak untuk keluarga    bp/ibu&nbsp;&nbsp; seperti&nbsp; chanel serial drama, berita internasional,    olahraga, kartun, info bisnis dll yang belum ada di paket bp/ibu saat ini    gunakan</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Untuk    Program penawarannya ini kan direkomendasikan langsung Oleh Pihak telkom ya    pak/ibu, jadi untuk programnya ini silahkan Bpk/ibu dan keluarga di rumah    -maksimalkan sebagai bahan perbandingan, sedangkan untuk penambahan tarif    yang di berikan juga jauh lebih hemat pak/ibu yaitu hanya sebesar Rp. Xxxx +    Ppn 10%</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Untuk    program Penawaran Add On MINIPACK ini sebagai bahan perbandingan bisa    dipergunakan oleh bpk / ibu,Jika Dirasa lebih effisien dan bnyk manfaatnya    ibu / bpk bisa mempergunakan programnya selama berlangganan &amp; saya yakin    ibu akan lebih nyaman dgn penambahan program Add On MINIPACK yang saat ini    saya sampaikan</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Baik    Bpk/ Ibu sangat disayangkan sekali jika tidak di manfaatkan penawaran program    khususnya ini, Karena selain tarifnya yang cukup ekonomis, Program kami ini    pun sangatlah Variatif untuk pilihan channelnya, Sehingga harapan kami    fasilitas Add On MINIPACK yang kami tawarkan ini dapat lebih memanjakan    bpk/ibu di waktu-waktu santai saat bersama keluarga di rumah.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Mungkin    kemarin2 bpk/ibu jarang menggunakan karena channelnya masih terbatas, dengan    penambahan channel (sebutkan penawaran paket minipacknya) saya pastikan    Bpk/Ibu jadi lebih menarik untuk menonton useetvnya</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Penawaran    ini hanya untuk saat ini , takutnya jika kedepannya bapak ingin berlangganan    Channel tersebut, untuk penawarannya sudah tidak ada</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Untuk    Channel yang kami tawarkan ini tidak hanya dapat dinikamati oleh bapak, tp    juga dapat diikamati oleh keluarga bapak, jadi sangat di sayangkan jika bapak    tidak berlangganan&nbsp; Channel yang kami    tawarkan untuk saat ini</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Mungkin    untuk bapak jarang menonton untuk paket channel yang kami tawarkan, tapi kami    yakin kalau untuk berita ,pasti bapak tidak&nbsp;    akan melewatkannya, karna Channel CNN kami sangat up to date dan biaya    berlangganannya hanya 15k saja bapak perbulannya</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Pak/bu    program ini kami berikan setiap bulan dan setiap hari selama 24 jam    penuh.<br>
                                        Dan tidak mungkin bpk/ibu 24 jam itu tidak berada dirumah. Jadi kalau    misalnya bpk/ibu sudah di rumah atau sedang libur, bpk/ibu bisa menonton    tayangan ini dgn keluarga bpk/ibu</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">biasanya    menggunakan / nonton useetv pada saat liburan saja atau bagaimana bapak&hellip;    (tunggu respon pelanggan), dengan program yang kami tawarkan ini maka bapak    dan keluarga berkesempatan untuk menonton tayangan2 TV yg lbh beraneka ragam    krn&nbsp; bapak akan mendapatkan chanel yang    lebih bervariatif dari yang bapak miliki saat ini</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">MINIPACK</td>
                                      <td>Jarang Digunakan</td>
                                      <td width="493">Nah    ibu ini kan penawarannya bertujuan utk memaksimalkan kembali penggunaan    useetv nya ibu karna kan sayang jika jarang digunakan sementara tagihan    useetvnya&nbsp; sdh satu paket di    INDIHOMEnya. agar tontonannya jauh lebih menarik bs memaksimalkan penawaran    kami karna tmbhn biayanya jg sngt terjangkau Rpxxx sdh bs menikmati .....    (infokan benefit) b. b. sangat disayangkan jika dilewatkan, jika berkenan    silahkan dimaksimalkan&nbsp; program    channelnya, kami berikan tarif khusus untuk pelanggan tertntu sj per hari    ini.&nbsp;</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">2.    kan kalo menggunakan youtube nanti bisa bufering, menggangu kenyamana bapak    dlm menonton dan tampilannya kecil. Kalo menggunakan useetv nya kan tdk    bufering dan tampilannya lebih besar jadi bisa lebih puas menontonya dan bisa    menikamati layanan tv on demand, jd bapak&nbsp;    tdk perku khawatir kalo bapak melewatkan tayangan kesayangan yg bpk    sukai,</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Nah,    kebetulan sekali, bapak ibu mendapatkan penawaran dari kami. Bapak/ibu bisa    meikmati chanel eksklusif setelah dirumah dari kegiatan seharian sibuk    bekerja. Jadi ibu bisa mendapatkan hiburan di rumah tanpa harus keluar rumah.</td>
                                    </tr>
                                    <tr height="21">
                                      <td height="21" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">digali&nbsp; hobby atau kesukaan menonton saat waktu    luang apa?</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">dengan    program yang kami tawarkan ini jika bapak dan keluarga berkesempatan untuk    menonton maka bapak akan mendapatkan chanel yang lebih berfariatif dari yang    bapak miliki saat ini&quot;</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Tetapi    nanti kedepan nya ini akan kami bukakan kembali&nbsp; untuk chanel yang kemarin terkunci, jadi    nanti tujuannya supaya bisa ditonton sekeluarga.<br>
                                        Dan untuk beberapa chanel tersebut, karena bapak/ibu mendapatkan    rekomendasi dari telkom pusat maka harga yang saya tawarkan berlaku selama    berlangganan karena ini sifatnya bukan promo jadi harga tidak akan berubah.</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Apakah    tidak sayang pak, kalau jarang di tonton, namun tiap bulannya kan bapak bayar    full. oleh karena itu, bapak direkomendasikan untuk dibukakan channel-channel    tadi, supaya nanti tayangannya tidak membosankan dan lebih bervariasi,    sehingga bapak bisa lebih menikmati fasilitas indihomenya. juga kan bisa    dinikmati ketika bapak pulang kerja, atau&nbsp;    kumpul bersama keluarga di rumah.</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td>Jarang Digunakan</td>
                                      <td width="493">Justru    itu pak, paket nya bpk kan sudah 3P ya, ada telp, internet dan UseeTV, nanti    dengan channel MINIPACK ini bapak sudah bisa menikmati channel yang program    nya beragam dan kami jamin kualitasnya, jadi dengan harga yang sangat    terjangkau bpk/ibu tidak perlu keluar rumah untuk bisa mendapatkan    hiburan<br>                                      </td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Baik    B/I sebelumnya mohon maaf kalau untuk YouTube tayangannya tidak ada filter    apalagi kalau yang nonton anak B/I dan UseeTV sudah memiliki fitur untuk    filter tayangan untuk anak sehingga orang tua bisa mengontrol</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Sangat    disayangkan Bapak/Ibu jika menolak penawaran dari kami, karena tayang dari    Useetv yang kami tawarkan sangat bagus dan bermanfaat bagi keluarga Bapa/Ibu    terutama anak-anak ibu, dan anak-anak Bapa/Ibu pun akan merasa nyaman    diam/tinggal di rumah karena sudah di fasilitasi Film-film yang sudah cukup    bagus.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">channel    atau tayangan kami memiliki keunggulan bisa disimpan dan diputar ulang sesuai    dengan waktu yang diinginkan pak/bu, maksimal sampai 7 hari. Jadi kalau    bpk/ibu tidak sedang di rumah, tayangannya bisa diputar saat bpk/ibu sudah    kembali&quot;</td>
                                    </tr>
                                    <tr height="294">
                                      <td height="294" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">baik    bp/ibu, jika Jarang Digunakan karena jarang dirumah,, useetv saat ini sudah    ada layanan Useetv WEB, USeeTV Web merupakan salah satu media untuk mengakses    USeeTV melalui Gadget/PC dialamat web useetv.com. Dimana pelanggan dapat    melakukan streaming video film, Live TV, ataupun TV on Demand.<br>
                                        Dengan adanya Media ini, pelanggan dapat mengakses UseeTv dimanapun dan    kapanpun. UseeTV dapat dinikmati diseluruh area selama terkoneksi dengan    internet dan paket yang kami tawarkan pun jika ibu bersedia maka juga bisa    dinikmati kapanpun dan dimanapun ibu berada<br>
                                        &nbsp;Cara registrasi UseeTV menggunakan    akun Telkom Group IndiHome: register di useetv.com, ikuti petunjuknya dan cek    link aktivasinya melalui email terlebih dahulu.<br>
                                        Masuk ke beranda - Klik Menu REGISTER&nbsp;    - Isi data lengkap , Tunggu Link Aktivasi di EMAIL</td>
                                    </tr>
                                    <tr height="525">
                                      <td height="525" width="98">MINIPACK</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">baik    bp/ibu, jika Jarang Digunakan karena jarang dirumah,, useetv saat ini sudah    ada layanan USEETV GO, sebuah aplikasi berbasis Android dan IOS , Bisa di    akses di smartphone ataupun tablet dengan koneksi internet broadband. dengan    spesifikasi&nbsp; : Jaringan 3G/4G<br>
                                        &nbsp;&nbsp;&nbsp; Android versi 4.1 (jellybean)    atau lebih tinggi.<br>
                                        &nbsp;&nbsp;&nbsp; iOS IOS versi 8.0 atau lebih    tinggi., jadi ibu bisa melihat tayangan chanel tambahan yang kami tawarkan    tadi pada aplikasi tersebut kapanpun dan dimanapun bp/ibu brada , atau bisa    di akses oleh keluarga ibu dan memaksimalkan siaran useetv yaitu seperti:    Education : merupakan konten-konten yang berisi video&nbsp; pengajaran akademis dan video pengetahuan    umum.<br>
                                        Festival Film : FIlm-film yang diproduksi di luar sistem studio film&nbsp; utama atau diproduksi dan didistribusikan    oleh lembaga hiburan&nbsp; independen.<br>
                                        Kids : Berisi konten video edukasi untuk balita, juga film anak-anak yang    dapat ditonton sampai dengan usia 12 tahun.<br>
                                        Music : Berisi video live performing para penyanyi Indonesia&nbsp; pada suatu event<br>
                                        Religion : Berisi konten-konten islami yang meliputi Kuliah&nbsp; Ramadhan, Fiqih, dan cara cepat membaca    Al-Quran<br>
                                        Tourism : Video-video yang memuat keindahan Indonesia dari&nbsp; sisi-sisi tertentu.<br>
                                        Sinetron : Berisi sinetron berjudul Nurlela dalam 6 episode (Sudah tidak    dimunculkan)<br>
                                        Aniplus : Berisi kumpulan video animasi Jepang (Indihome only)<br>
                                        Dokumenter : Berisi film-film dokumenter<br>
                                        K-Plus : Berisi drama Korea (Indihome only) dan&nbsp; tampilan TV, terdiri dari :<br>
                                        1. TV ( Berisi kumpulan channel TV LIVE)<br>
                                        2. TOP 7 DAYS TVOD (Kumpulan TVOD terpopuler)</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">mohon    maaf sebelumnya pak/bu atas ketidaknyamanan yang bpk/ibu rasakan, namun saat    ini Telkom selalu berupaya untuk memperbaiki kualiltas layanannya, dan karena    ini programnya adalah penawaran , bukan diberikan kepada semua pelanggan    telkom jdi sangat disayangkan jika programnya dilewatkan.&nbsp;&nbsp;&nbsp; program yang kami tawarkan ini cukup    bervariasi mulai dari penambahan XX ribu + ppn 10% yang bisa disesuaikan    dengan kebutuhan bapak dan keluarga</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">kita    pastikan programnya nyaman pak dengan benefit yg bpk dptkan&nbsp; dengan penambahan hanya 80rb+ppn 10% , jd    bapak dan keluarga nnt nya sudah bisa menggunakan useetvnya di 2 tv sekaligus    dan kita fasilitasi dekoder hybrid hd, dan nantinya kalau dekoder sudah    terpasang, jika bpk bersedia berlangganan&nbsp;    maka nanti&nbsp; bpk bs memaksimalkan    penggunaannya TV bpk di rmh ,&nbsp;</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Baik    pak, sebelumnya maaf ya pak atas ketidaknyamanan bapak <br>
                                        dengan keluarga. Nanti kita akan bantu proses terlebih dahulu&nbsp; untuk kendala bpk dari <br>
                                        sistem kita ya pak. Namun apabila dalam 2 atau 3 hari kedepan <br>
                                        belum ada tindak lanjut atas kendalanya, boleh langsung menghubungi <br>
                                        kita ya pak ke layanan call center kita di 147.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105">MINIPACK</td>
                                      <td>Kecewa dengan Telkom</td>
                                      <td width="493">Baik    pak, sebelumnya maaf ya pak atas ketidaknyamanan bapak dengan keluarga. Nanti    kita akan bantu proses terlebih dahulu dari sistem kita ya pak. Namun apabila    dalam 2 atau 3 hari kedepan <br>
                                        belum ada tindak lanjut atas kendalanya, boleh langsung menghubungi kita ya    pak ke layanan call center kita di 147.</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td>Kecewa dengan Telkom</td>
                                      <td width="493">Mohon    maaf untuk ketidaknyamanannya pak. Kami yakin program yang kami tawarkan ini    tidak akan mengecewakan bapak dan keluarga karena sudah dipilih melalui    rekomendasi kelayakan jaringan dari Telkom. Dan apabila ada kendala, kami    juga memberikan kemudahan untuk bapak dan keluarga membuat laporan pengaduan    melalui aplikasi my indihome agar bapak bisa memonitor progres laporannya    langsung dari aplikasi</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Mohon    maaf untuk ketidaknyamanannya pak. Kami yakin program yang kami tawarkan ini    tidak akan mengecewakan bapak dan keluarga karena sudah dipilih melalui    rekomendasi kelayakan jaringan dari Telkom. Dan apabila ada kendala, kami    juga memberikan kemudahan untuk bapak dan keluarga membuat laporan pengaduan    melalui aplikasi my indihome agar bapak bisa memonitor progres laporannya    langsung dari aplikasi</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Mohon    maaf&nbsp; pak atas ketidaknyamanan nya    ,kita pastikan kedepannya&nbsp; hal tersebut    tdk terjadi lagi, semoga kedepannya programTelkom yg bapak gunakan semakin    membaik kedepannya.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Baik    pak, sebelumnya maaf ya pak atas ketidaknyamanan bapak <br>
                                        dengan keluarga. Nanti kita akan bantu proses terlebih dahulu dari <br>
                                        sistem kita ya pak. Namun apabila dalam 2 atau 3 hari kedepan <br>
                                        belum ada tindak lanjut atas kendalanya, boleh langsung menghubungi <br>
                                        kita ya pak ke layanan call center kita di 147.</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">MINIPACK</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">.Mohon    maaf pak atas ketidaknyamanya, disini pak untuk program kita bisa bapak    maksimalkan jika bapak merasa nyaman, bapak silahkan lanjut berlangganan    namun jika tidak nyaman kita kembalikan lagi kepada bapk, akan tetapi kita    yakin program ini sanggat bermanfaat untuk keluarlga bapak karena channel    yang ditawarakan sangat menarik serta bisa bapak maksimalkan terlebih dahulu    dan selama bapak setuju dgn progam yang kita tawarkan tagihan bln dpn sudah    berjalan</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="493">Baik    bapak/ibu, chanel yang kami tawarkan jaug lebih menarik karena menampilkan    (.......... Sesuai keunggulan packnya) yang di mana provider lain tidak    memiliki dan juga kualitas gambar yang kami berikan juga legih tajam dan    jelas. Selain itu juga dari segi tarif juga lebih murah, hanya cukup    menambahkan Rp. xxxxxxx bapak sudah mendapatkan xxxx (berapa) chanel, jika    bapak ambil dari provider lain belum tentu mendapatkan keunggulan seperti    produck kami.</td>
                                    </tr>
                                    <tr height="231">
                                      <td height="231" width="98">MINIPACK</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="493">utk    usee kami kan beda dgn tv kabel lain, kami ada fitur on demandnya yg tdk    dimiliki tv kabel lain, bpk bs bandingkan sendiri kualitas gmbr useetv IH nya    dgn provider/perangkat lain, gambarx yg paling jernih atw HD. dan useetv IH    nya kan dilengkapi dgn STB hybrid yg mengubah perangkat TV biasa menjadi    smart TV atw TV interaktif c.&nbsp; jika    useetv nya masih aktif digunakan, kami sarankan dimaksimalkan program    channelnya, smbari dievaluasi. jika kedepannya ibu suka dgn programnya    silahkan dilanjutkan berlangganannya smpe brp lamapun yg diinginkan.&nbsp; Krn tarif khusus yg kami brikan hanya untuk    pl trntentu sj. d. tarif khusus untuk layanan useetv dari telkom sdh sangat    trjangkau, serta channel yg kami brikan sdh sangat menarik dan berkualitas HD    dan punya kelebihan lain yaitu bisa menyaksikan tayangan yg sdh lewat    hingga&nbsp; 7 hari lalu</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">untuk    program yg kami sampaikan khusus untuk pelanggan terpilih yg kami hubungi    saat ini.dan tarif yang kita berikan juga tarif khusus hanya penambahan Rp.xx    +ppn 10%</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Karna    sangat sayang jika tidak dimanfaatkan untuk penambahan channelnya. Ini kami    berikan dengan tarif khusus hanya dengan penambahan 20k+ppn 10% bpk/ibu sudah    mendapatkan 14 channel dengan kualitas yg HD</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">disini    ibu/bpk bisa memaksimalkan untuk programnya bu/pak sbg bahan perbandingan krn    penambahan tarif khususnya hanya rpxx+ppn10% dan utk programnya sudah bisa    aktif di 3 hari kedepan,namun untuk pembayaran fdibulan pertama msh terhitung    prorata dan pembayaran full nya di bulan ke 2</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">untuk    penambahan nya full efektif di bulan kedua krna&nbsp; untuk bulan pertama masih dikenakan prorata    atau masih kurang dari 20rb ppn10%, Cukup dengan penambahan 20rb+PPN10% tiap    bulan nya ,kami jamin tidak akan ada kenaikan lagi untuk penambahan tarifnya,    Untuk penambahan nya mulai bulan depan, tapi utk channel terbarunya sudah    bisa bpak/ibu nikmati mulai 3 hari ke depan tanpa terkunci kembali.</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">cukup    menambahkan 20rbu + ppn 10% berlaku selama berlangganan, dan untuk    penambahannyapun flat tidak akan ada kenaikan lagi</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">apakah    tidak disayangkan bu/pak ini penawarannya hanya 1 kali,selain itu penawaran    nya pun khusus dg tarif penambahan Flat setiap bulannya yaitu Rp. xxx + ppn    10%<br>                                      </td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Perlu    dipastikan terlebih dahulu, apakah benarchanel yg tersedia menayangkan film2    box officce yg ada di bioskop/</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Untuk    Paket Xtra HD, penambahan bapak hanya 20k selama bapak berlangganan dan bapak    sudah dapat menyaksikan 14 Cahnnel yang terdiri dari hiburan, sport ,movie    dan channel-channel edukasi, dengan kualitas gambar yang lebih jernih dan    suara lebih jelas,&nbsp; jd di pastikan ini    sangat menarik dan bermanfaat untuk keluarga bapak</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Untuk    Channel Indinews Bapak hanya menambahkan 15K&nbsp;    dan bapak sudah bisa menyaksikan channel berita baik dalam maupun luar    negri, tentunya itu sangat hemat dibandingkan bapak harus berlangganan koran    setiap harinya. Dan beritanyapun lebih up to date</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Karena    ini bukan promo jadi tarif penambahannya tetap (tidak naik dan tidak    turun)<br>
                                        Kalau promo hanya beberapa bulan saja, setelah itu tarifnya akan naik.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">bapak/    ibu ini programnya kan rekomendasi dari telkom, tidak smua pelanggan telkom    mendapatkan penawaran ini..jadi disini dengan bapak/ibu juga bisa    memaksimalkan/ mengoptimalkan untuk program ini senyaman mungkin,namun untuk    tarif (sebutkan tarifnya) sudah mulai berjalan</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td>Tarif Mahal</td>
                                      <td width="493">Tarif    yang kami tawarkan cukup murah pak. Hanya dengan penambahan 50 ribu + ppn 10%    bapak bisa mendapatkan tayangan sepak bola dari BeinSport dengan kualitas HD.    Bapak juga bisa rewind pertandingan yang belum sempat ditonton hingga 7 hari    sebelumnya. Yang tentunya dengan harga yang sama belum tentu bapak    mendapatkan kualitas tayangan dan benefit yang sama dari provider lain    (beinsport tidak menayangkan liga inggris)</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Sayang    sekali pak, Bapak tidak perlu khawatir karena disini kan bpk pelanggan    terpilih dari telkom untuk bisa menikmati programnya ini jd disini telkom    memberikan kepada bpk dengan tarif khususnya hanya penambahan biaya&nbsp; 20rb + 10&#8453; ppn setiap bulannya,&nbsp; dan untuk penambahan tarifnya bulan dpn jg    belum full pak , bulan selanjutnya baru ditagihkan penuh selama bpk    berlangganan.<br>                                      </td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">bpk    tdk sayang jika programnya dilewatkan krn dr segi&nbsp; harga yang kami sampaikan ini sangat hemat    bapak karena tidak dihitung per chanel, dengan penambahan XX rupiah plus ppn    10% Bapak bersama keluarga sudah mendapatkan penambahan sejumalah XX Chanel,    sehingga tontonan bapak lebih bervariatif kedpnnya&nbsp;</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">MINIPACK</td>
                                      <td>Tarif Mahal</td>
                                      <td width="493">Baik    pak, Untuk tarifnya bapak tidak perlu khawatir pak , Tarif ini sudah tarif    khusus di berikan Telkom kpd PL terpilih saja... dan ini juga merupakan    channel2 unggulan dari telkom, yang hanya juga kita&nbsp; berikan untuk pelanggan2 terpilih kita pak    dengan tarif nya cukup dengan penambahan RpX&nbsp;    bapak sudah mendapatkan (sebutkan benefit).&nbsp; Dan sudah dapat bapak nikmati di tiga hari    kedepan, sedangkan tarifnya baru akan ditambahkan di bulan depan dan itupun    belum full pak, begitu.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Tarif    yang kami tawarkan cukup murah pak/bu. Hanya dengan penambahan (...) + ppn    10% telkom sudah berikan tayangan (sebutkan nama channelnya) dengan kualitas    HD. Bpk/ibu juga bisa rewind pertandingan yang belum sempat ditonton hingga 7    hari sebelumnya. Yang tentunya dengan harga yang sama belum tentu bapak    mendapatkan kualitas tayangan dan benefit yang sama dari provider lain</td>
                                    </tr>
                                    <tr height="210">
                                      <td height="210" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Baik    pak, sangat sayang pak, jika bapak melewatkan program ini <br>
                                        pak... ini merupakan channel2 unggulan dari telkom, yang hanya kita <br>
                                        berikan untuk pelanggan2 terpilih kita.<br>
                                        Untuk tarifnya bapak tidak perlu khawatir pak, karena yang kita <br>
                                        berikan ini sudah dengan tarif khususnya pak kepada pelanggan <br>
                                        terpilih kita, Jadi untuk tarif nya cukup dengan penambahan RpX <br>
                                        bapak sudah mendapatkan (sebutkan benefit). <br>
                                        Dan sudah dapat bapak nikmati di tiga hari kedepan, sedangkan <br>
                                        tarifnya baru akan ditambahkan di bulan depan dan itupun belum full <br>
                                        pak, begitu.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Sayang    sekali Pak / Bu kalau dilewatkan, karena tidak semua pelanggan dapat    rekomendasi dari Telkom, dan hanya dengan penambahan tarif xx + ppn 10% saja    Bapak/Ibu sudah mendapatkan xx channelnya sekaligus dan program ini bisa    Bapak / Ibu maksimalkan atau optimalkan senyamannya, dan untuk tagihannya    dimulai di bulan depan ya Pak / Bu bukan dibulan ini.</td>
                                    </tr>
                                    <tr height="210">
                                      <td height="210" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Baik    pak, sangat sayang pak, jika bapak melewatkan programnya&nbsp; ini <br>
                                        pak... <br>
                                        Karena untuk program ini merupakan channel channel unggulan dari <br>
                                        telkom, yang hanya kita berikan untuk pelanggan2 terpilih kita, <br>
                                        dengan penambahan hanya RpX bapak sudah bisa menikmati <br>
                                        (sebutkan benefit) di tiga hari kedepan, dan pembayarannya pun <br>
                                        belum ditagihkan di bulan ini pak, namun di bulan depan, dan itupun <br>
                                        masih belum full.<br>
                                        Jadi bapak dan keluarga boleh evaluasi, maksimalkan, dan optimalkan <br>
                                        terlebih dahulu penggunaannya senyaman nya bapak dengan keluarga.&nbsp;</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">baik    bapak program kita berikan ini merupakan rekomendasi dari telkom, tidak smua    pelanggan telkom mendapatkan penawaran ini..jadi disini dengan bapak/ibu juga    bisa memaksimalkan/ mengoptimalkan untuk program ini senyaman mungkin, jika    nyaman silahkan bapak/ ibu boleh lanjutkan, namun apabila kurang efektif, ini    programnya bisa bapak evaluasi..dan tagihannya akan ditagihkan mulai bulan    depan, artinya program yang kita tawarkan tidak terikat pak</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Kan    sayang Pak/Bu jika dilewatkan programnya, karena tidak semua pelanggan    mendapatkan rekomendasi penawaran ini. Dengan penambahan tarif yang cukup    hemat, hanya dengan 20rb+ppn 10% per bulannya, Bapak/Ibu sudah bisa menikmati    programnya yg kita pastikan berkualitas dan bermanfaat ya Pak/Bu.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">boleh    dibantu alasan tdk ingin dipasangkan paketnya pak/bu ?? kan sayang sekali    karena tidak semua pelanggan mendapatkan rekomendasi penawaran ini. Dengan    penambahan tarif yang cukup hemat, hanya dengan Rp X rb + ppn 10% per    bulannya, bpk/ibu sudah bisa menikmati program unggulan yg menarik dan    innovatif bersama keluarga</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Tidak    perlu khawatir bpk/ibu krn kami dari kantor telkom pusat lsg memberikan hrg    spesial untuk bpk/ibu sbg PL prioritas cukup menambahkan 22rb rupiah saja    perbulan, bpk/ibu dan keluarga bisa menyaksikan 14 channel terbaik dr telkom    dgn kualitas yg paling jernih,&nbsp; inikan    tarifnya sangat terjangkau pak, 14 ch hny penambhan 22k perbulan. bukan    perchannel tarifnya krn merupakan penawaran khusus utk pl tertentu sj</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Jadi    jika bersedia sekarang kan 3 hari kedepan sudah bisa digunakan dan biling    tagihan sudah mulai berjalan, Namun untuk pembayaran dibulan pertama masih    belum penuh jadi penuhnya dibayarkan dibulan kedua, namun keuntungannya kan 3    hari kedepan sudah bisa digunakan jadi disini bapak bisa digunakan sampai    kapanpun bapak ingin berlangganan kalau memang dirasa itu sangat    menguntungkan buat bpk</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Ibuk/bpk    ini kan sayang krn kami cek yang bpak ikuti in paket 3p tlp,inet,dan use tv    jd kan pembayaran sdh 1 paket jdi slm in pengunaan tvnya di gunakan ataupun    tdk di gunakan sdh ibuk/bpk bauatkan maka dr itu pak skrang kmi berikan    rekomendasi terkait penambahan fasilitas tnbhan chanel agar lbh bervariasi    acaranya dgan tarif khusus Xxx</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Penambahan    yg kami tawarkan tdk mahal bpk krn penambahan harga perbulan&nbsp; yang kami sampaikan berlaku selama bpk    berlangganan program yg kami tawarkan&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">harga    yang kami sampaikan sangat hemat bapak karena tidak dihitung per chanel,    dengan penambahan &hellip;. Bapak bersama keluarga sudah mendapatkan    penambahan&hellip;.&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">MINIPACK</td>
                                      <td>Tarif Mahal</td>
                                      <td width="493">Di    paket movie 2 lite ini bapak sudah dapat 4 chanel langsung dan tayangannya    sendiri film box office fresh 2 bln dari bioskop dan penambahannya sendiri    cukup 55k + ppn 10% tiap bulannya. Silahkan bapak bandingkan kalo di bioskop    kan untuk per film 30k jadinya kan lebih hemat pakai useetv kami pak</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">MINIPACK</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">dengan    penambahan hanya 20 ribu perbulan + PPN10% , bp/ibu bisa menyaksikan chanel    dengan kualitas HD ( gambar sangat jernih ) lebih bagus dari yg saat ini ibu    tonton...ada&nbsp; sejumlah 14 chanel, yang    berarti harga per chanel hanya 1.400 rupiah dan bisa dinikmati 24 jam selama    satu bulan, jadi paket ini sgt terjangkau&nbsp;</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="168" width="98">MINIPACK</td>
                                      <td width="163">Tidak    menarik</td>
                                      <td width="493">penawarannya    kan hanya berlaku hari ini jd bisa dimaksimalkan, jika kedepan ibu/bapak sdh    menyaksikan (infokan benefit) dan jika kedepan ibu/bapak suka boleh teruskan    berlangganan sampai kapanpun dan jika ada permintaan/kebijakan lain kami    kembalikan kepada ibu/bapak selaku pengguna layanan , Atau mungkin bpk ingin    ditambahkan di channel lainnya, ch movie ato olahraganya bpk yg tdk kalah    menarik dan cukup terjangkau juga , digali kebutuhan pelanggan : mgkn kami    ganti ke paket yg lainnya. dsni ibu lbh senangx sm CH apa? film2, olahraga,    action atau mgkn ada CH yg ibu inginkan?</td>
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