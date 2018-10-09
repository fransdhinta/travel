<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kantor_cabang extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_kantor_cabang');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kantor_cabang/v_datakantorcabang.php';
		$data['data']		=$this->db->get('kantor_cabang');
		$this->load->view('home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kantor_cabang/v_tambahkantorcabang.php';
		$this->load->view('home.php',$data);
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kantor_cabang/v_editkantorcabang.php';
		$data['data']		=$this->m_kantor_cabang->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}

	public function editproses($id)
	{
		$nama_cabang=$this->input->post('nama_cabang'); 
		$alamat=$this->input->post('alamat'); 
		$lokasi_cabang=$this->input->post('lokasi_cabang');  

			$info=array(
				'idcabang'=>$id,
				'nama_cabang'=>$nama_cabang,
				'alamat'=>$alamat,
				'lokasi_cabang'=>$lokasi_cabang,
			);
			$this->m_kantor_cabang->getupdate($info, $id);
			redirect('kantor_cabang');
	
	}

	public function simpan()
	{
		$id=$this->input->post('idcabang');
		$nama_cabang=$this->input->post('nama_cabang'); 
		$alamat=$this->input->post('alamat'); 
		$lokasi_cabang=$this->input->post('lokasi_cabang');  
		$cek=$this->m_kantor_cabang->getdatacabang($id);
		if($cek->num_rows()>0){ 				
			redirect('kantor_cabang/tambah');
		}else { 								
			$info=array(
				'idcabang'=>$id,
				'nama_cabang'=>$nama_cabang,
				'alamat'=>$alamat,
				'lokasi_cabang'=>$lokasi_cabang,
			);
			$this->m_kantor_cabang->getinsert($info);
			redirect('kantor_cabang');
		}
	}


public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kantor_cabang/v_hapuskantorcabang.php';
		$data['data']		=$this->m_kantor_cabang->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_kantor_cabang->hapus($id);
			redirect('kantor_cabang');
	
	}
 }