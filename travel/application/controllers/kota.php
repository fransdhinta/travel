<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_kota');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kota/v_datakota.php';
		$data['data'] = $this->m_kota->getdatakota(); 
		$this->load->view('home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kota/v_tambahkota.php';
		$data['provinsi']=$this->m_kota->getprovinsi();
		$this->load->view('home.php',$data);
	}

	public function simpan()
	{
		$id=$this->input->post('idkota');
		$nama_provinsi=$this->input->post('nama_provinsi');
		$nama_kota=$this->input->post('nama_kota');
		$status=$this->input->post('status');
		$cek=$this->m_kota->getdatakota($id);
										
			$info=array(
				'idkota'=>$id,
				'idprovinsi'=>$nama_provinsi,
				'nama_kota'=>$nama_kota,
				'status'=>$status,
			);
			$this->m_kota->getinsert($info);
			
			redirect('kota');		
	}
	
	public function addajaxprovinsi($idprovinsi){
		    $query = $this->db->get_where('provinsi',array('provinsi_idprovinsi'=>$idprovinsi));
		    $data = "<option value=''>- Select Provinsi -</option>";
		    foreach ($query->result() as $value) {
		    $data .= "<option value='".$value->idprovinsi."'>".$value->nama_provinsi."</option>";
		    }
		    echo $data;
		}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kota/v_editkota.php';
		$data['data']		=$this->m_kota->cekid($id)->row_array();
		$data['provinsi']=$this->m_kota->getprovinsi();
		$this->load->view('home.php',$data);

	}

	public function editproses($id)
	{ 
		$nama_provinsi=$this->input->post('nama_provinsi'); 
		$nama_kota=$this->input->post('nama_kota'); 
		$status=$this->input->post('status'); 
			$info=array(
				'idkota'=>$id,
				'idprovinsi'=>$nama_provinsi,
				'nama_kota'=>$nama_kota,
				'status'=>$status,
			);
			$this->m_kota->getupdate($info, $id);
			redirect('kota');
	
	}

public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kota/v_hapuskota.php';
		$data['data']		=$this->m_kota->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_kota->hapus($id);
			redirect('kota');
	
	}
 }