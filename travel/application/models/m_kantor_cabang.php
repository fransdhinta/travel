<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kantor_cabang extends CI_model {
	private $table="kantor_cabang";
	private $primary="idcabang";

 public function getdatacabang($key)
 {
 	$k=$this->db->query("select*from Kantor_cabang where idcabang ='$key'");
 	return $k;
 	
 }

 public function getinsert($data)
 {
 	$this->db->insert('kantor_cabang',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from kantor_cabang where idcabang ='$id'");
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