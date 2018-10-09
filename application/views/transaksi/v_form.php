
<body>
  <div class="panel panel-default">
    <div class="panel-body">
       <form role="form" action ="<?php echo site_url("transaksi/save"); ?>" method="post">
	   <div class="row">
	     
	     <div class="col-lg-12">
		 
				<div class="col-lg-7">
		                        <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3">Nama </label>
											<div class="col-lg-3">
												<input type="text" required class="form-control" readonly id="nama_pelanggan" placeholder="Nama " name="">
												<input type="hidden" class="form-control" readonly id="id_pelanggan" placeholder="" name="form[id_pelanggan]">
												
                                            </div>
											<div class="col-md-1"><button type="button" class="btn btn-info btn-sm" id="ambil_pelanggan" data-toggle="modal" data-target="#myModal">Browse Pelanggan</button>
											</div>
                                        </div>
								 </div>	
								 <br>
								  <div class="row">
										 <div class="form-group">
                                            <label class="col-lg-3">Alamat</label>
											<div class="col-lg-4">
												<input class="form-control " required readonly id="alamat_pelanggan" placeholder="Alamat Pelanggan" name="">
                                            </div>
                                        </div>
                                  </div>
								 <br>
								  <div class="row">	
										 <div class="form-group">
                                            <label class="col-lg-3">Nomor HP</label>
											<div class="col-lg-4">
												<input class="form-control" readonly id="no_hp" placeholder="No HP" name="">
                                            </div>
                                        </div>
								</div>	

								 <br>
								  <div class="row">	
										 <div class="form-group">
                                            <label class="col-lg-3">Kota Asal</label>
											<div class="col-lg-4">
												<select class="form-control" required name="form[kota_asal]" id="kota_asal">
												 <option value="">- Pilih Kota Asal -</option>
												<?php 
												 if(count($kota) >0):
												 
													foreach($kota as $val):
													
													 ?><option value="<?php echo $val->idkota; ?>"><?php echo $val->nama_kota; ?></option><?php
												    endforeach;
												 endif;
												?>
												</select>
                                            </div>
                                        </div>
								 </div>	
								 
								 	 <br>
								   <div class="row">	
										 <div class="form-group">
                                            <label class="col-lg-3">Kota Tujuan</label>
											<div class="col-lg-4">
												<select class="form-control" required name="form[kota_tujuan]" id="kota_tujuan">
												 <option value="">- Pilih Kota Tujuan -</option>
												<?php 
												 if(count($kota) >0):
												 
													foreach($kota as $val):
													
													 ?><option value="<?php echo $val->idkota; ?>"><?php echo $val->nama_kota; ?></option><?php
												    endforeach;
												 endif;
												?>
												</select>
                                            </div>
                                        </div>
								 </div>	
								 
								 	 <br>
								<div class="row">
								  <div class="form-group">
                                            <label class="col-lg-3">Tarif</label>
											<div class="col-lg-4">
												<input class="form-control" required readonly  name="form[bayar]" id="totalbayar">
												
                                            </div>
                                        </div>
								
								 </div>
								 <br>
								  <div class="row">	
										 <div class="form-group">
                                            <label class="col-lg-3">Tanggal Berangkat</label>
											<div class="col-lg-4">
												<input class="form-control" required readonly id="tanggal_berangkat" placeholder="Tanggal" name="form[tanggal_berangkat]">
													<script>
													$(document).ready(function () {
														$('#tanggal_berangkat').datetimepicker({
															autoclose: true,
															format: 'yyyy-mm-dd hh:ii:ss',
															use24hours: true
														});
													});
												</script>
                                            </div>
                                        </div>
								</div>
								
							 <br>
								  <div class="row">	
										 <div class="form-group">
                                            <label class="col-lg-3">Keberangkatan dari</label>
											<div class="col-lg-4">
											<select class="form-control" required name="form[keberangkatan]" id="keberangkatan">
												 <option value="">- Pilih Kantor Cabang-</option>
												<?php 
												 if(count($kantor) >0):
												 
													foreach($kantor as $val):
													
													 ?><option value="<?php echo $val->idcabang; ?>"><?php echo $val->nama_cabang; ?></option><?php
												    endforeach;
												 endif;
												?>
												</select>
                                            </div>
                                        </div>
								</div>
								
								<br>
								  <div class="row">	
										<div class="form-group">
                                            <label class="col-lg-3">Petugas</label>
											<div class="col-lg-4">
												<input class="form-control" readonly value="<?php echo $this->session->userdata("nama"); ?>" name="form[petugas]">
                                            </div>
                                        </div>
									 
								</div>
								
									
                                       
						</div>
						
						
						
						<div class="col-lg-5">
						  <div class="row">	
										 <div class="form-group">
                                           
											<div class="col-lg-4">
											<input class="form-control"  readonly  type="text" name="form[tanggal]" id="" value="<?php echo date("Y-m-d"); ?>">
												
                                            </div>
                                        </div>
								</div>
						
						</div>
						    
						
						        <br>
						  	
										 <div class="form-group">
                                            <label class="col-lg-2">Supir</label>
											<div class="col-lg-2">
											<select class="form-control" required name="form[supir]" id="supir">
												 <option value="">- Pilih Supir-</option>
												<?php 
												 if(count($supir) >0):
												 
													foreach($supir as $val):
													
													 ?><option value="<?php echo $val->idsupir; ?>"><?php echo $val->nama; ?></option><?php
												    endforeach;
												 endif;
												?>
												</select>
                                            </div>
                                        </div>
						
							
							
							  	 <br>
							  	 <br>
								 
								 <div class="form-group">
                                            <label class="col-lg-2"> Jumlah Kursi</label>
											<div class="col-lg-2">
											<select class="form-control" required name="jumlahkursi" id="jumlahkursi">
												 
												 <?php 
												   for($a=1;$a<=7;$a++){
													   
													   ?><option value="<?php echo $a; ?>"><?php echo $a; ?></option><?php 
													   
												   }
												 
												 ?>
												</select>
                                            </div>
                                        </div>
						
							  	 <br>
							  	 <br>
										 <div class="form-group">
                                            <label class="col-lg-2"> Kendaraan</label>
											<div class="col-lg-2">
											<select class="form-control" required name="form[kendaraan]" id="kendaraan">
												 <option value="">- Pilih -</option>
												<?php 
												 if(count($mobil) >0):
												 
													foreach($mobil as $val):
													
													 ?><option value="<?php echo $val->idkendaraan; ?>"><?php echo $val->merk; ?></option><?php
												    endforeach;
												 endif;
												?>
												</select>
                                            </div>
                                        </div>
										
										 
										
										<br>
							  	 <br>
						
										 <div class="form-group">
                                            <label class="col-lg-2">Kursi</label>
											<div class="col-lg-2">
											<select class="form-control kursi" required name="kursi1" id="">
												 <option value="">- Pilih -</option>
												 
												 
												</select>
                                            </div>
                                        </div>
										<div id="load_kursi">
										
										
										
										</div>
										
							  	 <br>
							  	 <br>
						
										 <div class="form-group">
                                           
											<div class="col-lg-4" id="kursi_2">
											<table >
											 <tr>
											 <?php 
											    for($a=1;$a<=7;$a++){
												  if($a==2){
													  
													 echo "</tr><tr><td><br></td></tr><tr>";
														  
														  
														  
												   }
												   
												   if($a %4==1){
													 echo "</tr><tr><td><br></td></tr><tr>";
													   
												   }
													?>
													
											   <td> <div style="border:1px;background-color:#4169E1;width:30px;height:30px;text-align:center;color:white">A <?php echo $a; ?></div> </td>
											   <td> &nbsp; </td>
											
											   
											   <?php 
													
													
													
													
												}
												?>
											 
											
											  </tr>
											</table>
											 
											  
                                            </div>
                                        </div>
									
										
							     <br>
							     <br>
								 
								  
										 <div class="form-group">
                                            <label class="col-lg-3">Status Transaksi</label>
											<div class="col-lg-4">
												<select name="form[status]" required class="form-control">
												  <option value="active"> Lunas </option>
												  <option value="nonactive"> Booking </option>
												 </select>
                                            </div>
                                        </div>
							
								  <br>
								  <br>
								  
								   	
										
									
										
							
					</div>
					
				<div class="row">		
					  <div style="padding:550px 0px 0px 350px">
					  <br>
					  <br>
					  <br>
						<button type="submit" class="btn btn-danger" name="simpan" value="cetak"><span class="glyphicon glyphicon-print"></span> Cetak</button>
						<button type="submit" class="btn btn-primary" name="simpan" value="simpan"><span class="glyphicon glyphicon-ok"></span> Simpan Data</button>
						<button type="reset" class="btn btn-success"><span class="glyphicon glyphicon-remove"></span> Batal</button>
											
					  </div>
			    </div>
             </form>
	   </div>
   </div>
   </div>
   
   <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Data Pelanggan</h4>
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">

   $(document).on("click","#ambil_pelanggan",function(){
	   
	    $.post("<?php echo site_url("transaksi/pelanggan"); ?>",function(data){
			
			$(".modal-body").html(data);
			
			
		})
	   
	   
   })
   
     $(document).on("click","#pilihden",function(){
	   
	    $("#nama_pelanggan").val($(this).attr("data_pelanggan"));
	    $("#id_pelanggan").val($(this).attr("data_id"));
	    $("#alamat_pelanggan").val($(this).attr("data_alamat"));
	    $("#no_hp").val($(this).attr("data_hp"));
	    $('#myModal').modal('toggle');
   })
   
   $(document).on("change","#kota_tujuan",function(){
	   var kota_tujuan = $(this).val();
	   var kota_asal = $("#kota_asal").val();
	   
	   
	    
	    $.post("<?php echo site_url("transaksi/tarif"); ?>",{kota_asal:kota_asal,kota_tujuan:kota_tujuan},function(data){
			
			$("#totalbayar").val(data);
			
			
		})
	   
	   
   })
   
     $(document).on("change","#kendaraan",function(){
	   var kendaraan   	     = $(this).val();
	   var kota_asal    	 = $("#kota_asal").val();
	   var kota_tujuan  	 = $("#kota_tujuan").val();
	   var keberangkatan 	 = $("#keberangkatan").val();
	   var tanggal_berangkat = $("#tanggal_berangkat").val();
	   var supir 			 = $("#supir").val();
	   
	   
	  
	   
	   
	    
	    $.post("<?php echo site_url("transaksi/kendaraan"); ?>",{kendaraan:kendaraan,kota_asal:kota_asal,kota_tujuan:kota_tujuan,
		keberangkatan:keberangkatan,tanggal_berangkat:tanggal_berangkat,supir:supir},function(data){
			
			$(".kursi").html(data).show();
			
			
		})
	   
	   
   })
   
   
     $(document).on("change","#kendaraan",function(){
	   var kendaraan   	     = $(this).val();
	   var kota_asal    	 = $("#kota_asal").val();
	   var kota_tujuan  	 = $("#kota_tujuan").val();
	   var keberangkatan 	 = $("#keberangkatan").val();
	   var tanggal_berangkat = $("#tanggal_berangkat").val();
	   var supir 			 = $("#supir").val();
	   
	   
	  
	   
	   
	    
	    $.post("<?php echo site_url("transaksi/cek_kursi"); ?>",{kendaraan:kendaraan,kota_asal:kota_asal,kota_tujuan:kota_tujuan,
		keberangkatan:keberangkatan,tanggal_berangkat:tanggal_berangkat,supir:supir},function(data){
			
			$("#kursi_2").html(data).show();
			
			
		})
	   
	   
   })


    
   $(document).on("click","#jumlahkursi",function(){
	   
	   var kursi = $(this).val();
	   
	   var html ="";
	    for(a=2;a<=kursi;a++){
			
			
			html+=' <div class="form-group">';
              html+='                              <label class="col-lg-2">Kursi '+a+'</label>';
				html+='							<div class="col-lg-2">';
						html+='					<select class="form-control kursi" required name="kursi'+a+'" id="">';
									html+='			 <option value="">- Pilih -</option>';
												 
												 
										html+='		</select>';
                                            html+=' </div>';
                                              html+=' </div>';
			
		}
	   
	   $("#load_kursi").html(html);
   })

</script>