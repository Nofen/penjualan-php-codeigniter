<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('admin/inputbarang');
		$this->load->view('template/bawah');
	}
	public function simpandatabarang()
	{
		$this->db->trans_begin();
		$barang = array();
		$spesifikasi = array();
		$barang['merk'] = $this->input->post('merk');
		$barang['tipe'] = $this->input->post('tipe');
		$barang['harga'] = $this->input->post('harga');
		$config['upload_path']	= './assets/gambar/produk/';
	    $config['allowed_types']= 'jpg';
	    $config['max_size']		= 300;
	    $config['max_width']	= 1366;
	    $config['max_height']	= 768;
	    $config['remove_spaces']= TRUE;
	    $config['file_name']	= $barang['merk'].$barang['tipe'];
		$barang['foto'] = $config['file_name'].".".$config['allowed_types'];
		$barang['foto'] = str_replace(' ', '_', $barang['foto']);

		$spesifikasi['layar'] = $this->input->post('layar');
		$spesifikasi['os'] = $this->input->post('os');
		$spesifikasi['prosesor'] = $this->input->post('prosesor');
		$spesifikasi['ram'] = $this->input->post('ram');
		$spesifikasi['internal'] = $this->input->post('internal');
		$spesifikasi['kamblk'] = $this->input->post('kamblk');
		$spesifikasi['kamdpn'] = $this->input->post('kamdpn');
		$spesifikasi['deskripsi'] = $this->input->post('deskripsi');
	
		$this->M_barang->input_data('barang',$barang);
		$query = $this->db->query('select max(idbarang) as id from barang limit 1');
		$row = $query->row();
		$spesifikasi['idbarang'] = $row->id;
		$this->M_barang->input_data('spesifikasi',$spesifikasi);

		if ($this->db->trans_status() === FALSE){
		    $this->db->trans_rollback();
		    echo "Gagal insert<br/>Transaksi Dibatalkan";
		}
		else{
		    $this->db->trans_commit();
		    echo "Data Telah ditambahkan";
	        $this->load->library('upload', $config);
	        $this->upload->do_upload('foto');
		}

		
	}

}