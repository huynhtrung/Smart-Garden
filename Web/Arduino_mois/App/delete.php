<?php
require "cont.php";

	$id = $_POST["idtime"];
	$qr = "DELETE FROM tblhengio WHERE idtime='$id'";
	if(mysqli_query($connect,$qr)){
		echo "success";
	}
	else{
		echo "error";
	}

?>