<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hilang extends CI_Controller {
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
        $this->data['datas'] =  $this->modelkrt->datahilang();
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/hilang/indexhilang',$this->data,'refresh');
        $this->load->view('admin/footer','refresh');
    } 

    public function GetBarangHilang(){
        $keyword=$this->input->post('keyword');
        $data=$this->modelkrt->GetRowBarangHilang($keyword);        
        echo json_encode($data);
    }

    public function GenerateId() {
        $data = $this->modelkrt->kodebarang();       
        echo json_encode($data);
    }

    public function cekBrgHilang($keyword) {
       // $keyword=$this->input->post('keyword');
        $data=$this->modelkrt->cekBrgHilang($keyword);      
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        // exit();           
    
        echo json_encode($data);
    }

    public function CountJmlBarang() {
        $data = $this->modelkrt->countBarang();       
        echo json_encode($data);
    }

    public function delete ($id) {
        $tangkap = $this->modelkrt->delete('barang',"id = '$id'");
        if ($tangkap==1) {
            redirect('hilang', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }

    public function add() {
        $this->data['barang'] = $this->modelkrt->kodebarang();
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/hilang/add',$this->data,'refresh');
        $this->load->view('admin/footer','refresh');
    }

    public function doadd() {
        $id_barang = $_POST['id'];
        $users = $this->ion_auth->get_user_id();
        $nama = $_POST['nama'];
        $total_hilang = $_POST['total_hilang'];
        $hil_baik = $_POST['hil_baik'];
        $baik = $_POST['baik'];
        $rusak = $_POST['rusak'];
        $hil_rusak = $_POST['hil_rusak'];
        $tanggal = date('Y-m-d');
        $satuan = $_POST['satuan'];
        $jumlahsisa = $_POST['jumlahsisa'];
        $tempat = $_POST['tempat'];
        $idBrgHilang = $this->modelkrt->kodeBrgHilang();
        $idDetails = $this->modelkrt->kodedetails();
        $iddet = $_POST['id_details'];
        $cek = $this->modelkrt->cekIdBarang($id_barang);

        $barang_hilang = array('id' => $idBrgHilang,
            'id_barang' => $id_barang,
            'jumlah' => $total_hilang,
            'hilang_baik' => $hil_baik,
            'hilang_rusak' => $hil_rusak,
            'tanggal' => $tanggal
        );
        $data_barang = array (
            'id' => $id_barang,  
            'users' => $users,  
            'nama' => $nama,  
            'jumlah' => $total_hilang,  
            'satuan' => $satuan,  
            'keterangan' => 'tersedia',  
            'tempat' => $tempat             
        );
        $details_barang = array(
            'id' => $idDetails,
            'id_barang' => $id_barang,
            'baik' => $hil_baik,
            'rusak' => $hil_rusak
        );
        /*if edit*/
        $data_barang_update = array (
            'id' => $id_barang,  
            'users' => $users,  
            'nama' => $nama,  
            'jumlah' => $jumlahsisa,  
            'satuan' => $satuan,  
            'keterangan' => 'tersedia',  
            'tempat' => $tempat             
        );
        $details_barang_update = array(
            'id' => $iddet,
            'id_barang' => $id_barang,
            'baik' => $baik,
            'rusak' => $rusak
        );
        $whbarang = array ('id' => $id_barang);
        $whdetails = array ('id' => $iddet);
        if ($cek=='') {
            $barang = $this->modelkrt->insert('barang',$data_barang);
            $details = $this->modelkrt->insert('details_barang',$details_barang);
            $hilang = $this->modelkrt->insert('barang_hilang',$barang_hilang);
        }else{
            $barang = $this->modelkrt->update('barang',$data_barang_update,$whbarang);
            $details = $this->modelkrt->update('details_barang',$details_barang_update,$whdetails);
            $hilang = $this->modelkrt->insert('barang_hilang',$barang_hilang);
        }
        
        if ($barang>0&&$details>0&&$hilang>0) {
            redirect('hilang', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }

    public function edit($id) {
        $data['hilang'] = $this->modelkrt->editHilang($id);
        $this->load->view('admin/header','refresh');
        $this->load->view('admin/nav','refresh');
        $this->load->view('admin/sidebar','refresh');
        $this->load->view('admin/hilang/edit',$data,'refresh');
        $this->load->view('admin/footer','refresh');
    }

    public function doedit() {
        $id_barang = $_POST['id'];
        $id_details = $_POST['id_details'];
        $id_hilang= $_POST['id_hilang'];
        $users = $this->ion_auth->get_user_id();
        $nama = $_POST['nama'];
        $total_hilang = $_POST['total_hilang'];
        $hil_baik = $_POST['hil_baik'];
        $baik = $_POST['baik'];
        $rusak = $_POST['rusak'];
        $hil_rusak = $_POST['hil_rusak'];
        $tanggal = date('Y-m-d');
        $satuan = $_POST['satuan'];
        $jumlahsisa = $_POST['jumlahsisa'];
        $tempat = $_POST['tempat'];
       

        $data_barang_update = array (
            'id' => $id_barang,  
            'users' => $users,  
            'nama' => $nama,  
            'jumlah' => $jumlahsisa,  
            'satuan' => $satuan,  
            'keterangan' => 'tersedia',  
            'tempat' => $tempat             
        );
        $details_barang_update = array(
            'id' => $id_details,
            'id_barang' => $id_barang,
            'baik' => $baik,
            'rusak' => $rusak
        );
        
        $barang_hilang = array('id' => $id_hilang,
            'id_barang' => $id_barang,
            'jumlah' => $total_hilang,
            'hilang_baik' => $hil_baik,
            'hilang_rusak' => $hil_rusak,
            'tanggal' => $tanggal
        );
        $whereIdHilang = array ('id' => $id_hilang);
        $whereIdBarang = array ('id' => $id_barang);
        $whereIdDetails = array ('id' => $id_details);

        $barang = $this->modelkrt->update('barang',$data_barang_update,$whereIdBarang);
        $details = $this->modelkrt->update('details_barang',$details_barang_update,$whereIdDetails);
        $hilang = $this->modelkrt->update('barang_hilang',$barang_hilang,$whereIdHilang);
        if ($hil_baik==0&&$hil_rusak==0) {
         $hilang = $this->modelkrt->delete('barang_hilang',"id = '$id_hilang'");   
        }
        if ($barang>0&&$details>0&&$hilang>0) {
            redirect('hilang', 'refresh');
        } else {
            $this->load->view('admin/500');
        }
    }
}
