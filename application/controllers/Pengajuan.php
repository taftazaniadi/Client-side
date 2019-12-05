<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pengajuan extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data pemohon
    function index_get() {
        $currentDate = date('Y/m/d');
        $status = "menunggu";
        
        if ($currentDate) 
        {
            $data = $this->db->query("SELECT u.first_name, u.company
                                      FROM pengajuan p 
                                      JOIN users u ON u.id = p.users 
                                      WHERE p.status = '" . $status . "' 
                                      AND p.tgl_pengajuan = '" . $currentDate . "'")->result_array();
        }
        $this->response($data, 200);
    }

    function count_get() {
        $currentDate = date('Y/m/d');
        $status = "menunggu";

        $this->db->select('count(*) as Jumlah');
        $this->db->from('pengajuan');
        $this->db->where('status', $status);
        $this->db->where('tgl_pengajuan', $currentDate);
        $data = $this->db->get();
        $result = $data->result_array();

        $this->response($result, 200);
    }
}
