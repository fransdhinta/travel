<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_admin');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='admin/v_dataadmin.php';
		$data['data']		=$this->db->get('admin');
		$this->load->view('home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='admin/v_tambahadmin.php';
		$this->load->view('home.php',$data);
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='admin/v_editadmin.php';
		$data['data']		=$this->m_admin->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}

	public function editproses($id)
	{
		$username=$this->input->post('username'); 
		$password=$this->input->post('password'); 
		$nama=$this->input->post('nama'); 
		$alamat=$this->input->post('alamat'); 
		$tempat_lahir=$this->input->post('tempat_lahir'); 
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$no_ktp=$this->input->post('no_ktp'); 

			$info=array(
				'idadmin'=>$id,
				'username'=>$username,
				'password'=>$password,
				'nama'=>$nama,
				'alamat'=>$alamat,
				'tempat_lahir'=>$tempat_lahir,
				'tanggal_lahir'=>$tanggal_lahir,
				'no_ktp'=>$no_ktp,
			);
			$this->m_admin->getupdate($info, $id);
			redirect('admin');
	
	}

	public function simpan()
	{
		$id=$this->input->post('idadmin');
		$username=$this->input->post('username'); 
		$password=$this->input->post('password'); 
		$nama=$this->input->post('nama'); 
		$alamat=$this->input->post('alamat'); 
		$tempat_lahir=$this->input->post('tempat_lahir'); 
		$tanggal_lahir=$this->input->post('tanggal_lahir'); 
		$no_ktp=$this->input->post('no_ktp');
		$cek=$this->m_admin->getdataadmin($id);
		if($cek->num_rows()>0){ 				
			redirect('admin/tambah');
		}else { 								
			$info=array(
				'idadmin'=>$id,
				'username'=>$username,
				'password'=>$password,
				'nama'=>$nama,
				'alamat'=>$alamat,
				'tempat_lahir'=>$tempat_lahir,
				'tanggal_lahir'=>$tanggal_lahir,
				'no_ktp'=>$no_ktp,
			);
			$this->m_admin->getinsert($info);
			redirect('admin');
		}
	}


public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='admin/v_hapusadmin.php';
		$data['data']		=$this->m_admin->cekid($id)->row_array();
		$this->load->view('home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_admin->hapus($id);
			redirect('admin');
	
	}
	
	public function hak_akses(){
		
		$data['id_admin'] = $this->input->get_post("id");
		$data['menu']	  = $this->db->get("menu")->result();
		$this->load->view("admin/v_menu",$data);
		
		
		
	}
	
	public function akses(){
		
		$data['id_admin'] = $this->input->get_post("id_admin");
		$data['id_menu']  = $this->input->get_post("id_menu");
		$data['val']      = $this->input->get_post("val");
		
		$this->db->query("delete from hak_akses_admin where id_admin='".$data['id_admin']."' and id_menu='".$data['id_menu']."'");
		
		if($data['val']=='true'){
			
		$this->db->query("insert into  hak_akses_admin set id_admin='".$data['id_admin']."' , id_menu='".$data['id_menu']."'");
		
		}
		
	}
 }