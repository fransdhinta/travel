
<body>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/tarif_kota/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Tarif</th>
                    <th>Kota Asal</th>
                    <th>Kota Tujuan</th>
                    <th>Tarif</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
						$no = 1;
						foreach ($data->result() as $row) {
							$kota_asal	= $this->m_kota->getKotaById($row->kota_asal)->row_array();
							$kota_tujuan	= $this->m_kota->getKotaById($row->kota_tujuan)->row_array();
						?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->idtarif;?></td>
                        <td><?php echo $kota_asal['nama_kota'];?></td>
                        <td><?php echo $kota_tujuan['nama_kota'];?></td>
                        <td><?php echo $row->tarif;?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/tarif_kota/edit/'.$row->idtarif);?>">edit</a>
                            <a class="btn btn-primary" href="<?php echo base_url('index.php/tarif_kota/hapus/'.$row->idtarif);?>">delete</a>
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