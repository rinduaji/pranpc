<!--   Additional CSS Script   -->
<style>
.form-control {
  border: 1px solid 	#4682B4;
}
</style>

<?php  ?>

<!--   Additional JS Script   -->
<script type="text/javascript">

	$(document).ready(function() {
		demo.initChartist();

		$(".add-more").click(function(){ 
			var html = $(".copy").html();
			$(".after-add-more").after(html);
		});

		$("body").on("click",".remove",function(){ 
			$(this).parents(".control-group").remove();
		});

	});
	
	$(function(){
		var sPath = window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$('a[href="'+ sPage +'"]').parent().addClass('active');
	});

</script>

<script>
	$( function() {
		$( "#datepicker" ).datepicker({
			autoclose: true,
			dateFormat: "dd-mm-yy",
			minDate: "-5d", maxDate: "30d"
		});
	});
</script>

<script>
	$( function() {
		$( "#datepicker_start" ).datepicker({
			autoclose: true,
			dateFormat: "yy-mm-dd",
			minDate: "-5d", maxDate: "-1d"
		});
	});
</script>
<script>
	$( function() {
		$( "#datepicker_end" ).datepicker({
			autoclose: true,
			dateFormat: "yy-mm-dd",
			minDate: "-5d", maxDate: "-1d"
		});
	});
</script>

<!--   Additional PHP Function   -->
<?php
function kekata($x) {
    $x = abs($x);
    $angka = array("", "satu", "dua", "tiga", "empat", "lima",
    "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($x <12) {
        $temp = " ". $angka[$x];
    } else if ($x <20) {
        $temp = kekata($x - 10). " belas";
    } else if ($x <100) {
        $temp = kekata($x/10)." puluh". kekata($x % 10);
    } else if ($x <200) {
        $temp = " seratus" . kekata($x - 100);
    } else if ($x <1000) {
        $temp = kekata($x/100) . " ratus" . kekata($x % 100);
    } else if ($x <2000) {
        $temp = " seribu" . kekata($x - 1000);
    } else if ($x <1000000) {
        $temp = kekata($x/1000) . " ribu" . kekata($x % 1000);
    } else if ($x <1000000000) {
        $temp = kekata($x/1000000) . " juta" . kekata($x % 1000000);
    } else if ($x <1000000000000) {
        $temp = kekata($x/1000000000) . " milyar" . kekata(fmod($x,1000000000));
    } else if ($x <1000000000000000) {
        $temp = kekata($x/1000000000000) . " trilyun" . kekata(fmod($x,1000000000000));
    }     
        return $temp;
}
 
 
function terbilang($x, $style=4) {
    if($x<0) {
        $hasil = "minus ". trim(kekata($x));
    } else {
        $hasil = trim(kekata($x));
    }     
    switch ($style) {
        case 1:
            $hasil = strtoupper($hasil);
            break;
        case 2:
            $hasil = strtolower($hasil);
            break;
        case 3:
            $hasil = ucwords($hasil);
            break;
        default:
            $hasil = ucfirst($hasil);
            break;
    }     
    return $hasil;
}

session_start();

if (!isset($_SESSION['username'])) {header("Location: ../index.html");}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 72000)) {
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	header("Location:../index.php");
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>