  <?php
include("../App/cont.php");
  if(isset($_POST['gt']))
	{
		$gt=$_POST['gt'];
		
  ?><table width="60%" border="1" align="center" style="color:#yellow;background:white;width: 100%;">
    <tr style="color:blue; background:yellow; height:25px;">
      
      <td>Trạng Thái</td>
      <td>Thời Gian</td>
	  
    </tr>
    <?php
	
		$query ="SELECT * FROM `tbldieukhien` WHERE idThietBi = '$gt' ORDER BY id DESC LIMIT 0,10";
		$logfile = mysqli_query($connect,$query);
		while($d=mysqli_fetch_array($logfile))
		{
	?>
    <tr style="height:25px;">
      <td><?php if($d['giatri']==1)echo "<img src='Arduino_mois/image/off.png' width='25' height='25' />"; else echo "<img src='Arduino_mois/image/tuoi.png' width='25' height='25' />"  ;?></td>
      <td style="color:red"><?php echo $d['thoigian'] ;?></td>
    </tr>
    <?php }?>
  </table>
	<?php }?>

