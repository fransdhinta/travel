<body>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/admin/simpan');?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Admin </label>
    <div class="controls">
        <input type="text" name="idadmin" id="idadmin" placeholder="idadmin" class="span3" required>
        </div>
        </div>
        <div class="col-md-12">Username</label>
    <div class="controls">
        <input type="text" name="username" placeholder="username" class="span3">
        </div>
        </div>

        <div class="col-md-12">Password</label>
        <div class="controls">
        <input type="text" name="password" placeholder="password" class="span3">
        </div>
        </div>

    <div class="col-md-12">Nama</label>
    <div class="controls">
        <input type="text" name="nama" placeholder="nama" class="span3">
        </div>
        </div>

    <div class="col-md-12">Alamat</label>
    <div class="controls">
        <input type="text" name="alamat" placeholder="alamat" class="span3">
        </div>
        </div>
    
    <div class="col-md-12">Tempat Lahir</label>
    <div class="controls">
        <input type="text" name="tempat_lahir" placeholder="tempat_lahir" class="span3">
        </div>
        </div>

    <div class="col-md-12">Tanggal Lahir</label>
    <div class="controls">
        <input type="date" name="tanggal_lahir" placeholder="tanggal_lahir" class="span3">
        </div>
        </div>

    <div class="col-md-12">Nomer KTP</label>
    <div class="controls">
        <input type="text" name="no_ktp" placeholder="no_ktp" class="span3">
        <p>
        <div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            <a href="<?php echo base_url('index.php/admin');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>