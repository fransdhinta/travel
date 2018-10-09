    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kantor_cabang/editproses/'.$data['idcabang']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Kantor Cabang </label>
    <div class="controls">
        <input type="text" name="idcabang" placeholder="id cabang" class="span3" value="<?php echo $data['idcabang'];?>" required disabled>
        </div>
        </div>

    <div class="col-md-12">Nama Kantor Cabang</label>
    <div class="controls">
        <input type="text" name="nama_cabang" placeholder="nama kantor cabang" class="span3" value="<?php echo $data['nama_cabang'];?>" required>
        </div>
        </div>

    <div class="col-md-12">Alamat Kantor Cabang</label>
    <div class="controls">
        <input type="text" name="alamat" placeholder="alamat kantor cabang" class="span3" value="<?php echo $data['alamat'];?>" required>
        </div>
        </div>

    <div class="col-md-12">Lokasi</label>
    <div class="controls">
        <input type="text" name="lokasi_cabang" placeholder="Lokasi Cabang" class="span3" value="<?php echo $data['alamat'];?>" required>
        <p>
        <div>
            <button type="submit" class="btn btn-success btn-sm">Edit</button>
            <a href="<?php echo base_url('index.php/kantor_cabang');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
</form>