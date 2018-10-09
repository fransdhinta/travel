<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='dashboard/dashboard.php';
		$this->load->view('home.php',$data);
	}

	public function keberangkatan_pagi(){

		$kendaraan_pagi = $this->input->get_post("kendaraan_pagi");
		$kota_asal_pagi = $this->input->get_post("kota_asal_pagi");
		$kota_tujuan_pagi = $this->input->get_post("kota_tujuan_pagi");
		$keberangkatan_pagi = $this->input->get_post("keberangkatan_pagi");
		$kursi = $this->db->query("select * from kursi where idkendaraan ='$kendaraan_pagi'")->result();

		$pecahkeberangkatan = explode("-",$keberangkatan_pagi);
							if(count($kursi) >0):
						?>
						<table >
                          <tr>
						<?php 
						$a=0;
							foreach($kursi as $val):
							$this->db->where("kendaraan",$kendaraan_pagi);
							$this->db->where("kota_asal",$kota_asal_pagi);
							$this->db->where("kota_tujuan",$kota_tujuan_pagi);
							
							$this->db->where("month(tanggal_berangkat)='$pecahkeberangkatan[1]' and day(tanggal_berangkat)='$pecahkeberangkatan[2]' and year(tanggal_berangkat)='$pecahkeberangkatan[0]' and  hour(tanggal_berangkat) between '16' and '7'");
							
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
	

	public function keberangkatan_sore(){

		$kendaraan_sore = $this->input->get_post("kendaraan_sore");
		$kota_asal_sore = $this->input->get_post("kota_asal_sore");
		$kota_tujuan_sore = $this->input->get_post("kota_tujuan_sore");
		$keberangkatan_sore = $this->input->get_post("keberangkatan_sore");
		$kursi = $this->db->query("select * from kursi where idkendaraan ='$kendaraan_sore'")->result();

		$pecahkeberangkatan = explode("-",$keberangkatan_sore);
							if(count($kursi) >0):
						?>
						<table >
                          <tr>
						<?php 
						$a=0;
							foreach($kursi as $val):
							$this->db->where("kendaraan",$kendaraan_sore);
							$this->db->where("kota_asal",$kota_asal_sore);
							$this->db->where("kota_tujuan",$kota_tujuan_sore);
							
							$this->db->where("month(tanggal_berangkat)='$pecahkeberangkatan[1]' and day(tanggal_berangkat)='$pecahkeberangkatan[2]' and year(tanggal_berangkat)='$pecahkeberangkatan[0]' and  hour(tanggal_berangkat) between '9' and '15'");
							
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
	
}
