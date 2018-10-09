<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif_kota extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_tarifkota');
        
    }

	public function index()
	{	
		$this->load->model('m_kota');
		$data['menu']		='menu.php';
		$data['content']	='tarif_kota/v_datatarifkota.php';
		$data['data'] = $this->m_tarifkota->getdatatarif(); 
		$this->load->view('home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='tarif_kota/v_tambahtarifkota.php';
		$data['kota']=$this->m_tarifkota->getkota();
		$this->load->view('home.php',$data);
	}

	public function simpan()
	{
		$id=$this->input->post('idtarif');
		$kota_asal=$this->input->post('nama_kota');
		$kota_tujuan=$this->input->post('kota_tujuan');
		$tarif=$this->input->post('tarif');
										
			$info=array(
				'idtarif'=>$id,
				'kota_asal'=>$kota_asal,
				'kota_tujuan'=>$kota_tujuan,
				'tarif'=>$tarif,
			);
			$this->m_tarifkota->getinsert($info);
			redirect('tarif_kota');
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='tarif_kota/v_edittarifkota.php';
		$data['data']		=$this->m_tarifkota->cekid($id)->row_array();
		$data['kota']		=$this->m_tarifkota->getkota();

		$this->load->view('home.php',$data);

	}

	public function editproses($id)
	{ 
		$id=$this->input->post('idtarif');
		$kota_asal=$this->input->post('nama_kota');
		$kota_tujuan=$this->input->post('kota_tujuan');
		$tarif=$this->input->post('tarif');
										
			$info=array(
				'idtarif'=>$id,
				'kota_asal'=>$kota_asal,
				'kota_tujuan'=>$kota_tujuan,
				'tarif'=>$tarif,
			);
			$this->m_tarifkota->getupdate($info, $id);
			redirect('tarif_kota');
	
	}

public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='tarif_kota/v_hapustarifkota.php';
		$data['data']		=$this->m_tarifkota->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_tarifkota->hapus($id);
			redirect('tarif_kota');
	
	}
 }