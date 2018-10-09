
<body>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/supir/editproses/'.$data['idsupir']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id supir </label>
    <div class="controls">
        <input type="text" name="idsupir" placeholder="id supir" class="span3" value="<?php echo $data['idsupir'];?>" required disabled>
        </div>
        </div>

    <div class="col-md-12">Nama</label>
    <div class="controls">
        <input type="text" name="nama" placeholder="nama" class="span3" value="<?php echo $data['nama'];?>" required>
        </div>
        </div>

    <div class="col-md-12">Alamat</label>
    <div class="controls">
        <input type="text" name="alamat" placeholder="alamat" class="span3" value="<?php echo $data['alamat'];?>" required>
        </div>
        </div>

    <div class="col-md-12">Tempat lahir</label>
    <div class="controls">
        <input type="text" name="tempat_lahir" placeholder="tempat lahir" class="span3" value="<?php echo $data['tempat_lahir'];?>" required>
        </div>
        </div>

    <div class="col-md-12">Tanggal lahir</label>
    <div class="controls">
        <input type="date" name="tanggal_lahir" placeholder="tanggal lahir" class="span3" value="<?php echo $data['tanggal_lahir'];?>" required>
        </div>
        </div>
    
    <div class="col-md-12">Nomer KTP</label>
    <div class="controls">
        <input type="text" name="no_ktp" placeholder="no ktp" class="span3" value="<?php echo $data['no_ktp'];?>" required>
        </div>
        </div>

    <div class="col-md-12">Nomer HP</label>
    <div class="controls">
        <input type="text" name="no_hp" placeholder="no hp" class="span3" value="<?php echo $data['no_hp'];?>" required>
        <p>
        <div>
            <button type="submit" class="btn btn-success btn-sm">Edit</button>
            <a href="<?php echo base_url('index.php/supir');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
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
    </script>