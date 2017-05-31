<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_barang');
		$this->load->library('cart');
		$this->load->helper('form');
	}
	public function index()
	{
		$this->load->view('template/atas');
		$this->load->view('cart');
		$this->load->view('template/bawah');
	}
	public function addcart($id)
	{
		$where = array('idbarang' => $id);
		$cari= $this->M_barang->cari_data('barang',$where)->result();
		if ($cari){
			foreach ($cari as $row){
				$data['barang'] = array(
		        'id'      => $row->idbarang,
		        'qty'     => 1,
		        'price'   => $row->harga,
		        'name'    => $row->merk." ".$row->tipe,
				);
			}
			$this->cart->insert($data['barang']);
			$this->load->view('template/atas');
			$this->load->view('addcart',$data);
			$this->load->view('template/bawah');
		}
		else{
			$this->load->view('template/atas');
			$this->load->view('gagaladdcart');
			$this->load->view('template/bawah');
		}
	}
	public function delcart($rowid)
	{
		if ($rowid=='destroy')
			$this->cart->destroy();
		else
			$this->cart->remove($rowid);
		redirect('cart/');
	}
	public function updatecart()
	{
		for ($i=1;$i <= $this->cart->total_items();$i++){
			$rowid = $this->input->post($i.'[rowid]');
			$qty = $this->input->post($i.'[qty]');
			$data = array(
        			'rowid' => $rowid,
        			'qty'   => $qty );
			if ($data['qty'] < 1)
				break;
			else
				$this->cart->update($data);
		}
		redirect('cart/');
	}
}
