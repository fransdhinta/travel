<body>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/admin/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Nomer ktp</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                      $no = 1;
                      foreach ($data->result() as $row) {
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->idadmin;?></td>
                        <td><?php echo $row->username;?></td>
                        <td><?php echo $row->password;?></td>
                        <td><?php echo $row->nama;?></td>
                        <td><?php echo $row->alamat;?></td>
                        <td><?php echo $row->tempat_lahir;?></td>
                        <td><?php echo $row->tanggal_lahir;?></td>
                        <td><?php echo $row->no_ktp;?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/admin/edit/'.$row->idadmin);?>">edit</a>
                            <a  class="btn btn-primary" href="<?php echo base_url('index.php/admin/hapus/'.$row->idadmin);?>">delete</a>
                            <a  class="btn btn-primary hak_akses" class="" data_id="<?php echo $row->idadmin;?>" data-toggle="modal" data-target="#myModal">Hak Akses</a>
                   </tr>
                </td>
            </div>
        <?php }?>
    </tbody>
    </tr>
    </tbody>
    </tr>
    </thead>
    </table>
    </div>
    </div>
    </body>
    </html>
</table>    

 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hak Akses</h4>
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

   $(document).on("click",".hak_akses",function(){
	   var id = $(this).attr("data_id");
	    $.post("<?php echo site_url("admin/hak_akses"); ?>",{id:id},function(data){
			
			$(".modal-body").html(data);
			
			
		})
	   
	   
   })
   
      $(document).on("click",".pilih",function(){
	   var id_admin = $(this).attr("id_admin");
	   var id_menu = $(this).attr("id_menu");
	   var val     = $(this).is(":checked");
	 
	    $.post("<?php echo site_url("admin/akses"); ?>",{id_admin:id_admin,id_menu:id_menu,val:val},function(data){
			
			
			
		})
	   
	   
   })

</script>   