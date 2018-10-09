
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kursi/hapusproses/'.$data['idkursi']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Kursi </label>
    <div class="controls">
        <input type="text" name="idkursi" placeholder="id kursi" class="span3" value="<?php echo $data['idkursi'];?>" required disabled>
    </div>
    </div>
    <div class="col-md-12">kendaraan</label>
    <div class="controls">
        <input type="text" name="merk" placeholder="kendaraan" class="span3" value="<?php echo $data['merk'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Kode Kursi</label>
    <div class="controls">
        <input type="text" name="kode_kursi" placeholder="kode kursi" class="span3" value="<?php echo $data['kode_kursi'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Status</label>
    <div class="controls">
        <input type="text" name="status" placeholder="status" class="span3" value="<?php echo $data['status'];?>" required disabled>
        <p>
        <div>
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="<?php echo base_url('index.php/kursi');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>