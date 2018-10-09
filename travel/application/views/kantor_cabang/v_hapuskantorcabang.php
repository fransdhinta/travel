
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kantor_cabang/hapusproses/'.$data['idcabang']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Kantor Cabang </label>
    <div class="controls">
        <input type="text" name="idcabang" placeholder="id kantor cabang" class="span3" value="<?php echo $data['idcabang'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Nama Kantor Cabang</label>
    <div class="controls">
        <input type="text" name="nama_cabang" placeholder="nama" class="span3" value="<?php echo $data['nama_cabang'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Alamat Kantor Cabang</label>
    <div class="controls">
        <input type="text" name="alamat" placeholder="alamat kantor cabang" class="span3" value="<?php echo $data['alamat'];?>" required disabled>
     </div>
    </div>

    <div class="col-md-12">Lokasi</label>
    <div class="controls">
        <input type="text" name="lokasi_cabang" placeholder="lokasi" class="span3" value="<?php echo $data['lokasi_cabang'];?>" required disabled>
        <p>
        <div>
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="<?php echo base_url('index.php/kantor_cabang');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
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