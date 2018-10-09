<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_provinsi extends CI_model {
	private $table="provinsi";
	private $primary="idprovinsi";

 public function getdataprovinsi($key)
 {
 	$k=$this->db->query("select*from provinsi where idprovinsi ='$key'");
 	return $k;
 	
 }

 public function getinsert($data)
 {
 	$this->db->insert('provinsi',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from provinsi where idprovinsi ='$id'");
 	return $k;
 	
 }
 function getupdate($info, $id){
        $this->db->where($this->primary, $id);
		$this->db->update($this->table, $info);
    }
public function hapus($id){
        $this->db->where($this->primary, $id);
		$this->db->delete($this->table);
    }
}