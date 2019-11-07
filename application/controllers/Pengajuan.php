<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pengajuan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
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
                    'deskripsi'    => $this->post('deskripsi'));
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