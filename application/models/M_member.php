<?php 

class M_member extends CI_Model{
	function input_data($table,$data){
		$this->db->insert($table,$data);
	}
	function cari_data($table,$where){
		return $this->db->get_where($table,$where);
	}
}
?>