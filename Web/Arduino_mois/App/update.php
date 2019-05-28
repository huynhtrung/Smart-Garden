<?php
require "connectLV.php";
if (isset($_POST["action"])){
	$action = $_POST["action"];
}
else{
	$action = null;
}
if($action == "update"){
	$idtb = $_POST["idthietbi"];
	$giatri = $_POST["giatri"];
	$qr = "UPDATE tbldieukhien SET giatri = '$giatri' WHERE idThietBi = '$idtb'";
	mysql_query($qr);
	
	$update = mysql_query($qr);
	if(!$update){
		die('Không điều khiển được : ' . mysql_error());
	}
	else{
		if($giatri == 1){
			echo "Đã bật máy bơm";
		}
		else{
			echo "Đã tắt máy bơm";
		}
	}
}
else{
	echo "ko post dc dữ liệu";
}
?>