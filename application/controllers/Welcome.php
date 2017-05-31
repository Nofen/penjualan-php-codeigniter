<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_barang');
		$this->load->library('cart');
	}
	public function index()
	{
		$data['barang'] = $this->M_barang->tampil_data('barang')->result();
		$this->load->view('template/atas');
		$this->load->view('home',$data);
		$this->load->view('template/bawah');
	}
}
?>