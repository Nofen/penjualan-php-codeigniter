<?php 

class M_barang extends CI_Model{
	function tampil_data($table){
		return $this->db->get($table);
	}
	function cari_data($table,$where){
		return $this->db->get_where($table,$where);
	}
	function input_data($table,$data){
		$this->db->insert($table,$data);
	}
	function pencarian($where){
		return $this->db->query('select * from barang where tipe like "%'.$where.'%"');
	}
}


?>