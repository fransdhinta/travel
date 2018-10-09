<body>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kursi/simpan');?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Kursi </label>
        <div class="controls">
            <input type="text" name="idkursi" placeholder="id kursi" class="span3" required>
        </div>
    </div>

    <!--dropdown kursi-->
        <div class="col-md-12">Kendaraan :</div>
        <div class="controls">
         &nbsp;&nbsp;&nbsp;
            <select name="merk" class="controls" id="idkendaraan" required>
            <option>- Select Kendaraan -</option>
            <?php foreach($kendaraan as $kendaraan){
                echo '<option value="'.$kendaraan->idkendaraan.'">'.$kendaraan->merk.'</option>';
            } ?>
        </select>
        </div>
    <!--ending-kursi-->

        <div class="col-md-12">Kode Kursi</label>
        <div class="controls">
        <input type="text" name="kode_kursi" placeholder="kode kursi" class="span3">
        </div>
        </div>

    <div class="col-md-12">Status</label>
    <div class="controls">
        <input type="text" name="status" placeholder="status" class="span3">
        <p>
        <div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            <a href="<?php echo base_url('index.php/kursi');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>