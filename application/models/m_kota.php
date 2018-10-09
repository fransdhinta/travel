<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kota extends CI_model {
	private $table="kota";
	private $primary="idkota";

public function getdatakota()
 {
 	$k = "SELECT
		kota.idkota,
		kota.nama_kota,
		kota.`status`,
		provinsi.nama_provinsi
		FROM
		kota ,
		provinsi
		WHERE
		provinsi.idprovinsi = kota.idprovinsi";
		return $this->db->query($k);
 }
 
public function getKotaById($idkota=""){
		return $this->db->where("idkota",$idkota)->get($this->table);
	}

public function getprovinsi() {
	$this->db->select('*');
	$this->db->from('provinsi');
	$query = $this->db->get();		
	return $query->result();
}

public function getinsert($data)
 {
 	$this->db->insert('kota',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from kota as kot ,provinsi as prov where kot.idkota ='$id' and prov.idprovinsi= kot.idprovinsi");
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
