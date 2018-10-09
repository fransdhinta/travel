<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kendaraan extends CI_model {
	private $table="kendaraan";
	private $primary="idkendaraan";

 public function getdatakendaraan($key)
 {
 	$k=$this->db->query("select*from kendaraan where idkendaraan ='$key'");
 	return $k;
 	
 }

 public function getinsert($data)
 {
 	$this->db->insert('kendaraan',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from kendaraan where idkendaraan ='$id'");
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