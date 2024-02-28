<?php
require_once("../deft_nav.php");
include("../assets/conn.php"); 
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
								  <h4 align="center" class="title"><a href="script_retensi.php">Script Offering Retensi </a></h4>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
					          <table border="3" cellpadding="0" cellspacing="0">
                                <col width="129">
                                <col width="705">
                                <col width="446">
                                <tr height="20">
                                  <td height="20" width="129"><div align="center"><strong>FLOW</strong></div></td>
                                  <td width="705"><div align="center"><strong>SCRIPT</strong></div></td>
                                  <td width="446"><div align="center"><strong>KETERANGAN</strong></div></td>
                                </tr>
                                <tr height="262">
                                  <td height="262" width="129">Salam pembuka</td>
                                  <td width="705">Selamat    Pagi/Siang/Sore.<br>
                                      <br>
                                    Perkenalkan dengan saya (nama agent) dari Telkom    Indonesia <br>
                                    <br>
                                    Terhubung ke no ponsel:<br>
                                    Benar&nbsp; saya terhubung di no    telepon(jika tidak ada no telepon sebutkan no internet)&nbsp; xxx xxxxx, atas nama (title) (nama tertera    di aplikasi)?<br>
                                    Maaf, dengan bapak/ibu siapa saya berbicara?<br>
                                    Terhubung ke hp pelanggan:<br>
                                    Benar saya berbicara dengan bapak/ ibu (nama pelanggan)? Selaku pemilik    dari no telepon xxx xxxxx<br>
                                    <br>
                                    Jika langsung terhubung dengan pemilik telepon, maka lanjut ke step    berikutnya<br>
                                    <br>
                                    Jika tidak terhubung dengan pemilik<br>
                                    Baik pak/ bu, boleh saya terhubung dengan penanggung jawab untuk nomor    telepon (sebutkan no telp)?<br>
                                    <br>
                                    Konfirmasi alamat pelanggan<br>
                                    Alamat ibu/bapak di jalan..... kota....?</td>
                                  <td width="446">&nbsp;</td>
                                </tr>
                                <tr height="346">
                                  <td height="346" width="129">Penawaran</td>
                                  <td width="705">Dalam    data kami layanan internet bapak/ibu sedang tidak aktif, dan masi ada    tunggakan yang belum terbayar bulan xxx dan bulan xxx? Mohon informasi alasan    belum terbayarnya dan kapan akan membayar tunggakan?<br>
                                      <br>
                                    Apakah layanan internet bapak/ibu bersedia diaktifkan    kembali? <br>
                                    (Tunggu respon pelanggan)<br>
                                    <br>
                                    Jika Pelanggan berminat dan menjawab    &quot;ya&quot; : <br>
                                    bapak/ibu&nbsp; silahkan melunasi tagihan    yang belum terbayar sebesar xxx di bulan x dan sebesar xxx dibulan x, dan    layanan internet akan secara otomatis aktif kembali setalah bapa/ibu    melakukan pembayaran.<br>
                                    &quot;apakah ibu/bapak bersedia untuk membayarkan tagihan dan tetap    berlangganan indihomenya?&quot;<br>
                                    jika jawaban pelanggan &quot;ya&quot;<br>
                                    (Lanjut ke flow kontrak berlangganan)<br>
                                    <br>
                                    jika pelanggan menolak:<br>
                                    mohon tanyakan alasannya <br>
                                    <br>
                                    jika alasannya terkait keberatan biaya silahkan    diberikan kebijakan keringanan pembayaran(bebas denda, diskon 5-10%).<br>
                                    <br>
                                    &quot;saat ini ibu/bapak memiliki tagihan yang belum terbayar sebesar xxx    di bulan x dan sebesar xxx dibulan x. kami berikan keringanan pembayaran    (bebas denda atau diskon 5-10%) dengan jangka waktu 2 hari kedepan dan    ibu/bapak harus lakukan pembayaran di plasa telkom agar mendapatkan    keringanan tersebut&quot;<br>
                                    lanjut tanyakan ketersediaan pelanggan <br>
                                    &quot;apakah ibu/bapak bersedia untuk membayarkan tagihan dan tetap    berlanggan indihomenya?&quot;<br>
                                    jika jawaban pelanggan &quot;ya&quot;<br>
                                    maka lanjut disclaimer&nbsp; <br>
                                    <br>
                                    <br>                                  </td>
                                  <td width="446">keringanan    pembayaran : bebas denda, diskon max 5-10%,bebas denda+diskon max5-10%.</td>
                                </tr>
                                <tr height="190">
                                  <td height="190" width="129">Penawaran</td>
                                  <td width="705">jika    alasannya terkait keberatan dengan tarif paket sebelumnya silahkan    diberikan kebijakan retensi paket ke tarif yang lebih murah namun cek ke    tarif yang lebih dekat dengan tarif sebelumnya, atau paket dan fasilitas yang    sama namun dengan tarif yang lebih rendah dari yang sebelumnya.<br>
                                      <br>
                                    &quot;saat ini ibu/bapak memiliki tagihan yang belum terbayar sebesar xxx    di bulan x dan sebesar xxx dibulan x. jika ibu/bapa keberatan dengan paket    yang sebelumnya saat ini kami berikat paket yang lebih hemat dari tarif yang    sebelumnya. dengan nama paket xx dengan tarif xx plus ppn 10% di setiap    bulannya&quot;<br>
                                    lanjut tanyakan ketersediaan pelanggan <br>
                                    &quot;apakah ibu/bapak bersedia untuk    membayarkan tagihan dan tetap berlangganan indihomenya?&quot;<br>
                                    jika jawaban pelanggan &quot;ya&quot;<br>
                                    maka lanjut disclaimer<br>
                                    <br>
                                    &nbsp; <br>
                                    Jika pelanggan menolak, lanjut ke flow decline<br>                                  </td>
                                  <td width="446">&nbsp;</td>
                                </tr>
                                <tr height="412">
                                  <td height="412" width="129">Decline</td>
                                  <td width="705">Tanyakan    alasan pelanggan menolak:<br>
                                    Mohon maaf pak/ bu (nama pelanggan) bisa diinformasikan alasan kenapa    bapak/ ibu belum bersedia untuk mengaktifkan kembali layanan    Indihomenya?<br>
                                    <br>
                                    Jika pelanggan menolak:<br>
                                    (karena kemahalan)&nbsp; <br>
                                    Bpk/ibu langsung direkomendasikan dengan tarif khusus, kami pastikan tidak    akan ada penambahan biaya dibulan selanjutnya selama ibu/bp berlangganan <br>
                                    &nbsp;<br>
                                    (karena gangguan)<br>
                                    MOHON MAAF ATAS KETIDAKNYAMANANNYA<br>
                                    Untuk terkait jaringan yang sering terkendala putus-putus bapak/ibu tidak    perlu khawatir karena nanti kami akan bantu laporkan ya Pak/bu untuk kendala    teknis nya. <br>
                                    <br>
                                    <br>
                                    (karena tidak dipakai)<br>
                                    Tawarkan kemudahan bebas denda, jika masi menolak tawarkan kemudahan    lainnya (contoh bebas denda + diskon10%),prorata(liat pemakaian dulu di    pcf).Kemudian bapak bisa langsung mengunjungi plasa Telkom untuk melakukan    pembayaran seperti yang telah kami tawarkan. <br>
                                    <br>
                                    (karena caps)<br>
                                    Bapak/ibu kapan melakukan pelaporan caps?(agent cek data di mycx apakah ada    pelaporan atau tidak)Jika tidak tawarkan kembali seperti diatas. jika sudah    ada dan perangkat sudah dikembalikan. Arahkan pelaporan melalui 147 atau ke    plasa. (jika perangkat masi ada lanjut ke kolom sebeleh kiri)</td>
                                  <td width="446">Baik    dipastikan kembali apakah benar bapa ingin berhenti berlanggganan ? <br>
                                    *jika pertanyaan pelanggan *ya**<br>
                                    <br>
                                    *jika perangkat sudah di ambil petugas*<br>
                                    saat ini karena kami melihat masih ada sisa tunggakan bapa selama (jumlah    bulan) sebesar (jumlah tunggakan) maka dari itu bapa bisa langsung ke plasa    telkom untuk melunasi pembayarannya.<br>
                                    <br>
                                    *jika perangkat masih lengkap dan blm di ambil    petugas*<br>
                                    saat ini karena kami melihat masih ada sisa tunggakan bapa/ibu selama    (jumlah bulan) sebesar (jumlah tunggakan) maka dari itu bapa/ibu bisa    langsung ke plasa telkom untuk mengembalikan perangkat modem,stb serta    melunasi pembayarannya<br>
                                    <br>
                                    *jika perangkat sudah di kembalikan namun    pelanggan sudah pindah rumah namun bersedia membayar tunggakan*<br>
                                    baik saat ini jika perangkat sudah di kembalikan kami infokan bapa/ibu    masih mempunyai sisa tunggakan bapa/ibu selama (jumlah bulan) sebesar (jumlah    tunggakan) maka dari itu bapa/ibu bisa langsung melunasi pembayaran dengan    cara di jemput bayar oleh tim kami pak, boleh di infokan di alamat mana kami    bisa menjemput pembayaran ?<br>
                                    <br>
                                    *jika perangkat masih dirumah namun pelanggan    tidak mau membayar tunggakan*<br>
                                    <br>
                                    baik jika ingin berhenti berlangganan, namun karena masih ada tunggakan    bapak/ibu selama (jumlah bulan) sebesar (jumlah tunggakan) maka dari itu    bapak/ibu bisa langsung melunasi pembayarannya, karena jika tidak segera di    lunasi pihak telkom akan tetap menghubungi sampai ada pembayaran untuk    tunggakannya pak/bu.<br>
                                    dan jika tidak segera di lunasi akan di limpahkan ke pihak ketiga.</td>
                                </tr>
                                <tr height="256">
                                  <td height="256" width="129">Baca kontrak berlangganan</td>
                                  <td width="705">Baik    saya pastikan kembali bahwa Bapak/ ibu.<br>
                                    Pada hari ini (sebutkan nama harinya) (tanggal) (bulan) (tahun), bapak/ ibu    (nama pelanggan)&nbsp; selaku penanggung    jawab nomor telepon (sebutkan nomor telepon pelanggan lengkap dengan kode    area), atas nama pelanggan (penanggung jawab jika bukan yang bersangkutan).    Telah bersedia untuk berlangganan kembali layanan telkom / layanan    IndiHomenya dengan (paket retensi secara detail dengan jenis paket,    kecepatan,benefit,tarif serta ppn 10%). Serta bersedia membayar tunggakan    sebesar (jumlah tunggakan) dan    diberikan kebijakan (bebas denda,diskon) dengan cara pembayaran di plasa pada    tanggal (xx )<br>
                                    <br>
                                    Sebagai bukti legalitas&nbsp; percakapan    ini direkam oleh Telkom , disini kami konfirmasi ulang,Konfirmasi nomor HP    pelanggan/penanggung jawab<br>
                                    <br>
                                    Tanya nomor HP pelanggan<br>
                                    Untuk maaf bu/pak ada nomor lain yang selalu aktif? <br>
                                    Jika ada.&nbsp; Mohon maaf bisa disebutkan bu/pak?<br>
                                    (sebutkan kembali nomor yang diinfokan pelanggan)<br>
                                    Terimakasih untuk multi kontaknya.<br>
                                    <br>
                                    Jika tidak, (sebutkan nomor yang terdaftar)<br>
                                    <br>
                                    <br>                                  </td>
                                  <td width="446">Wajib    untuk kontrak:<br>
                                    Wajib!<br>
                                    - Hari, tanggal, bulan dan tahun<br>
                                    - Nama pelanggan<br>
                                    - Nomor fastel<br>
                                    - Alamat<br>
                                    - Penanggung jawab (jika bukan pelanggan yang bersangkutan)<br>
                                    - Telah setuju berlangganan<br>
                                    - Nama paket, tarif, benefit serta ppn 10%<br>
                                    - Tunggakan <br>
                                    - Multi kontak<br>
                                    - Percakapan direkam sebagai bukti legatitas <br>                                  </td>
                                </tr>
                                <tr height="173">
                                  <td height="173" width="129">Salam penutup</td>
                                  <td width="705">Closing    agree<br>
                                      <br>
                                    Apakah informasi yang kami sampaikan sudah cukup jelas&nbsp; atau ada pertanyaan yang ingin ditanyakan    bu/pak?<br>
                                    <br>
                                    Kami tunggu kedatangan ibu/bapak di plasa Telkom paling lambat 2 hari    kedepan untuk pembayaran agar bisa digunakan&nbsp;    kembali layanan internetnya.<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) telah bersedia berlanggan kembali    IndiHomenya. Semoga bermanfaat<br>
                                    Selamat pagi/siang/malam pak/ bu (nama pelanggan).Selamat beraktifitas    kembali.</td>
                                  <td width="446">Closing    decline<br>
                                      <br>
                                    baik jika ingin berhenti berlangganan, namun karena masih ada tunggakan    bapa/ibu selama (jumlah bulan) sebesar (jumlah tunggakan) maka dari itu    bapa/ibu bisa langsung melunasi pembayarannya, karena jika tidak segera di    lunasi pihak telkom akan tetap menghubungi sampai ada pembayaran untuk    tunggakannya pa/bu.<br>
                                    dan jika tidak segera di lunasi akan di limpahkan ke pihak ketiga.<br>
                                    <br>
                                    Terimakasih Pak/Bu (nama pelanggan) atas waktunya<br>
                                    Selamat pagi/siang/malam pak/ bu (nama pelanggan)</td>
                                </tr>
                              </table>
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