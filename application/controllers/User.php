<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();;
		$this->lang->load('auth');
		$this->load->model('m_user');
		$this->load->library('ion_auth');
		$this->load->model('EmailModel');
		if (!$this->ion_auth->logged_in() || $this->ion_auth->is_admin()) {
			redirect('auth', 'refresh');
		}
	}
	public function index()
	{
		$data['datas'] = $this->m_user->databarang();
		$this->load->view('admin/header', 'refresh');
		$this->load->view('admin/nav', 'refresh');
		$this->load->view('admin/user/sidebaruser', 'refresh');
		$this->load->view('admin/indexuser', $data, 'refresh');
		$this->load->view('admin/footer', 'refresh');
	}

	public function search()
	{
		if (empty($this->input->get('search'))) {
			$data['search'] = array();
		} else {
			$cari = $this->input->get('search');
			$data['search'] = $this->m_user->search($cari);
		}
		$this->load->view('admin/header', 'refresh');
		$this->load->view('admin/nav', 'refresh');
		$this->load->view('admin/user/sidebaruser', 'refresh');
		$this->load->view('admin/user/search', $data, 'refresh');
		$this->load->view('admin/footer', 'refresh');
	}

	public function GetCountryName()
	{
		$keyword = $this->input->post('keyword');
		$data = $this->m_user->GetRowBarang($keyword);
		echo json_encode($data);
	}

	public function pengajuan()
	{
		$data['id'] = $this->m_user->kodepengajuan();
		$this->load->view('admin/header', 'refresh');
		$this->load->view('admin/nav', 'refresh');
		$this->load->view('admin/user/sidebaruser', 'refresh');
		$this->load->view('admin/user/pengajuan', $data, 'refresh');
		$this->load->view('admin/footer', 'refresh');
	}

	public function doaddpengajuan()
	{
		$this->load->library('Minta');
		// $this->load->library('mailer');
		$user = $this->ion_auth->user()->row();
		$id = $_POST['id'];
		$users = $this->ion_auth->get_user_id();
		$nim = $_POST['nim'];
		$barang = $_POST['barang'];
		$id_barang = $_POST['id_barang'];
		$qty = $_POST['qty'];
		$deskripsi = $_POST['deskripsi'];
		$datenow = date('Y-m-d');
		$tgl_pemakaian = $_POST['tgl_pemakaian'];
		$status = 'menunggu';
		if (isset($_POST['simpan'])) {
			$surat = $_FILES['surat']['name'];
		}

		$this->load->library('upload');
		$config['upload_path']          = 'public';
		$config['allowed_types']        = 'pdf|doc|docx|png|jpg';
		$config['overwrite']            = true;
		$config['max_size']             = 1000;
		$config['max_width']            = 10024;
		$config['max_height']           = 7068;

		// // $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('surat');

		$data_insert = array(
			'id' => $id,
			'users' => $users,
			'nim' => $nim,
			'id_barang' => $id_barang,
			'qty' => $qty,
			'deskripsi' => $deskripsi,
			'tgl_pengajuan' => $datenow,
			'tgl_pemakaian' => $tgl_pemakaian,
			'surat' => $surat,
			'status' => $status
		);

		$tampung = $this->m_user->insert('pengajuan', $data_insert);
		if ($tampung >= 1) {
			$response = Requests::post("https://reguler.zenziva.net/apps/smsapi.php?userkey=inyq2l&passkey=dikiharif&nohp=082328722687&pesan={$user->first_name}_{$user->phone}_{$user->company}_{$barang}_{$deskripsi}");
			//var_dump($response->body);
			echo "<script>window.alert('Terima Kasih, Pengajuan Peminjaman Telah Berhasil. Silahkan Konfirmasi pengajuan ke Bagian Kerumahtanggan AMCC.');</script>";
			redirect('user', 'refresh');
		} else {
			$this->load->view('admin/500');
		}
	}

	public function lihat()
	{
		$users = $this->ion_auth->get_user_id();
		$data['datas'] = $this->m_user->pengajuanuser($users);
		$this->load->view('admin/header', 'refresh');
		$this->load->view('admin/nav', 'refresh');
		$this->load->view('admin/user/sidebaruser', 'refresh');
		$this->load->view('admin/user/lihat', $data, 'refresh');
		$this->load->view('admin/footer', 'refresh');
	}

	public function changefoto()
	{
		$users = $this->ion_auth->get_user_id();
		$data['profil'] = $this->m_user->getDataUser($users);
		// echo "<pre>";
		// var_dump($data['profil']->foto);
		// echo "</pre>";
		// exit();
		$this->load->view('admin/header', 'refresh');
		$this->load->view('admin/nav', 'refresh');
		$this->load->view('admin/user/sidebaruser', 'refresh');
		$this->load->view('admin/changefoto', $data, 'refresh');
		$this->load->view('admin/footer', 'refresh');
	}

	public function do_changefoto()
	{
		$id = $this->ion_auth->get_user_id();
		if (isset($_POST['simpan'])) {
			$fileName = $_FILES['foto']['name'];
		}

		$this->load->library('upload');
		$config['upload_path']          = 'assets/fotoprofil';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']            = true;
		$config['max_size']             = 1000;
		$config['max_width']            = 10024;
		$config['max_height']           = 7068;

		$this->upload->initialize($config);
		$this->upload->do_upload('foto');

		$data_update = array(
			'foto' => $fileName
		);
		$where = array('id' => $id);
		$tampung = $this->m_user->update('users', $data_update, $where); //ingat prinsip insert/adddata
		if ($tampung >= 1) {
			$this->session->flashdata('success', 'Edit Foto Profil Berhasil');
			redirect('user/changefoto', 'refresh');
		} else {
			$this->session->flashdata('error', 'Edit Foto Profil Gagal');
			redirect('user/changefoto', 'refresh');
		}
	}
}
