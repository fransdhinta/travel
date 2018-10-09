
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/supir/hapusproses/'.$data['idsupir']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id supir </label>
    <div class="controls">
        <input type="text" name="idsupir" placeholder="idsupir" class="span3" value="<?php echo $data['idsupir'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Nama</label>
    <div class="controls">
        <input type="text" name="nama" placeholder="nama" class="span3" value="<?php echo $data['nama'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Alamat</label>
    <div class="controls">
        <input type="text" name="alamat" placeholder="alamat" class="span3" value="<?php echo $data['alamat'];?>" required disabled>
     </div>
    </div>

    <div class="col-md-12">Tempat Lahir</label>
    <div class="controls">
        <input type="text" name="tempat_lahir" placeholder="tempat_lahir" class="span3" value="<?php echo $data['tempat_lahir'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Tanggal Lahir</label>
    <div class="controls">
        <input type="text" name="tanggal_lahir" placeholder="tanggal_lahir" class="span3" value="<?php echo $data['tanggal_lahir'];?>" required disabled>
    </div>
    </div>
    
    <div class="col-md-12">Nomer KTP</label>
    <div class="controls">
        <input type="text" name="no_ktp" placeholder="no_ktp" class="span3" value="<?php echo $data['no_ktp'];?>" required disabled>
        </div>
        </div>

    <div class="col-md-12">Nomer HP</label>
    <div class="controls">
        <input type="text" name="no_hp" placeholder="no_hp" class="span3" value="<?php echo $data['no_hp'];?>" required disabled>
        <p>
        <div>
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="<?php echo base_url('index.php/supir');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>
 <script src="<?php echo base_url('assets/plugins/jquery-1.10.2.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.js');?>"></script>
    <script src="<?php echo base_url('assets/scripts/siminta.js');?>"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url('assets/plugins/dataTables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.js');?>"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });