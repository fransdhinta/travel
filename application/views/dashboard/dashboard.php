								<div class="row">
								<div class="col-md-12">
								<div class="col-md-6">	
										 <div class="form-group">
                                            <label class="col-lg-3">Keberangkatan Pagi</label>
											<div class="col-lg-9">
												<input class="form-control" required readonly id="keberangkatan_pagi" placeholder="Tanggal" name="">
													<script>
													$(document).ready(function () {
														$('#keberangkatan_pagi').datepicker({
															autoclose: true,
															format: 'yyyy-mm-dd',
															use24hours: true
														});
													});
												</script>
                                            </div>
                                        </div>
								</div>

								<div class="col-md-6">	
										 <div class="form-group">
                                            <label class="col-lg-3">Keberangkatan Sore</label>
											<div class="col-lg-9">
												<input class="form-control" required readonly id="keberangkatan_sore" placeholder="Tanggal" name="">
													<script>
													$(document).ready(function () {
														$('#keberangkatan_sore').datepicker({
															autoclose: true,
															format: 'yyyy-mm-dd',
															use24hours: true
														});
													});
												</script>
                                            </div>
                                        </div>
								</div>

								<div class="row">
								<div class="col-md-12">
									<div class="col-md-6" >	
										 <div class="form-group keberangkatan_pagi"  style="display:none">
                                           <label class="col-lg-3">Kota Asal</label>
											<div class="col-lg-9">
												<select class="form-control" required name="form[kota_asal]" id="kota_asal_pagi">
												 <option value="">- Pilih Kota Asal -</option>
												<?php 
													$kota = $this->db->get('kota')->result();
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

								<div class="col-md-6 ">
										 <div class="form-group keberangkatan_sore"  style="display:none">
                                            <label class="col-lg-3">Kota Asal</label>
											<div class="col-lg-9">
												<select class="form-control" required name="form[kota_asal]" id="kota_asal_sore">
												 <option value="">- Pilih Kota Asal -</option>
												<?php 
													$kota = $this->db->get('kota')->result();
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


								<div class="row">
								<div class="col-md-12">
								<div class="col-md-6 ">	
										 <div class="form-group keberangkatan_pagi"  style="display:none">
                                            <label class="col-lg-3">Kota Tujuan</label>
											<div class="col-lg-9">
												<select class="form-control" required name="form[kota_tujuan]" id="kota_tujuan_pagi">
												 <option value="">- Pilih Kota Tujuan -</option>
												<?php 
													$kota = $this->db->get('kota')->result();
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

								<div class="col-md-6 ">		
										 <div class="form-group keberangkatan_sore"  style="display:none">
                                           <label class="col-lg-3">Kota Tujuan</label>
											<div class="col-lg-9">
												<select class="form-control" required name="form[kota_tujuan]" id="kota_tujuan_sore">
												 <option value="">- Pilih Kota Tujuan -</option>
												<?php 
													$kota = $this->db->get('kota')->result();
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
								<div class="row">
								<div class="col-md-12">
								<div class="col-md-6 ">		
										 <div class="form-group keberangkatan_pagi"  style="display:none">
                                            <label class="col-lg-3">Kendaraan</label>
											<div class="col-lg-9">
												<select class="form-control" required name="form[kendaraan]" id="kendaraan_pagi">
												 <option value="">- Pilih Kendaraan -</option>
												<?php 
													$kendaraan = $this->db->get('kendaraan')->result();
												 if(count($kendaraan) >0):
												 
													foreach($kendaraan as $val):
													
													 ?><option value="<?php echo $val->idkendaraan; ?>"><?php echo $val->merk; ?></option><?php
												    endforeach;
												 endif;
												?>
												</select>
                                            </div>
                                        </div>
                                        </div>
                                        

                                <div class="col-md-6 ">		
										 <div class="form-group keberangkatan_sore"  style="display:none">
                                            <label class="col-lg-3">Kendaraan</label>
											<div class="col-lg-9">
												<select class="form-control" required name="form[kendaraan]" id="kendaraan_sore">
												 <option value="">- Pilih Kendaraan -</option>
												<?php 
													$kendaraan = $this->db->get('kendaraan')->result();
												 if(count($kendaraan) >0):
												 
													foreach($kendaraan as $val):
													
													 ?><option value="<?php echo $val->idkendaraan; ?>"><?php echo $val->merk; ?></option><?php
												    endforeach;
												 endif;
												?>
												</select>
                                            </div>
								</div>

							</div>
						</div>

							
								<div class="col-md-12">
								<div class="col-md-6 ">		
										 <div class="form-group " >
                                            <label class="col-lg-3"></label>
											<div class="col-lg-9" id="kursikeberangkatanpagi">
												
                                            </div>
                                        </div>
                                        </div>
                                        

                                <div class="col-md-6 ">		
										 <div class="form-group "  >
                                            <label class="col-lg-3"></label>
											<div class="col-lg-9" id="kursikeberangkatansore">
												
												 
                                            </div>
								</div>

							</div>
						</div>
			
<script type="text/javascript">
 $(document).on("blur","#keberangkatan_pagi",function(){

 	 $(".keberangkatan_pagi").show();
 })
</script>

<script type="text/javascript">
 $(document).on("blur","#keberangkatan_sore",function(){

 	 $(".keberangkatan_sore").show();
 })
</script>

<script type="text/javascript">
 $(document).on("change","#kendaraan_pagi",function(){

 	 
 	   var kendaraan_pagi   	 = $(this).val();
	   var kota_asal_pagi   	 = $("#kota_asal_pagi").val();
	   var kota_tujuan_pagi  	 = $("#kota_tujuan_pagi").val();
	   var keberangkatan_pagi  	 = $("#keberangkatan_pagi").val();
	   $.post("<?php echo site_url("dashboard/keberangkatan_pagi"); ?>",{kendaraan_pagi:kendaraan_pagi,kota_asal_pagi:kota_asal_pagi,kota_tujuan_pagi:kota_tujuan_pagi,
		keberangkatan_pagi:keberangkatan_pagi},function(data){
			
			$("#kursikeberangkatanpagi").html(data).show();
			
			
		})
 })
</script>

<script type="text/javascript">
 $(document).on("change","#kendaraan_sore",function(){

 	   var kendaraan_sore   	 = $(this).val();
	   var kota_asal_sore   	 = $("#kota_asal_sore").val();
	   var kota_tujuan_sore  	 = $("#kota_tujuan_sore").val();
	   var keberangkatan_sore  	 = $("#keberangkatan_sore").val();
	   $.post("<?php echo site_url("dashboard/keberangkatan_sore"); ?>",{kendaraan_sore:kendaraan_sore,kota_asal_sore:kota_asal_sore,kota_tujuan_sore:kota_tujuan_sore,
		keberangkatan_sore:keberangkatan_sore},function(data){
			
			$("#kursikeberangkatansore").html(data).show();
			
			
		})
 })
</script>