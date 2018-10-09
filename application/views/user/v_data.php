 <div class="panel panel-default">
    <div class="panel-body">

<div class="table-responsive">
   <a  href="<?php echo site_url("user/form"); ?>" class="btn btn-primary">Tambah User</a>
  <table class="table">
    <tr>
	   <td>No </td>
	   <td>Nama</td>
	
	   <td>username </td>
	   <td>Alamat</td>
	  
	   <td>Tempat Lahir</td>
	 
	
	   <td>Aksi</td>
	  
	</tr>
	
	<?php 
	  if(count($user)>0):
	    $no=1;
	     foreach($user as $val):
		   ?>
		     <tr>
			   <td><?php echo $no++; ?></td>
			  
			   <td><?php echo $val->nama; ?></td>
			   <td><?php echo $val->username; ?></td>
			   <td><?php echo $val->alamat; ?></td>
			   <td><?php echo $val->tempat_lahir; ?></td>
			   
			   <td><a  class="btn btn-primary">Ubah</a><a  onClick="return confirm('Apakah anda yakin ?')" href="<?php echo site_url("user/hapus?id=".$val->idadmin.""); ?>" class="btn btn-primary">Hapus</a></td>
		     </tr>
			 
			
		   <?php 
		 endforeach;
	endif;
	
	
	?>
	
  </table>
  
  </div>
  </div>