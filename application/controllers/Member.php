<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('cart');
		$this->load->model('M_member');
	}
	public function index(){
		$data['daftar']='';
		$this->load->view('template/atas');
		$this->load->view('daftar',$data);
		$this->load->view('template/bawah');
	}
	public function daftar() {
		$member['username'] = $this->input->post('username');
		$member['password'] = md5($this->input->post('password'));
		$member['nama'] = $this->input->post('nama');
		$member['email'] = $this->input->post('email');
		$data['username'] = $member['username'];
		$hasil = $this->M_member->cari_data('member',$data);
		if ($hasil->num_rows() == 1) {
			$data['daftar'] = 'gagal';
		}else{
			$this->M_member->input_data('member',$member);
			$data['daftar'] = 'sukses';
		}
		$this->load->view('template/atas');
		$this->load->view('daftar',$data);
		$this->load->view('template/bawah');
	}

	public function cek_login() {
		$data = array('user' => $this->input->post('user', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['idpengguna'] = $sess->idpengguna;
				$sess_data['user'] = $sess->user;
				$sess_data['akses'] = $sess->akses;
				$this->session->set_userdata($sess_data);
			}
			redirect('index.php/home');		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>
