<?php
require "cont.php";
	$query = "SELECT setdoam, name, giatri, thoigian, setDOAM FROM tbldoam inner join tblthietbi ON tbldoam.idThietBi = tblthietbi.idThietBi 
WHERE  (tbldoam.id=(SELECT max(tbldoam.id) FROM tbldoam WHERE idThietBi=1)) or (tbldoam.id=(SELECT max(tbldoam.id) FROM tbldoam WHERE idThietBi=2));";
	
	$doam = mysqli_query($connect,$query);
	$arrDoAm = array();
	
	while($row = mysqli_fetch_array($doam)){
		$id = $row["name"];
		$giatri = $row["giatri"];
		$thoigian = $row["thoigian"];
		$setdoam = $row["setdoam"];
		array_push($arrDoAm,new DoAm($id, $giatri, $thoigian, $setdoam));
	}
	
	echo json_encode($arrDoAm);
	
	class DoAm{
	var $id ;
	var $giatri ;
	var $thoigian ;
	var $setdoam;
    function DoAm($i, $gt, $tg, $da){
		$this->id = $i;
		$this->giatri = $gt;
		$this->thoigian = $tg;
		$this->setdoam = $da;
	}
}
?>