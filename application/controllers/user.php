<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_supir');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='user/v_data.php';
		$data['user']		= $this->db->get('admin')->result();
		$this->load->view('home.php',$data);
	}
	public function form()
	{	
		$data['menu']		='menu.php';
		$data['content']	='user/v_form.php';
		$this->load->view('home.php',$data);
	}

	public function save(){
		
		
		$form = $_POST['form'];
		$this->db->insert("admin",$form);
		
		redirect(base_url()."user");
	}
	
	public function hapus(){
		
		$id = $_GET['id'];
		
		$this->db->where("idadmin",$id);
		$this->db->delete("admin");
		redirect(base_url()."user");
	}
 }