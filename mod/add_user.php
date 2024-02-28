<? 
if (!defined('CPG_NUKE')) { exit; }
$jabatan=trim($userinfo[user_ext3]);
if (($jabatan=='Duktek') || ($jabatan=='SPV Duktek')){
$pagetitle .= "Tambah User";
if ($_POST){extract($_POST);}
require_once('header.php');
include ('konek_msql.php');
 $blnin=array('','JANUARI','FEBRUARI','MARET','APRIL','MEI','JUNI','JULI','AGUSTUS','SEPTEMBER','OKTOBER','NOVEMBER','DESEMBER');
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="styles.css" type="text/css" />
<link href="includes/css/stylenya.css" rel="stylesheet" type="text/css">
<? if($simpan){
	$username = Fix_Quotes($_POST['txtlogin'],1);
	$sql="select user_id from cc147_main_users where username='$username' ";
    $hasil=mysql_query($sql);
    $row=mysql_fetch_row($hasil);
    if($row[0]<>''){$rep="Username Sudah Ada....<br>";}
	else{
	$nama=strtoupper($txtnama);
	$email = Fix_Quotes($_POST['username']."@cctelkom.web.id",1);
	$password = "infomedia";
   $sekarang=date("Y-m-d H:i:s");
   $bulanrek=date("n");
   $tahunrek=date("Y");
   
   	//userCheck($_POST['txtlogin'], $email);
/*	
	$result = $db->sql_query('INSERT INTO cc147_main_users (username, user_email, user_password, user_regdate, user_avatar, name)')
		."VALUES ('$username', '$email', '".md5($password)."', '".gmtime()."', 'gallery/blank.gif', '$nama')";
	
	*/
	
   $sql3='INSERT INTO cc147_main_users (username, user_email, user_password, user_regdate, user_avatar, name,user_allow_pm,user_allow_pm_file)'
		."VALUES ('$username', '$email', '".md5($password)."', '".gmtime()."', 'gallery/blank.gif', '$nama', '$pm', '$pmf')";
   //echo $sql3."<br>";
   if(!mysql_query($sql3)) {$rep="Penambahan cc147_main_users gagal.<br>";}
   
    $sql="select user_id from cc147_main_users where username='$username'";
    $hasil=mysql_query($sql);
    $row=mysql_fetch_row($hasil);
    $id_cc147_main_user=$row[0];
	
   
   $sql4="insert into cc147_main_users_extended (id, user_id, user1,user2,user3,user4,user12,user13) values ('$id_cc147_main_user','$id_cc147_main_user','$txtlogin','$nama','$sjabat','$skelamin','nopict.jpg','AKTIF')";
   if(!mysql_query($sql4)) {$rep="Penambahan cc147_main_users_extended gagal.<br>";}
   //echo $sql4."<br>";

   $sql6="insert into cc147_main_bbuser_group values ('$skelompok','$id_cc147_main_user','0')";
   if(!mysql_query($sql6)) {$rep="Penambahan cc147_main_bbuser_group gagal.<br>";}
   //echo $sql6."<br>";
	$jbt=substr($sjabat,0,5);
	if($jbt=='Agent'){
   $sql7="insert into app_kelompok values ('$blnin[$bulanrek]-$tahunrek','0','$id_cc147_main_user','0','$skelamin','0','$sjabat','auto','$sekarang')";
   //echo $sql7;
   if(!mysql_query($sql7)) {$rep="Penambahan app kelompok gagal.<br>";}
	}	
  
	
   
	if ($sjabat=="Agent 108" || $sjabat=="Agent Komplain" || $sjabat=="Agent Informasi"|| $sjabat=="Agent citilink" || $sjabat=="Agent Inb Sales" || $sjabat=="Agent Out Sales" )
		{
		if ($sjabat=="Agent 108") { $skill=1; }
		if ($sjabat=="Agent Komplain") { $skill=3; }
		if ($sjabat=="Agent Informasi") { $skill=4; }
		if ($sjabat=="Agent Speedy") { $skill=5; } 
		if ($sjabat=="Agent Inb Sales") { $skill=12; }
		if ($sjabat=="Agent Out Sales") { $skill=13; }
		
		if ($sjabat=="Agent Komplain" || $sjabat=="Agent Informasi"){
		dbconnect_echi_dc();}
		else {
		dbconnect_echi();}
		
		$sql="INSERT INTO masteragent (loginid, nama, skill) VALUES ('$txtlogin', '$nama','$skill')";
		mssql_query($sql);
		//echo "$sql<br>";
		if ($sjabat=="Agent Komplain" || $sjabat=="Agent Informasi"){
		dbclose_echi_dc();}
		else {
		dbclose_echi();}
		$koneksi2= mysql_connect('10.112.4.8','root','Admingcc');
		mysql_select_db('maincc147',$koneksi2);
		}
	}
	
	 $txtlogin="";
   $txtnama="";
	
  }
?>
<form name="form1" method="post" action="">
<center>
<h1>Tambah User</h1>
  <table width="75%" border="0" class="forumline">
  
    <tr class="bodylinein"> 
      <td width="32%"><font color="#000000">Login</font></td>
      <td width="68%"><input name="txtlogin" type="text" id="txtlogin" value="<? echo $txtlogin;?>" size="10" maxlength="10"></td>
    </tr>
    <tr class="bodylinein"> 
      <td><font color="#000000">Nama</font></td>
      <td><input name="txtnama" type="text" id="txtnama" value="<? echo $txtnama;?>" size="25"></td>
    </tr>
    <tr class="bodylinein"> 
      <td><font color="#000000">Jabatan</font></td>
      <td> 
        
        <select name="sjabat" id="sjabat"  onChange="document.form1.submit()">
        <? 
        $sql="select distinct(kodejabatan) from app_jabatan order by kodejabatan";
		$hasil=mysql_query($sql);
		while($row=mysql_fetch_array($hasil)){?>
          <option value="<? echo $row[0];?>" <? if($sjabat==$row[0]) echo "SELECTED";?>><? echo $row[0];?></option>
        <? }?>
        </select> </td>
    </tr>
    <tr class="bodylinein"> 
      <td><font color="#000000">Kelamin</font></td>
      <td><select name="skelamin" id="skelamin">
          <option value="Pria" <? if($skelamin=='Pria') echo "SELECTED";?>>Pria</option>
          <option value="Wanita" <? if($skelamin=='Wanita') echo "SELECTED";?>>Wanita</option>
        </select></td>
    </tr>
    
	<? //echo $sjabat;  
	  $jbt=explode(" ",$sjabat);
	  $jbt=$jbt[0];
		if($jbt<>''){?>
	<tr  class="bodylinein"> 
      <td><font color="#000000">User Group</font></td>
      <td><select name="skelompok" id="skelompok" onChange="document.form1.submit()">
	           <? //$sql="select distinct(jabatan) from app_roosterfix where jabatan <>'Agent Kartu As' and jabatan<>'Agent Simpati'";
					if($jbt=="SPV"){$jbt='Supervisor';}
					else if ($jbt=="Duktek"){$jbt='IT';}
                     $sqlk="select group_id, group_name from cc147_main_bbgroups where group_id > '1' and group_name like '%$jbt%' order by group_name";
				     $hasilk=mysql_query($sqlk);
					 while($rowk=mysql_fetch_array($hasilk)){?>
          <option value="<? echo $rowk[0];?>" <? if($skelompok==$rowk[0]) echo "SELECTED";?>><? echo $rowk[1];?></option>
          <? }?>
       </select>
		</td>
    </tr>
	<?
	//echo $sqlk;
	}?>
	<tr  class="bodylinein"> 
		<td><font color="#000000">Allow PM</font></td>
      <td><select name="pm" id="pm">
	      <option value="0" <? if($pm==0) echo "SELECTED";?>>Tidak</option>
		  <option value="1" <? if($pm==1) echo "SELECTED";?>>Ya</option>
       </select>
		</td>
	</tr>
	<tr  class="bodylinein"> 
		<td><font color="#000000">Allow PM File</font></td>
      <td><select name="pmf" id="pmf">
	      <option value="0" <? if($pm==0) echo "SELECTED";?>>Tidak</option>
		  <option value="1" <? if($pm==1) echo "SELECTED";?>>Ya</option>
       </select>
		</td>
	</tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input name="simpan" type="submit" id="simpan" value="Simpan"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><?if (($rep=='') && ($simpan) ){?><font color="blue"><strong>User Sudah Disimpan.</strong></font><?}else{?><font color="#ff0000"><strong><? echo $rep;?></strong></font><?}?></td>
    </tr>
  </table>
  </center>
</form>
<? }else{exit;}?>