<body>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/kantor_cabang/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Kantor Cabang</th>
                    <th>Nama Kantor Cabang</th>
                    <th>Alamat</th>
                    <th>Lokasi</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                      $no = 1;
                      foreach ($data->result() as $row) {
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->idcabang;?></td>
                        <td><?php echo $row->nama_cabang;?></td>
                        <td><?php echo $row->alamat;?></td>
                        <td><?php echo $row->lokasi_cabang;?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/kantor_cabang/edit/'.$row->idcabang);?>">edit</a>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/kantor_cabang/hapus/'.$row->idcabang);?>">delete</a>
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
    </body>
    </html>
</table>                