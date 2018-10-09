<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_supir extends CI_model {
	private $table="supir";
	private $primary="idsupir";

 public function getdatasupir($key)
 {
 	$k=$this->db->query("select*from supir where idsupir ='$key'");
 	return $k;
 	
 }

 public function getinsert($data)
 {
 	$this->db->insert('supir',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from supir where idsupir ='$id'");
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