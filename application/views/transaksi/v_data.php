 <div class="panel panel-default">
    <div class="panel-body">

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
	   <td>Aksi</td>
	  
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
			   
			   <td><a href="<?php echo site_url("transaksi/hapus?id=".$val->id.""); ?>" onClick="return confirm('Hapus data ?')" class="btn btn-sm btn-danger">Hapus </a></td>
			   <td><a href="<?php echo site_url("transaksi/cetak?id=".$val->id.""); ?>" type="submit" class="btn btn-sm btn-danger" name="simpan" value="cetak"><span class="glyphicon glyphicon-print"></span> Cetak</a></td>
		     </tr>
			 
			
		   <?php 
		 endforeach;
	endif;
	
	
	?>
	
  </table>
  
  </div>
  </div>