<style>
	p{text-align:center; }
	#dongho{text-align:center;}
</style>
<div id="dongho">
<form action="Arduino_mois/WebApp/process.php" method="post" name="dongho" >
<div>
  <p class="lead">
    <input id="timepicker" type="time" name="timepicker"/><p class="lead">
    
  </p>
  </div>
  <p>
  	<label for="thietbi">Chọn Thiết Bị :</label>
   	  <select name="idthietbi"  >
      <option value="1">Máy Bơm 1</option>
      <option value="2">Máy Bơm 2</option>
    </select>
  </p>
  <p>
   <!--<input name="hengio" type="submit" value="Hẹn Giờ" />-->
    <button type='sumit' name='hengio' class='btn btn-lg'  style='margin-right:15px; background:#C09; width:150px; color:#FFF;' >Hẹn Giờ</button>
  </p>
  
</form>
</div>
<div >
  <table width="60%" border="1" align="center" style="color:#F00;background:white">
    <tr style="color:blue; background:yellow" >
      
      <td>Thời Gian Bắt Đầu</td>
      <td>Thiết Bị</td>
      <td>Thời Gian</td>
    </tr>
    <?php
		$thoigian=mysqli_query($connect,"select * from tblhengio");
		while($d=mysqli_fetch_array($thoigian))
		{
	?>
    <tr>
      <td><?php echo $d['thoigianon'] ;?></td>
      <td><?php echo $d['idThietBi'] ;?></td>
      <td><a href="Arduino_mois/WebApp/process.php?idxoa=<?php  echo $d['idtime'] ?>"> Xóa </a></td>
    </tr>
    <?php }?>
  </table>

</div>


