
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kendaraan/hapusproses/'.$data['idkendaraan']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id kendaraan </label>
    <div class="controls">
        <input type="text" name="idkendaraan" placeholder="id kendaraan" class="span3" value="<?php echo $data['idkendaraan'];?>" required disabled>
    </div>
    </div>
    
    <div class="col-md-12">Merk</label>
    <div class="controls">
        <input type="text" name="merk" placeholder="merk" class="span3" value="<?php echo $data['merk'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Status</label>
    <div class="controls">
        <input type="text" name="status" placeholder="status" class="span3" value="<?php echo $data['status'];?>" required disabled>
        <p>
        <div>
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="<?php echo base_url('index.php/kendaraan');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>
 