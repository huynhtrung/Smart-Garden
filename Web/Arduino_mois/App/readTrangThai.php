<?php
require "cont.php";
$query = "SELECT giatri, idThietBi FROM tbldieukhien WHERE  (id=(SELECT max(id) FROM tbldieukhien WHERE idThietBi=1)) or (id=(SELECT max(id) FROM tbldieukhien WHERE idThietBi=2));";
$data = mysqli_query($connect, $query);

class DieuKhien{
	function DieuKhien($giatri, $idthietbi){
		$this ->GiaTri = $giatri;
		$this ->IdThietBi = $idthietbi;
	}
}

$arrayDK = array();

while($row = mysqli_fetch_assoc($data)){
	array_push($arrayDK, new DieuKhien($row['giatri'], $row['idThietBi']));
}

echo json_encode($arrayDK);
?>