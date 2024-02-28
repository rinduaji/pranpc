<?php
require_once("../deft_nav.php");
include("./assets/conn.php"); 
if ($_GET) {extract($_GET,EXTR_OVERWRITE);}
if ($_POST){extract($_POST,EXTR_OVERWRITE);}

$login = $_SESSION['username'];
$nama = $_SESSION['name'];
$jb = $_SESSION["jb"];
$jabatan = $_SESSION["jabatan"];
$tgl=date("Y-m-d");

if($id_kategori != "") {
	// $query="SELECT a.id,a.tgl,a.login,b.user2,b.user5,a.fastel,a.nama_dm,a.tlp,a.jenis,a.`status`,a.valid,a.upd_qco,a.prof_hoby,a.kategori,a.reason,a.ket,a.tapping_decline FROM
    // app_tam_data2 AS a INNER JOIN cc147_main_users_extended AS b ON a.login = b.user1 INNER JOIN cc147_main_users AS c ON a.login=c.username WHERE a.tgl BETWEEN '$tgl 00:00:00' AND '$tgl 23:59:59' AND a.kategori='Not Agree' AND a.`status`='Contacted' $area AND c.qco='$login' GROUP BY a.login ORDER BY a.login, a.tgl ASC";
    $hari =date("d",strtotime($date));
    $bulan =date("m",strtotime($date));
    $tahun =date("Y",strtotime($date));

	$query="
	SELECT h.id_dokumen, h.judul_dokumen, h.file_dokumen, h.id_item, i.nama_item, h.deskripsi, h.kode_dokumen, h.tanggal_berlaku, h.tanggal_verifikasi, j.id_kategori, j.nama_kategori, (COUNT(h.judul_dokumen)-1) as used_version, (COUNT(h.judul_dokumen)-2) as old_version FROM dokumen_upload as h INNER JOIN dokumen_item as i ON h.id_item = i.id_item INNER JOIN dokumen_kategori as j ON i.id_kategori = j.id_kategori 
WHERE i.`status` = 'AKTIF' AND j.`status` = 'AKTIF' AND j.id_kategori = '$id_kategori' GROUP BY j.id_kategori, i.id_item, h.judul_dokumen ORDER BY j.nama_kategori, i.nama_item, h.kode_dokumen ASC, tanggal_berlaku DESC
";
	// print_r($query);
    $no=0;
    $hasil = mysqli_query($con,$query) or die ("Query gagal!");
    $hasil_total = mysqli_num_rows($hasil);

	$query_nama_kategori="
		SELECT * FROM dokumen_kategori WHERE id_kategori='$id_kategori'
	";
	// print_r($query);
    $no=0;
    $hasil_nama_kategori = mysqli_query($con,$query_nama_kategori) or die ("Query gagal!");
	$data_nama_kategori = mysqli_fetch_row($hasil_nama_kategori);
// echo $query;
}
?>

