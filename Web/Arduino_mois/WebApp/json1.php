<?php
include("../App/cont.php");
$ngay=gmdate("y-m-d h:i:s",time()+07*3600);
//mysql_query("SET NAMES 'utf8'");

$arrdoam=mysqli_query($connect,"SELECT setdoam from tblthietbi where idThietBi=1 ");
$setdoam=mysqli_fetch_array($arrdoam);
$danhsach = mysqli_query($connect,"SELECT giatri, idThietBi FROM tbldieukhien WHERE  (id=(SELECT max(id) FROM tbldieukhien WHERE idThietBi=1)) or (id=(SELECT max(id) FROM tbldieukhien WHERE idThietBi=2))");
$hengio= mysqli_query($connect,"select * from tblhengio where trangthai=1");
$mang = array();
$mang1 = array();
while($d= mysqli_fetch_array($hengio))
{		
//		$idtime = $d["idtime"];
		$thoigian =$d["thoigianon"];
		$idthietbi = $d["idThietBi"];
		
	
		array_push($mang1,new hengio($thoigian,$idthietbi));
//		array_push($mang1,new hengio($idtime,$thoigian));
}
	$str1 = json_encode($mang1);
		$str1 = str_replace( array('[', ']'), array('{"json1":[',']}'), $str1);
	//$str = str_replace('"','\"', $str);
		//echo $str1;

while($row = mysqli_fetch_array($danhsach))
{
		$idtb = $row["idThietBi"];
		$giatri = $row["giatri"];
	
		array_push($mang,new tbdieukhien($idtb, $giatri));
}
	
	$str = json_encode($mang);
	$str = str_replace( array('[', ']'), array('{"json":[',']}'), $str);
	//$str = str_replace('"','\"', $str);
		
			//echo $str1;
			//echo '{"hi":{"yep":"7","yu":"0"},"hallo":{"yep1":"99","yu1":"3"}}';
	//echo $str;
	//$setdoam['setdoam'].'_'.
	echo $setdoam['setdoam'].'/'.$str.'_'.$str1;
	
	class tbdieukhien{
	var $idtb ;
	var $giatri ;
	//var tg;
    function tbdieukhien($itb, $gt){
		$this->idtb = $itb;
		$this->giatri =$gt;
	
	}
	}
	
	//hengio
	class hengio{
	
//	var $idtime;
	var $thoigian ;
	var $idThietBi;

	//var tg;
//    function hengio($id,$tg, $idtb){
	function hengio($tg,$idtb){
//		$this->idtime = $id;
		$this->thoigian = $tg;
		$this->idThietBi = $idtb;
	
	}
	}
	
	if(isset($_GET['cambien1']))
		{
			$cambien1=$_GET['cambien1'];
			//echo $cambien1;
		if($cambien1>=0)
			{
				$sql = "INSERT INTO `tbldoam` VALUES (NULL,1,'$cambien1','$ngay')"; //thực hiện thêm dữ liệu vào cơ sở dữ liệu
				mysqli_query($connect,$sql) or die ("Không thực hiện được câu lệnh: $sql ");

			
		/*	if($cambien1<40)
				{
					$sql1 = "UPDATE  tbldieukhien as dk JOIN (select max(id) as max_id from tbldieukhien where idThietBi=1) as m ON m.max_id=dk.id SET dk.giatri=1,dk.thoigian='$ngay'"; //thực hiện thêm dữ liệu vào cơ sở dữ liệu
					mysqli_query($connect,$sql1) or die ("Không thực hiện được câu lệnh: $sql ");
					
				}
			else
				{
					$sql2 = "UPDATE  tbldieukhien as dk JOIN (select max(id) as max_id from tbldieukhien where idThietBi=1) as m ON m.max_id=dk.id SET dk.giatri=0,dk.thoigian='$ngay'"; //thực hiện thêm dữ liệu vào cơ sở dữ liệu
					mysqli_query($connect,$sql2) or die ("Không thực hiện được câu lệnh: $sql ");
					
				}*/
			}
	}
	if(isset($_GET['cambien2']))
	{
			$cambien2=$_GET['cambien2'];
			//echo $cambien2;
		if($cambien2>=0)
			{
				$sql = "INSERT INTO `tbldoam` VALUES (NULL,2,'$cambien2','$ngay')"; //thực hiện thêm dữ liệu vào cơ sở dữ liệu
				mysqli_query($connect,$sql) or die ("Không thực hiện được câu lệnh: $sql ");
			
			/*if($cambien2<40)
				{
					$sql1 = "UPDATE  tbldieukhien as dk JOIN (select max(id) as max_id from tbldieukhien where idThietBi=2) as m ON m.max_id=dk.id SET dk.giatri=1,dk.thoigian='$ngay'"; //thực hiện thêm dữ liệu vào cơ sở dữ liệu
					mysqli_query($connect,$sql1) or die ("Không thực hiện được câu lệnh: $sql ");
				}
			else
				{
					$sql2 = "UPDATE  tbldieukhien as dk JOIN (select max(id) as max_id from tbldieukhien where idThietBi=2) as m ON m.max_id=dk.id SET dk.giatri=0,dk.thoigian='$ngay'"; //thực hiện thêm dữ liệu vào cơ sở dữ liệu
					mysqli_query($connect,$sql2) or die ("Không thực hiện được câu lệnh: $sql ");
					
				}*/
			}
	}


		
		
?>