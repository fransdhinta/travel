<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kursi extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_kursi');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kursi/v_datakursi.php';
		$data['data'] = $this->m_kursi->getdatakursi(); 
		$this->load->view('home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kursi/v_tambahkursi.php';
		$data['kendaraan']=$this->m_kursi->getkendaraan();
		$this->load->view('home.php',$data);
	}

	public function simpan()
	{
		$id=$this->input->post('idkursi');
		$merk=$this->input->post('merk');
		$kode_kursi=$this->input->post('kode_kursi');
		$status=$this->input->post('status');
		$cek=$this->m_kursi->getdatakursi($id);
										
			$info=array(
				'idkursi'=>$id,
				'idkendaraan'=>$merk,
				'kode_kursi'=>$kode_kursi,
				'status'=>$status,
			);
			$this->m_kursi->getinsert($info);
			
			redirect('kursi');
	}
	
	public function addajaxkendaraan($idkendaraan){
		    $query = $this->db->get_where('kendaraan',array('kendaraan_idkendaraan'=>$idkendaraan));
		    $data = "<option value=''>- Select Kendaraan -</option>";
		    foreach ($query->result() as $value) {
		    $data .= "<option value='".$value->idkendaraan."'>".$value->merk."</option>";
		    }
		    echo $data;
		}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kursi/v_editkursi.php';
		$data['data']		=$this->m_kursi->cekid($id)->row_array();
		$data['kendaraan']	=$this->m_kursi->getkendaraan();
		$this->load->view('home.php',$data);

	}

	public function editproses($id)
	{ 
		$id=$this->input->post('idkursi');
		$merk=$this->input->post('merk');
		$kode_kursi=$this->input->post('kode_kursi');
		$status=$this->input->post('status');
			$info=array(
				'idkursi'=>$id,
				'idkendaraan'=>$merk,
				'kode_kursi'=>$kode_kursi,
				'status'=>$status,
			);
			$this->m_kursi->getupdate($info, $id);
			redirect('kursi');
	
	}

public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kursi/v_hapuskursi.php';
		$data['data']		=$this->m_kursi->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_kursi->hapus($id);
			redirect('kursi');
	
	}
 }