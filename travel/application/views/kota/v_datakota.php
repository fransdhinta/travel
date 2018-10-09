
<body>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/kota/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Kota</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Status</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                      $no = 1;
                      foreach ($data->result() as $row) {
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->idkota;?></td>
                        <td><?php echo $row->nama_provinsi;?></td>
                        <td><?php echo $row->nama_kota;?></td>
                        <td><?php echo $row->status;?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/kota/edit/'.$row->idkota);?>">edit</a>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/kota/hapus/'.$row->idkota);?>">delete</a>
                   </tr>
                </td>
            </div>
        <?php }?>
    </tbody>
    </tr>
    </tbody>
    </tr>
    </thead>
    </table>
    </div>
    </div>
   