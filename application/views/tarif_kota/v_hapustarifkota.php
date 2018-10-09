
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/tarif_kota/hapusproses/'.$data['idtarif']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Tarif </label>
    <div class="controls">
        <input type="text" name="idtarif" class="span3" value="<?php echo $data['idtarif'];?>" required disabled>
    </div>
    </div>
    <div class="col-md-12">Kota asal</label>
    <div class="controls">
        <input type="text" name="nama_kota" class="span3" value="<?php echo $data['nama_kota'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">kota tujuan</label>
    <div class="controls">
        <input type="text" name="kota_tujuan" class="span3" value="<?php echo $data['nama_kota'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Tarif</label>
    <div class="controls">
        <input type="text" name="tarif" class="span3" value="<?php echo $data['tarif'];?>" required disabled>
        <p>
        <div>
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="<?php echo base_url('index.php/tarif_kota');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>
 