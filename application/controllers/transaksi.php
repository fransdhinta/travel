<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('M_transaksi');
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='transaksi/v_form.php';
	    $data['kota']		= $this->db->get("kota")->result();
	    $data['kantor']		= $this->db->get("kantor_cabang")->result();
	    $data['supir']		= $this->db->get("supir")->result();
	    $data['mobil']		= $this->db->get("kendaraan")->result();
	    $data['kursi']		= $this->db->get("kendaraan")->result();
		$this->load->view('home.php',$data);
	}
	
	
	public function datapagi()
	{	
		$data['menu']		='menu.php';
		$data['content']	='transaksi/v_data.php';
	    $data['transaksi']  = $this->db->query("select * from transaksi where pukul_berangkat between  '00:00' and '16:00'")->result();
		$this->load->view('home.php',$data);
	}

	public function datasore()
	{	
		$data['menu']		='menu.php';
		$data['content']	='transaksi/v_data.php';
	    $data['transaksi']  = $this->db->query("select * from transaksi where pukul_berangkat between  '16:01' and '23:59'")->result();
	$this->load->view('home.php',$data);
	}
	
	public function pelanggan(){
		
		
		
		$data['pelanggan'] 	= $this->db->get("pelanggan")->result();
		
		$this->load->view("transaksi/v_pelanggan",$data);
		
		
	}
	
	public function tarif(){
		
		$kota_asal = $this->input->get_post("kota_asal");
		$kota_tujuan = $this->input->get_post("kota_tujuan");
		
		$sql =$this->db->query("select tarif from tarif_kota kota where kota_asal='$kota_asal' and kota_tujuan='$kota_tujuan'")->row();
		if(count($sql)>0){
			
			echo $sql->tarif;
		}else{
			
			echo "Belum tersedia";
		}
		
		
	}
	
	public function kendaraan(){
		
		$kendaraan = $this->input->get_post("kendaraan");
		$kota_asal = $this->input->get_post("kota_asal");
		$kota_tujuan = $this->input->get_post("kota_tujuan");
		$keberangkatan = $this->input->get_post("keberangkatan");
		$tanggal_berangkat = $this->input->get_post("tanggal_berangkat");
		$supir = $this->input->get_post("supir");
		
							$this->db->where("kota_asal",$kota_asal);
							$this->db->where("kota_tujuan",$kota_tujuan);
							$this->db->where("keberangkatan",$keberangkatan);
							$this->db->where("tanggal",date("Y-m-d"));
							$this->db->where("supir",$supir);
							
							
							$cek = $this->db->get("transaksi")->result();
							
							$kursiku = "";
							
							    if(count($cek) >0):
								
									foreach($cek as $val){
										
										 $kursiku .=",".$val->kursi;
										
										
									}
									
									$kursiku = substr($kursiku,1);
									
								endif;
								$where ="";
									if($kursiku !=""){
										
										$where ="and idkursi not in($kursiku)";
										
									}
		
		$kursi = $this->db->query("select * from kursi where idkendaraan ='$kendaraan' $where")->result();
		
		       if(count($kursi) >0):
												 
					foreach($kursi as $val):
													
						 ?><option value="<?php echo $val->idkursi; ?>"><?php echo $val->kode_kursi; ?></option><?php
					endforeach;
				 endif;
		
		 
		
		
	}
	
	public function save(){
		
		$data['val'] = $this->input->get_post("form");

		$tanggal_berangkat = $data['val']['tanggal_berangkat'];
		$split     		   = explode(" ",$tanggal_berangkat);
		$pukul_berangkat = $split[1];
		$split2     		   = explode(":",$pukul_berangkat);
		$pukul_berangkat = $split2[0].":".$split2[1];

		
	    $aksi               = $this->input->get_post("simpan",TRUE); 
	    $jumlahkursi        = $this->input->get_post("jumlahkursi",TRUE); 
		$data['jumlahkursi']= $jumlahkursi;
		$this->db->set("pukul_berangkat",$pukul_berangkat);
		 for($a=1;$a<=$jumlahkursi;$a++){
			 
			  $kursi        = $this->input->get_post("kursi".$a."",TRUE); 
			  $data['kursi'.$a.''] = $kursi;
			  $this->db->set("kursi",$kursi);
			  $this->db->insert("transaksi",$data['val']);
			 
		 }
		 
		
		
		if($aksi=="cetak"){
			 
			  $this->load->view("transaksi/v_cetak",$data);
			
		}else{
			
			  redirect(base_url()."transaksi/datapagi");
			
		}
		
		
		
		
	}
	
	public function cek_kursi(){
		
		$kendaraan = $this->input->get_post("kendaraan");
		$kota_asal = $this->input->get_post("kota_asal");
		$kota_tujuan = $this->input->get_post("kota_tujuan");
		$keberangkatan = $this->input->get_post("keberangkatan");
		$tanggal_berangkat = $this->input->get_post("tanggal_berangkat");
		$supir = $this->input->get_post("supir");
		$kursi = $this->db->query("select * from kursi where idkendaraan ='$kendaraan'")->result();
		
		       
		if(count($kursi) >0):
						?>
						<table >
                          <tr>
						<?php 
						$a=0;
							foreach($kursi as $val):
							$this->db->where("kendaraan",$kendaraan);
							$this->db->where("kota_asal",$kota_asal);
							$this->db->where("kota_tujuan",$kota_tujuan);
							$this->db->where("keberangkatan",$keberangkatan);
							$this->db->where("tanggal",date("Y-m-d"));
							$this->db->where("supir",$supir);
							$this->db->where("kursi",$val->idkursi);
							
							$cek = $this->db->get("transaksi")->num_rows();
							  if($cek >0){
								  
								  $warna = "border:1px;background-color: #8B0000;width:30px;height:30px;text-align:center;color:white";
							  }else{
								  
								   $warna = "border:1px;background-color:#4169E1;width:30px;height:30px;text-align:center;color:white";
							  }
								$a++;
							        if($a==2){
													  
									   echo "</tr><tr><td><br></td></tr><tr>";
														  
														  
														  
									  }else
												   
									   if($a %4==1){
										 echo "</tr><tr><td><br></td></tr><tr>";
													   
									 }						
						 ?>
									
								  <td> <div style="<?php echo $warna; ?>"><?php echo $val->kode_kursi; ?></div> </td>
								   <td> &nbsp; </td>
											
								
						 
						 <?php 
					endforeach;
					?>  </tr></table> <?php 
		    endif;
		
		
	}
	
	
	function hapus(){
		
		$id = $_GET['id'];
		
		$this->db->where("id",$id);
		$this->db->delete("transaksi");
		
		redirect(base_url()."transaksi/data");
		
	}

	public function cetak()
	{
		$id = $_GET['id'];
		$data['transaksi']  = $this->db->query("select * from transaksi where id = '$id' order by tanggal desc")->row();
		$this->load->view('transaksi/v_cetaklaporan.php',$data);
	}

	
	
	public function laporan()
	{	
		$data['menu']		='menu.php';
		$data['content']	='transaksi/v_laporan.php';
	    $data['transaksi']  = $this->db->query("select * from transaksi order by tanggal desc")->result();
		$this->load->view('home.php',$data);
	}
	
		public function cari()
	{	
		$data['menu']		='menu.php';
		$data['content']	='transaksi/v_laporan.php';
		$tanggal1 			= isset($_POST['tanggal1']) ? $_POST['tanggal1']:die("Isi Tanggal");
		$export 			= isset($_POST['export']) ? $_POST['export']:"";
		
		$tanggal2			= $_POST['tanggal2'];
		
		$data['tanggal1']	= $tanggal1;
		$data['tanggal2']	= $tanggal2;
	    $data['transaksi']  = $this->db->query("select * from transaksi where tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc")->result();
		
		if($export==1){
			$this->load->view('transaksi/v_excel.php',$data);
			
		}else{
			$this->load->view('home.php',$data);
			
		}
		
	}
 }