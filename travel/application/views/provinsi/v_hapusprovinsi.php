
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/provinsi/hapusproses/'.$data['idprovinsi']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Admin </label>
    <div class="controls">
        <input type="text" name="idprovinsi" placeholder="id provinsi" class="span3" value="<?php echo $data['idprovinsi'];?>" required disabled>
    </div>
    </div>
    
    <div class="col-md-12">Nama</label>
    <div class="controls">
        <input type="text" name="nama_provinsi" placeholder="nama provinsi" class="span3" value="<?php echo $data['nama_provinsi'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Status</label>
    <div class="controls">
        <input type="text" name="status" placeholder="status" class="span3" value="<?php echo $data['status'];?>" required disabled>
        <p>
        <div>
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="<?php echo base_url('index.php/provinsi');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>
