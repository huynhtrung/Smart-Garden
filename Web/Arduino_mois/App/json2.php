<?php
require "cont.php";
	
	$query = "SELECT * FROM tblhengio WHERE trangthai=1";
	$thoigian = mysqli_query($connect,$query);
	
	$arrThoiGian = array();
	
	while($row = mysqli_fetch_array($thoigian)){
		$idtime = $row["idtime"];
		$thoigianon = $row["thoigianon"];
		$idtb = $row["idThietBi"];
		array_push($arrThoiGian,new ThoiGian($idtime, $thoigianon,$idtb));
	}
	
	echo json_encode($arrThoiGian);
	
	class ThoiGian{
	var $idtime ;
	var $thoigianon ;
	var $idthietbi;
    function ThoiGian($i, $tgon, $id){
		$this->idtime = $i;
		$this->thoigianon = $tgon;
		$this->idthietbi = $id;
	}
}
?>