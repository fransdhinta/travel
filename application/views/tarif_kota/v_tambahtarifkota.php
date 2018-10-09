
<body>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/tarif_kota/simpan');?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Tarif </label>
        <div class="controls">
            <input type="text" name="idtarif" placeholder="id tarif" class="span3" required>
        </div>
    </div>

    <!--dropdown kota-->
      <div class="col-md-12">Kota Asal:</div>
        <div class="controls">
         &nbsp;&nbsp;&nbsp;
            <select name="nama_kota" class="controls" id="idkota" required>
            <option>- Select Kota Asal -</option>
            <?php foreach($kota as $kota_asal){
                echo '<option value="'.$kota_asal->idkota.'">'.$kota_asal->nama_kota.'</option>';
            } ?>
        </select>
        </div>
    <!--ending-dropdown-->

    <!--dropdown kota-->
        <div class="col-md-12">Kota Tujuan:</div>

        <div class="controls">
         &nbsp;&nbsp;&nbsp;
            <select name="kota_tujuan" class="controls" id="idkota" required>
            <option>- Select Kota Tujuan -</option>
            <?php foreach($kota as $kota_tujuan){
                echo '<option value="'.$kota_tujuan->idkota.'">'.$kota_tujuan->nama_kota.'</option>';
            } ?>
        </select>
        </div>
    <!--ending-dropdown-->


    <div class="col-md-12">tarif</label>
    <div class="controls">
        <input type="text" name="tarif" placeholder="status" class="span3">
        <p>
        <div>
             <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            <a href="<?php echo base_url('index.php/tarif_kota');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
        </div>
        </div>
</form>
   