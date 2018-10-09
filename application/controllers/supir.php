<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supir extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_supir');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='supir/v_datasupir.php';
		$data['data']		=$this->db->get('supir');
		$this->load->view('home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='supir/v_tambahsupir.php';
		$this->load->view('home.php',$data);
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='supir/v_editsupir.php';
		$data['data']		=$this->m_supir->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}

	public function editproses($id)
	{
		$nama=$this->input->post('nama'); 
		$alamat=$this->input->post('alamat'); 
		$tempat_lahir=$this->input->post('tempat_lahir'); 
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$no_ktp=$this->input->post('no_ktp'); 
		$no_hp=$this->input->post('no_hp');


			$info=array(
				'idsupir'=>$id,
				'nama'=>$nama,
				'alamat'=>$alamat,
				'tempat_lahir'=>$tempat_lahir,
				'tanggal_lahir'=>$tanggal_lahir,
				'no_ktp'=>$no_ktp,
				'no_hp'=>$no_hp,
			);
			$this->m_supir->getupdate($info, $id);
			redirect('supir');
	
	}

	public function simpan()
	{
		$id=$this->input->post('isupir');
		$nama=$this->input->post('nama'); 
		$alamat=$this->input->post('alamat'); 
		$tempat_lahir=$this->input->post('tempat_lahir'); 
		$tanggal_lahir=$this->input->post('tanggal_lahir'); 
		$no_ktp=$this->input->post('no_ktp');
		$no_hp=$this->input->post('no_hp');
		$cek=$this->m_supir->getdatasupir($id);
		if($cek->num_rows()>0){ 				
			redirect('supir/tambah');
		}else { 								
			$info=array(
				'idsupir'=>$id,
				'nama'=>$nama,
				'alamat'=>$alamat,
				'tempat_lahir'=>$tempat_lahir,
				'tanggal_lahir'=>$tanggal_lahir,
				'no_ktp'=>$no_ktp,
				'no_hp'=>$no_hp,
			);
			$this->m_supir->getinsert($info);
			redirect('supir');
		}
	}


public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='supir/v_hapussupir.php';
		$data['data']		=$this->m_supir->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_supir->hapus($id);
			redirect('supir');
	
	}
 }