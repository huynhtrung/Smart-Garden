<?php ob_start();
include("connection.php");

if(isset($_POST['hengio']))
{
	if($_POST['timepicker']=="")
	{
		echo "vui lòng chọn thời gian";
	}else
	{
	
	$ngay=gmdate("y-m-d h:i:s",time()+07*3600);
	$themhengio="insert into tblhengio values (Null,'{$_POST['timepicker']}',{$_POST['idthietbi']},1)";
	if(mysqli_query($connect,$themhengio))
	{ 
	header("location:../../index.php?key=dongho");}
	else echo "$themhengio";
	}
}

//xóa
if(isset($_GET['idxoa']))
{
	
	
	
	$xoa="Delete from tblhengio where idtime=".$_GET['idxoa'];
	if(mysqli_query($connect,$xoa))
	{
		header("location:../../index.php?key=dongho");
		}
		else echo "Không xóa được";

}
// set do am

       if(isset($_POST["btnTC"]))
        {	
        	if(is_numeric($_POST['txtDoAm']) && $_POST['txtDoAm']<100 && $_POST['txtDoAm']>0 )
        	{
	            $sl='UPDATE tblthietbi SET setdoam='.$_POST["txtDoAm"];
	           if(mysqli_query($connect,$sl))
	           {

	           		header("location:../../index.php");
	           }
	       }
	       else{
	       	
	       	header("location:setdoam.php");
	       }
        }




      ?>
