<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {  
        $this->load->model('modelkrt');
        $this->load->library('ion_auth');
        $jumlah_data = $this->modelkrt->jmlBerita();
        $this->load->library('pagination');
        $config['base_url'] = base_url('welcome/index/');
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 4;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     

        $data['datas'] = $this->modelkrt->getAllBerita($config['per_page'],$from);
        //$this->data['datas'] =  $this->modelkrt->databerita();
        $this->load->view('welcome_message',$data,'refresh');
    }

    public function doaddpengajuan() {
        $this->load->library('Minta');
        $idpengajuan = $_POST['idpengajuan'];
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $hp = $_POST['handphone'];
        $instansi = $_POST['instansi'];
        $deskripsi = $_POST['deskripsi'];
        $namabarang = $_POST['namabarang'];
        $jumlahbarang = $_POST['jumlahbarang'];
        $tanggal = $_POST['tanggal'];
        $data_insert = array (
            'idpengajuan' => $idpengajuan,
            'nama' => $nama,
            'nim' => $nim,
            'handphone' => $hp,
            'instansi' => $instansi,
            'deskripsi' => $deskripsi,
            'namabarang' => $namabarang,
            'jumlahbarang' => $jumlahbarang,
            'tanggalpengajuan' => $tanggal
        );
        $tampung = $this->pengajuandb->insert('pengajuan',$data_insert); 
        if ($tampung>=1) {
            $response = Requests::post("https://reguler.zenziva.net/apps/smsapi.php?userkey=inyq2l&passkey=dikiharif&nohp=082328722687&pesan={$nama}_{$hp}_{$instansi}_{$namabarang}_{$deskripsi}");
            var_dump($response->body);
            echo "<script>window.alert('Terima Kasih, Pengajuan Peminjaman Telah Berhasil. Silahkan Konfirmasi pengajuan ke Bagian Kerumahtanggan AMCC.');</script>";
            redirect('user', 'refresh');
        } else {
            echo "ada yg error";
        }    
    }

    public function detail($id) {
        $this->load->library('ion_auth');
        $this->load->model('modelkrt');
        $this->data['datas'] = $this->modelkrt->detailberita($id);
        $this->load->view('details',$this->data,'refresh');  
    }

    public function gitsolution() {
        $data['token'] = '1606819409.1677ed0.b8c8e8c97f8640ed851e9a6692e47727';
        $data['num_fhotos'] = 20;
        $this->load->view('gitsolution',$data,'refresh');  
    }

    public function curlgits() {
                $this->load->library('ion_auth');
        //Get data from instagram api
        $hashtag = '1606819409.1677ed0.b8c8e8c97f8640ed851e9a6692e47727';
        //Query need client_id or access_token
        // $query = array(
        //     'count'     => 40
        // );
        $url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=1606819409.1677ed0.b8c8e8c97f8640ed851e9a6692e47727&callback=callbackFunction';
        try {
            $curl_connection = curl_init($url);
            curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
            
            //Data are stored in $data
            $data['parsing'] = json_decode(curl_exec($curl_connection));
            // foreach($data['datas'] as $aa) {
            //     foreach ($aa as $bb) {
            //           echo "<pre>";
            // print_r($bb);
            // echo "</pre>";

            //     }
            // //     echo "<pre>";
            // print_r($aa);
            // echo "</pre>";
        
            // }
            //var_dump($data);
            echo "<pre>";
            print_r($data['parsing']);
            echo "</pre>";
           // $this->load->view('gittest',$data,'refresh');  
            curl_close($curl_connection);
        } catch(Exception $e) {
            return $e->getMessage();
        }

    }
    public function rudr_instagram_api_curl_connect($url){
        $curl_connection = curl_init($url);
        curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
         //Data are stored in $data
        return json_decode(curl_exec($curl_connection));
    }
    public function curlgitsdua($max_id='') {
     //   $link = "$url";
        $maxid = $max_id;
          $this->load->library('ion_auth');
        $result['parsing'] = $this->rudr_instagram_api_curl_connect("https://api.instagram.com/v1/users/self/media/recent/?access_token=1606819409.1677ed0.b8c8e8c97f8640ed851e9a6692e47727&max_id=$maxid");
         
        // echo "<pre>";
        //     print_r($result['parsing']);
        //     echo "</pre>";
      //  $this->load->view('gittest',$result,'refresh');
       //  exit();
        foreach ($result['parsing']->data as $post) {
            echo '<a href="#"><img src="' . $post->images->low_resolution->url . '" /></a>';
            // echo "<pre>";
            // print_r($post);
            // echo "</pre>";
    }

    echo '<a href="'.site_url("welcome/curlgitsdua/{$result['parsing']->pagination->next_max_id}").'">NEXT </a>';
       // echo $result['parsing']->pagination->next_url;
       // // // echo "<a href='"++"'> </a>"
         
       // //  $result_2 = $this->rudr_instagram_api_curl_connect( $result->pagination->next_url ); // API request 
    }
    public function curlgitstiga($url='cua') {
        $link = $url;
        // $result['parsing'] = $this->rudr_instagram_api_curl_connect($link);
        echo "<pre>";
        print_r($link);
        echo "</pre>";
    }

    public function callback() {
        $callback_url = "http://localhost/krt/welcome/callback";

        $params = array(
            'client_id' => "90e920bc31a54859bf2aca37a58f0f32",
            'client_secret' => "9f14d2518baf40c382c52c0f16a1a4c8",
            'aspect' => "media",
            'object' => "tag",
            'object_id' => "greentea",
            'callback_url' => $callback_url
        );

        $defaults = array(
            CURLOPT_URL => 'https://api.instagram.com/v1/subscriptions/',
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array('Accept: application/json')
        );
        $ch = curl_init();
        curl_setopt_array($ch, $defaults);
        $jsonData = curl_exec($ch);
        curl_close($ch);
        var_dump($jsonData);
    }

    public function visi () {
        $this->load->library('ion_auth');
        $this->load->view('visimisi','refresh'); 
    }

    public function struktur() {
        $this->load->library('ion_auth');
        $this->load->view('struktur','refresh'); 
    }

    public function album() {
        $this->load->library('ion_auth');
        $this->load->view('album','refresh'); 
    }

    public function sejarah() {
        $this->load->library('ion_auth');
        $this->load->view('sejarah','refresh'); 
    }
}
