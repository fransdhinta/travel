 <link href="<?php echo base_url('assets/plugins/bootstrap/bootstrap.css');?>" rel="stylesheet" />
<?php error_reporting(0); ?>

<div style="float:right">
<input name="b_print" type="button" class="ipt btn btn-danger"   onClick="printdiv('div_print');" value=" Print ">
</div>
<div style="float:left">
<a href="<?php echo site_url("transaksi"); ?>" class="btn btn-primary">Kembali </a>
</div>
<br>
<br>
 <div class="panel panel-default" id="div_print">
    <div class="panel-body" >
  <table class="table" >
    <tr>
	  <td style="width:10%;">  Tanggal Transaksi </td>
	  <td style="width:10%;">: <?php echo "INV/".str_replace("-","",date("d-m-Y")); ?></td>
	  <td style="width:60%;"></td>
	  <td style="width:20%;"></td>
	  
	  </tr>
	  
	   <tr>
	  <td style="width:10%;">   Pelanggan </td>
	  <td style="width:10%;">:<?php echo $this->M_transaksi->get_kondisi("idpelanggan",$val['id_pelanggan'],"pelanggan","nama"); ?></td>
	  <td style="width:60%;"></td>
	  <td style="width:20%;"></td>
	  
	  </tr>
  </table>
<div class="table-responsive">

  <table class="table">
    <tr>
	   <td>No </td>
	   <td>Tanggal Berangkat</td>
	   <td>Kota Asal</td>
	   <td>Kota Tujuan</td>
	   <td>Keberangkatan dari</td>
	   <td>Petugas</td>
	   <td>Supir</td>
	   <td>Kendaraan</td>
	   <td>Kursi</td>
	   <th>Tarif</th>
	  
	</tr>
	
	<?php 
	   
	    for($a=1;$a<=$jumlahkursi;$a++){
			
			
		?>
		     <tr>
			   <td>1</td>
			  
			   <td><?php echo $val['tanggal_berangkat'] ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idkota",$val['kota_asal'],"kota","nama_kota"); ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idkota",$val['kota_tujuan'],"kota","nama_kota"); ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idcabang",$val['keberangkatan'],"kantor_cabang","nama_cabang"); ?></td>
			   <td><?php echo $val['petugas']; ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idsupir",$val['supir'],"supir","nama"); ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idkendaraan",$val['kendaraan'],"kendaraan","merk"); ?></td>
			   <td><?php echo $this->M_transaksi->get_kondisi("idkursi",$kursi.$a,"kursi","kode_kursi"); ?></td>
			   <td><?php echo $val['bayar']; ?></td>
		     </tr>
			 
		<?php 
		}
		?>

	
  </table>
   <center > Terimakasih Telah Menggunakan Jasa Kami , Selamat Sampai Tujuan </center>
  </div>
  </div>
  
  <script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>