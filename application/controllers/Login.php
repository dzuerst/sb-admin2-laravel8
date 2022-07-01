<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	//  function yang pertama kali akan di jalankan pada saat sebuah class dijalankan.
	function __construct()
	{
		parent::__construct();
	}

	//perintah untuk menampilkan view(v_login.php)
	public function index()
	{
		if($this->session->userdata('status') == "petugas_login"){
			redirect(base_url().'petugas');
		}
		$this->load->view('v_login');
	}

	function login_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');


		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() != false) {
			$where = array(
				'username' => $username,
				'password' => md5($password)

			);

			// check is user exist in database
			$cek = $this->m_data->cek_login("petugas", $where)->num_rows();
			if ($cek > 0) {
				$data_session = array(
					'username' => $username,
					'status' => "petugas_login"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url() . 'petugas');
			} else {
				redirect(base_url() . 'login?alert=tidak_ditemukan');
			}

			// set session
			// $this->session->set_userdata('status', 'petugas_login');
			// redirect(base_url() . 'petugas');
			
		} else {
			redirect(base_url() . 'login?alert=tidak_valid');
		}
	}
}
