<?php
	require "cont.php";
	$idtb = $_POST['idtb'];
	$giatri = $_POST['giatri'];
	$thoigian = $_POST['thoigian'];
	
	$query = "INSERT INTO tbldieukhien VALUES(null, '$giatri', '$idtb', '$thoigian')";
	
	if(mysqli_query($connect,$query)){
		echo "success";
	}else{
		echo "error";
	}
?>