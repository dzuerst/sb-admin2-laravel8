<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		// cek session yang login, jika session status tidak sama dengan session petugas_login,maka halaman akan di alihkan kembali ke halaman login.
		if ($this->session->userdata('status') != "petugas_login") {
			redirect(base_url() . 'login?alert=belum_login');
		}
	}

	function index()
	{
		$this->buku();
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url() . 'login/?alert=logout');
	}

	function  anggota()
	{
		$data['anggota'] = $this->m_data->get_data('anggota')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_anggota', $data);
		$this->load->view('petugas/v_footer');
	}

	function anggota_tambah()
	{
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_anggota_tambah');
		$this->load->view('petugas/v_footer');
	}

	function anggota_tambah_aksi()
	{
		$id_anggota = $this->input->post('id_anggota');
		$nama = $this->input->post('nama');
		$tmpt_lhr = $this->input->post('tmpt_lhr');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$gender = $this->input->post('gender');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');

		$data = array(
			'id_anggota' 	=> $id_anggota,
			'nama' 			=> $nama,
			'tmpt_lhr'      => $tmpt_lhr,
			'tanggal_lahir' => $tanggal_lahir,
			'gender' 		=> $gender,
			'alamat' 		=> $alamat,
			'no_hp' 		=> $no_hp
		);

		$this->m_data->insert_data($data, 'anggota');

		redirect(base_url() . 'petugas/anggota?alert=berhasil_tambah');
	}

	function anggota_edit($id_anggota)
	{
		$where = array('id_anggota' => $id_anggota);
		$data['anggota'] = $this->m_data->edit_data($where, 'anggota')->result();

		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_anggota_edit', $data);
		$this->load->view('petugas/v_footer');
	}

	function anggota_update()
	{
		$id_anggota = $this->input->post('id_anggota');
		$nama = $this->input->post('nama');
		$tmpt_lhr = $this->input->post('tmpt_lhr');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$gender = $this->input->post('gender');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$where = array(
			'id_anggota' => $id_anggota
		);

		$data = array(
			'nama' 			=> $nama,
			'id_anggota' 	=> $id_anggota,
			'tmpt_lhr'      => $tmpt_lhr,
			'tanggal_lahir' => $tanggal_lahir,
			'gender' 		=> $gender,
			'alamat' 		=> $alamat,
			'no_hp'			=> $no_hp
		);

		$this->m_data->update_data($where, $data, 'anggota');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Anggota Berhasil Diperbaruhi!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');

		redirect(base_url() . 'petugas/anggota?alert=berhasil_ubah');
	}


	function anggota_hapus($id_anggota)
	{
		$where = array('id_anggota' => $id_anggota);
		$this->m_data->delete_data($where, 'anggota');
		redirect(base_url() . 'petugas/anggota?alert=berhasil_hapus');
	}

	function buku()
	{
		$data['buku'] = $this->m_data->get_data('buku')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_buku', $data);
		$this->load->view('petugas/v_footer');
	}

	function buku_tambah()
	{
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_buku_tambah');
		$this->load->view('petugas/v_footer');
	}

	function buku_tambah_aksi()
	{
		$id_buku = $this->input->post('id_buku');
		$jenis_barang = $this->input->post('jenis_barang');
		$merk = $this->input->post('merk');
		$ukuran = $this->input->post('ukuran');
		$bahan = $this->input->post('bahan');
		$no_seri = $this->input->post('no_seri');
		$kode_barang = $this->input->post('kode_barang');
		$jumlah = $this->input->post('jumlah_barang');
		$harga_beli = $this->input->post('harga_beli');
		$tahun = $this->input->post('tahun');
		$jumlah_pinjam = $this->input->post('jumlah_pinjam');
		$sisa_barang = $this->input->post('sisa_barang');
		$keterangan = $this->input->post('keterangan');


		$data = array(
			'id_buku' => $id_buku,
			'jenis_barang' => $jenis_barang,
			'merk' => $merk,
			'ukuran' => $ukuran,
			'bahan' => $bahan,
			'no_seri' => $no_seri,
			'kode_barang' => $kode_barang,
			'jumlah_barang' => $jumlah,
			'harga_beli' => $harga_beli,
			'tahun' => $tahun,
			'jumlah_pinjam' => $jumlah_pinjam,
			'sisa_barang' => $jumlah - $jumlah_pinjam,
			'keterangan' => $keterangan
		);

		// insert data ke database
		$this->m_data->insert_data($data, 'buku');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Buku Berhasil Ditambah!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');

		// mengalihkan halaman ke halaman data buku
		redirect(base_url() . 'petugas/buku?alert=berhasil');
	}

	function buku_edit($id_buku)
	{
		$where = array('id_buku' => $id_buku);
		// mengambil data dari database sesuai id
		$data['buku'] = $this->m_data->edit_data($where, 'buku')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_buku_edit', $data);
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
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_buku_detail', $data);
		$this->load->view('petugas/v_footer');
	}

	function buku_update()
	{
		$id_buku = $this->input->post('id_buku');
		$jenis_barang = $this->input->post('jenis_barang');
		$merk = $this->input->post('merk');
		$ukuran = $this->input->post('ukuran');
		$bahan = $this->input->post('bahan');
		$no_seri = $this->input->post('no_seri');
		$kode_barang = $this->input->post('kode_barang');
		$jumlah = $this->input->post('jumlah_barang');
		$harga_beli = $this->input->post('harga_beli');
		$tahun = $this->input->post('tahun');
		$keterangan = $this->input->post('keterangan');


		$where = array(
			'id_buku' => $id_buku
		);

		$data = array(
			'id_buku' => $id_buku,
			'jenis_barang' => $jenis_barang,
			'merk' => $merk,
			'ukuran' => $ukuran,
			'bahan' => $bahan,
			'no_seri' => $no_seri,
			'kode_barang' => $kode_barang,
			'jumlah_barang' => $jumlah,
			'harga_beli' => $harga_beli,
			'tahun' => $tahun,
			'keterangan' => $keterangan,
		);

		$this->m_data->update_data($where, $data, 'buku');

		$this->db->query("UPDATE buku SET sisa_barang = jumlah_barang - jumlah_pinjam WHERE id_buku = '$id_buku'");

		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Buku Berhasil Diperbarui!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');

		redirect(base_url() . 'petugas/buku?alert=berhasil_ubah');
	}


	function buku_hapus($id_buku)
	{
		$where = array(
			'id_buku' => $id_buku
		);

		// menghapus data buku dari database sesuai id
		$this->m_data->delete_data($where, 'buku');

		// mengalihkan halaman ke halaman data buku
		redirect(base_url() . 'petugas/buku?alert=berhasil_hapus');
	}

	function buku_katalog($id_buku)
	{
		$where = array('id_buku' => $id_buku);
		// mengambil data dari database sesuai id_anggota
		$data['buku'] = $this->m_data->edit_data($where, 'buku')->result();
		$this->load->view('petugas/v_buku_katalog', $data);
	}
	// akhir crud buku

	// proses transaksi_peminjaman
	function peminjaman()
	{
		// status
		// 2 : sudah dikembalikan
		// 1 : sedang dipinjam

		$data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota where peminjaman.id_buku=buku.id_buku and peminjaman.id_anggota=anggota.id_anggota and peminjaman_status = 2 order by id_peminjaman desc")->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_peminjaman', $data);
		$this->load->view('petugas/v_footer');
	}

	function peminjaman_tambah()
	{
		$data['buku'] = $this->db->query("select * from buku where (jumlah_barang - jumlah_pinjam) > 0")->result();

		$data['anggota'] = $this->m_data->get_data('anggota')->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_peminjaman_tambah', $data);
		$this->load->view('petugas/v_footer');
	}

	function peminjaman_aksi()
	{
		$id_peminjaman = $this->input->post('id_peminjaman');
		$id_buku = $this->input->post('id_buku');
		$id_anggota = $this->input->post('id_anggota');
		$tgl_pinjam = $this->input->post('tgl_pinjam');
		$tgl_harus_kembali = $this->input->post('tgl_harus_kembali');


		$tgl1 = new DateTime($tgl_pinjam);
		$tgl2 = new DateTime($tgl_harus_kembali);
		$jmlh_hari = $tgl2->diff($tgl1)->days;

		$data = array(
			'id_peminjaman' => $id_peminjaman,
			'id_buku' => $id_buku,
			'id_anggota' => $id_anggota,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_harus_kembali' => $tgl_harus_kembali,
			'jmlh_hari' => $jmlh_hari,
			'peminjaman_status' => 2
		);

		// get count of row / data
		$check_anggota = $this->db->query("SELECT * FROM peminjaman where id_anggota = $id_anggota and peminjaman_status = 2");

		// check if more than 2
		if ($check_anggota->num_rows()  < 2) {
			$this->m_data->insert_data($data, 'peminjaman');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Peminjaman Berhasil Ditambah!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');

			// tambah jumlah pinjam buku
			$this->db->query("UPDATE buku SET jumlah_pinjam = jumlah_pinjam + 1 WHERE id_buku = '$id_buku'");

			// update sisa buku		
			$this->db->query("UPDATE buku SET sisa_barang = jumlah_barang - jumlah_pinjam WHERE id_buku = '$id_buku'");

			// mengalihkan halaman ke halaman data peminjaman
			redirect(base_url() . 'petugas/peminjaman?alert=berhasil_tambah');
		} else {
			redirect(base_url() . 'petugas/peminjaman_tambah?alert=gagal');
		}
	}

	function peminjaman_batalkan($id_peminjaman, $id_buku)
	{
		$where = array(
			'id_peminjaman' => $id_peminjaman
		);

		// mengambil data buku pada peminjaman ber id tersebut
		$data = $this->m_data->edit_data($where, 'peminjaman')->row();

		// kurangi jumlah pinjam buku
		$this->db->query("UPDATE buku SET jumlah_pinjam = jumlah_pinjam - 1 WHERE id_buku = '$id_buku'");

		// update sisa buku		
		$this->db->query("UPDATE buku SET sisa_barang = jumlah_barang - jumlah_pinjam WHERE id_buku = '$id_buku'");

		$this->m_data->delete_data($where, 'peminjaman');

		redirect(base_url() . 'petugas/peminjaman?alert=berhasil_batal');
	}

	function pengembalian_batalkan($id_peminjaman, $id_buku)
	{
		$where = array(
			'id_peminjaman' => $id_peminjaman
		);

		$data = $this->m_data->edit_data($where, 'peminjaman')->row();

		// kurangi jumlah pinjam buku
		$this->db->query("UPDATE buku SET jumlah_pinjam = jumlah_pinjam - 1 WHERE id_buku = '$id_buku'");

		// update sisa buku		
		$this->db->query("UPDATE buku SET sisa_barang = jumlah_barang - jumlah_pinjam WHERE id_buku = '$id_buku'");

		// menghapus data peminjaman dari database sesuai id
		$this->m_data->delete_data($where, 'peminjaman');

		// mengalihkan halaman ke halaman data buku
		redirect(base_url() . 'petugas/pengembalian?alert=berhasil_batal');
	}

	function peminjaman_selesai($id_peminjaman, $id_buku)
	{
		$where = array(
			'id_peminjaman' => $id_peminjaman
		);

		$data = $this->m_data->edit_data($where, 'peminjaman')->row();

		$tgl_harus_kembali = $data->tgl_harus_kembali;
		$tgl_kembali = date("Y-m-d");

		$tgl1 = new DateTime($tgl_harus_kembali);
		$tgl2 = new DateTime($tgl_kembali);
		$jmlh_hari = $tgl2->diff($tgl1)->days;

		$totaldenda = 0;

		if ($tgl2 > $tgl1) {
			$totaldenda = ($jmlh_hari - 3) * 1000;
		}

		$datau = array(
			'tgl_kembali' => $tgl_kembali,
			'denda' => $totaldenda,
			'peminjaman_status' => 1
		);

		$this->m_data->update_data($where, $datau, 'peminjaman');

		// kurangi jumlah pinjam buku
		$this->db->query("UPDATE buku SET jumlah_pinjam = jumlah_pinjam - 1 WHERE id_buku = '$id_buku'");

		// update sisa buku		
		$this->db->query("UPDATE buku SET sisa_barang = jumlah_barang - jumlah_pinjam WHERE id_buku = '$id_buku'");

		// mengalihkan halaman ke halaman data pengembalian
		redirect(base_url() . 'petugas/pengembalian?alert=berhasil_tambah');
	}
	function pengembalian()
	{
		// mengambil data peminjaman buku dari database | dan mengurutkan data dari id peminjaman terbesar ke terkecil (desc)
		$data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota where peminjaman.id_buku=buku.id_buku and peminjaman.id_anggota=anggota.id_anggota and peminjaman_status = 1 order by id_peminjaman desc")->result();
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_pengembalian', $data);
		$this->load->view('petugas/v_footer');
	}

	function laporan()
	{
		if (isset($_GET['tgl_pinjam']) && isset($_GET['tgl_kembali'])) {
			$mulai = $this->input->get('tgl_pinjam');
			$sampai = $this->input->get('tgl_kembali');
			// mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai
			$data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota where peminjaman.id_buku=buku.id_buku and peminjaman.id_anggota=anggota.id_anggota and date(tgl_pinjam) >= '$mulai' and date(tgl_kembali) <= '$sampai' order by id_peminjaman desc")->result();
		} else {
			// mengambil data peminjaman buku dari database | dan mengurutkan data dari id peminjaman terbesar ke terkecil (desc)
			$data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota where peminjaman.id_buku=buku.id_buku and peminjaman.id_anggota=anggota.id_anggota order by id_peminjaman desc")->result();
		}


		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_laporan', $data);
		$this->load->view('petugas/v_footer');
	}

	function peminjaman_cetak(){
		if (isset($_GET['tgl_pinjam']) && isset($_GET['tgl_harus_kembali'])) {
			$mulai = $this->input->get('tgl_pinjam');
			$sampai = $this->input->get('tgl_harus_kembali');
			// mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai
			$data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota where peminjaman.id_buku=buku.id_buku and peminjaman.id_anggota=anggota.id_anggota and date(tgl_pinjam) >= '$mulai' and date(tgl_harus_kembali) <= '$sampai' and peminjaman_status = 2 order by id_peminjaman desc")->result();
			$this->load->view('petugas/v_peminjaman_cetak', $data);
		} else {
			redirect(base_url() . 'petugas/laporan');
		}
	}

	function pengembalian_cetak(){
		if (isset($_GET['tgl_pinjam']) && isset($_GET['tgl_kembali'])) {
			$mulai = $this->input->get('tgl_pinjam');
			$sampai = $this->input->get('tgl_kembali');
			// mengambil data peminjaman berdasarkan tanggal mulai sampai tanggal sampai
			$data['peminjaman'] = $this->db->query("select * from peminjaman,buku,anggota where peminjaman.id_buku=buku.id_buku and peminjaman.id_anggota=anggota.id_anggota and date(tgl_pinjam) >= '$mulai' and date(tgl_kembali) <= '$sampai' and peminjaman_status = 1 order by id_peminjaman desc")->result();
			$this->load->view('petugas/v_pengembalian_cetak', $data);
		} else {
			redirect(base_url() . 'petugas/laporan');
		}
	}

	

	// PENGUNJUNG
	function  datapengunjung()
	{
		// mengambil data dari database
		$data['pengunjung'] = $this->m_data->get_data('pengunjung')->result();

		if (isset($_GET['tgl'])) {
			$tgl = $this->input->get('tgl');
			// mengambil data pengunjung berdasarkan bulan
			// kita butuh -01 karena input date hanya mengambil nilai bulan dan tahun (ex: 2019-12)

			$data['pengunjung'] = $this->db->query("select * from pengunjung where month(tanggal_berkunjung) = month('$tgl-01')")->result();
		}

		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_pengunjung', $data);
		$this->load->view('petugas/v_footer');
	}

	function pengunjung_tambah()
	{
		$this->load->view('petugas/v_header');
		$this->load->view('petugas/v_navbar');
		$this->load->view('petugas/v_pengunjung_tambah');
		$this->load->view('petugas/v_footer');
	}

	function  pengunjung_tambah_aksi()
	{
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

		if ($this->form_validation->run() == FALSE) {
			redirect(base_url() . 'petugas/pengunjung_tambah?alert=gagal');
		} else {
			// insert data ke database
			$this->m_data->insert_data($data, 'pengunjung');

			// mengalihkan halaman ke halaman data anggota
			redirect(base_url() . 'petugas/datapengunjung?alert=berhasil');
		}
	}

	function pengunjung_cetak()
	{
		if (isset($_GET['tgl_mulai']) && isset($_GET['tgl_akhir'])) {
			$mulai = $this->input->get('tgl_mulai');
			$sampai = $this->input->get('tgl_akhir');

			$data['pengunjung'] = $this->db->query("select * from pengunjung where date(tanggal_berkunjung) >= '$mulai' and date(tanggal_berkunjung) <= '$sampai' order by tanggal_berkunjung")->result();
			$this->load->view('petugas/v_pengunjung_cetak', $data);
		} else {
			redirect(base_url() . 'petugas/pelaporan');
		}
	}
}
