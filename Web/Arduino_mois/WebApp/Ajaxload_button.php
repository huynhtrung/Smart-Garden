<?php
	include ("../App/cont.php");
    
                      	?>
<tr>
                      <td align="center" valign="middle">
                <form method="post" >
					
                          <?php
                            $doam=mysqli_query($connect,"SELECT * FROM tbldoam WHERE idThietBi=1 ORDER BY id DESC LIMIT 0,1");
                            $d1=mysqli_fetch_array($doam);

                           $sldoam="SELECT setdoam FROM tblthietbi where idThietBi=1";
                           $doam = mysqli_query($connect, $sldoam) or die ("Không th?c hi?n đư?c câu l?nh: $sql ".mysql_error());
                          $da = mysqli_fetch_array($doam);

                          $sql = "SELECT * FROM tbldieukhien WHERE idThietBi=1 ORDER BY id DESC LIMIT 0,1";
                            $ketqua = mysqli_query($connect, $sql) or die ("Không th?c hi?n ðý?c câu l?nh: $sql ".mysql_error());
                        $dong = mysqli_fetch_array($ketqua);
                              $trangThaiMOIS1 = $dong['giatri'];
                      
                          if($trangThaiMOIS1 == 1){
                              echo "<button type='sumit' name='btnMOIS1' class='btn btn-lg btn-info' style='margin-right:15px'>Hệ Thống 1 ON</button>";
                              
                               if($d1['giatri']<$da['setdoam'])
                                {
                                                  echo " <img src='Arduino_mois/image/online.png' width='25px' height='25px'  />  ";
                                }
                                else{
                                  
                                    echo " <img src='Arduino_mois/image/tat.png' width='25px' height='25px'  /> ";
                                  }
                                               
                         }else{
                            
                             echo "<button type='sumit' name='btnMOIS1' class='btn btn-lg btn-danger' style='margin-right:15px'>Hệ Thống 1 OFF</button><img src='Arduino_mois/image/tat.png' height='25px' width='25px' />  ";
                          
                                  
              
                         }
                          ?>
                        
                       </form>
                   </td>
                      <td align="center" valign="middle">
                          <form method="post">
                          <?php
                              $doam=mysqli_query($connect,"SELECT * FROM tbldoam WHERE idThietBi=2 ORDER BY id DESC LIMIT 0,1");
                              $d2=mysqli_fetch_array($doam);


                           $sql = "SELECT * FROM tbldieukhien WHERE idThietBi=2 ORDER BY id DESC LIMIT 0,1 ";
                            $ketqua = mysqli_query($connect, $sql) or die ("Không th?c hi?n ðý?c câu l?nh: $sql ".mysql_error());
                          	$dong = mysqli_fetch_array($ketqua);
                              $trangThaiMOIS2 = $dong['giatri'];
                          if($trangThaiMOIS2 == 1){
                              echo "<button type='sumit' name='btnMOIS2' class='btn btn-lg btn-info' style='margin-right:15px'>Hệ Thống 2 ON</button>";
                                
                             
                                    if($d2['giatri']<$da['setdoam']) 
                                    {
                                                      echo " <img src='Arduino_mois/image/online.png' width='25px' height='25px'  />  ";
                                    }
                                    else{
                                     
                                      echo " <img src='Arduino_mois/image/tat.png' height='25px' width='25px' />  ";
                                    }
                             
                         }else{
                          
                             echo "<button type='sumit' name='btnMOIS2' class='btn btn-lg btn-danger' style='margin-right:15px'>Hệ Thống 2 OFF</button><img src='Arduino_mois/image/tat.png' height='25px' width='25px' />  ";
                             
                         }
                             ?>
                        
                       </form>
                   </td>
                    </tr>
                


<script type="text/javascript"></script>