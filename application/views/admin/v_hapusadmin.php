
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/admin/hapusproses/'.$data['idadmin']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Admin </label>
    <div class="controls">
        <input type="text" name="idadmin" placeholder="idadmin" class="span3" value="<?php echo $data['idadmin'];?>" required disabled>
    </div>
    </div>
    <div class="col-md-12">Username</label>
    <div class="controls">
        <input type="text" name="username" placeholder="username" class="span3" value="<?php echo $data['username'];?>" required disabled>
    </div>
    </div>

    <div class="col-md-12">Password</label>
    <div class="controls">
        <input type="text" name="password" placeholder="password" class="span3" value="<?php echo $data['password'];?>" required disabled>
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

        <p>
        <div>
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            <a href="<?php echo base_url('index.php/admin');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>
