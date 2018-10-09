<?php 
if(count($kursi) >0):
						?>
						<table >
                          <tr>
						<?php 
						$a=0;
							foreach($kursi as $val):
								$a++;
							                      if($a==2){
													  
													 echo "</tr><tr><td><br></td></tr><tr>";
														  
														  
														  
												   }else
												   
												   if($a %4==1){
													 echo "</tr><tr><td><br></td></tr><tr>";
													   
												   }						
						 ?>
						
											 
													
											   <td> <div style="border:1px;background-color:#4169E1;width:30px;height:30px;text-align:center;color:white"><?php echo $val->kode_kursi; ?></div> </td>
											   <td> &nbsp; </td>
											
											   
											   <?php 
													
													
													
													
												
												?>
											 
											
											 
						 
						 
						 
						 
						 <?php 
					endforeach;
					?>  </tr></table> <?php 
		    endif;
			
?>