<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_model {
	private $table="pelanggan";
	private $primary="idpelanggan";

 public function getdatapelanggan($key)
 {
 	$k=$this->db->query("select*from pelanggan where idpelanggan ='$key'");
 	return $k;
 	
 }

 public function getinsert($data)
 {
 	$this->db->insert('pelanggan',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from pelanggan where idpelanggan ='$id'");
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