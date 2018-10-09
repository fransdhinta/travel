<body>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/supir/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id supir</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Nomer KTP</th>
                    <th>Nomer Hp</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                      $no = 1;
                      foreach ($data->result() as $row) {
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->idsupir;?></td>
                        <td><?php echo $row->nama;?></td>
                        <td><?php echo $row->alamat;?></td>
                        <td><?php echo $row->tempat_lahir;?></td>
                        <td><?php echo $row->tanggal_lahir;?></td>
                        <td><?php echo $row->no_ktp;?></td>
                        <td><?php echo $row->no_hp;?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/supir/edit/'.$row->idsupir);?>">edit</a>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/supir/hapus/'.$row->idsupir);?>">delete</a>
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
    <script src="<?php echo base_url('assets/plugins/jquery-1.10.2.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.js');?>"></script>
    <script src="<?php echo base_url('assets/scripts/siminta.js');?>"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url('assets/plugins/dataTables/jquery.dataTables.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/dataTables/dataTables.bootstrap.js');?>"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    </body>
    </html>
</table>                