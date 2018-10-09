
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kota/hapusproses/'.$data['idkota']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Kota </label>
    <div class="controls">
        <input type="text" name="idkota" placeholder="id kota" class="span3" value="<?php echo $data['idkota'];?>" required disabled>
    </div>
    </div>
    <div class="col-md-12">Provinsi</label>
    <div class="controls">
        <input type="text" name="nama_provinsi" placeholder="provinsi" class="span3" value="<?php echo $data['nama_provinsi'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">kota</label>
    <div class="controls">
        <input type="text" name="nama_kota" placeholder="nama kota" class="span3" value="<?php echo $data['nama_kota'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Status</label>
    <div class="controls">
        <input type="text" name="status" placeholder="status" class="span3" value="<?php echo $data['status'];?>" required disabled>
        <p>
        <div>
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="<?php echo base_url('index.php/kota');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>
