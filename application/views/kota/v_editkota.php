
<body>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kota/editproses/'.$data['idkota']);?>" onsubmit="return cekform();">
    <div class="col-md-12">Id Kota </label>
    <div class="controls">
        <input type="text" name="idkota" placeholder="idkota" class="span3" value="<?php echo $data['idkota'];?>" required disabled>
        </div>
        </div>
        
       <!--dropdown kendaraan-->
        <div class="col-md-12">Provinsi :</div>
        <div class="controls">
         &nbsp;&nbsp;&nbsp;
            <select name="nama_provinsi" class="controls" id="idprovinsi" required>
            <option>- Select Provinsi -</option>
            <?php foreach($provinsi as $provinsi){
                echo '<option value="'.$provinsi->idprovinsi.'">'.$provinsi->nama_provinsi.'</option>';
            } ?>
        </select>
        </div>
    <!--ending-dropdown-->

    <div class="col-md-12">Kota</label>
    <div class="controls">
        <input type="text" name="nama_kota" placeholder="kota" class="span3" value="<?php echo $data['nama_kota'];?>" required>
    </div>
    </div>

    <div class="col-md-12">Status</label>
    <div class="controls">
        <input type="text" name="status" placeholder="status" class="span3" value="<?php echo $data['status'];?>" required>
        <p>
        <div>
            <button type="submit" class="btn btn-success btn-sm">Edit</button>
            <a href="<?php echo base_url('index.php/kota');?>" class="btn btn-default btn-sm">Kembali</a>
        </p>
        </div>
</form>
 