<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_barang');
		$this->load->library('cart');
	}
	public function detail($id){
		if(isset($id)){
			$where = array('idbarang' => $id);
		}else{
			$where= array('idbarang' => 0);
		}
		if ($data['barang']= $this->M_barang->cari_data('barang',$where)->result() and $data['spesifikasi']= $this->M_barang->cari_data('spesifikasi',$where)->result()){
			$this->load->view('template/atas');
			$this->load->view('detailproduk',$data);
			$this->load->view('template/bawah');
		}else{
			$this->load->view('template/atas');
			$this->load->view('tidakditemukan');
			$this->load->view('template/bawah');
		}
	}
	public function kategori($merk){
		if(isset($merk)){
			$where = array('merk' => $merk);
		}else{
			$where= array('merk' => 0);
		}
		if($data['barang'] = $this->M_barang->cari_data('barang',$where)->result()){
			$data['merk'] = $merk;
			$this->load->view('template/atas');
			$this->load->view('home',$data);
			$this->load->view('template/bawah');			
		}else{
			$this->load->view('template/atas');
			$this->load->view('tidakditemukan');
			$this->load->view('template/bawah');
		}
	}
	public function cari(){
		$where = $this->input->get('kata_kunci');
		if($data['barang'] = $this->M_barang->pencarian($where)->result()){
			$this->load->view('template/atas');
			$this->load->view('pencarian',$data);
			$this->load->view('template/bawah');			
		}else{
			$this->load->view('template/atas');
			$this->load->view('tidakditemukan');
			$this->load->view('template/bawah');
		}
	}
}
?>