<!doctype html>
<html lang="en">
	<title>App TAM</title>
		<div class="content">
			<div class="container-fluid">
				<div class="row">
			<div class="col-md-12">
				<div class="card card-plain">
					
			
					<form name="demoform" action='report_dokumen.php' method='post' accept-charset='UTF-8'>
						
						<div align="center" class="panel-heading">
                            <b>DOKUMEN</b>
                        </div>
						<div>
						<div class="row row-centered">
						<div align="center" class="col-md-4">
						</div>
						<div align="center" class="col-md-4">
						
						<tr>	
							<div class="form-group">
								
								<label class="control-label" style="color:#008B8B">Kategori Dokumen</label>
								<select  name="id_kategori" class="form-control">	
									<option value=""	>Pilih Kategori Dokumen</option> 
									<?php
									$query_kategori = "SELECT * FROM dokumen_kategori WHERE `status` = 'AKTIF' ORDER BY id_kategori, nama_kategori ASC";
									$hasil_kategori = mysqli_query($con, $query_kategori) or die("Query gagal!");
									while ($data_kategori = mysqli_fetch_array($hasil_kategori)) {
									?>
									<option value="<?=$data_kategori['id_kategori']?>"><?=strtoupper($data_kategori['nama_kategori'])?></option>
									<?php
									}
									?>
								</select>		
								</label>
								
							</div>							
						</tr>
							<tr>
								<input name="search" type="submit" class="btn btn-danger" Value="Search">
								<button name="refresh" type="submit" class="btn btn-primary" onClick="location.href='report_dokumen.php';">Refresh</button>
							</tr>
							
						</tr>
						
						</div>
						</div>
						
						<div >
						<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="header">
									<h4 class="title" style="color:#008B8B">Daftar Dokumen <?=(isset($data_nama_kategori[1])) ? $data_nama_kategori[1] : ''?></h4>
								</div>
								<?php
								if (isset($_POST['search'])){
                                if ($id_kategori=="")
								{  
									echo "<div class=\"alert alert-danger\">Mohon periksa kembali! Agent Site belum dipilih !</div>";
								}
								}
								?>
								<div style="overflow-x:auto;">
									<table class="table align-items-center mb-0">
										<thead>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Dokumen</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Berlaku</th>
											<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Dokumen</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Old Version</th>
											<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Used Version</th>
											<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Verifikasi</th>			
										</thead>
										<tbody>
										<?php
										// $Page = $Page + 1;$jml=0;
										// echo $query;
                                        $no=0;
                                      
										$huruf = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
										$angka = 0;
										$no = 1;
										$nama_item = null;
										$kode_dokumen = null;
										while($data_report_dokumen = mysqli_fetch_object($hasil)) {
										// echo"<tr>
										//     <th align=\"center\" style=\"font-size:10px\">".++$no."</th>
										// 	<th align=\"center\" style=\"font-size:10px\">".$data['lup']."</th>
										// 	<th align=\"center\" style=\"font-size:10px\">".$data['username']."</th>
										// 	<th align=\"center\" style=\"font-size:10px\">".$data['name']."</th>
										// 	<th align=\"center\" style=\"font-size:10px\">".$data['user5']."</th>
                                        //     <th align=\"center\" style=\"font-size:10px\">".$data['jenis']."</th>
										// 	<th align=\"center\" style=\"font-size:10px\">".$data['nilai_total']."</th>
                                        //    ";


										   if(!empty($data_report_dokumen)) {
												//    print_r($data_report_dokumen);
												   if($nama_item == null OR $nama_item != $data_report_dokumen->nama_item) {
													   $nama_item = $data_report_dokumen->nama_item;
												   ?>
												   <tr class="success">
													   <td style="padding: 0.75rem 1.5rem;">
														   <span class="text-secondary text-xs font-weight-bold"><?=$huruf[$angka]?></span>
													   </td>
													   <td colspan="6">
														   <p class="text-xs font-weight-bold mb-0"><?=$data_report_dokumen->nama_item?></p>
													   </td>
												   </tr>
												   <?php
													   $angka++;
													   $no=1;
												   }
												   if(($kode_dokumen == null OR $kode_dokumen != $data_report_dokumen->kode_dokumen)) {
													   $kode_dokumen = $data_report_dokumen->kode_dokumen;
											   ?>
												   <tr class="active">
													   <td style="padding: 0.75rem 1.5rem;">
														   <span class="text-secondary text-xs font-weight-bold"><?=$no?></span>
													   </td>
													   <td>
														   <p class="text-xs font-weight-bold mb-0"><?=$data_report_dokumen->kode_dokumen?></p>
													   </td>
													   <td>
														   <p class="text-xs font-weight-bold mb-0"><?=date("l, d F Y", strtotime($data_report_dokumen->tanggal_berlaku))?></p>
													   </td>
													   <td>
														   <p class="text-center text-xs font-weight-bold mb-0"><?=$data_report_dokumen->judul_dokumen?></p>
													   </td>
													   <td>
														   <p class="text-xs font-weight-bold mb-0"><?=($data_report_dokumen->old_version >= 0 ) ? 'Rev. '.$data_report_dokumen->old_version : ''?></p>
													   </td>
													   <td>
														   <p class="text-xs font-weight-bold mb-0">
																<?php
																if(isset($data_nama_kategori[1])) {
																	if($jabatan != 'Document Control' AND $jabatan != 'Duktek') {
																		if($data_nama_kategori[1] == "Distribusi Formulir") {
																?>
																			<a href="file_document_control/<?=$data_report_dokumen->file_dokumen?>" target="_blank"  class="btn btn-info btn-small" type="button">
																			<i class="fa fa-download"></i>&nbsp;<?=($data_report_dokumen->used_version >= 0 ) ? 'Rev. '.$data_report_dokumen->used_version : ''?>
												   				</a>
																<?php
																		}
																		else {
																?>
																			
																			<a href="view_pdf_document.php?file_document=<?=$data_report_dokumen->file_dokumen?>" target="_blank"  class="btn btn-info btn-small" type="button">
																			Rev. <?=$data_report_dokumen->used_version?>
																			</a>
																<?php
																		}
																	}
																	
																	else {
																		// print_r($jabatan);
																?>
																<a href="file_document_control/<?=$data_report_dokumen->file_dokumen?>" target="_blank"  class="btn btn-info btn-small" type="button">
																			<i class="fa fa-download"></i>&nbsp;<?=($data_report_dokumen->used_version >= 0 ) ? 'Rev. '.$data_report_dokumen->used_version : ''?>
												   				</a>
																<?php
																	}
																}
																?>
														   </p>
													   </td>
													   <td>
														   <p class="text-xs font-weight-bold mb-0"><?=date("l, d F Y", strtotime($data_report_dokumen->tanggal_verifikasi))?></p>
													   </td>
												   </tr>
											   <?php
													   $no++;
												   }
										   }
										   
														echo "</tr>";
													}
													
													?>	
                            
										</tbody>
									</table>
									
								</div>
								<table>
								
								</table>
								</div>
								
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
<script>
// $('#input').change( function() {
//             // var x = $('#input').val();
//             // $('#alasan').prop('disabled','true');
//             // $('#anti_decline').prop('disabled','true');
//             // if(x == 'NOT OK') {
//             //     $('#alasan').removeAttr('disabled');
//             //     $('#anti_decline').removeAttr('disabled');
//             // }
//             // alert(x);
// 			$("#NoOk").toggle();
//         });
$('#myMODAL').on('show.bs.modal', function(event) {
// $('#NoOk').hide();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data('id');
  console.log(ID);
  var STATUS = button.data('status');
  $('input[name="id"]').val(ID);
  $('select[name="status_login"]').val(STATUS);
//   $('#input').change( function() {
//               if(x == 'NOT OK') {
//                 $("#NoOk").show();
//             }
// 			else {
// 				$("#NoOk").hide();
// 			}			
});
</script>
<?php	require_once("../deft_foo.php"); ?>

