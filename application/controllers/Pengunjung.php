<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengunjung extends CI_Controller{
    function index(){
		$this->load->view('petugas/v_header');
		$this->load->view('pengunjung/index');
	}

    function buku()
	{
		// mengambil data dari database
		$data['buku'] = $this->m_data->get_data('buku')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('pengunjung/v_buku', $data);
		$this->load->view('petugas/v_footer');
	}

	function buku_detail($id_buku)
	{
		if ($id_buku == -1) {
			$id_buku = $this->input->post('id_buku');
		}
		$where = array('id_buku' => $id_buku);
		// mengambil data dari database sesuai id
		$data['buku'] = $this->m_data->detail_data($where, 'buku')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_buku_detail', $data);
		$this->load->view('petugas/v_footer');
	}

	// Pengunjung
	function tambah_pengunjung(){
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');

		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$kegiatan = $this->input->post('kegiatan');
		$tanggal = date('y-m-d h:m:s');

		$data = array(
			'nama' 	  => $nama,
			'kelas' 	  => $kelas,
			'kegiatan' => $kegiatan,
			'tanggal_berkunjung' => $tanggal
		);

		if ($this->form_validation->run() == FALSE){
				redirect(base_url() . 'pengunjung?alert=gagal');
        }else {
                      // insert data ke database
				$this->m_data->insert_data($data, 'pengunjung');

				// mengalihkan halaman ke halaman data anggota
				redirect(base_url() . 'pengunjung?alert=berhasil');
            }		
	}
}