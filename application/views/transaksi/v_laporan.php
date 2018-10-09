 <div class="panel panel-default">
    <div class="panel-body">
	<form action ="<?php echo site_url("transaksi/cari"); ?>" method="post">
	 <div class="row">
      <div class="col-md-12">
	    <div class="col-md-3">
			
			<input class="form-control" required  id="tanggal1" placeholder="Cari Dari" name="tanggal1" value="<?php echo isset($tanggal1) ? $tanggal1 : date("Y-m-d") ?>">
												
					<script>
									$(document).ready(function () {
														$('#tanggal1').datepicker({
															autoclose: true,
															format: 'yyyy-mm-dd',
															use24hours: true
														});
													});
					</script>								

		</div>
	    <div class="col-md-3">

				<input class="form-control" required  id="tanggal2" placeholder="Cari Sampai" name="tanggal2" value="<?php echo isset($tanggal2) ? $tanggal2 : date("Y-m-d") ?>">
												
					<script>
									$(document).ready(function () {
														$('#tanggal2').datepicker({
															autoclose: true,
															format: 'yyyy-mm-dd',
															use24hours: true
														});
													});
					</script>			
			

		</div>
		
		  <div class="col-md-6">

		  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Cari</button>
		 
		  <button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Batal</button>
		  <button type="submit" class="btn btn-warning" name="export" value="1"><span class="glyphicon glyphicon-print"></span> export</button>

		</div>
	  </div>
	   
	  </div>
	  </form>
	  <br>
	  <br>
<div class="table-responsive">

  <table class="table">
    <tr>
	   <td>No </td>
	   <td>Nama Pelanggan</td>
	
	   <td>Tanggal Berangkat </td>
	   <td>Kota Asal</td>
	   <td>Kota Tujuan</td>
	   <td>Keberangkatan dari</td>
	   <td>Petugas</td>
	   <td>Supir</td>
	   <td>Kendaraan</td>
	   <td>Kursi</td>
	   <td>Tarif</td>
	  <!-- <td>Aksi</td> -->
	  
	</tr>
	
	<?php 
	  if(count($transaksi)>0):
	    $no=1;
	     foreach($transaksi as $val):
		   ?>
		     <tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idpelanggan",$val->id_pelanggan,"pelanggan","nama"); ?></td>
			   <td><?php echo $val->tanggal_berangkat ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idkota",$val->kota_asal,"kota","nama_kota"); ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idkota",$val->kota_tujuan,"kota","nama_kota"); ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idcabang",$val->keberangkatan,"kantor_cabang","nama_cabang"); ?></td>
			   <td><?php echo $val->petugas; ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idsupir",$val->supir,"supir","nama"); ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idkendaraan",$val->kendaraan,"kendaraan","merk"); ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idkursi",$val->kursi,"kursi","kode_kursi"); ?></td>
			   <td><?php echo $val->bayar; ?></td>
			   
			  <!-- <td><a href="<?php echo site_url("transaksi/hapus?id=".$val->id.""); ?>" onClick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus </a></td>
		     
			 -->
			 </tr>
			 
			
		   <?php 
		 endforeach;
	endif;
	
	
	?>
	
  </table>
  
  </div>
  </div>