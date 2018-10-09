<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_model {
	private $table="transaksi";
	private $primary="idsupir";

    function get_kondisi($where,$id,$table,$kolom){
		
		$this->db->where($where,$id);
		$sql = $this->db->get($table)->row();
		  if(count($sql) >0){
			  
			  return $sql->$kolom;
		  }
		
		
	}
}