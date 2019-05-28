<?php
	include ("../App/cont.php");
	?>
						<tr > 
                                  <?php 


								
								$doam=mysqli_query($connect,"SELECT * FROM tbldoam WHERE idThietBi=1 ORDER BY id DESC LIMIT 0,1");
								$d=mysqli_fetch_array($doam);
								
							?>
                                	<td style="padding-right:100px" > 
                                    	<b style="color:green;font-size:30px;">CẢM BIẾN 1:</b>&nbsp; <?php echo $d['giatri'] ?>
                                    <img src="Arduino_mois/image/icon_doam.png" width="70" height="100"/></td>
                              
                                                <?php 
								$doam=mysqli_query($connect,"SELECT * FROM tbldoam WHERE idThietBi=2 ORDER BY id DESC LIMIT 0,1");
								$d1=mysqli_fetch_array($doam);
								
							?>
                            
                                	<td > 
                                    	<b style="color:green; font-size:30px;">CẢM BIẾN 2:</b>&nbsp;<?php echo $d1['giatri'] ?>
                                    <img src="Arduino_mois/image/icon_doam.png" width="70" height="100"/></td>
                
                              </tr>
