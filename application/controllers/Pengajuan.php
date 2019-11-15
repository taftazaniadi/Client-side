<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pengajuan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan Jumlah Pengajuan
    function count_get() {
        $currentDate = date('Y/m/d');
        $data = $this->db->query("SELECT COUNT(*) AS Jumlah FROM pengajuan WHERE tgl_pengajuan = '" . $currentDate . "' AND status = 'menunggu'");
        $hasil = $data->row();
        
        echo $hasil->Jumlah;
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $pengajuan = $this->db->get('pengajuan')->result();
        } else {
            $this->db->where('id', $id);
            $pengajuan = $this->db->get('pengajuan')->result();
        }
        $this->response($pengajuan, 200);
    }

    function index_post() {
        $data = array(
                    'id'           => $this->post('id'),
                    'users'        => $this->post('users'),
                    'id_barang'    => $this->post('id_barang'),
                    'nim'          => $this->post('nim'),
                    'qty'          => $this->post('qty'),
                    'deskripsi'    => $this->post('deskripsi'),
                    // 'tgl_pengajuan'=> $this->load->helper('date'),
                    'tgl_pemakaian'=> $this->post('tgl_pemakaian'),
                    'surat'        => $this->post('surat'),
                    // 'status'       => $this->post('menunggu')
                );
        $insert = $this->db->insert('pengajuan', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'            => $this->put('id'),
                    'users'         => $this->put('users'),
                    'deskripsi'     => $this->put('deskripsi'));
        $this->db->where('id', $id);
        $update = $this->db->update('pengajuan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini
}
?>