
<body>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/kendaraan/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Kendaraan</th>
                    <th>Merk</th>
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
                        <td><?php echo $row->idkendaraan;?></td>
                        <td><?php echo $row->merk;?></td>
                        <td><?php echo $row->status;?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/kendaraan/edit/'.$row->idkendaraan);?>">edit</a>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/kendaraan/hapus/'.$row->idkendaraan);?>">delete</a>
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
    