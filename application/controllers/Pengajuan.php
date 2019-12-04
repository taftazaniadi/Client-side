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
            $data = $this->db->query("SELECT u.first_name, u.company, COUNT(p.id) AS Jumlah
                                      FROM pengajuan p 
                                      JOIN users u ON u.id = p.users 
                                      WHERE p.status = '" . $status . "' 
                                      AND p.tgl_pengajuan = '" . $currentDate . "'")->result_array();
        }
        $this->response($data, 200);
    }
}
