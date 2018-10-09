 <link href="<?php echo base_url('assets/plugins/bootstrap/bootstrap.css');?>" rel="stylesheet" />

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
<left><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lia Jaya Sentosa Tour Dan Travel</h4></left>
<hr></hr>
      <tr>
	  <td width="20%">  Tanggal Transaksi </td>
	  <td ><?php echo $transaksi->tanggal;?></td>
	  </tr>

	  <tr>
	  <td width="20%">  Pelanggan </td>
	  <td ><?php echo $this->M_transaksi->get_kondisi("idpelanggan",$transaksi->id_pelanggan,"pelanggan","nama"); ?></td>
	  </tr>

	  <tr>
	  <td width="20%">  Tanggal Keberangkatan </td>
	  <td ><?php echo $transaksi->tanggal_berangkat;?></td>
	  </tr>

	  <tr>
	  <td width="20%">  Kota Asal </td>
	  <td ><?php echo $this->M_transaksi->get_kondisi("idkota",$transaksi->kota_asal,"kota","nama_kota"); ?></td>
	  </tr>

	  <tr>
	  <td width="20%"> Kota Tujuan </td>
	  <td ><?php echo $this->M_transaksi->get_kondisi("idkota",$transaksi->kota_tujuan,"kota","nama_kota"); ?></td>
	  </tr>

	  <tr>
	  <td width="20%">  Keberangkatan Dari </td>
	  <td ><?php echo $this->M_transaksi->get_kondisi("idcabang",$transaksi->keberangkatan,"kantor_cabang","nama_cabang"); ?></td>
	  </tr>

	  <tr>
	  <td width:"20%">  Petugas </td>
	  <td ><?php echo $transaksi->petugas;?></td>
	  </tr>

	  <tr>
	  <td width="20%">  Supir </td>
	  <td ><?php echo $this->M_transaksi->get_kondisi("idsupir",$transaksi->supir,"supir","nama"); ?></td>
	  </tr>
	  
	  <tr>
	  <td width="20%">  Kendaraan </td>
	  <td ><?php echo $this->M_transaksi->get_kondisi("idkendaraan",$transaksi->kendaraan,"kendaraan","merk"); ?></td>
	  </tr>

	  <tr>
	  <td width="20%">  Kursi </td>
	  <td ><?php echo $this->M_transaksi->get_kondisi("idkursi",$transaksi->kursi,"kursi","kode_kursi"); ?></td>
	  </tr>

	  <tr>
	  <td width="20%">  Bayar </td>
	  <td><?php echo $transaksi->bayar;?></td>
	  </tr>
  </table>
   <left > Terimakasih Telah Menggunakan Jasa Kami , Selamat Sampai Tujuan </left>
  </div>
  </div>
	  </tr>
  </table>

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