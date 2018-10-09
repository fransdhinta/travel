<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tarifkota extends CI_model {
	private $table="tarif_kota";
	private $primary="idtarif";

	public function getdatatarif(){
		return $this->db->get("tarif_kota");
	}

	public function getKotaById($idkota=""){
		return $this->db->where("idkota",$idkota)->get($this->table);
	}
	public function getkota() {
	$this->db->select('*');
	$this->db->from('kota');
	$query = $this->db->get();		
	return $query->result();
	}

	public function getinsert($data){
		$this->db->insert('tarif_kota',$data);
	}

	public function cekid($id){
		$id=$this->db->query("select * from tarif_kota join kota on tarif_kota.idtarif=kota.idkota");
		return $id;
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
