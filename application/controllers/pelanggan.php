<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_pelanggan');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='pelanggan/v_datapelanggan.php';
		$data['data']		=$this->db->get('pelanggan');
		$this->load->view('home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='pelanggan/v_tambahpelanggan.php';
		$this->load->view('home.php',$data);
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='pelanggan/v_editpelanggan.php';
		$data['data']		=$this->m_pelanggan->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}

	public function editproses($id)
	{
		$nama=$this->input->post('nama'); 
		$alamat=$this->input->post('alamat'); 
		$no_ktp=$this->input->post('no_ktp'); 
		$no_hp=$this->input->post('no_hp');

			$info=array(
				'idpelanggan'=>$id,
				'nama'=>$nama,
				'alamat'=>$alamat,
				'no_ktp'=>$no_ktp,
				'no_hp'=>$no_hp,
			);
			$this->m_pelanggan->getupdate($info, $id);
			redirect('pelanggan');
	
	}

	public function simpan()
	{
		$id=$this->input->post('idpelanggan');
		$nama=$this->input->post('nama'); 
		$alamat=$this->input->post('alamat'); 
		$no_ktp=$this->input->post('no_ktp');
		$no_hp=$this->input->post('no_hp');
		$cek=$this->m_pelanggan->getdatapelanggan($id);
		if($cek->num_rows()>0){ 				
			redirect('pelanggan/tambah');
		}else { 								
			$info=array(
				'idpelanggan'=>$id,
				'nama'=>$nama,
				'alamat'=>$alamat,
				'no_ktp'=>$no_ktp,
				'no_hp'=>$no_hp,
			);
			$this->m_pelanggan->getinsert($info);
			redirect('pelanggan');
		}
	}


public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='pelanggan/v_hapuspelanggan.php';
		$data['data']		=$this->m_pelanggan->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_pelanggan->hapus($id);
			redirect('pelanggan');
	
	}
 }