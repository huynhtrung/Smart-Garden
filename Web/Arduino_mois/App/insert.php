<?php
require "cont.php";

	$thoigianon = $_POST["thoigianon"];
	$idtb = $_POST["idtb"];
	$trangthai = $_POST["trangthai"];
	$qr = "INSERT INTO tblhengio VALUES(null,'$thoigianon','$idtb','$trangthai')";
	if(mysqli_query($connect,$qr)){
		echo "success";
	}
	else{
		echo "error";
	}
?>