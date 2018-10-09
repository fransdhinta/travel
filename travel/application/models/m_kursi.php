<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kursi extends CI_model {
	private $table="kursi";
	private $primary="idkursi";

public function getdatakursi()
 {
 	$k = "SELECT
		kursi.idkursi,
		kursi.kode_kursi,
		kursi.`status`,
		kendaraan.merk
		FROM
		kursi,kendaraan
		WHERE
		kendaraan.idkendaraan = kursi.idkendaraan";
		return $this->db->query($k);
 }

public function getkendaraan() {
	$this->db->select('*');
	$this->db->from('kendaraan');
	$query = $this->db->get();		
	return $query->result();
}

public function getinsert($data)
 {
 	$this->db->insert('kursi',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from kursi as kurs ,kendaraan as kendr where kurs.idkursi ='$id' and kendr.idkendaraan= kurs.idkendaraan");
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
