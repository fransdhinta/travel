<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_kendaraan');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kendaraan/v_datakendaraan.php';
		$data['data']		=$this->db->get('kendaraan');
		$this->load->view('home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kendaraan/v_tambahkendaraan.php';
		$this->load->view('home.php',$data);
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kendaraan/v_editkendaraan.php';
		$data['data']		=$this->m_kendaraan->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}

	public function editproses($id)
	{ 
		$merk=$this->input->post('merk'); 
		$status=$this->input->post('status'); 
			$info=array(
				'idkendaraan'=>$id,
				'merk'=>$merk,
				'status'=>$status,
			);
			$this->m_kendaraan->getupdate($info, $id);
			redirect('kendaraan');
	
	}

	public function simpan()
	{
		$id=$this->input->post('idkendaraan');
		$merk=$this->input->post('merk');
		$status=$this->input->post('status');
		$cek=$this->m_kendaraan->getdatakendaraan($id);
		if($cek->num_rows()>0){ 				
			redirect('kendaraan/tambah');
		}else { 								
			$info=array(
				'idkendaraan'=>$id,
				'merk'=>$merk,
				'status'=>$status,
			);
			$this->m_kendaraan->getinsert($info);
			redirect('kendaraan');
		}
	}


public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kendaraan/v_hapuskendaraan.php';
		$data['data']		=$this->m_kendaraan->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_kendaraan->hapus($id);
			redirect('kendaraan');
	
	}
 }