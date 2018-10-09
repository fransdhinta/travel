
<body>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/provinsi/editproses/'.$data['idprovinsi']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Provinsi </label>
    <div class="controls">
        <input type="text" name="idprovinsi" placeholder="id provinsi" class="span3" value="<?php echo $data['idprovinsi'];?>" required disabled>
        </div>
        </div>

    <div class="col-md-12">Nama</label>
    <div class="controls">
        <input type="text" name="nama_provinsi" placeholder="nama" class="span3" value="<?php echo $data['nama_provinsi'];?>" required>
        </div>
        </div>

    <div class="col-md-12">Status</label>
    <div class="controls">
        <input type="text" name="status" placeholder="status" class="span3" value="<?php echo $data['status'];?>" required>
        <p>
        <div>
            <button type="submit" class="btn btn-success btn-sm">Edit</button>
            <a href="<?php echo base_url('index.php/provinsi');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
</form>
  