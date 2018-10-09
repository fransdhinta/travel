
<body>
  <div class="panel panel-default">
    <div class="panel-body">
       <form role="form" action ="<?php echo site_url("user/save"); ?>" method="post">
	   <div class="row">
	     
	     <div class="col-lg-12">
		 
				<div class="col-lg-7">
		                        <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3">Nama </label>
											<div class="col-lg-4">
												<input type="text" class="form-control"  id="nama_pelanggan" placeholder="Nama " name="form[nama]">
														
                                            </div>
									    </div>
                                       
								 </div>	
								 <br>
								 
								  <div class="row">
										 <div class="form-group">
                                            <label class="col-lg-3">Username</label>
											<div class="col-lg-4">
												<input class="form-control"  id="alamat_pelanggan" placeholder="Username" name="form[username]">
                                            </div>
                                        </div>
                                  </div>
								 <br>
								 
								  <div class="row">
										 <div class="form-group">
                                            <label class="col-lg-3">Password</label>
											<div class="col-lg-4">
												<input class="form-control"  id="alamat_pelanggan" type="password" placeholder="Password" name="form[password]">
                                            </div>
                                        </div>
                                  </div>
								 <br>
								  <div class="row">
										 <div class="form-group">
                                            <label class="col-lg-3">Alamat</label>
											<div class="col-lg-4">
												<input class="form-control"  id="alamat_pelanggan" placeholder="Alamat Pelanggan" name="form[alamat]">
                                            </div>
                                        </div>
                                  </div>
								 <br>
								 
								   <div class="row">
										 <div class="form-group">
                                            <label class="col-lg-3">Tempat Lahir</label>
											<div class="col-lg-4">
												<input class="form-control"  id="alamat_pelanggan" placeholder="Tempat Lahir" name="form[tempat_lahir]">
                                            </div>
                                        </div>
                                  </div>
								 <br>
								 

								
									
                                       
						</div>
						
				</div>		
					
					
		
			     
						
				<div style="float:right">
					<button type="submit" class="btn btn-primary">Simpan Data</button>
                    <button type="reset" class="btn btn-success">Batal</button>
                                        
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
	   var kendaraan = $(this).val();
	  
	   
	   
	    
	    $.post("<?php echo site_url("transaksi/kendaraan"); ?>",{kendaraan:kendaraan},function(data){
			
			$("#kursi").html(data);
			
			
		})
	   
	   
   })


</script>