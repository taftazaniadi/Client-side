<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camp extends CI_Controller {
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
        $this->data['datas'] =  $this->modelkrt->datacamp();
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/camp/indexcamp',$this->data,'refresh');
        $this->load->view('admin/footer','refresh');
	} 

    public function delete ($id) {
        $tangkap = $this->modelkrt->delete('barang',"id = '$id'");
        if ($tangkap==1) {
            redirect('camp', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }

    public function add() {
        $this->data['barang'] = $this->modelkrt->kodebarang();
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/camp/add',$this->data,'refresh');
        $this->load->view('admin/footer','refresh');
    }

    public function doadd() {
        $iddetails = $this->modelkrt->kodedetails();
        $id = $_POST['id'];
        $users = $this->ion_auth->get_user_id();
        $nama = $_POST['nama'];
        $jumlah = $_POST['total'];
        $jumlahbaik = $_POST['jumlahbaik'];
        $jumlahrusak = $_POST['jumlahrusak'];
        $satuan = $_POST['satuan'];
       // $kondisi = $_POST['kondisi'];
        //$keterangan = $_POST['keterangan'];
        $tempat = 'camp';
        $data_barang = array (
            'id' => $id,  
            'users' => $users,  
            'nama' => $nama,  
            'jumlah' => $jumlah,  
            'satuan' => $satuan,      
            'keterangan' => 'tersedia',
            'tempat' => $tempat             
        );
        $data_details = array (
            'id' => $iddetails,  
            'id_barang' => $id,
            'baik' => $jumlahbaik,
            'rusak' => $jumlahrusak

        );
        $tampung = $this->modelkrt->insert('barang',$data_barang); 
        $tampungdua = $this->modelkrt->insert('details_barang',$data_details); 
        if ($tampung>=1&&$tampungdua>=1) {
            $this->session->set_flashdata('success', 'Tambah Data Berhasil');
            redirect('camp/add', 'refresh');
        } else {
            $this->session->set_flashdata('error', 'Tambah Data Error');
            redirect('camp/add', 'refresh');
        }
    }

    public function edit($id) {
        $tampung = $this->modelkrt->editBarang($id);

        $data = array(
            'id_barang' =>$tampung->id_barang,
            'id_details' => $tampung->id_details,         
            'nama' => $tampung->nama,
            'jumlah' => $tampung->jumlah,
            'satuan' => $tampung->satuan,
            'baik' => $tampung->baik,
            'rusak' => $tampung->rusak,
            'keterangan' => $tampung->keterangan,
            'tempat' => $tampung->tempat   
        );

        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/camp/edit',$data,'refresh');
        $this->load->view('admin/footer','refresh');
    }

    public function doedit() {
        $id_barang = $_POST['id_barang'];
        $id_details = $_POST['id_details'];
        $users = $this->ion_auth->get_user_id();
        $nama = $_POST['nama'];
        $jumlah = $_POST['total'];
        $jumlahbaik = $_POST['jumlahbaik'];
        $jumlahrusak = $_POST['jumlahrusak'];
        $satuan = $_POST['satuan'];
        //$kondisi = $_POST['kondisi'];
        //$jumlahsisa = $_POST['jumlahsisa'];
       // $keterangan = $_POST['keterangan'];
        $tempat = 'camp';
        $data_barang = array (
            'id' => $id_barang,  
            'users' => $users,  
            'nama' => $nama,  
            'jumlah' => $jumlah,  
            'satuan' => $satuan,  
            //'kondisi' => $kondisi,  
           // 'jumlahsisa' => $jumlahsisa,  
            'keterangan' => 'tersedia',
            'tempat' => $tempat             
        );
        $data_details = array (
            'id' => $id_details,  
            'id_barang' => $id_barang,
            'baik' => $jumlahbaik,
            'rusak' => $jumlahrusak

        );
        $where = array ('id' => $id_barang);
        $wheredua = array ('id' => $id_details);
        $tampung = $this->modelkrt->update('barang',$data_barang,$where); 
        $tampungdua = $this->modelkrt->update('details_barang',$data_details,$wheredua);
        if ($tampung>=1&&$tampungdua) {
            redirect('camp', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }
}
