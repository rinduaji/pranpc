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
								  <p>STB Tambahan</p>
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
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">tidak    semua pelanggan mendapatkan penawaran ini dan kami yakin untuk program second    stb bermanfaat bagi keluarga .krn jika dirumah anggota keluarga yg lain mau    menonton channel yang berbeda dalam waktu bersamaan sudah bisa</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">tidak    semua pelanggan mendapatkan penawaran ini dan kami yakin untuk program second    stb bermanfaat bagi keluarga .krn jika dirumah anggota keluarga yg lain mau    menonton channel yang berbeda dalam waktu bersamaan sudah bisa</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">jika    bapak bersedia berlangganan bapak bisa mendapatkan sensasi&nbsp; yang berbeda saat menonton 2 tv dengan    chanel yang berbeda, bapak bisa berlangganan sampai kapanpun,kami jaminkan    program ini akan memuaskan bapak bersama keluarga</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">bapak    bisa memaksimalkan / manfaatkan/ evaluasi / membandingkan/ mengoptimalkan    programnya, untuk penambahan tarif&hellip;. Sudah berjalan begitu program aktif,    bulan depan masih prorata bulan kedua dan seterusnya penambahan full&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">bapak    bisa memaksimalkan / manfaatkan/ evaluasi / membandingkan/ mengoptimalkan    programnya, untuk penambahan tarif&hellip;. Sudah berjalan begitu program aktif,    bulan depan masih prorata bulan kedua dan seterusnya penambahan full&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">bapak    bisa memaksimalkan / manfaatkan/ evaluasi / membandingkan/ mengoptimalkan    programnya, untuk penambahan tarif&hellip;. Sudah berjalan begitu program aktif,    bulan depan masih prorata bulan kedua dan seterusnya penambahan full&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Ini    bisa jauh lebih efektif lagi ketika bp/ibu sudah merasakan manfaatnya karna    dengan menambahkan decorder tambahan ini ibu/bp bisa menonton acara kesukaan    di tempat yg berbeda dan di waktu yg bersamaan tanpa perlu berebut dengan    anggota keluarga lainnya.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB    TAMBAHAN</td>
                                      <td width="163">Belum perlu    saat ini</td>
                                      <td width="493">apakah tidak    sayang bu/pak ini penawarannya hanya 1 kali,selain itu benefit yang bpk/ibu    dapatkan juga banyak sekali dengan tarif yang hemat seperti keunggulan nya    sendiri ibu/bpk bisa output resolusi layar dengan kualitas HD,merasakan    pengalaman smart tv bahkan pada tv biasa,tv on demand,record&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">menggunakan    akses internet melalui handphone, laptop, komputer, bpk/ibu juga sdh bisa    mengakses internet langsung dari TV yang bpk/ibu gunakan&quot;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Pada    saat menonton tv, terkadang antar anggota keluarga suka berbeda keinginan    channle yg ingin ditonton, dengan penambahan 2nd STB ini nantinya keluarga    bapak bisa lebih nyaman menonton acara tv dengan channel keinginan    masing-masing</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Kegunaan    Usee TV kami tidak hanya untuk menyaksikan tayangan TV, namun apabila bapak    dan keluarga memiliki hoby lain seperti bernyanyi, bapak bisa menggunakan    fitur karaoke yang tersedia di Usee TV sehingga lebih mengakrabkan anggota    keluarga</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Untuk    TV pertama bapak yang sudah terpasang Useetv memang sudah menggunakan smart    TV. Tp TV kedua bapak disini bila masih tv tabung, dengan bapak menambahkan    decoder ke dua ini TV tabung bapak , bisa kami rubah seperti smart TV, jd    bapak bisa memiliki 2 smart TV tanpa harus membeli TV kembali pak</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB    TAMBAHAN</td>
                                      <td width="163">Belum perlu    saat ini</td>
                                      <td width="493">untuk saat ini    mungkin belum perlu pak, namun dengan pesatnya perkembangan teknologi untuk    browsing<br>
                                        dan menyaksikan youtube bpk/ibu saat ini sudah bisa melalui tv tdk hanya di    hp atau lapto</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">programnya    ni tidak terikat, bapak bisa manfaatkan semaksimal mungkin&nbsp; namun untuk tarif (sebutkan tarifnya) sudah    mulai berjalan</td>
                                    </tr>
                                    <tr height="189">
                                      <td height="189" width="98">STB    TAMBAHAN</td>
                                      <td width="163">Belum perlu    saat ini</td>
                                      <td width="493">baik pak, untuk    penggunaan useetv sendiri ini kan sudah banyak benefit atau manfaat yg bapak    bisa nikmati. dengan useetv bapak tidak hanya monoton nonton saja, bapak bisa    internetan , buka youtube dan karokean dengan keluarga, bersama sama ,    apalagi dengan dipasangkan decorder yg kedua nya pak, jadi sudah bisa kedua    tv dengan siaran yg beda, dan dari kedua tv nya&nbsp; sudah bisa internetan ,youtubean dan    karoean, jadi tidak hanya 1 tv saja, walaupun bapak hubungkan ketv tabung    untuk ketv keduanya, tv tabungnya akan diseting seperti smart tv. dan Program    penawaran ini tidak di semua PL Telkom yang mendapatkannya , hanya yg    terpilih saja&nbsp;</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">STB    TAMBAHAN</td>
                                      <td width="163">Belum perlu    saat ini</td>
                                      <td width="493">Bapak silahkan    evaluasi manfaatnya karena PENAMBAHAN Rp xxxx akan dimulai dibulan depan.    Kami rasa dengan mengikuti program kami, bapak sekeluarga bisa menikmati    tayangan useetv dengan nyaman tanpa harus bergantian menonton. Tentu akan    membuat waktu senggang bapak dan keluarga lebih bervariasi nantinya(hilangkan    terlebih dahulu )</td>
                                    </tr>
                                    <tr height="231">
                                      <td height="231" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Baik    pak, karna programnya ini rekomendasi penawaran dari telkom, jadi kan sayang    untuk dilewatkan pak/bu, karna penawarannya ini tidak kesemu pelanggan pak,    hanya kepada pelanggan yang terpilih yg saja direkomendasikan yg bisa    menikmatinya, dan kita yakin untuk programnya sangat bermanfaat karna    bapak/ibu dan keluarga dirumah sudah bisa maksimalkan useetv nya di 2 tv    sekaligus dan sudah boleh menonton tayangan yg berbeda, dan karna stb yg    ditambahkan berbasis android dari tv nya pun bisa akses internet seperti    browsing, streaming, buka utube, dan karokean dengan kualitas tayangan sudah    HD, dan alatnya bisa difungsikan kesemua jenis tvny. Dan programnya ini bisa    dievaluasi kedepannya, jadi seyamannya bapak berlangganan saja.dan tarif    penambahan Rp xxxxx sudah berjalan mulai bulan depan</td>
                                    </tr>
                                    <tr height="210">
                                      <td height="210" width="98">STB    TAMBAHAN</td>
                                      <td width="163">Belum perlu    saat ini</td>
                                      <td width="493">Tidak sayang    dilewatkan penawarannya pak,&nbsp; krna&nbsp; kita cek dari sini penggunaan useetvnya kan    aktif dipergunakan..dan karena sifatnya rekomendasi penawaran&nbsp; untuk pemakaian sdh bs bp    pergunakan,dimaksimalkan dalam pemakaian kedepannya.jikalau bapak merasa    nyaman&nbsp; boleh bapak lanjutkan tapi saya    yakin kedepannya bapak dan keluarga sudah jauh lebih nyaman karena tdk&nbsp;&nbsp; perlu berebut channel dalam pemakaiannya    karena useetvnya kan sudah bs langsung&nbsp;    di pergunakan di 2 tv yg berbeda dengan 2 tayangan yg berbeda dan    sudah multifungsi juga sudah bs streaming ,browsing dan karaokean&nbsp; .dan jika mmg nnti sudah terpasang dan    aktif dari sistem telkom kita baru dibulan depan tagihannya sudah mulai    berjalan ya pak..itupun masih dihitung prorata</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">STB    TAMBAHAN</td>
                                      <td width="163">Belum perlu    saat ini</td>
                                      <td width="493">sayang sekali    kalau dilewatkan programnya pak/bu, krn disini jika&nbsp; bpk/ibu bersedia berlangganan maka program    ini bisa maanfaatkn &amp; gunakan programnya ini senyamannya bapak/ibu,&nbsp; dimana bpk/ibu dgn keluarga nantinya sudah    bisa mnonton siaran yg berbeda dlm waktu yg bersamaan sekaligus, sudah bisa    internetan jg langsung dari televisi nya; youtube, streaming video, karokean    langsung dari tv nya, dgn tambhan decoder hybird yg jg sudah berbasis android</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">baik    pak , dsni kan program nya tidak smua bisa mnikmati , hanya <br>
                                        nomer yg terpilih saja yg bsa mendapatkan penawaran ini&nbsp; ... jika bpk bersedia dgn penawaran ini bpk    bs&nbsp; mksimalkan, namun slama masa    evaluasi tarif <br>
                                        tetap berjalan kan juga sudah multifungsi untuk penggunaan nya , bpk <br>
                                        bsa internetan juga sudah dgn tarif hemat , namun saya yakin <br>
                                        program kita bermanfaat shinggu untuk pnggunaan nya bsa <br>
                                        dimaksimalkan</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">sayang    sekali pak/bu, saat ini pak/bu, banyak acara TV yang memberikan tayangan -    tayangan yang berkaitan dengan edukasi, yg bs dinikmati oleh anggota    keluarga, dan dengan penambahan decorder nya nanti, anggota keluarga dirumah    sudah bisa menikmati channel - channel TV yang sesuai dengan kebutuhan dengan    nyaman tanpa harus bergantian menonto dan tarif yang diberikan juga sangat    hemat pak/bu, dan program nya juga bisa bpk/ibu evaluasi dan jk sudah aktif    tarif sudah bberjalan ya pak/bu</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Mohon    maaf Bapak / Ibu, STB yg kita tambahkan ini sudah yang terbaru yang sudah    berbasis android jadi nanti untuk penggunaan useetv-nya dirumah sudah lebih    bervariasi dan menarik.<br>
                                        Dan program kita inipun boleh dioptimalkan dan dimaksimalkan senyamannya    Bapak / Ibu, tapi ketika Bapak / Ibu berlangganan maka sudah dikenakan    penambahan tarif ya.</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">baik    pak , dsni kan program nya tidak smua bisa mnikmati , hanya <br>
                                        nomer yg terpilih saja yg bsa mnikmatinya ... jd dsni silahkan bpk <br>
                                        pergunakan silahkan bpk mksimalkan, namun slama masa evaluasi tarif <br>
                                        tetap berjalan kan juga sudah multifungsi untuk penggunaan nya , bpk <br>
                                        bsa internetan juga sudah dgn tarif hemat , namun saya yakin <br>
                                        program kita bermanfaat shinggu untuk pnggunaan nya bsa <br>
                                        dimaksimalkan</td>
                                    </tr>
                                    <tr height="210">
                                      <td height="210" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">baik    pak, karna programnya ini rekomendasi penawaran dari telkom jadi kan sayang    untuk dilewatkan pak/bu karna untuk penawarannya ini tidak ke semua    pelanggan, hanya kepada pelanggan terpilih saja yg direkomendasikan yg bisa    menikmatinya, dan kita yakin programnya sangat bermanfaat karna bapak/bu dan    keluarga sudah bisa memaksimalkan useetvnya di 2 televisi sekaligus dan sudah    boleh menyaksikan tayangan berbeda, dan karna stb yg ditambahkan sudah    berbasis android dari tvnya pun bisa mengakses internet seperti browsing,    streaming, buka youtube dan berkaraoke dengan kualitas gambar yg sudah&nbsp; HD dan alatnya bisa difungsikan kesemua    jenis tvnya. Dan programnya ini bisa dievaluasi kedepannya, jadi senyamannya    bapak berlangganan saja</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">STB TAMBAHAN</td>
                                      <td width="163">Belum    perlu saat ini</td>
                                      <td width="493">Bapak    / Ibu sangat sayang&nbsp; programnya untuk    dilewatkan boleh dimaksimalkan programnya dimana untuk STB&nbsp; yang kita berikan adalah yang terbaru yaitu    stb Hybrid,&nbsp; kedepannya Bapak / Ibu    bisa menikmati channel yang berbeda antar TV pertama&nbsp; dan TV kedua dalam waktu bersamaan , dan    dari televisinya juga bapak/ Ibu bisa menikmati browsing dan streaming (    sampaikan benefit kembali )...dengan penambahan tarif per bulannya Rpxx+    pajak 10% di luar penggunaan lainnya...</td>
                                    </tr>
                                    <tr height="168">
                                      <td height="168" width="98">STB TAMBAHAN</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Program    yang kita tawarakn ini kan sangat menarik pak/bu.. Krn kami berikan dgn    kualitas yang sudah Hybrid ( kualitas gambar ok &amp; suara jernih ) &amp;    saya yakin kedepannya ibu / bpk dan keluarga merasa nyaman dengan program    yang kita tawarkan , krn manfaatnya selain menonton ibu / bpk dan keluarga    juga bisa - Browsing Internet<br>
                                        - Streaming YouTube<br>
                                        - TvoD (menyaksikan Program Acara yang telah tayang hingga 7 hari yang    lalu)<br>
                                        - Record program</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Saya    lebih butuhnya internet saja?,.. Baik bpk /ibu dengan fasilitas decorder /    stb Hybrid ini,&nbsp; ibu / bpk sudah bisa    internetan browsing &amp; streaming youtube- melalui TV Agar fasilitas    Indihome Bpk/Ibu dapat di pergunakan secara Optimal oleh Bpk/ Ibu sekeluarga.</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">STB TAMBAHAN</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Baik    Bpk/ Ibu Mr/Mrs.Xxxxx dan keluarga tentunya seringkali adanya perbedaan    selera pada saat menyaksikan hiburan di Televisi saat bersama keluarga di    rumah,&nbsp; Oleh sebab itu Kami&nbsp; rekomendasikan penawaran khusus STB    Tambahan ini Kepada Bpk/Ibu,&nbsp; Agar    kedepannya penggunaan fasilitas Indihome Bpk/ Ibu lebih Optimal lagi karena    bisa menyaksikan siaran Channel yang berbeda di waktu yang bersamaan.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">STB TAMBAHAN</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Di    sini Bapak memiliki lebih dari 1 TV, jd untuk penggunaan Decoder kedua ini    bisa di letakkan di kamar anak atau bapak sendiri, karna fungsi Usee tv ini    bisa di gunakan untuk menunjang akses internet&nbsp;</td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">STB TAMBAHAN</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Untuk    penawaran decoder kedua ini juga tidak terikat hanya dengan penambahan 80K,    bapak dapat menggunakan senyaman bapak</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">STB TAMBAHAN</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Pemasangan    Decoder yang kedua ini sifatnya bukann paralel, jd bapak akan mendapatkan    tambahan 1 decoder dan 1 remote , dengan tayangan yang&nbsp; bisa dinikmati berbeda-beda di setiap TV    nya</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">STB TAMBAHAN</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">Untuk    programnya ini boleh bapak maksimalkan boleh bapak efektifkan pemakaiannya    kedepannya senyamannya bapak berlangganan, dan kedepannya masih bisa    dievaluasi ya pak, jadi apabila untuk kedepannya memang kurang efektif    penggunaannya, kita kembalikan ke bapak masih bisa dievaluasi dimana untuk    tagihan tetap berjalan dan tagihan dibulan pertama masi diprorata ya pak. dan    untuk penambahan tarif Rp xxxxx sudah dikenakan mulai bulan depan <br>                                      </td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">STB TAMBAHAN</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">apakah    tdk sayang pak jika tdk dilewatkan untuk penawarannya , krn jika bpk bersedia    berlangganan produknya maka bpk bs mengoptimalkan penggunaan bpk , sehingga    bpk bs membandingkan manfaatnya ,&nbsp;</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">STB TAMBAHAN</td>
                                      <td width="163">Jarang    Digunakan</td>
                                      <td width="493">baik,    sangat di sayangkan pak/buk utk melewatkan program ini, karna penawarannya    tidak semua pelanggan telkom kita pak/bu hanya utk pelanggan terpilih saja    kita berikan,&nbsp;&nbsp; dan dengan penambahan    decorder nya, keluarga di rumah sudah bisa menonton tayangan yang berbeda di    waktu yang bersamaan, dan tayangan-tayangan yang belum sempat bpk/ibu tonton    mungkin karena kesibukan dalam pekerjaan, masih bisa bpk/ibu di rewind    kembali hingga 7 hari sebelumnya</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">STB TAMBAHAN</td>
                                      <td>Kecewa dengan Telkom</td>
                                      <td width="493">Mohon    maaf untuk ketidaknyamanannya. Program ini sudah kami mudahkan untuk proses    maupun tarifnya. Sehingga bapak tidak perlu repot lagi.&nbsp; Tapi kami yakin program ini memberikan    banak manfaat untuk bapak dan keluarga</td>
                                    </tr>
                                    <tr height="189">
                                      <td height="189" width="98">STB TAMBAHAN</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Tidak    sayang dilewatkan penawarannya pak,&nbsp;    krna&nbsp; kita cek dari sini    penggunaan useetvnya kan aktif dipergunakan..dan karena sifatnya rekomendasi    penawaran untuk pelanggan terpilih saja pak, tdk untuk seluruh Pelanggan&nbsp; saya yakin kedepannya bapak dan keluarga    akan jauh lebih nyaman karena tdk&nbsp;&nbsp;    perlu berebut channel dalam pemakaiannya karena useetvnya kan sudah bs    langsung&nbsp; di pergunakan di 2 tv yg    berbeda dengan 2 tayangan yg berbeda dan sudah multifungsi juga sudah bs    streaming ,browsing dan karaokean&nbsp; .dan    jika mmg nnti sudah terpasang dan aktif dari sistem telkom kita baru dibulan    depan tagihannya sudah mulai berjalan ya pak..itupun masih dihitung prorata</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">STB TAMBAHAN</td>
                                      <td>Kecewa dengan Telkom</td>
                                      <td width="493">Mohon    maaf atas ketidaknya nyamanan sebelumnya nya pak , untuk <br>
                                        informasinya saat ini kita Fup terlebih dahulu ya pak , nnt bapak bsa <br>
                                        bantu kita kembali untuk pelaporan nya di call centre kita ya pak di <br>
                                        147 ataupun lebih mudah dari aplikasi myindhomenya pak ..<br>                                      </td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">STB TAMBAHAN</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">Mohon    maaf untuk ketidaknyamanan nya ya Pak/ Bu. Kita pastikan kedepannya hal    tersebut tidak terjadi lagi.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">baik    pak, dsni mohon maaf atas ketidaknya nyamanannya , untuk <br>
                                        informasinya saat ini kita Fup terlebih dahulu ya pak , nnt bapak bsa <br>
                                        bantu kita kembali untuk pelaporan nya di call centre kita ya pak di <br>
                                        147 ataupun lebih mudah dari aplikasi myindhomenya pak ..</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">STB TAMBAHAN</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">mohon    maaf pak atas ketidak nyamananya, jadi pak untk saat ini penambahan dekorder    yang kita berikan sudah bnyak benefit yg bapak dapatkan, misanya, bpk/ ibu    sdh bisa menikmati tayangan yang berbeda di 2 tv, selain itu mislnya pak/bu    dirumh tv tabung itu tdk mslh karena bsa kta setting sprti smart tv, jd kalau    bpak mau streaming youtube, browsing intrnet,fb, atau karokean tdk perlu lg    dari hp/laptop krna smuanya itu sdh bsa bapak nikmati&nbsp; dari tv tabung .&nbsp; jd bapak bsa maksimalkan kedepn senyaman    bapak/ ibu&nbsp;</td>
                                    </tr>
                                    <tr height="147">
                                      <td height="147" width="98">STB TAMBAHAN</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">mohon    maaf atas ketidak nyamanannya bpk/ibu&hellip;untuk kendala indihome nya akan coba    kita bantu lapor agar&nbsp; kedepannya    segera ada perbaikan.. dan kita pastikan untuk produk yg kita tawarkan    merupakan program unggulan krn bpk/ibu dgn keluarga nantinya sudah bisa    menikmati siaran yg berbeda dlm wktu yg bersamaan, sekaligus sudah bisa    internetan langsung dari televisi nya; youtube, streaming video, karokean    langsung dari tv, dgn tambhan decoder hybird sdh berbasis android</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">STB TAMBAHAN</td>
                                      <td width="163">Kecewa    dengan Telkom</td>
                                      <td width="493">baik    pak, dsni mohon maaf atas ketidaknya nyamanannya , untuk <br>
                                        informasinya saat ini kita Fup terlebih dahulu ya pak , nnt bapak bsa <br>
                                        bantu kita kembali untuk pelaporan nya di call centre kita ya pak di <br>
                                        147 ataupun lebih mudah dari aplikasi myindhomenya pak ..<br>                                      </td>
                                    </tr>
                                    <tr height="42">
                                      <td height="42" width="98">STB TAMBAHAN</td>
                                      <td width="163">Sudah    menggunakan provider lain</td>
                                      <td width="493">benefit    : bpk / ibu bisa menonton di 2 televisi sekaligus dengan channel program    useetv yg berbeda dgn kualitas high definisi.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">tarif    diberikan hanya 80 ribu rupiah saja + ppn 10% tidak akan ada penambahan tarif    lagi karena berlaku selama berlangganan, terkecuali jika bapak&nbsp; / ibu ada penambahan paket add on yg    lainnya.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Dikhawatirkan    ada pertanyaan, emang klo pengajuan sendiri berapa? (tdk ada dasarnya).    Sebetulnya tidak mahal Pak, dengan penambahan hanya 80k/bulan bapak sudah    bisa menyaksikan useetv di 2 tv (ruangan berbeda) dengan channel    masing-masing</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Sebenarnya    dengan bapak menambahkan stb ke 2 ini jauh lebih hemat dibanding bapak    mempunyai 2 TV kable, dimana bapak mendapatkan Channel dan Fitur yang sama    dengan Usee TV pertama bapak. Tanpa dikenakan biaya double 2x lipat karna    penambahannya hanya 80k .</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Untuk    tarif biaya instalasi ini sudah termasuk berapapun panjang kabel dan    perapihan , serta hanya di kenakan satu kali pembayaran itupun masuk ke    tagihan pertama bapak, bandingkan bila bapak harus menyiapkan kabel dan    perlengkapan lainnya sendiri, pasti jauh lebih mahal dan merepotkan bapak    sendiri.</td>
                                    </tr>
                                    <tr height="63">
                                      <td height="63" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Karena    ini bukan promo jadi penambahan (sebut nominal penawaran) tetap (tidak naik    dan tidak turun)<br>
                                        Kalau promo hanya beberapa bulan saja, setelah itu tarifnya akan naik.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">bapak    bisa evaluasi /nilai terlebih dahulu untuk programnya namun untuk tarif    (sebutkan tarifnya) sudah mulai berjalan, nanti bapak bisa bandingkan sebelum    dan sesudah pemasangan, karena nanti bapak / ibu sudah banyak mendapatkan    benefit yang kita berikan</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">STB TAMBAHAN</td>
                                      <td>Tarif Mahal</td>
                                      <td width="493">Benar    pak jika untuk tagihan bulan pertama dirasa besar di karenakan ada nya biaya    instalasi yang di tagihkan di bulan 1 sebesar 190 rb , namun jika untuk bulan    ke 2 dan strs nya , bpk sudah di berikan tarif khusus hanya dengan penambahan    80.000 + ppn 10 % setiap bulan nya dan ini bukan tarif promo , berlaku untuk    seterus nya&nbsp;</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Baik    pak, tarif saat ini yang kami berikan cukup hemat tentunya karena bapak tidak    perlu mendaftar 2 nomor indihome. hanya dengan menambahkan 80 rb + ppn 10%    perbulan bapak berhak mendapatkan 1 perangkat useetv dengan paket yang sama    sesuai paket yg terdaftar di indihome bapak, dan sudah bisa menikmati 2    tayangan TV dengan channel yang berbeda dalam waktu yang sama</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Bapak    jangan khawatir karena ini bs dievaluasi&nbsp;&nbsp;    untuk penggunaanya, tapi saya yakin ini sangat bermafaat bagi bapak    dan keluarga, karena sifatnya juga tidak mengikat, senyamannya bapak    berlangganan saja. Tarif penambahan akan mulai ditambahkan di bulan depan.</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Tidak    sayang dilewatkan penawarannya pak,&nbsp;    krna&nbsp; penambahannya hanya&nbsp; 80rb saja plus ppn 10% yg kita berikan tdk    untuk semua pelanggan, dan bpk sekeluarga sudah bisa menikmati useetv    langsung di 2 tv yg berbeda dengan 2 tayangan yg berbeda dan sudah    multifungsi juga sudah bs streaming ,browsing dan karaokean langsung .jadi    penggunaan bapak dan keluarga kedepannya kan sudah jauh lebih nyaman</td>
                                    </tr>
                                    <tr height="189">
                                      <td height="189" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">kita    pastikan programnya sangat efektif buat bpk krn dengan benefit yg akan    bpk/ibu dapatkan nantinya&nbsp; sayang kalau    dilewatkan begitu saja, karena dengan program ini bpk/ibu sudah bisa    menikmati useetvnya di 2 tv sekaligus, bisa menyaksikan tayangan yang berbeda    dalam waktu yg bersamaan,dengan tarif yg cukup hemat dan terjangkau hanya    dengan penambahan 80rb+ppn 10% saja, flat setiap bulannya jika bpk bersedia    berlangganan&nbsp; maka bpk ibu bisa    evaluasi dan bandingkan penggunaanya ,, kami yakin akan sangat bermanfaat    bagi bpk/ibu beserta keluarga..utk tarifnya sendiri sudah mulai ditagihkan    dibulan depan ya pak/bu</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Bapak    / Ibu , khan sayang program nya untuk di lewatkan untuk tarif nya ini sudah    kita berikan dengan tarif khusus, jadi hanya dengan penambahan Rp xx saja +    ppn10% per bulan, dan untuk bulan desember di tagihkann belum penuh ya pak ,    tagihan penuhnya nanti di tagihkan di januari tahun depan...</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td>Tarif Mahal</td>
                                      <td width="493">Baik    pak, tarif saat ini yang kami berikan cukup hemat tentunya karena bapak tidak    perlu mendaftar 2 nomor indihome. hanya dengan menambahkan 80 rb + ppn 10%    bapak berhak mendapatkan 1 perangkat useetv dengan paket yang sama sesuai    paket yg terdaftar di indihome bapak.</td>
                                    </tr>
                                    <tr height="105">
                                      <td height="105" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">Kan    sayang bapak/ibu, ini penawaran hanya untuk pelanggan terpilih telkom saja,    tidak semua pelanggan mendapat penawaran ini. Dan untuk pembayarannya pun    masih dibulan depan ibu/bapak, karnakan sistemnya telkom pakai dulu baru    bayar, jadi ibu/bapak bisa dioptimalkan&nbsp;    untuk penawaran ini Pak/ Bu.</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">baik    pak, dsini kan kalau untuk tarif nya ini sudah kita berikan <br>
                                        dengan tarif khusus, jadi hanya dengan pnmbhan 80rb saja + ppn10% <br>
                                        tapi itu di tagihkan bulan desember ya pak bukan dibullan ini , dan <br>
                                        full nya pun nnt di bulan januari ..</td>
                                    </tr>
                                    <tr height="126">
                                      <td height="126" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">baik    bapak ini program yang kita tawarkan tidak terikat pak, jadi boleh    maksimalkan terlebih dahulu, jika kedepanya bapak merasa kurang nyaman kita    kembalikan lagi ke bapak namun kita yakin pak dgn program yang kita berikan    kedepanya keluarga bapak akan jauh lebih nyaman karena benefit yang kita    berikan saat bermanfaat untuk keluarga bapak, dan tarif yang diberikan hanya    penambahan 80rb / bln&nbsp;</td>
                                    </tr>
                                    <tr height="84">
                                      <td height="84" width="98">STB TAMBAHAN</td>
                                      <td width="163">Tarif    Mahal</td>
                                      <td width="493">baik    pak, dsini kan kalau untuk tarif nya ini sudah kita berikan <br>
                                        dengan tarif khusus, jadi hanya dengan pnmbhan 80rb saja + ppn10% <br>
                                        tapi itu di tagihkan bulan desember ya pak bukan dibullan ini , dan <br>
                                        full nya pun nnt di bulan januari ..</td>
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