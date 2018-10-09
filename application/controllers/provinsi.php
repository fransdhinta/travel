<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_provinsi');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='provinsi/v_dataprovinsi.php';
		$data['data']		=$this->db->get('provinsi');
		$this->load->view('home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='provinsi/v_tambahprovinsi.php';
		$this->load->view('home.php',$data);
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='provinsi/v_editprovinsi.php';
		$data['data']		=$this->m_provinsi->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}

	public function editproses($id)
	{ 
		$nama_provinsi=$this->input->post('nama_provinsi'); 
		$status=$this->input->post('status'); 
			$info=array(
				'idprovinsi'=>$id,
				'nama_provinsi'=>$nama_provinsi,
				'status'=>$status,
			);
			$this->m_provinsi->getupdate($info, $id);
			redirect('provinsi');
	
	}

	public function simpan()
	{
		$id=$this->input->post('idprovinsi');
		$nama_provinsi=$this->input->post('nama_provinsi');
		$status=$this->input->post('status');
		$cek=$this->m_provinsi->getdataprovinsi($id);
		if($cek->num_rows()>0){ 				
			redirect('provinsi/tambah');
		}else { 								
			$info=array(
				'idprovinsi'=>$id,
				'nama_provinsi'=>$nama_provinsi,
				'status'=>$status,
			);
			$this->m_provinsi->getinsert($info);
			redirect('provinsi');
		}
	}


public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='provinsi/v_hapusprovinsi.php';
		$data['data']		=$this->m_provinsi->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_provinsi->hapus($id);
			redirect('provinsi');
	
	}
 }