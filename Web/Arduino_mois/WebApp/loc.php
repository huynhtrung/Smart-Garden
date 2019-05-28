  <?php
include("../App/cont.php");
	if(!empty($_POST['gt2']) && !empty($_POST['gt3']) && isset($_POST['gt']))
{	if(strtotime($_POST['gt3'])>=strtotime($_POST['gt2']))
{
  ?>
<table width="60%" border="1" align="center" style="color:#yellow;background:white;width:100%;">
    <tr style="color:blue; background:yellow; height:25px;">
      
      <td>Trạng Thái</td>
      <td>Thời Gian</td>
	  
    </tr>
    <?php
	
		$logfile =mysqli_query($connect,"SELECT * FROM `tbldieukhien` WHERE (thoigian BETWEEN '{$_POST['gt2']}' AND '{$_POST['gt3']}') and (idThietBi = {$_POST['gt']})");
	
		while($d=mysqli_fetch_array($logfile))
		{
  ?>
    <tr style="height:25px;">
      <td><?php if($d['giatri']==1)echo "<img src='Arduino_mois/image/off.png' width='25' height='25' />"; else echo "<img src='Arduino_mois/image/tuoi.png' width='25' height='25' />"  ;?></td>
      <td style="color:red"><?php echo $d['thoigian'] ;?></td>
    </tr>
    <?php }?>
  </table>

<?php }
else{
	echo "<h2 style='font-weight:bold'>Vui lòng nhập ngày bắt đầu lớn hơn ngày kết thúc.</h2>";

}

}
else{
	echo "<h2 style='font-weight:bold'>Vui lòng nhập ngày đầy đủ.</h2>";

	}?>