<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rusak extends CI_Controller {
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
        $this->data['datas'] =  $this->modelkrt->datarusak();
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/rusak/indexrusak',$this->data,'refresh');
        $this->load->view('admin/footer','refresh');
	} 

    public function GetBarang(){
        $keyword=$this->input->post('keyword');
        $data=$this->modelkrt->GetRowBarang($keyword);        
        echo json_encode($data);
    }

    public function GenerateId() {
        $data = $this->modelkrt->kodebarang();       
        echo json_encode($data);
    }

    public function delete ($id) {
        $tangkap = $this->modelkrt->delete('barang',"id = '$id'");
        if ($tangkap==1) {
            redirect('rusak', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }

    public function add() {
        $this->data['details'] = $this->modelkrt->kodedetails();
        $this->data['barang'] = $this->modelkrt->kodebarang();
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/rusak/add',$this->data,'refresh');
        $this->load->view('admin/footer','refresh');
    }

    public function doadd() {
        $id_barang = $_POST['id_barang'];
        $id_details = $_POST['id_details'];
        $users = $this->ion_auth->get_user_id();
        $nama = $_POST['nama'];
        $total = $_POST['total'];
        $satuan = $_POST['satuan'];
        $rusak = $_POST['jumlahrusak'];
        $baik = $_POST['jumlahbaik'];
        //$kondisi = 'rusak';
       // $jumlahsisa = $_POST['jumlahsisa'];
        //$keterangan = $_POST['keterangan'];
        $tempat = $_POST['tempat'];
        $cek = $this->modelkrt->cekIdBarang($id_barang);

        $data_barang = array (
            'id' => $id_barang,  
            'users' => $users,  
            'nama' => $nama,  
            'jumlah' => $total,  
            'satuan' => $satuan,     
            'keterangan' => 'tersedia',
            'tempat' => $tempat             
        );
        $data_barangadd = array (
            'id' => $id_barang,  
            'users' => $users,  
            'nama' => $nama,  
            'jumlah' => $rusak,  
            'satuan' => $satuan,     
            'keterangan' => 'tersedia',
            'tempat' => $tempat             
        );
        
        $data_details = array (
            'id' => $id_details,  
            'id_barang' => $id_barang,
            'baik' => $baik,
            'rusak' => $rusak
        );
        $wherebar = array('id' => $id_barang);
        $where = array ('id' => $id_details);
        if ($cek=='') {
            $tampungbar = $this->modelkrt->insert('barang',$data_barangadd);
            $tampung = $this->modelkrt->insert('details_barang',$data_details);
        } else {
            $tampungbar = $this->modelkrt->update('barang',$data_barang,$wherebar);
            $tampung = $this->modelkrt->update('details_barang',$data_details,$where);
        }

        if ($tampung>=1&&$tampungbar>=1) {
            redirect('rusak', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }

    public function edit($id) {
        $data['rusak'] = $this->modelkrt->editBarang($id);
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/rusak/edit',$data,'refresh');
        $this->load->view('admin/footer','refresh');
    }

    public function doedit() {
        $id_barang = $_POST['id_barang'];
        $id_details = $_POST['id_details'];
        $users = $this->ion_auth->get_user_id();
        $nama = $_POST['nama'];
        $total = $_POST['total'];
        $satuan = $_POST['satuan'];
        $rusak = $_POST['jumlahrusak'];
        $baik = $_POST['jumlahbaik'];
        $tempat = $_POST['tempat'];
        $data_barang = array (
            'id' => $id_barang,  
            'users' => $users,  
            'nama' => $nama,  
            'jumlah' => $total,  
            'satuan' => $satuan,     
            'keterangan' => 'tersedia',
            'tempat' => $tempat             
        );
        $data_details = array (
            'id' => $id_details,  
            'id_barang' => $id_barang,
            'baik' => $baik,
            'rusak' => $rusak
        );
        $wherebar = array('id' => $id_barang);
        $where = array ('id' => $id_details);
        $tampungbar = $this->modelkrt->update('barang',$data_barang,$wherebar);
        $tampung = $this->modelkrt->update('details_barang',$data_details,$where);
        if ($tampung>=1&&$tampungbar>=1) {
            redirect('rusak', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }
}
