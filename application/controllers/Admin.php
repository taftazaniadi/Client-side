<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->lang->load('auth');
		$this->load->model('modelkrt');
        $this->load->library('ion_auth');
        $this->load->library('Minta');
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
        {
            redirect('auth', 'refresh');
        }
	}
	public function index()
	{	
		$this->data['peminjaman'] = $this->modelkrt->jmlPeminjaman();
		$this->data['barang'] = $this->modelkrt->jmlBarang();
		$this->data['sms'] = $this->modelkrt->jmlSms();
		$this->data['users'] = $this->modelkrt->jmlUsers();
		$this->data['graph'] = $this->modelkrt->graph();
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/index',$this->data,'refresh');
		$this->load->view('admin/footer','refresh');
	}

	public function GetCountryName(){
		$this->load->model('m_user');
        $keyword=$this->input->post('keyword');
        $data=$this->m_user->GetRow($keyword);        
        echo json_encode($data);
    }

    public function getEmail(){
        $keyword=$this->input->post('email');
        $data=$this->modelkrt->get_row('users',array('email' =>$keyword));    
        echo json_encode($data ? false : true);
    }

	public function user() {
		$users = $this->ion_auth->get_user_id();
		$this->data['users'] = $this->ion_auth->users(NULL,$users)->result();
		foreach ($this->data['users'] as $k => $user) {
			$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
		}
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/user',$this->data,'refresh');
		$this->load->view('admin/footer','refresh');
	}

	public function pengajuan() {
		$data['datas'] = $this->modelkrt->pengajuanlist(); 
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/pengajuan/lihat',$data,'refresh');
		$this->load->view('admin/footer','refresh');
	}

	public function list() {
		if($this->input->post('clear')){
		  $data['start'] = "";
		  $data['end'] = "";
		}else {
			$data['start'] = $this->input->post('start');
			$data['end'] = $this->input->post('end');
		}
		$data['datas'] = $this->modelkrt->pengajuan_list($data['start'], $data['end']); 
		// print_r($data['datas']);
		// exit();
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/pengajuan/list',$data,'refresh');
		$this->load->view('admin/footer','refresh');
	}

	public function pengembalian($id) {
		$this->data['pengembalian'] = $this->modelkrt->kodepengembalian();
		$this->data['pengajuan'] = $this->modelkrt->getPengajuan($id);
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/pengembalian/add',$this->data,'refresh');
		$this->load->view('admin/footer','refresh');
	}

	public function kembali () {
		$data['datas'] = $this->modelkrt->pengembalian(); 
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/pengembalian/list',$data,'refresh');
		$this->load->view('admin/footer','refresh');
	}

	public function do_kembali() {
		$id_kembali = $this->input->post('id_kembali');
		$id_pengajuan = $this->input->post('id_pengajuan');
		$id_barang = $this->input->post('id_barang');
		$users = $this->input->post('users');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$data_insert = array (
			'id' => $id_kembali,
            'id_pengajuan' => $id_pengajuan,
            'users' => $users,
            'id_barang' => $id_barang,
            'tanggal_kembali' => $tgl_kembali
        );

        $keterangan = 'tersedia';
        $update = array (
            'keterangan' => $keterangan             
        );

        $status = 'kembali';
        $up_pengajuan = array (
            'status' => $status             
        );
        $id_pe = array('id' =>$id_pengajuan );
        $where = array('id' => $id_barang);
        $t_pengajuan = $this->modelkrt->update('pengajuan',$up_pengajuan,$id_pe); 
        $tangkap = $this->modelkrt->update('barang',$update,$where); 
        $tampung = $this->modelkrt->insert('pengembalian',$data_insert); 
        if ($tampung>=1&&$tampung>=1&&$t_pengajuan>=1) {
            echo "<script>window.alert('Barang telah di Kembalikan');</script>";
            redirect('admin/list', 'refresh');
        } else {
           	$this->load->view('admin/500');
        }  

	}

	public function acc($id,$hp,$barang) {
        $keterangan = 'pinjam';
        $update = array (
            'keterangan' => $keterangan             
        );
        $status = 'terima';
        $data_update = array (
            'id' => $id,  
            'status' => $status             
        );
        $id_barang = array('id' => $barang);
        $where = array ('id' => $id);
        $tampung = $this->modelkrt->update('pengajuan',$data_update,$where);
        $tangkap = $this->modelkrt->update('barang',$update,$id_barang); //ingat prinsip insert/adddata
        if ($tampung>=1&&$tangkap>=1) {
        	$response = Requests::post("https://reguler.zenziva.net/apps/smsapi.php?userkey=inyq2l&passkey=dikiharif&nohp=$hp&pesan=Pengajuan disetujui, silahkan mengambil barang pada Dept Kerumahtanggaan AMCC (082328722687)");
            //var_dump($response->body);
        	echo "<script>window.alert('Pengajuan peminjaman telah di terima, lihat di history pengajuan');</script>";
            redirect('admin/list', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
	}

	public function reject($id,$hp) {
        $status = 'tolak';
        $data_update = array (
            'id' => $id,  
            'status' => $status             
        );
        $where = array ('id' => $id);
        $tampung = $this->modelkrt->update('pengajuan',$data_update,$where); //ingat prinsip insert/adddata
        if ($tampung>=1) {
        	$response = Requests::post("https://reguler.zenziva.net/apps/smsapi.php?userkey=inyq2l&passkey=dikiharif&nohp=$hp&pesan=Maaf pengajuan di tolak. terima kasih. (082328722687)");
            //var_dump($response->body);
        	echo "<script>window.alert('Pengajuan peminjaman telah di TOLAK');</script>";
            redirect('admin/list', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
	}

	public function sms() {
		$idUser =  $this->uri->segment(3);
  		$idPengajuan =  $this->uri->segment(4);
		$data['kode'] = $this->modelkrt->kodesms(); 
		$data['barang'] = $this->modelkrt->barangsms($idPengajuan); 				
		$data['users'] = $this->modelkrt->selectuser('users',$idUser);
		// echo "<pre>";
		// print_r($data['users']);
		// echo "</pre>";
		// exit();
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/sms/add',$data,'refresh');
		$this->load->view('admin/footer','refresh');
	}

	public function listsms() {
		$data['datas'] = $this->modelkrt->listpengajuans(); 
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/sms/listsms',$data,'refresh');
		$this->load->view('admin/footer','refresh');
	}

	public function send() {
		$this->load->library('Minta');
		$id = $_POST['id'];
		$users = $_POST['users'];
		$pengajuan = $_POST['pengajuan'];
		$phone = $_POST['phone'];
		$pesannya = $_POST['pesan'];
		$tgl = date('Y-m-d');
		// print_r($pesan);
		// exit();
        $data_insert = array (
            'id' => $id,  
            'users' => $users,
          	'pengajuan' => $pengajuan,
          	'phone' => $phone,
          	'pesan' => $pesannya,
          	'tgl' => $tgl
        );
        $this->load->model('m_user');
        $tampung = $this->m_user->insert('sms',$data_insert); 
        if ($tampung>=1) {
            $response = Requests::post("https://reguler.zenziva.net/apps/smsapi.php?userkey=inyq2l&passkey=dikiharif&nohp=$phone&pesan=$pesannya. (082328722687)");
            //var_dump($response->body);
            echo "<script>window.alert('Terima Kasih, KIRIM SMS BERHASIL');</script>";
            redirect('admin/listsms', 'refresh');
        } else {
           	$this->load->view('admin/500');
        }   
	}

	public function listterkirim() {
		$data['datas'] = $this->modelkrt->listterkirim(); 
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/sms/listterkirim',$data,'refresh');
		$this->load->view('admin/footer','refresh');
	}

	public function deletesms($id) {
		$tangkap = $this->modelkrt->delete('sms',"id = '$id'");
        if ($tangkap==1) {
            redirect('admin/listterkirim', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
	}

	public function edituser($id) {
		$data['users'] = $this->modelkrt->selectuser('users',$id);
		$this->load->view('admin/edituser',$data,'refresh');
	}

	public function changefoto() {
		$this->load->model('m_user');
		$users = $this->ion_auth->get_user_id();
		$data['profil'] = $this->m_user->getDataUser($users);
		$this->load->view('admin/header','refresh');
		$this->load->view('admin/nav','refresh');
		$this->load->view('admin/sidebar','refresh');
		$this->load->view('admin/changefoto_admin',$data,'refresh'); 
		$this->load->view('admin/footer','refresh');
	}	

	public function do_changefoto(){
		$id = $this->ion_auth->get_user_id();
		if (isset($_POST['simpan'])){
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
	
		$data_update = array (
            'foto' => $fileName                        
        );
        $where = array ('id' => $id);
        $tampung = $this->modelkrt->update('users',$data_update,$where); //ingat prinsip insert/adddata
        if ($tampung>=1) {
        	$this->session->set_flashdata('success', 'Edit Foto Profil Berhasil');
            redirect('admin/changefoto', 'refresh');
        } else {
        	$this->session->set_flashdata('error', 'Edit Foto Profil Gagal');
            redirect('admin/changefoto', 'refresh');
        }
	}

	public function set_admin($id) {
		$data_update = array (
            'group_id' => 1,                        
        );
        $where = array ('user_id' => $id);
		$tampung = $this->modelkrt->update('users_groups',$data_update,$where);
		if ($tampung>=1) {
            redirect('admin/user', 'refresh');
        } else {
            $this->load->view('admin/500');
        }		
	}

	public function set_members($id) {
		$data_update = array (
            'group_id' => 2,                        
        );
        $where = array ('user_id' => $id);
		$tampung = $this->modelkrt->update('users_groups',$data_update,$where);
		if ($tampung>=1) {
            redirect('admin/user', 'refresh');
        } else {
            $this->load->view('admin/500');
        }		
	}

	public function tambah_user() {
		$this->load->view('auth/add_user');
	}
}
