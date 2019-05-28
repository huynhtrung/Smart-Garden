<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      
        <title>Điều khiển thiết bị qua Internet</title>
        
        <link href="Arduino_mois/WebApp/css/bootstrap.min.css" rel="stylesheet" />
        <link href="Arduino_mois/WebApp/css/bootstrap-theme.css" rel="stylesheet" />
        <link rel="shortcut icon" href="Arduino_mois/image/icon.png" />
		
           
             
    </head >

 <style type="text/css">
body{
	 background:url(Arduino_mois/image/hinh1.jpg); background-repeat:no-repeat;
	}
.container #noidung #doam{color:#F00; font-size:36px;}

.container #noidung #D_L{align:center; width:70%; margin:auto}
.container #noidung #D_L #lietke{float:right;width:50% }
.container #noidung #D_L #dongho{float:left;width:50%;}

.container #noidung #D_L_clear {clear:both}

 </style>
  
    <body>
    	<?php
			include ("Arduino_mois/App/cont.php");
			$ngay=gmdate("y-m-d h:i:s",time()+07*3600);
			
		
			if(isset($_POST["btnMOIS1"])){
			
				
				$sql = "SELECT * FROM tbldieukhien WHERE idThietBi=1 ORDER BY id DESC LIMIT 0,1";
				$ketqua = mysqli_query($connect, $sql) or die ("Không thực hiện được câu lệnh: $sql ".mysql_error());
				 $dong = mysqli_fetch_array($ketqua);
				  $trangThaiMOIS1 = $dong['giatri'];
				 
				 
				 if($trangThaiMOIS1 ==1){
					 $sql = "INSERT INTO tbldieukhien VALUES(NULL,0,1,'$ngay')";
					 mysqli_query($connect, $sql) or die ("Không thực hiện được câu lệnh: $sql ".mysql_error());
				 }else{
					 $sql = "INSERT INTO tbldieukhien VALUES(NULL,1,1,'$ngay')";
					 mysqli_query($connect, $sql) or die ("Không thực hiện được câu lệnh: $sql ".mysql_error());
				 }
				
				
			}
			
			if(isset($_POST["btnMOIS2"])){
				
				$sql = "SELECT * FROM tbldieukhien WHERE idThietBi=2 ORDER BY id DESC LIMIT 0,1";
				$ketqua = mysqli_query($connect, $sql) or die ("Không thực hiện được câu lệnh: $sql ".mysql_error());
				 $dong = mysqli_fetch_array($ketqua);
				  $trangThaiMOIS2 = $dong['giatri'];
				
				 
				 if($trangThaiMOIS2 ==1){
					 $sql = "INSERT INTO tbldieukhien VALUES(NULL,0,2,'$ngay')";
					 mysqli_query($connect, $sql) or die ("Không thực hiện được câu lệnh: $sql ".mysql_error());
				 }else{
					 $sql = "INSERT INTO tbldieukhien VALUES(NULL,1,2,'$ngay')";
					 mysqli_query($connect, $sql) or die ("Không thực hiện được câu lệnh: $sql ".mysql_error());
				 }
				
				
			}
		?>
  			<!---->
        	<div style="text-align:center; color:#000; font-weight:900;margin-bottom:50px">
            	<h1><b>Hệ Thống Tưới Cây Tự Động</b></h1>
               
            </div> 
            <!---->
            <!---->
   		<div class="container" >
        	
            <div >
                  <div class="row">
                   <table width="30%" align="center" id="loadbutton" >
							<tr>
                      <td align="center" valign="middle">
                <form method="post" >
					
                          <?php
                          $sldoam="SELECT setdoam FROM tblthietbi where idThietBi=1";
                           $doam = mysqli_query($connect, $sldoam) or die ("Không th?c hi?n đư?c câu l?nh: $sql ".mysql_error());
                        	$da = mysqli_fetch_array($doam);

                          $sql = "SELECT * FROM tbldieukhien WHERE idThietBi=1 ORDER BY id DESC LIMIT 0,1";
                            $ketqua = mysqli_query($connect, $sql) or die ("Không th?c hi?n đư?c câu l?nh: $sql ".mysql_error());
                        $dong = mysqli_fetch_array($ketqua);
                              $trangThaiMOIS1 = $dong['giatri'];
                      
                          if($trangThaiMOIS1 == 1){
                              echo "<button type='sumit' name='btnMOIS1' class='btn btn-lg btn-info' style='margin-right:15px'>Hệ Thống 1 ON</button>";
                              $doam=mysqli_query($connect,"SELECT * FROM tbldoam WHERE idThietBi=1 ORDER BY id DESC LIMIT 0,1");
								$d1=mysqli_fetch_array($doam);
								if($d1['giatri']<$da['setdoam'])
								{
                              		echo " <img src='Arduino_mois/image/online.png' width='25px' height='25px'  />	";
								}
								else{
									echo " <img src='Arduino_mois/image/tat.png' width='25px' height='25px'  />	";
								}
                             
                         }else{
                             echo "<button type='sumit' name='btnMOIS1' class='btn btn-lg btn-danger' style='margin-right:15px'>Hệ Thống 1 OFF</button><img src='Arduino_mois/image/tat.png' height='25px' width='25px' />	";
							
                         }
                          ?>
                        
                       </form>
                   </td>
                      <td align="center" valign="middle">
                          <form method="post">
                          <?php
                          $sql = "SELECT * FROM tbldieukhien WHERE idThietBi=2 ORDER BY id DESC LIMIT 0,1 ";
                            $ketqua = mysqli_query($connect, $sql) or die ("Không th?c hi?n đư?c câu l?nh: $sql ".mysql_error());
                          	$dong = mysqli_fetch_array($ketqua);
                              $trangThaiMOIS2 = $dong['giatri'];
                         if($trangThaiMOIS2 == 1){
                              echo "<button type='sumit' name='btnMOIS2' class='btn btn-lg btn-info' style='margin-right:15px'>Hệ Thống 2 ON</button>";
                                 $doam=mysqli_query($connect,"SELECT * FROM tbldoam WHERE idThietBi=2 ORDER BY id DESC LIMIT 0,1");
								$d2=mysqli_fetch_array($doam);
								if($d2['giatri']<$da['setdoam'])
								{
                              		echo " <img src='Arduino_mois/image/online.png' width='25px' height='25px'  />	";
								}
								else{
									echo " <img src='Arduino_mois/image/tat.png' height='25px' width='25px' />	";
								}
                             
                         }else{
                             echo "<button type='sumit' name='btnMOIS2' class='btn btn-lg btn-danger' style='margin-right:15px'>Hệ Thống 2 OFF</button><img src='Arduino_mois/image/tat.png' height='25px' width='25px' />	";
							
                         }?>
                        
                       </form>
                   </td>
                    </tr>

					
                  </table>
                  
				</div>
              
              
              
              
            </div>
         
            <!---->
            
            <div style="text-align:center;overflow: auto;">
            	
              	<hr/>
                
                <?php if(isset($_GET['key']))
		{ 		
			switch($_GET['key'])
			{
			
			
				case "dongho" :
				include("Arduino_mois/WebApp/hengio.php");
				break;
				
				case "lietke" :
				include("Arduino_mois/WebApp/thongke.php");
				break;
				
				}		
		}else {?>
             <div id="noidung"> 
<!-- Hygrometer icon by Icons8 -->
				<div id="doam">
						
                   			<table align="center" id="loadtable">
                            
  
                            </table>		
					

               </div>  
                 <div id="D_L">
                 <div  id="dongho"><a href="index.php?key=dongho"><img src="Arduino_mois/image/icon_dongho.png" height="256px"  /></a> </div> 
				 <div id="lietke"><a href="index.php?key=lietke"><img src="Arduino_mois/image/lietke.png" height="256px"   /></a> </div>
				 </div>
				 <div id="D_L_clear">
				 </div>
             </div >
                <?php }?>  
                
                 <hr />
                 <div>
            	<h3>Được phát triển bởi.</h3>
                <h4><a  href="index.php" style="text-decoration:none">Huỳnhh Thanh Trung - Đinh Tuấn Cường</a></h4>
            	</div> 
            
       </div>
	
    <script language="javascript" src="Arduino_mois/WebApp/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Arduino_mois/WebApp/js/jquery-3.2.1.min.js"></script>
 
    <script>
	$('#timepicker').timepicki();
    </script>
    
	 <script>
		$(document).ready(function(){

			setInterval(function(){
			$("#loadtable").load('Arduino_mois/WebApp/Ajaxload_doam.php')
			}, 0);
			
			setInterval(function(){
			$("#loadbutton").load('Arduino_mois/WebApp/Ajaxload_button.php')
			}, 5000);
			
			ajax_thongke();
			$("#ketqua").click(function(){
				ajax_loc();
				});
			
	
			$("#value1").change(function(){
		
				ajax_thongke();
		
			});
			
		});
		function ajax_thongke()
		{
			$.ajax({
				type:"POST",
				url:"Arduino_mois/WebApp/xuly.php",
				data:"gt="+$("#value1").val(),
				success: function(abc){
				
					$("#kq").html(abc);
					}
			});
			
		
		}
		function ajax_loc()
		{
			$.ajax({
				type:"POST",
				url:"Arduino_mois/WebApp/loc.php",
				data:"gt2="+$("#ngay1").val()+"&gt3="+$("#ngay2").val()+"&gt="+$("#value1").val(),
				success: function(xyz){
				
					$("#kq").html(xyz);
					}
			});
		
		}


		
		
    </script>
    </body>
</html>

