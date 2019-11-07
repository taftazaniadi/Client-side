<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('ion_auth');
		$this->lang->load('auth');
		$this->load->model('modelkrt');
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
        {
            redirect('auth', 'refresh');
        }

	}

	public function index()
	{
        $this->data['datas'] =  $this->modelkrt->databerita();
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/berita/indexberita',$this->data,'refresh');
        $this->load->view('admin/footer','refresh');
	} 

    public function delete ($id) {
        $tangkap = $this->modelkrt->delete('berita',"id = '$id'");
        if ($tangkap==1) {
            redirect('berita', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }

    public function add() {
        $this->data['berita'] = $this->modelkrt->kodeberita();
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/berita/add',$this->data,'refresh');
        $this->load->view('admin/footer','refresh');
    }

    public function doadd() {

        $id = $_POST['id'];
        $users = $this->ion_auth->get_user_id();
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $tgl_buat = date('Y-m-d');
        $tgl_update = date('Y-m-d');

        if (isset($_POST['simpan'])){
            $fileName = $_FILES['foto']['name'];
        }

        $this->load->library('upload');
        $config['upload_path']          = 'assets/admin/images/berita';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1000;
        $config['max_width']            = 10024;
        $config['max_height']           = 7068;

        // $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('foto');

        $data_insert = array (
            'id' => $id,  
            'users' => $users,  
            'judul' => $judul,
            'foto' => $fileName,
            'isi' => $isi,
            'tgl_buat' => $tgl_buat,
            'tgl_update' => $tgl_update                           
        );
        $tampung = $this->modelkrt->insert('berita',$data_insert); //ingat prinsip insert/adddata
        if ($tampung>=1) {
            redirect('berita', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }

    public function edit($id) {
        $tampung = $this->modelkrt->edit('berita',"where id = '$id' ");
        $data = array(       
            'id' => $tampung->id,  
            'users' =>$tampung->users,  
            'judul' => $tampung->judul,
            'foto' => $tampung->foto,
            'isi' => $tampung->isi,
            'tgl_buat' => $tampung->tgl_buat,
            'tgl_update' => $tampung->tgl_update   
        );
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/berita/edit',$data,'refresh');
        $this->load->view('admin/footer','refresh');
    }

    public function doedit() {
        $id = $_POST['id'];
        $users = $this->ion_auth->get_user_id();
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $tgl_update = date('Y-m-d');

        if (isset($_POST['simpan'])){
            $fileName = $_FILES['foto']['name'];
        }

        $this->load->library('upload');
        $config['upload_path']          = 'assets/admin/images/berita';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1000;
        $config['max_width']            = 10024;
        $config['max_height']           = 7068;

        // $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('foto');

        $data_update = array (
            'id' => $id,  
            'users' => $users,  
            'judul' => $judul,
            'foto' => $fileName,
            'isi' => $isi,
            'tgl_update' => $tgl_update                           
        );
        $where = array ('id' => $id);
        $tampung = $this->modelkrt->update('berita',$data_update,$where); //ingat prinsip insert/adddata
        // echo "<pre>";
        // print_r($tampung);
        // echo "</pre>";
        // exit();
        if ($tampung>=1) {
            redirect('berita', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }


}
