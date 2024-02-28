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
								  <h4 align="center" class="title"><a href="script_pranpc.php">Script Anti Decline</a></h4>
						    </div>
						    <div style="overflow-x:auto;">
						      <p>&nbsp;</p>
						      <table border="2" cellpadding="0" cellspacing="0">
                                <col width="342">
                                <col width="1009">
                                <tr height="20">
                                  <td rowspan="3" height="190" width="342">1. DECLINE : KEMAHALAN</td>
                                  <td width="1009">Pelanggan :    Saya engga bisa bayar tagihan nya mba soalnya tarif nya terlalu tinggi.</td>
                                </tr>
                                <tr height="51">
                                  <td height="51">Agent : Terkait pembayarannya apabila memang dirasa terlalu berat,    bapak bisa melakukan pembayaran dengan cicilan tidak perlu dibayarkan    sekaligus, namun untuk tagihan bulan pertama harus dibayarkan full ya pak,    kemudian untuk tagihan bulan kedua bisa bapak cicil selama 2 kali, begitu.    Bapak tidak perlu khawatir karna kami akan laukan keringanan terkait    pembayarannya.</td>
                                </tr>
                                <tr height="119">
                                  <td height="119" width="1009">Pelanggan : &ldquo;Saya sudah ada konf dari wa akan    ada teknisi untuk mengambil peralatan, saya mau diputus saja karena paket    kemahalan, masa penggunaan 1P harga 400 lebih&rdquo;<br>
                                      <br>
                                    Agent : &ldquo;Mohon maaf atas ketidak nyamanan sebelumnya. Jika bapak ingin mengaktifkan    kembali layanan Indihomenya kami bantu untuk pengaktifan kembali dengan paket    yang lebih hemat, disini kami rekomendasikan untuk paket Indihome Paket    Retensi 2P Internet Phone - New Internet Fair Usage Speed 10 Mbps - Rp.    190,000 +ppn 10%&rdquo; karna paket ini hanya diberikan kepada pelanggan terpilih    saja pak yang sesuai dengan kriteria pelanggan khusus Telkom, karena dilihat    dari segi pembayaran bapak sebelumnya tepat waktu&rdquo;<br>
                                  </td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="3" height="190">2. DECLINE : SERVICE - GANGGUAN</td>
                                  <td>Pelanggan : Mau cabut    ah soalnya jaringannya juga lambat dan putus-putus terus.</td>
                                </tr>
                                <tr height="51">
                                  <td height="51">Agent : Untuk terkait jaringan yang sering terkendala putus-putus bapak    tidak perlu khawatir karena nanti kami akan bantu laporkan ya Pak untuk    kendala teknis nya, kami akan buatkan catatan agar kendala internet bapak    bisa tersolusikan dan jaringan bisa normal kembali. Sehingga bapak bisa    menikmati Layanan indihome nya dengan lancar. Bagaimana Pak? Jika bapak    bersedia layanan diaktifkan kembali, kami yakinkan jaringan indihome bapak    tidak akan terkendala kembali.</td>
                                </tr>
                                <tr height="119">
                                  <td height="119" width="1009">Pelanggan : &ldquo;jaringannya sering lemot, putus    putus&rdquo;<br>
                                      <br>
                                    Agent : &ldquo;Mohon maaf atas ketidak nyamanannya, jika akan diaktifkan kembali    kami bantu pelaporannya agar didatangkan petugas untuk melakukan pengecekan    dan perbaikan jaringan indihome,<br>
                                    karna untuk saat ini sistem kami sudah diperbaiki dan jaringannyapun sudah    diperbaharui, sehingga kendala inet lambat kami pastikan tidak akan terjadi    kembali<br>
                                    jika pl masih belum yakin<br>
                                    bapak bisa mencobanya kembali layanan indihome kami rekomendasikan paket    dengan harga hemat&rdquo;</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="3" height="428">3. DECLINE : PRICE - TAGIHAN MELONJAK ATAU    TIDAK SESUAI</td>
                                  <td>Pelanggan : Gamau    lanjut ah langganan indihome nya soalnya kemarin tagihannya tiba tiba mahal.</td>
                                </tr>
                                <tr height="85">
                                  <td height="85">Agent : Untuk terkait tagihannya itu kami cek ada tambahan paket yang    bapak ambil pak sehingga bertambah tagihannya. Untuk terkait paket    tambahannya akan di teruskan atau tidak? Apabila tidak maka nanti kami akan    bantu bapak untuk kami pilihkan paket penawaran indihomme yang lebih    terjangkau pak. Karena bapak tidak lagi menggunakan UseeTV nya, maka kami    akan tawarkan paket Telepon dan Internet Only pak bagaimana? Kami cek ada    paket yang tersedia yaitu Indihome Paket Retensi 2P Internet Phone - New    Internet Fair Usage Speed 10 Mbps- Rp. 190.000, selain lebih murah, untuk    internet nya juga bisa bapak nikmati kembali, karena apabila cabut indihome    dan kedepannya bapak ingin berlangganan kembali, maka bapa harus melakukan    pasang baru dimana akan ada biaya instalasi pemasangan baru nya, begitu Pak.</td>
                                </tr>
                                <tr height="323">
                                  <td height="323" width="1009">Pelanggan : &ldquo;Harganya semakin naik. Billing    saya kok 2 buln? Pdahal kn saya hanya memakai 1 bula saja?&rdquo;<br>
                                    Agent :&ldquo;Mohon maaf atas ketidak nyamanan sebelumnya bu, disini kami bantu    untuk penjelasan tagihan munculnya ya bu. Untuk billing yang muncul saat ini    billing bulan mei dan juni itu untuk penggunaan bulan april dan mei<br>
                                    , karna sistem billing telkom pakai dulu baru bayar atau pasca bayar, jadi    penggunaan april billingnya muncul ditanggal 3 bulan mei dan penggunaan mei    billing akan muncul di bulan 3 juni&rdquo;<br>
                                    *jika pl masih keberatan, infokan pemasangan awal <br>
                                    &ldquo;pemasangan awal bapak pada bulan april, kemudian langsung aktif dan dapat    digunakan hingga bulan mei tanggal 20, saat jatuh tempo pada tanggal 21 kami    isolir sementara sampai menunggu pembayaran.<br>
                                    *info pl juni tidak ada penggunaan<br>
                                    &ldquo;Betul bapak dalam data kami memang pada bulan juni tidak ada penggunaan,    karena billing yang muncul pada bulan juni adalah penggunaan bapak taufik    dari tanggal 1 mei sampai dengan tanggal 20 mei<br>
                                    *info pl melakukan pembayaran di awal<br>
                                    jelaskan sistem deposit<br>
                                    pada awal pemasanagan, memang kami kenakan pembayaran diawal sebesar harga    paket, sebagai deposit awal<br>
                                    deposit akan bisa di ambil atau kami kembalikan ketika ada pelaporan    pemutusan (caps)<br>
                                    namun pada saat ini billing bapak sudah memasuki 2 bulan sehingga sistem    kami terbaca pemblokiran dan deposit bapak taufik saat ini sudah termasuk    pada pembayaran di bulan mei<br>
                                    billing bapak taufik pada bulan mei sudah termasuk biaya instalasi, sudah    terpotong biaya deposit&rdquo;<br>
                                  </td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="2" height="88">4.    DECLINE : PELANGGAN MELAKUKAN EFISIENSI</td>
                                  <td>Pelanggan : Saya mau    cabut ajalah indihome nya soalnya lagi WFH gini kan pemasukan juga kurang,    paling nanti saya mau pasang lagi kalau udah engga WFH.</td>
                                </tr>
                                <tr height="68">
                                  <td height="68">Agent : Ibu kami sarankan untuk paket indihome nya tetap diaktifkan ya    karena apabila ibu akan melakukan pencabutan dahulu kemudian nanti akan    pasang kembali akan dikenakan biaya pemasangan baru. Lebih baik apabila ibu    pilih paket yang lebih terjangkau dan kami sesuaikan dengan kebutuhannya,    karena disini kami cek ibu gunakan internet nya saja bagaimana kalau ibu    gunakan paket single play retensi untuk internet 10 mbps satu bulan dengan    biaya 170 ribu rupiah, selain bisa digunakan saat WFH, ibu tidak perlu    melakukan pasang baru untuk kedepannya.</td>
                                </tr>
                                <tr height="20">
                                  <td rowspan="2" height="105">5. DECLINE :    Pindah Kompetitor</td>
                                  <td>Pelanggan : Saya mau    pindah ke provider lain mba soalnya indihome kemarin jaringannya jelek dan    kemahalan.</td>
                                </tr>
                                <tr height="85">
                                  <td height="85">Agent : Bapak untuk Indihome ini kami selalu berusaha memberikan    pelayanan terbaik untuk pelanggan kami. Untuk terkait keluhan jaringan, bisa    dibantu agar bisa normal kembali, kami akan laporkan kendala agar indihome    bapak segera diperbaiki jadi tidak perlu khawatir ya kami jamin akses    internet nya bisa lancar kembali pak, dan untuk paket keberatannya seperti    apa pak? Apabila memang ingin downgrade bisa pak, nanti akan kami bantu    pilihkan paket-paket khusus indihome nya ya. Yang bisa dijangkau juga biaya    nya untuk bapak, karena sayang pak apabila bapak ganti ke provider lain harus    ada biaya pemasangan di awal, sedangkan apabila lanjut berlangganan paket    indihome, tidak perlu bapak ada biaya pasang baru instalasi nya ya Pak.</td>
                                </tr>
                                <tr height="160">
                                  <td height="160">6. DECLINE : TIDAK DIPAKAI</td>
                                  <td width="1009">Pelanggan    : &ldquo;Internet itu akan diputus sementara karna untuk kosan, jadi tidak    digunakan&rdquo;<br>
                                    Agent : &ldquo;Baik pak, jika akan digunakan untuk sementara dan akan diaktifkan    kembali IndiHomenya kami berikan saran untuk sementara bapak bisa menggunaan    pake prepaid seharga 30rb sudah incloud telpon dan inet 10m 10gb&rdquo;<br>
                                    &ldquo;jika bapak akan diputuskan semantara dalam waktu yang lama, maka harus    melakukan pemutusan sementara ke plasa dengan membawa fotocopy ktp dan    perangkatnya dikembalikan, kemudian ketika pemasangan kembali akan dikenakan    instalasi dan pengecekan slot. Jadi disini kami bantu untuk pergantian paket    sementara sehinggak ketika bapak ingin diaktifkan kembali dengan paket yang    sama dengan sebelumnya tinggal konfirmasi ke plasa telkom atau 147 untulk    pelaporannya, dan tidak terkena biaya instalasi ulang kembali&rdquo;<br>
                                  </td>
                                </tr>
                                <tr height="120">
                                  <td height="120">7. DECLINE :    KENDALA KEUANGAN</td>
                                  <td width="1009">Pelanggan    : &ldquo;udah nggak kebayar mbak, buat makan aja susah&rdquo;<br>
                                    Agent : &ldquo;Namun bapak ada rencana akan diaktifkan kembali?&rdquo;<br>
                                    Bapak tidak perlu khawatir untuk biaya tunggakan bapak saat ini akan kami    beri keringanan, tunggakan bapak dapat di berikan penghapusan denda, sehingga    bapak akan membayar tunggakannya secara prorata. Dengan cara kami bantu    pelaporan aktifasi by sistem, kemudian bapak bisa alngsung mengunjungi plasa    Telkom untuk proses pembayaran secara prorata<br>
                                  </td>
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