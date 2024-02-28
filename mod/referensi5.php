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
								  <p>Upgrade Reguler</p>
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
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Sayang    Ibu/bpk jika programnya dilewatkan, krn tidak semua pelanggan kita berikan    penawaran dengan tarif hemat ini , dan penawarannya juga khusus hari ini    saja&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Sayang    Ibu/bpk jika programnya dilewatkan, krn tidak semua pelanggan kita berikan    penawaran dengan tarif hemat ini , dan penawarannya juga khusus hari ini    saja&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">silahkan    dimaksimalkan/optimalkan/ selama berlangganan utk programnya, utk    perbandingan atau evaluasi tetapi untuk tarif penambahannya&nbsp; rpxx+ppn 10% berjalan sejak program aktif,    jd bulan depan untuk pembyaran bp/ibu belum full atau masih prorata mulai    efektif pembayaran full di bln ke2 dan seterusnya</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">silahkan    dimaksimalkan/optimalkan/ selama berlangganan utk programnya, utk    perbandingan atau evaluasi tetapi untuk tarif penambahannya&nbsp; rpxx+ppn 10% berjalan sejak program aktif,    jd bulan depan untuk pembyaran bp/ibu belum full atau masih prorata mulai    efektif pembayaran full di bln ke2 dan seterusnya</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">silahkan    dimaksimalkan/optimalkan/ selama berlangganan utk programnya, utk    perbandingan atau evaluasi tetapi untuk tarif penambahannya&nbsp; rpxx+ppn 10% berjalan sejak program aktif,    jd bulan depan untuk pembyaran bp/ibu belum full atau masih prorata mulai    efektif pembayaran full di bln ke2 dan seterusnya</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">silahkan    dimaksimalkan/optimalkan/ selama berlangganan utk programnya, utk    perbandingan atau evaluasi tetapi untuk tarif penambahannya&nbsp; rpxx+ppn 10% berjalan sejak program aktif,    jd bulan depan untuk pembyaran bp/ibu belum full atau masih prorata mulai    efektif pembayaran full di bln ke2 dan seterusnya</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    bapak bersedia berlangganan bapak bisa membandingkan kecepatan yang saat ini    bapak miliki dengan kecepatan yang kami tawarkan, jauh lebih cepat , lebih    handal, bapak tidak lagi merasakan baffering, ataupun intermiten, kami yakin    program ini sangat bagus buat bapak sekeluarga</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">mungkin    saat ini bapak masih belum memrlukan , tetapi kedepannya internet ini    merupaka salah satu kebutuhan utama, sayang kalau penawaran kami di lewatkan    karena penawaran kami tidak setiap saat ada</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    bapak bersedia berlangganan bapak bisa membandingkan kecepatan yang saat ini    bapak miliki dengan kecepatan yang kami tawarkan, jauh lebih cepat , lebih    handal, bapak tidak lagi merasakan baffering, ataupun intermiten, kami yakin    program ini sangat bagus buat bapak sekeluarga</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    bapak bersedia berlangganan bapak bisa membandingkan kecepatan yang saat ini    bapak miliki dengan kecepatan yang kami tawarkan, jauh lebih cepat , lebih    handal, bapak tidak lagi merasakan baffering, ataupun intermiten, kami yakin    program ini sangat bagus buat bapak sekeluarga</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    bapak bersedia berlangganan bapak bisa membandingkan kecepatan yang saat ini    bapak miliki dengan kecepatan yang kami tawarkan, jauh lebih cepat , lebih    handal, bapak tidak lagi merasakan baffering, ataupun intermiten, kami yakin    program ini sangat bagus buat bapak sekeluarga</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="168" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">&nbsp;Baik pak/Ibu , Jika melihat dari usage    (penggunaan) Bpk/Ibu sekarang memang sudah cukup, namun kenapa pihak Telkom    memberikan penawaran untuk UPGRADE REGULER kecepatan Internetnya, karena dari    segi penggunaan bpk/ibu kan cukup aktif, di khawatirkan untuk kedepannya jika    penggunaan internet Bpk/ibu terus meningkat&nbsp;    maka tentunya akan mengganggu penggunaan internet bpk/ibu seperti,    sering buffering/melambat. maka dari itu kami berikan penawaran khusus ini    agar kedepannya penggunaan internet bpk/ibu jauh lebih stabil dan tetap    lancar walaupun penggunaan Bpk/Ibu semakin meningkat.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Saya    sudah cukup dengan penggunaan internet yg sekarang?,.. Baik bpk / ibu sebagai    perbandingan dikarenakan internet dikenakan ketentuan FUP ( Fair Usage Policy    ) , utk kecepatan inet 10Mbps FUP 0-300GB bila diUPGRADE REGULER kecepatan    inet 20Mbps FUP 0-500GB sehingga bisa lebih bnyk utk koneksi pemakaian    internetnya.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Untuk    kecepatan yang saya tawarkan ini jauh lebih cepat 2X lipat dari kecepatan    Internet yang Bpk/Ibu gunakan, adapun terkait penambahan tarifnya tidak kami    kenakan Penambahan 2X Lipat tidak kami berikan tarif reguler, karena    penawaran ini khusus untuk pelanggan untuk pelanggan Terpilih saja.</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Untuk    WIFI nya bisa di pergunakan lebih dari 3 user secara bersamaan dengan    kecepatan yang jauh lebih stabil stabil</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Pemakaian    inet di rumah/kantor bpk/ibu kan ini sangat aktif di khawatirkan    penggunaannya tidak maksimal menjadi lemot, nah ini oleh telkom di berikan    penawarannya ke 20mbps (dst) dengan kmharga khusus xxxrbu. Jadi sangat sayang    jika tidak di pergunakan</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">untuk    paket yang bapa gunakan kan ini paket lama pak dan di seluruh plasa telkompun    sudah tidak di perjualbelikan karna untuk paket 1..2..3..4..5 mega sudah    tidak di gunakan sebagai stabilitas karna untuk jaringan sendiri sudah    beralih ke sistem FO dengan pendukung kecepatanya di 100.50.40.30.20 jadi    agar bapak tidak mengalami kendala seperti loding bufring lemot ato    loskoneksi maka kami bantu alihkan ke jaringan terbaru agar lebih stabil dan    penambahan tarifnya juga cukup hemat hanya rpxx+ppn 10%</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Sudah    tdk disarankan menyampaikan perihal FUP. Untuk saat ini mungkin bapak belum    terlalu banyak menggunakan jdi merasa belum perlu, tapi saya yakin ke    depannya kebutuhan akses internet bapak meningkat seiring dengan zaman yang    serba online dan digital seperti saat ini</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Sayang    pak apabila tidak di upgrade kecepatannya, belum tentu saat kedepannya nanti    bapak membutuhkan, bapak mendapatkan harga dan kecepatan seperti yang saat    ini kami tawarkan</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Disini    bapak bisa maksimalkan untuk penawaran kec&nbsp;    20MB,Bapak bisa membandingkan dari yang saat ini bapak gunakan di 10MB    ke 20Mb,kami yakin penggunaan inet bapak akan jauh lebih stabil dan lebic    cepat.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Mungkin    saat ini ibu blm begitu memerlukan tapi&nbsp;    kedepannya jika bapak/ ibu memerlukan sewaktu- waktu bapak/ibu tidak    perlu lagi datang ke plaza telkom untuk diberikan penawaran ini , krn ini    tidak semua pelanggan saat ini kami berikan penawaran ini</td>
                                    </tr>
                                    <tr height="189">
                                      <td height="189" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Dijelaskan    ke pelanggan untuk manfaat jika plg menggunakan produk Minipack, Stb    Tambahan, Minipack, Usee Tv ataupun Upgrade, contoh:<br>
                                        Jika bapak/ ibu di upgrade internetnya bapak/ibu akan merasakan manfaat yg    berbeda seperti, internet bapak/ibu tidak akan lambat lagi, untuk kecepatan    upload dan downloadnya otomatis akan bertambah,dan jika bapak/ibu di upgrade    internetnya ke kecapatan lebih tinggi bapak/ibu tidak perlu khawatir dengan    penggunaan device/gadget yg ada di angota keluarga di rumah, dimana disini    secara otomatis speed inet di device masing2 anggota keluarga akan bertambah    secara otomatis</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Untuk    Program ini khusus di berikan kepada ibu saja, sayang sekali jika ibu    lewatkan , krn tidak semua PL telkom mendapatkan rekomendasi nya , tujuan    telkom dengan ada nya program ini agar ibu dapat merasakan sensasi perbedaan    penggunaan internet dari paket sebelumnya , hanya dengan penambahan sebesar    90.000 + ppn 10% di luar penggunaan lainnya , untuk penambahan ini juga di    bulan pertama tidak full hanya terhitung dari tgl aktifnya saja , full nya di    bulan depan .</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Maaf    pak, kan sayang kalau program ini dilewatkan. Bapak bisa evaluasi manfaatnya    dibandingkan kecepatan saat ini. Kami yakin program ini akan menguntungkan    dan penambahannya hanya 95 rbu + ppn 10% dibayarkan mulai bulan depan</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">mohon    maaf bapak/ibu sebelumnya, tidak mau dievaluasi dulu pemakaiannya? Bapak/ibu    kan aktif pemakaian inetnya, jika kedepannya bapak rasa kurang nyaman kami    kembalikan lagi kepada bapak, tapi kami yakin program yang kami tawarkan    bermanfaat bagi bapak/ibu dan keluarga dan untuk tarifnya juga belum    ditagihkan dibulan ini masih bulan depan dan terhitung prorata dan dibulan    berikutnya lg baru full</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Sayang    sekali apabila ibu melewatkan penawaran ini, jika bpk bersedia berlangganan    maka Ibu/Bapak bisa manfaatkan&nbsp; program    nya dan, optimal kan penggunaan nya ini,&nbsp;    karna tidak semua Pelanggan Telkom kita berikan penawaran dengan    tariff yg paling hemat ini, terutama kita berikan kepada ibu karna ini kan    pemakaian sangat aktif setiap Hari nya.&nbsp;</td>
                                    </tr>
                                    <tr height="189">
                                      <td height="189" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">untuk    saat ini mungkin blm begitu diperlukan namun kami yakin dengan semakin    pesatnya perkembangan teknologi informasi kedepannya bapak sekeluarga juga    akan membutukan kecepatan internet yang lebih tinggi lebih stabil dan lebi    handal , karenanya dari telkom memberikan penawaran spesial kepada bapak    dengan penambahan yang sangat kompetitif karena 20 mbps ini sudah kita    tingkatkan 2 kali lipat kecepatannya, pemakaiannya jg sudah unlimetd tanpa    kuota, jika ibu / bpk bersedia berlangganan maka bs bpk maksimalkan untuk    penggunaan internet bpk, dan program ini berlaku slm bpk berlangganan , jadi    bpk bs berlangganan sampai kapanpun&nbsp;</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">untuk    saat ini mungkin blm begitu diperlukan namun kami yakin dengan semakin    pesatnya perkembangan teknologi informasi kedepannya bapak sekeluarga juga    akan membutukan kecepatan internet yang lebih tinggi lebih stabil dan lebi    handal , karenanya dari telkom memberikan penawaran spesial kepada bapak    dengan penambahan yang sangat kompetitif&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">sayang    sekali pak, disini bapak kita pastikan jauh lebih nyaman menggunakan dengan    kec 20mb nya krn mau bpk downl, upload, streaming pun kita pastikan sdh lebh    cepat dan jauh lbh efektif penggunaannya pak.<br>                                      </td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">bapak    /ibu kan sayang saat ini bapak kan belum merasakan program <br>
                                        20mbps nya nnti bapak bisa evaluasi terlebih dahulu dan bisa bapak <br>
                                        bandingkan kecepatan 20 dengan 10 mbps nya pak kalau bapak rasa <br>
                                        efektif untuk 20mbps nya bapak bs lanjut berlangganan tetapi kalau <br>
                                        kita cek bapak kan jauh lbh efektif krn penambahannya hanya 95+ <br>
                                        ppn 10% dan dibayarkan d tagihan bulan depan</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">bapak    /ibu kan sayang saat ini bapak kan belum merasakan program 20mbps, ketika    bapak sudah rasakan 20mbps nya ternyata sesuai dengan kebutuhan dan pemakaian    bapak, silahkan kan boleh di lanjutkan. jadi selama digunakan boleh dinilai    pak manfaatnya sejauh mana. boleh di evaluasi terlebih dahulu. setidaknya    bapak sudah rasakan 20mbps dengan benefit dan tarif khusus dari telkomnya</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">seperti    itu ya pak/bu, klw sy cek pemakaian internet bpk/ibu sangat aktif, dan ketika    sdh di upgrade ke sekian mbps, kec sdh semakin stabil dan kami pastikan    penggunaan nya sdh lbh nyaman utk keluarga bpk/ibu dan tarif yg kami berikan    jg tarif hemat, dgn penambahan perbulan ..... saja, kec internet nya sdh 2X    lbh cepat (sebutkan kec yg akan di up)&nbsp;    dan bpk/ibu bs merasakan pengalaman yg berbeda dr kec intenet saat    ini,</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Jika    kita cek dr sistem pemakaian Internet Bapak / Ibu sangat aktif digunakan    setiap harinya,karena saat pemakaian 10 Mbps itu maksimal digunakan utk 3-4    Smartphone, jika Bapak / Ibu bersedia kami bantu tingkatkan ke 20Mbps maka    bisa di gunakan 4 hingga 15 Smartphone, dengan penambahan tarif khusus setiap    bulannya&nbsp; Rp xx + pajak 10% di luar    pemakian lainnya...</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">bpk/ibu    ini sayang kalau dilewatkan begitu saja karena disini kan penggunaan bpk/ibu    cukup banyak dan ini&nbsp; masih menggunakan    kecepatan yg lama, kalo misal diUPGRADE REGULER nanti kan untuk aksesnya    lebih enak juga lebih nyaman. dan ini pun bpk/ibu dapat harga khusus bukan    harga reguler&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Jadi    Ibu, mungkin sekarang blm memerlukan tapi saya yakin dengan perkembangan    teknologi yg sekarang internet bukan lagi sebagai kebutuhan pelengkap tp    sudah menjadi kebutuhan pokok.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Dengan    kemajuan teknologi yg semakin canggih, bapak bisa meningkatkan kecepatan    internetnya. jika dengan kecepatan sebelumnya bapak sudah merasa nyaman maka    akan lebih nyaman lagi jika menggunakan kecepatan yang kami tawarkan Karena    kecepatan yang didapat 2x lebih tinggi dan harga yang lebih terjangkau</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Bisa    di gunakan bu untuk UPGRADE REGULER keceptan yang terbaru ini di jamin ibu    tidak akan menyesal karna sangat membantu aktifitas ibu dan keluarga. Dari    segi kecepatan sudh menigkat tarifnya pun lebh terjangaku untuk pemakain    sehri-hari.&nbsp;</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">1,untuk    saat ini mungkin blm begitu diperlukan namun kami yakin dengan semakin    pesatnya perkembangan teknologi informasi kedepannya bapak sekeluarga juga    akan membutukan kecepatan internet yang lebih tinggi lebih stabil dan lebi    handal , karenanya dari telkom memberikan penawaran spesial kepada bapak    dengan penambahan yang sangat kompetitif&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    dg kec sebelumnya bapak sudah merasa nyaman maka akan&nbsp; lebih nyaman lagi jika menggunakan kec    &hellip;.&nbsp; Karena kecepatan yang didapat 2x    lebih tinggi tetapi bapak tidak harus membayar 2x lipat dari harga sebelumnya</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    bapak bersedia berlangganan maka bapak bisa merasakan sensasi yang berbeda    dalam penggunaan internet bapak&hellip;.tidak ada lagi bafering, intermiten,    penggunaan&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Dengan    perkembangan teknologi serta semakin berkembangnya konten2 yg ada saat ini    tentunya sangat diperlukan bandwith internet yg lebih tinggi agar lebih mudah    dan lancar dalam akses internet meninggat penguna internet semakin ahri juga    bertambah</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Ada    kelebihan benefit yg luar biasa Bpk/Ibu jika diugrade ke 20Mbps dimana    kecepatan downstream akan naik 2 kali lipat sedangkan upstreamnya naik 4x    lipat namun bayarnya tdk dilipatkangandakan hanya cukup menambahkan    Rp.xxx/bulan</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">&nbsp;JIKA BPK BERSEDIA BERLANGGANAN bapak bisa    memaksimalkan penggunaan program nya krna jika kedepannya bapak merasa    programnya sangat menguntungkan buat bp/ibu silahkan berlangganan sampai    berapa lama pun yg bp/ibu inginkan krna disini juga tarif berlangganan yg    kami berikan adalah tarif khusus hanya untuk pelanggan2 tertentu saja ( dan    di sebutkan tarifnya)</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">informasi    tambahan juga benefit yg bapak dapatkan jika UPGRADE REGULER selain    kecepatannya di tambah untuk kecepatan upload dan download juga di&nbsp; tambah apalagi untuk penggunaan youtube pak    untuk streaming butuh kecepatan downloadyg tinggi nah ini sudah kami tambah 2    kali lipat dari yg kemarin</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Untuk    saat ini kecepatan yang b/I masih dikecepatan yang masih rendah memang bisa    digunakan tapi masih belum bisa digunakan secara maksimal baik untuk kualitas    semisal untuk download , upload , searching dan streaming . Jadi juga    seiringnya kebutuhan kedepan pasti juga pasti membutuhkan dengan internet di    kecepatan yang lebih besar</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Saat    ini kan bpk mendapatakan penawaran khusus dari telkom. Untuk 20 mbpsnya cukup    dengan penambahan &hellip; rupiah. Nanti bpk bs bandingkan, 20 mbps ini jauh lebih    stabil. Untuk dowload film, lagu 20 mbps kami pastikan lebih cepat dan stabil    pak.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Sangat    disayangkan jika melewatkan tarif yang kami sampaikan karena tagihan yang    sekarang misalkan 350K itu baru mendapatkan 10M, ini Telkom menambahkan 10M    kembali dengan tarif khusus kami cukup menambahkan 100K (membandingkan harga    dan benefit)</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Silahkan    bisa dimanfaatkan sambil dievaluasi ke sepannya kalau dirasa menurut bapak/    ibu efektif dan menguntungkan silahkan bisa dilanjutkan sejauh yg diinginkan    namun begitu program aktif, bulan depan sudah dikenakan tagihan, dan tidak    smua pelanggan mendapatkan tarif promo</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Mungkin    saat ini bapak belum perlu, namun di era mordern seperti sekarang , pasti    kedepannya penggunaan bapak juga akan terus meningkat, karna fungsi internet    sudah global pak,, bapak bisa menggunakan untuk menyelesaikan pekerjaan    kantor, sarana belajar putra /putri bapak, ataupun informasi untuk Istri    bapak untuk membantu pekerjaan rumah, karna penawaran ini hanya saat ini    saja, belum tentu nanti kedepannya penawarnnya masih ada</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Untuk    Penawaran yang kami berikan ini sifatnya tidak ada kontrak, jadi bisa bapak    maksimalkan untuk penggunaan nya senyaman bapak karna penambahannya hanya    XXXX setiap bulan selama berlangganan</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Setelah    kami cek, penggunaan internet bapak cukup aktif, mungkin memang bapak jarang    menggunakan , tp untuk anggota keluarga bapak yang lain pasti sangat aktif    untuk penggunaannya, jadi kami rekomendasikan bapak untuk Upgrade ke kecepan    20 Mb</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Mohon    maaf pak/ bu,&nbsp; biasanya bapak/ibu    menggunakan inetnya itu apakah pakai paket data hp<br>
                                        Jika iya<br>
                                        Jika bapak/ibu bersedia dgn penawaran kami maka bapak/ibu berada di rumah    ibu tidak perlu menggunakan paket data, bapak/ibu bisa memaksimalkan untuk    internet yg ada dirumah bapak/ibu, krn ibu sudah berlangganan internet dirmh    sayang sekali jika tdk digunakan&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Digali    untuk yang biasa menggunakan internet siapa? Digunakan untuk keperluan apa? <br>
                                        Jika untuk anak- anak mengerjakan tugas sekolah:<br>
                                        Untuk saat ini tugas- tugas sekolah kan banyak menggunakan internet pak/    bu. Menurut kami ini akan sangat membantu keluarga ketika mereka membutuhkan    untuk keperluan (kasih contoh)</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Digali    untuk yang biasa menggunakan internet siapa? Digunakan untuk keperluan apa? <br>
                                        Jika untuk nonton saja:<br>
                                        Jika untuk nonton atau download film, dengan peningkatan kecepatan membuat    ibu akan lebih nyaman dalam menikmati tayangan- tayangan film karena jika    kecepatan bertambah maka loading film nya juga tidak terlalu lama&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">jarang    digunakan</td>
                                      <td width="493">justru    karna jarang digunakan, bapak boleh maksimalkan dan untuk penambahan tarifnya    di mulai bulan depan, setidaknya bapak sudah prnah mrasakan dposisi kec 20 mb    dengan tarif hematnya&hellip;</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Mungkin    untuk saat ini (b/i) belum membutuhkan utk programnya, namun seiring    berjalannya waktu kebutuhan internet akan semakin meningkat (b/i),kebetulan    disini (b/i) diberikan rekomendasi penawaran langsung dari telkom yang tidak    semua pelanggan mendapatkannya. jadi bisa (b/i) maksimalkan untuk programnya,    karena untuk penambahannya, (b/i) diberikan tarif khusus dengan penambahan</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">digali&nbsp; penggunaan pelanggan /mohon maaf bu ,&nbsp; biasanya ibu menggunakan inetnya itu apakah    pakai paket data hp&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">digali    untuk yg biasa menggunakan inet siapa ?? Digunakan untuk keperluan apa    ??&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">memaksimalkan    untuk internet yg ad dirumah&nbsp; , krn    sudah berlangganan internet dirmh sayang sekali jika tdk digunakan&nbsp;</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td>Jarang Digunakan</td>
                                      <td width="493">Untuk    UPGRADE REGULER ini bpk/ibu diberikan harga promo dan silahkan bs    dibandingkan penggunaan antara kecepatan 10mbps dengan 20 mbps. Untuk yang    kecepatan 20 mbps ini digunakan utk beberapa gadget/PC kecepatannya akan jauh    lebih stabil pak/bu. Untuk penambahannya juga jangan khawatir saat ini    diberikan harga khusus oleh Telkom cukup dengan penambahan xx rupiah</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="168" width="98">UPGRADE REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">untuk    paket yang bapa gunakan kan ini paket lama pak dan di seluruh plasa telkompun    sudah tidak di perjualbelikan karna untuk paket 1..2..3..4..5 mega sudah    tidak di gunakan sebagai stabilitas karna untuk jaringan sendiri sudah    beralih ke sistem FO dengan pendukung kecepatanya di 100.50.40.30.20 jadi    agar bapak tidak mengalami kendala seperti loding bufring lemot ato    loskoneksi maka kami bantu alihkan ke jaringan terbaru agar lebih stabil dan    penambahan tarifnya juga cukup hemat hanya rpxx+ppn 10% dan tidak semua    pelanggan kita berikan penawaran menarik ini&nbsp;</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="168" width="98">UPGRADE REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">sebelumnya    mohon maaf atas ketidaknyamanannya, program ini kami berikan untuk    meningkatkan kenyamanan pelanggan, kami yakin bpk dan keluarga akan nyaman    untuk penggunannnya, karna nantinya speed inetnya akan kita sesuaikan dengan    kebutuhan keluarga. Khusus bpk dan keluarga juga tidak di kenakan tarif    normal, tarif khusus yg jauh lebih hemat dari pusat. jika bpk bersedia dgn    pernawaran ini maka bpk silahkan di bandingkan dlu penggunaannya senyaman bpk    saja, tarif berjalan, namun di bayarkan di bulan depan</td>
                                    </tr>
                                    <tr height="231">
                                      <td height="231" width="98">UPGRADE REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">sebelumnya    mohon maaf atas ketidaknyamanannya pak/bu, namun disini&nbsp; kita sampaikan bahwasanya untuk penawaran    ini kan tidak semua pelanggan bisa menikmati dengan tarif khususnya ,    penawaranya ini di berikan telkom bukan tanpa alasan, karena selama ini    setekah kita cek kapasitas penggunaan bapak sebenarnya lumayan aktif..untuk    itulah kami tawarkan paket upgrade kecepatan ini sebagai solusi dari kondisi    internet bpk/ibu yg saat ini terkadang sangat lambat , jika bpk bersedia    berlangganan maka bpk/ibu boleh maksimalkan untuk penggunaan inetnya ,nanti    bs&nbsp; lihat bagainama perbandingany,&nbsp; yg jelas saya yakin&nbsp; internet bpk/ibu pasti sudah jauh sangat    maksimal untuk penggunaannya&nbsp; dan untuk    penambahan tarifnya baru akan mulai di tagihkan dibulan depan nya ya pak/bu..</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84">UPGRADE    REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Mohon    maaf atas ketidakyamanan sebelumnya nya ya pak , ( kenali keluhan PL nya ) .    Jika gangguan nya krn lambat , maka bisa di yakinkan klw program upgrade    menjadi solusi yg tepat . <br>                                      </td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Mohon    maaf untuk ketidaknyamanannya. Kami yakin program ini bermanfaat untuk bapak    dan keluarga karena kecepatannya sudah dua kali lipat dan lebih stabil saat    diakses banyak perangkat</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="168" width="98">UPGRADE REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Mohon    maaf atas ketidaknyaman nya pak.../bu...kami sangat mengerti apa yg bpk/ibu    rasakan untuk gangguannya, namun bpk/ibu jgn khawatir krn saat ini utk    keluhan pelanggan terkait gangguan fasilitas telkom sdh di permudah utk    laporan nya, bpk/ibu bisa langsung hub call center kami di 147, atau bisa jg    melalui web kami, dan bisa jg melalui aplikasi my indihome. dan utk program    yg km tawarkan saat ini, sangat menarik pak/bu, dan penambahan tarif nya pun    diberikan dgn tarif khusus, dan tidak semua pelanggan telkom mendapatkan    rekomendasi penawaran ini</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Mohon    maaf untuk ketidaknyamanan nya ya Pak/ Bu. Kita pastikan kedepannya hal    tersebut tidak terjadi lagi.</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">mohon    maaf atas ketidaknyamanannya dan yakinkan ke pelanggan <br>
                                        bahwa programnya lebih cepat dan lebih efektif&nbsp;</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="168" width="98">UPGRADE REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">kalau    boleh saya tau alasannya kenapa pak?<br>
                                        eu: bla..bla...<br>
                                        kan sayang pak kedepannya pun boleh bapak evaluasi dulu pemakakainnya,    kerena pembayarannya pun mulai bulan depan, namun 3 hari kedepan sudah bisa    bpk nikmati 20mbps nya, jadi boleh bapak bandingkan nt pemakaaianya sudah    jauh lebihnya nyaman, dan km yakin nt bapak akan terus belangganan karena    tarifnya pun sudah di berikan dg tarif khusus cukup penambahan 95rb +ppn10%</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">mohon    maaf atas ketidaknyamanannya dan yakinkan ke pelanggan <br>
                                        bahwa programnya lebih cepat dan lebih efektif&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Registrasi    sendiri</td>
                                      <td width="493">Tapi    sayang sekali (b/i) jka tidak ambil, karena tdk semua pelanggan mendapatkan    program ini. Untuk rekomenadasi penawarannya belum tentu besok ada lagi. Jadi    kan jika (b/i) pengajuan sendiri masih dikenakan tarif normal (b/i) yaitu &hellip;.    Dan itu masih blm ppn 10%. kan sayang (b/i) jika dilewatkan</td>
                                    </tr>
                                    <tr height="210">
                                      <td height="210" width="98">UPGRADE REGULER</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="493">Misalkan    plg sudah menggunakan Provider M : Baik Bpk/Ibu boleh tidak kalau saya mau    sharing tentang Produk M,disini saya sebagai agen hanya bertugas untuk    sharing saja,jika bpk/ibu sudah menggunakan produk M berarti bpk/ibu sudah    mengerti dan paham manfaat dari produk M tsb,jadi saat ini saya mau mencoba    membantu me review manfaat produk yg sudah bpk/ibu pergunakan,manfaat dari    produk yg kami tawarkan lebih menguntungkan bpk/ibu jika ibu menggunakan    produk kami bpk/ibu akan mengalami pengalaman yg berbeda dimana disini ibu    dapat (jelaskan keunggulan dan manfaat produk Indihome,contoh keunggulan Usee    Tv : bisa 3R,bisa nonton tayangan setelah 7 hari</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="493">Mohon    maaf bapak/ Ibu sangat sayang sekali kalau tidak digunakan kesempatannya hari    ini karena kalau dengan provider lain biasanya diberikan dengan tarif mahal,    nah saat ini bapak/ Ibu&nbsp; diberikan oleh    Telkom dengan penambahan tarif khusus Rp xx + Pajak 10 % di luar penggunaan    lainnya setiap bulannya, dan bapak / Ibu sudah dapatkan kecepatan yang    lebih&nbsp; cepat dan stabil...</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">bpk/ibu    tidak perlu khawatir meskipun kami tingkatkan 2x lipat fasilitasnya,    tagihannya tidak ikut di tingkatkan 2x lipat juga, ini penambahan tarif    berlanganannya hanya 95 rb+ppn 10%, jadi tidak akan dirugikan, karena ini    bukan promo.</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">sayang    kalo di lewatkan, dan ini tarif penambahannya cukup hemat dan berlaku selama    berlangganan , jika tarif normal lebih tinggi dari yang kita tawarkan    ini&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">program    yang kami sampaikan sangat hemat, kami berikan penawaran harga khusus, untuk    internet bapak, dengan kecepatan 2 x lebih tinggi bapak tidak harus membayar    2 x lipat dari tagihan yang biasa bapak bayarkan</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">bpk/ibu    tidak perlu khawatir meskipun kami tingkatkan 2x lipat fasilitasnya,    tagihannya tidak ikut di tingkatkan 2x lipat juga, ini penambahantarif    berlanganannya hanya 95 rb, jadi tidak akan dirugikan, karena ini bukan    promo.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">jika    nolak , tanya alasan, karena kemahalan , sampaikan diberikan tarif penambahan    khusus , kalo tarif normal tinggi . sayang kalo di lewatkan, dan ini tarif    penambahannya selama berlangganan di ....Mbps saja.</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">di    berikannya tarif khusus untuk penambahannya hanya xxxrupiah karna kalo ke    plasa/147 itu di kenakan tarif normal</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Penambahan    tarif ini jauh lebih hemat dibandingkan dengan tarif reguler&hellip;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Kecepatan    yang kami tawarkan 2x lipat dari yang saat ini bapak gunakan, tp    penambahannya bukan 2x lipat dari harga yng saat ini bapak bayarkan,yaitu    hanya penambahan</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Penawarn    ini sifatnya terbatas, hanya di berikan kepada pelanggan yang kami hubungi,    tarif penambahaannnya pun Flat setiap bulannya tidak akan ada perubahan</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Tidak    boleh membandingkan dengan channel lain. Ini lebih hemat jika dibandingkan    dengan tarif normal pak, dan bapak juga tidak perlu datang ke plaza telkom    untuk permintaan upgrade&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Penambahan    yang kami tawarkan tidak mahal bapak/ ibu karena harga promo ini berlaku    selama bapak/ ibu berlangganan program yang kami tawarkan</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Kami    pastikan ini tidak mahal pak/ bu, karena ini penawaran khusus bagi pelanggan    setia telkom (tdk smua pelanggan mendapatkan penawaran ini)&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Ini    lebih hemat pak/ bu, kecepatan yg bapak/ ibu dapatkan minimal 2 kali dr    kecepatan saat ini bapak gunakan tapi untuk harga bapak tdk perlu membayar 2    kali lipat dr tagihan saat ini (penambahannya diulang)&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">programnya    ni tidak terikat, bapak bisa manfaatkan semaksimal mungkin&nbsp; namun untuk tarif (sebutkan tarifnya) sudah    mulai berjalan</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Bapak/Ibu    programnya boleh dimaksimalkan, untuk tarifnya kita berikan juga tarif    khusus, tidak&nbsp; sampai dua kali lebih    besar dari tagihan sebelumny, cukup hanya penambahan Rp xx. + pajak 10%    diluar pemakian lainnya setiap bulannya&nbsp;    dan Bapak / ibu sudah dapatkan (..sampaikan benefit kembali)</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td>Tarif Mahal</td>
                                      <td width="493">Baik    Pak / Bu, karena program kami ini adalah rekomendasi dan penawaran khusus,    maka kami berikan tarif khusus juga. Cukup dengan penambahan 95rb+ppn 10%    perbulan bapak / ibu mendapatkan kecepatan inet dua kali lipat dari saat ini,    sementara bapak tidak perlu membayar tarif dua kali ipat lebih mahal</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">kan    sayang pak/bu klw dilewatkan, krn tdk semua pelanggan mendapatkan penawaran    ini, dan penambahan tarif nya sdh sangat hemat, hanya dgn penambahan ...    saja, kec internet bpk/ibu sdh lbh stabil, dan program ini jg tdk terikat,    bisa bpk/ibu evaluasi, jd bs di optimalkan terlebih programnya, dan    penambahan tarif nya sdh ditagihkan sejak aktif program nya</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">sayang    pak, justru yg kita brikan saat in tarifny lbh hemat. ini kecptny naikkn 2 x    lipat, bpk cuman tmbhn 95 k perbulan belum termasuk ppn 10%</td>
                                    </tr>
                                    <tr height="210">
                                      <td height="210" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Ibu    jangan&nbsp; khawatir, ibu kan merupakan    pelanggan ekslusive Telkom, krna ibu yg terpilih, ibu diberikan tarif&nbsp; khusus, bukan tarif normal, kalau tarif    normalnya lbih mahal lgi bu, klau ini&nbsp;    tarifnya lebih hemat dibanding harga&nbsp;    normal.. dgn hanya penambahan XX rupiah plus ppn 10 persen&nbsp; dri tagihan ibu sebelumnya tpi ibu    mendapatkan keuntungan dua kali lipat....jika ibu bersedia maka&nbsp; ibu bisa bandingkan kualitasnya, antara 10    Mbps yg lama dgn kecepatan ibu yg baru 20mbps unlimited.. Bagaimana    pengalaman ibu menggunakan kec yg uda 20mbps unlimited. Kita yakin di 20mbps    sdh sesuai dan tdk akan ada gangguan lgi kedepannya ya ibu.. Dan itupun    penambahan tagihannya&nbsp; baru mulai ibu    bayarkan bln depan</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">boleh    dibantu alasan tdk ingin di upgradenya knp pak? kan sayang, bpk disini dpt    kecepatannya sudah 2x lbh maksimal tanpa harus bayar 2x lipat dari segi    tagihan dan ini jika bpk bersedia maka bpk bs bandingkan kecepatan yg lama    dgn yg baru, kami yakin berjalannya waktu kebutuhan akan kecepatan inernet    semakin bertambah. Oleh karena itu, kami berikan prioritas penawaran untuk    peningkatan kecepatan ini ke bpk&nbsp;&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Program    ini pembayaran bulan depan belum full, masih prorata. Fullnya ditagihkan    dibulan berikutnya (bulan kedua)</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">UPGRADE REGULER</td>
                                      <td>Tarif Mahal</td>
                                      <td width="493">&nbsp;Di sini bapak tdk perlu khawatir tarif yang    bapak dapatkan merupakan tarif khusus yang di berikan Telkom dengan    penambahan hanya 110.000 + ppn 10% diluar penggunaan lainnya jika ada ,    artinya bapak sudah kita tingkatkan kecepatan internetnya 2 kali lebih cepat    tapi pembayaran tidak 2 kali lipat ,dan untuk pembayaran bapak di bulan depan    masih sebagian atau belum full yg bapak bayarkan , terhitung dari tgl aktif    nya saja klw untuk fullnya di bayarkan di bulan berikutnya atau di bulan ke    dua. ,</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Baik    pak, sayang sekali program kita ini khusus untuk pelanggan terpilih, dan    tidak semua pelanggan diberikan. Tarif yang kita berikan juga tarif khusus    dan hemat pak hanya ..+Ppn 10% yang akan ditagihkan baru mulai di bulan    depan, juga masih prorata. Full nya baru dimulai bulan xx. Boleh bapak    evaluasi programnya.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">bapak/ibu    perogram kita ini kan rekomendasi pak penawaran khusus ,tarif nya kan juga    khusus pak. penambahannya ini kan hanya 95rb+ppn 10%&nbsp; diluar penggunaan lain setiap bulannya    tidak&nbsp; sampai dua kali lebih besar dari    tagihan sebelumny</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">bapak/ibu    perogram kita ini kan rekomendasi kita tidak bisa pastikan nantinya masih    mendapatkan dengan tarif khusus yang sama.kedepannya kalau bapak berminat    namun tdk d rekomendasikan tarifnya kan bisa saja berbeda dr yang saat ini    kita berikan pak kan sayang pak</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">bapak/ibu    perogram kita ini kan rekomendasi pak penawaran khusus ,tarif nya kan juga    khusus pak. penambahannya ini kan hanya 95rb+ppn 10%&nbsp; diluar penggunaan lain setiap bulannya    tidak&nbsp; sampai dua kali lebih besar dari    tagihan sebelumny,</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Sebetulnya    tidak mahal pak, karena Bapak mendapatkan harga khusus, kalau untuk tarif    normal kecepatan 10mbps naik ke 20mbps naiknyakan mahal, yaitu mencapai    310.000 belum termasuk ppn 10% dan ini bapak hanya menambahkan ( Harga    Penawaran plus ppn 10% ), jadi lebih menguntungkan.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Penambahan    yg kami tawarkan tdk mahal bpk krn penambahan harga perbulan&nbsp; yang kami sampaikan berlaku selama bpk    berlangganan program yg kami tawarkan&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Ini    lebih hemat pak, kecepatan yg bpk dapatkan minimal 2 kali dr kecepatan saat    ini bpk gunakan tapi untuk harga bpk tdk perlu membayar 2 kali lipat dr    tagihan saat ini ( penambahannya diulang )&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">ini    lebih hemat pak, kecepatan yg bpk dapatkan minimal 2 kali dr kecepatan saat    ini bpk gunakan tapi untuk harga bpk tdk perlu membayar 2 kali lipat dr    tagihan saat ini ( penambahannya diulang )&nbsp;</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">UPGRADE REGULER</td>
                                      <td>Tarif Mahal</td>
                                      <td width="493">Ini    tdk mahal apabila dibandingkan dengan keuntungan yang ibu nikmati, nanti    bpk/ibu dengan kecepatan 20mbps ini bs digunakan browsing, streaming, bahkan    video call&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">UPGRADE REGULER</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Silakan    dioptimalkan penggunaan kecapatan 20M ini, jika benefit yang kami sampaikan    dirasa sesuai silakan dilanjutkan karena tarif promo yang kami sampaikan    berlaku selamanya selama berlangganan di 20M, namun penambahan pembayaran    sudah berlaku setelah program aktif.</td>
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