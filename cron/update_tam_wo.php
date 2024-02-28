<?php
$con_158=mysqli_connect("10.194.176.158","appdev","appdev123","pranpc");

$date = date("Y-m-d");
$date_yesterday = date("Y-m-d", strtotime("-1 days"));

$query1 = "update app_wo_profilling set tgl_upload='$date' where tgl_upload='$date_yesterday' and status ='0' and lup is null";
mysqli_query($con_158, $query1);