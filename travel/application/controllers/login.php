<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 public function __construct()
      {
        parent::__construct();

      } 

	public function index()
	{		
	$this->load->view("login");	
	}
	
	public function do_login(){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = $this->db->query("select * from admin where username='$username' and password='$password'")->row_array();
		
		if(count($sql) >0){
			$newdata = array(
			'id'           => $sql['idadmin'],
			'username'     => $sql['username'],
			'nama'    	   => $sql['nama']
			);
			$this->session->set_userdata($newdata);
			redirect(base_url()."home");
		}else{
			$this->load->view("login");
		}
	}
	function logout(){
		
		$this->session->sess_destroy();
		$this->load->view("login");
	}
}
