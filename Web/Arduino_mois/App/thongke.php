<?php
	require "cont.php";
	$idtb = $_POST["idtb"];
	$tungay = $_POST["tungay"];
	$denngay = $_POST["denngay"];
	
	$query = "SELECT * FROM `tbldieukhien` WHERE idThietBi = '$idtb' and thoigian between '{$tungay}' and '{$denngay}'";
	$logfile = mysqli_query($connect,$query);
	
	
	$arrLogFile = array();
	
	while($row = mysqli_fetch_array($logfile)){
		$id = $row["id"];
		$idtb = $row["idThietBi"];
		$giatri = $row["giatri"];
		$thoigian = $row["thoigian"];
		array_push($arrLogFile,new LogFile($id, $idtb, $giatri, $thoigian));
	}
	
	echo json_encode($arrLogFile);
	
	class LogFile{
		var $id ;
		var $idtb;
		var $giatri ;
		var $thoigian ;
		function LogFile($i, $id, $gt, $tg){
			$this->id = $i;
			$this->idtb = $id;
			$this->giatri = $gt;
			$this->thoigian = $tg;
		}
	}
?>