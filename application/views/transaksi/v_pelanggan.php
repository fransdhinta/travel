<div class="table-responsive">

  <table class="table">
    <tr>
	   <td>No </td>
	   <td>Nama </td>
	
	   <td>Alamat </td>
	   <td>No Hp </td>
	   <td>Aksi </td>
	</tr>
	
	<?php 
	  if(count($pelanggan)>0):
	    $no=1;
	     foreach($pelanggan as $val):
		   ?>
		     <tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo $val->nama; ?></td>
			   <td><?php echo $val->alamat; ?></td>
			   <td><?php echo $val->no_hp; ?></td>
			   <td><button class="btn btn-default" id="pilihden" data_pelanggan="<?php echo $val->nama; ?>" data_alamat="<?php echo $val->alamat; ?>" data_hp="<?php echo $val->no_hp; ?>" data_id="<?php echo $val->idpelanggan; ?>" >Pilih</button></td>
		     </tr>
			 
			
		   <?php 
		 endforeach;
	endif;
	
	
	?>
	
  </table>