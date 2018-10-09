
<body>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/kursi/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Kursi</th>
                    <th>Kendaraan</th>
                    <th>Kode Kursi</th>
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
                        <td><?php echo $row->idkursi;?></td>
                        <td><?php echo $row->merk;?></td>
                        <td><?php echo $row->kode_kursi;?></td>
                        <td><?php echo $row->status;?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/kursi/edit/'.$row->idkursi);?>">edit</a>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/kursi/hapus/'.$row->idkursi);?>">delete</a>
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
    