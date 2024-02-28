<?php
$url =$_SERVER['REQUEST_URI'];
$file_url = substr($url, strpos($url, "=") + 1); 
$alamat_file_url = "file_document_control/".urldecode($file_url);
// print_r($alamat_file_url);
// exit();
// header('Content-Type: application/pdf');
// header("Content-Description: inline; filename=\"" . $alamat_file_url . "\"");
// header("Content-Transfer-Encoding: Binary"); 
// header('Accept-Ranges: bytes');

// @readfile($alamat_file_url);
?>
<embed src="<?=$alamat_file_url?>#toolbar=0" width="100%" height="100%">