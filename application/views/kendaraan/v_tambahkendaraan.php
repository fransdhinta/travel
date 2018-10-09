
<body>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kendaraan/simpan');?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Kendaraan </label>
    <div class="controls">
        <input type="text" name="idkendaraan" placeholder="id kendaraan" class="span3" required>
        </div>
        </div>
    <div class="col-md-12">Merk</label>
    <div class="controls">
        <input type="text" name="merk" placeholder="merk" class="span3">
        </div>
        </div>

    <div class="col-md-12">Status</label>
    <div class="controls">
        <input type="text" name="status" placeholder="status" class="span3">
        <p>
        <div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            <a href="<?php echo base_url('index.php/kendaraan');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>
   