<?php 

class Modelkrt extends CI_Model {

	
	public function index_model($wher="") {
	$tampung = $this->db->query("select * from contact ".$wher);
	return $tampung->result_array();
	}
	public function insert($namatable,$data){
		$tampung = $this->db->insert($namatable,$data);
		return $tampung;
	}
	public function update($table,$data,$acuan){
		$tampung = $this->db->update($table,$data,$acuan);
		return $tampung;
	}
	public function delete($table,$primary){
		$tampung = $this->db->delete($table,$primary);
		return $tampung;
	}

	 function get_row($table,$filed_array=array(),$select='*') {
		$this->db->select($select);
		$this->db->from($table);
        if(count($filed_array)>0) $this->db->where($filed_array);        
        $query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
		} else {
			$result = '';
		}
		return $result;
    }

	public function GetRowBarang($keyword) {        
        $this->db->select('barang.*, barang.id as id_barang', FALSE);
		$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->from('barang');
		$this->db->join('details_barang','barang.id = details_barang.id_barang','left');
		$this->db->where('keterangan !=','pinjam');
		$this->db->order_by('barang.id','desc');
		$this->db->like("nama", $keyword);
		$query = $this->db->get();
		return $query->result_array(); 
       // return $this->db->get('barang')->result_array();
    }

    public function graph() {
    	$this->db->select('barang.*, barang.id as id_barang', FALSE);
  //   	$this->db->select('barang_hilang.*, barang_hilang.id as id_hilang', FALSE);
		//$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->from('barang');
		//$this->db->join('details_barang','barang.id = details_barang.id_barang','left');
		// $this->db->join('barang_hilang','barang.id = barang_hilang.id_barang','left');
		$query = $this->db->get();
		return $query->result(); 
    }

    public function GetRowBarangHilang($keyword) {        
        $this->db->select('barang.*, barang.id as id_barang', FALSE);
		$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->from('barang');
		$this->db->join('details_barang','barang.id = details_barang.id_barang','left');
		$this->db->order_by('barang.id','desc');
		$this->db->where('jumlah >=','1');
		$this->db->like("nama", $keyword);
		$query = $this->db->get();
		return $query->result_array(); 
    }

    public function cekBrgHilang($keyword) {        
 		$this->db->select('id_barang');
      	$this->db->where('id_barang',$keyword);
        //$this->db->like("nama", $keyword);
        return $this->db->get('barang_hilang')->row();
    }

	public function datacamp($wher="camp"){
		$this->db->select('barang.*, barang.id as id_barang', FALSE);
		$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->from('barang');
		$this->db->join('details_barang','barang.id = details_barang.id_barang','left');
		$this->db->where('tempat',$wher);
		$this->db->where('jumlah !=',0);
		$this->db->order_by('barang.id','desc');
		$query = $this->db->get();
		return $query->result_array();             	
	}

	public function databuku() {
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('pengarang','buku.id_pengarang = pengarang.id_pengarang','left');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function datapengarang() {
		$this->db->select('*');
		$this->db->from('pengarang');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function datasekre($wher="sekre"){
		$this->db->select('barang.*, barang.id as id_barang', FALSE);
		$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->from('barang');
		$this->db->join('details_barang','barang.id = details_barang.id_barang','left');
		$this->db->where('tempat',$wher);
		$this->db->where('jumlah !=',0);
		$this->db->order_by('barang.id','desc');
		$query = $this->db->get();
		return $query->result_array();           	
	}

	public function datarusak(){
		$this->db->select('barang.*, barang.id as id_barang', FALSE);
		$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->from('barang');
		$this->db->join('details_barang','barang.id = details_barang.id_barang','left');
		$this->db->order_by('barang.id','desc');
		$this->db->where('details_barang.rusak >= ',1);
		$query = $this->db->get();
		return $query->result_array();           	
	}

	public function datahilang(){
		$this->db->select('barang.*, barang.jumlah as jmlbarang', FALSE);
		$this->db->select('barang_hilang.*, barang_hilang.jumlah as jmlhilang, barang_hilang.id as idhilang', FALSE);
		$this->db->from('barang_hilang');
		$this->db->join('barang','barang.id = barang_hilang.id_barang','left');
		$this->db->where('barang_hilang.jumlah !=',0);
		$this->db->order_by('barang_hilang.id','desc');
		$query = $this->db->get();
		return $query->result_array();  
              	
	}

	public function editHilang($id=""){
		$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->select('barang.*, barang.jumlah as jmlbarang, barang.id as id_barang', FALSE);
		$this->db->select('barang_hilang.*, barang_hilang.jumlah as jmlhilang, barang_hilang.id as id_hilang', FALSE);
		$this->db->from('barang_hilang');
		$this->db->join('barang','barang.id = barang_hilang.id_barang','left');
		$this->db->join('details_barang','barang.id = details_barang.id_barang','left');
		$this->db->where('barang_hilang.id', $id);
		$query = $this->db->get();
		return $query->row();  
	}

	public function editBarang($id=""){
		//$tampung = $this->db->query("select * from $table ".$id);
		$this->db->select('barang.*, barang.id as id_barang', FALSE);
		$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->from('barang');
		$this->db->join('details_barang','barang.id = details_barang.id_barang','left');
		$this->db->where('barang.id', $id);
		
		$query = $this->db->get();
		return $query->row();  
	}

	public function databerita(){
		$this->db->select('berita.*, users.first_name');
		$this->db->from('berita');
		$this->db->join('users','users.id = berita.users','left');
		$this->db->order_by('berita.id','desc');
		$query = $this->db->get();
		return $query->result_array();           	
	}

	public function pengembalian () {
		$this->db->select('pengembalian.*, pengembalian.id as id_kembali');
		$this->db->select('users.*, users.id as id_users');
		$this->db->select('barang.*, barang.id as id_barang');
		$this->db->from('pengembalian');
		$this->db->join('users','pengembalian.users = users.id','left');
		$this->db->join('barang','pengembalian.id_barang = barang.id','left');
		$this->db->order_by('pengembalian.id','desc');
		$query = $this->db->get();
		return $query->result_array();    
	}

	public function detailberita($wher="") {
		$this->db->select('berita.*, users.first_name, users.last_name');
		$this->db->from('berita');
		$this->db->where('berita.id', $wher);
		$this->db->join('users','users.id = berita.users','left');
		$query = $this->db->get();
		return $query->row(); 
	}

	public function cekIdBarang($id='B0011') {
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row('id');
	}

	function kodedetails(){
		$this->db->select('RIGHT(details_barang.id,4) as kode', FALSE);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$query = $this->db->get('details_barang');
		//cek dulu apakah ada sudah ada kode di tabel.
		if($query->num_rows() <> 0){
			//jika kode ternyata sudah ada.
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			//jika kode belum ada
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "D".$kodemax;
		return $kodejadi;
	}

	function kodebarang(){
		$this->db->select('RIGHT(barang.id,4) as kode', FALSE);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$query = $this->db->get('barang');
		//cek dulu apakah ada sudah ada kode di tabel.
		if($query->num_rows() <> 0){
			//jika kode ternyata sudah ada.
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			//jika kode belum ada
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "B".$kodemax;
		return $kodejadi;
	}

	function kodepengembalian(){
		$this->db->select('RIGHT(pengembalian.id,4) as kode', FALSE);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$query = $this->db->get('pengembalian');
		//cek dulu apakah ada sudah ada kode di tabel.
		if($query->num_rows() <> 0){
			//jika kode ternyata sudah ada.
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			//jika kode belum ada
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "K".$kodemax;
		return $kodejadi;
	}

	function kodeBrgHilang(){
		$this->db->select('RIGHT(barang_hilang.id,4) as kode', FALSE);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$query = $this->db->get('barang_hilang');
		//cek dulu apakah ada sudah ada kode di tabel.
		if($query->num_rows() <> 0){
			//jika kode ternyata sudah ada.
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			//jika kode belum ada
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "H".$kodemax;
		return $kodejadi;
	}

	public function edit($table,$id){
		$tampung = $this->db->query("select * from $table ".$id);
		return $tampung->row(); 
	}

	function kodeberita(){
		$this->db->select('RIGHT(berita.id,3) as kode', FALSE);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$query = $this->db->get('berita');
		//cek dulu apakah ada sudah ada kode di tabel.
		if($query->num_rows() <> 0){
			//jika kode ternyata sudah ada.
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			//jika kode belum ada
			$kode = 1;
		}
		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodejadi = "BR".$kodemax;
		return $kodejadi;
	}

	public function pengajuan($wher="menunggu"){
		$this->db->select('pengajuan.*, pengajuan.id as id_pengajuan');
		$this->db->select('barang.*');
		$this->db->select('users.phone');
		$this->db->from('pengajuan');
		$this->db->join('barang','barang.id = pengajuan.id_barang','left');
		$this->db->join('users','users.id = pengajuan.users','left');		
		$this->db->where('status',$wher);
		$this->db->order_by('pengajuan.id','desc');
		$query = $this->db->get();
		return $query->result_array();           	
	}

	public function pengajuanlist($wher="menunggu"){
		$this->db->select('pengajuan.*, pengajuan.id as id_pengajuan');
		$this->db->select('barang.*, barang.id as id_barang');
		$this->db->select('users.*, users.id as id_users');
		$this->db->from('pengajuan');
		$this->db->join('barang','barang.id = pengajuan.id_barang','left');
		$this->db->join('users','users.id = pengajuan.users','left');		
		$this->db->where('status',$wher);
		$this->db->order_by('pengajuan.id','desc');
		$query = $this->db->get();
		return $query->result_array();           	
	}

	public function barangsms($wher=""){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('pengajuan','barang.id = pengajuan.id_barang','left');
		$this->db->where('pengajuan.id',$wher);
		$this->db->order_by('pengajuan.id','desc');
		$query = $this->db->get();
		return $query->row(); 
		//$hasil = $query->result_array();    
		/*echo "<pre>";
		var_dump($hasil);
		echo "</pre>";
		exit();  */     	
	}

	// public function list(){
	// 	$this->db->select('*');
	// 	$this->db->from('pengajuan');
	// 	$this->db->join('barang','barang.id = pengajuan.id_barang','left');
	// 	$this->db->order_by('pengajuan.id','desc');
	// 	$query = $this->db->get();
	// 	return $query->result_array();           	
	// }

	public function getPengajuan($id) {
		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->where('pengajuan.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function pengajuan_list($start="", $end=""){
		$this->db->select('pengajuan.*, pengajuan.id as id_pengajuan');
		$this->db->select('barang.*');
		$this->db->select('users.company');
		$this->db->from('pengajuan');
		$this->db->join('barang','barang.id = pengajuan.id_barang','left');
		$this->db->join('users','users.id = pengajuan.users','left');
		$this->db->where('pengajuan.status !=','menunggu');
		if ($start==null&&$end==null) {
		}else{
			$this->db->where('pengajuan.tgl_pengajuan BETWEEN "'. date('Y-m-d', strtotime($start)). '" and "'. date('Y-m-d', strtotime($end)).'"');

		}
		// $this->db->order_by('pengajuan.id','desc');
		$query = $this->db->get();
		return $query->result_array();           	
	}

	public function kodesms() {
		$this->db->select('RIGHT(sms.id,4) as kode', FALSE);
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		$query = $this->db->get('sms');
		//cek dulu apakah ada sudah ada kode di tabel.
		if($query->num_rows() <> 0){
			//jika kode ternyata sudah ada.
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			//jika kode belum ada
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "S".$kodemax;
		return $kodejadi;
	}

	public function listpengajuan() {
		// $this->db->select('sms.id,pengajuan.barang,sms.pesan,users.first_name,users.id,pengajuan.id');
		// $this->db->from('sms');
		// $this->db->join('users', 'sms.users = users.id', 'left');
		// $this->db->join('pengajuan', 'sms.pengajuan = pengajuan.id', 'left');
		// $query = $this->db->get();  
		// return $query->result_array(); 
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('pengajuan','pengajuan.id_barang = barang.id','RIGHT');
		$this->db->order_by('pengajuan.id','desc');
		$query = $this->db->get();
		return $query->result_array();      
	}

	public function listpengajuans() {
		// $this->db->select('sms.id,pengajuan.barang,sms.pesan,users.first_name,users.id,pengajuan.id');
		// $this->db->from('sms');
		// $this->db->join('pengajuan', 'sms.pengajuan = pengajuan.id', 'left');
		// $query = $this->db->get();  
		// return $query->result_array(); 
		$this->db->select('pengajuan.*, pengajuan.id as id_pengajuan');
		$this->db->select('barang.*, barang.id as id_barang');
		$this->db->select('users.*, users.id as id_users');
		$this->db->from('pengajuan');
		$this->db->join('barang','pengajuan.id_barang = barang.id','RIGHT');
		$this->db->join('users', 'pengajuan.users = users.id', 'left');
		$this->db->where('pengajuan.status !=','menunggu');
		$this->db->where('pengajuan.status !=','kembali');
		$this->db->order_by('pengajuan.id','desc');
		$query = $this->db->get();
		return $query->result_array();      
	}

	public function selectuser($table,$id) {
		$tampung = $this->db->query("select * from $table where id = ".$id);
		return $tampung->row(); 
	}

	public function select($table,$id) {
		$tampung = $this->db->query("select * from $table ".$id);
		return $tampung->row(); 
	}

	public function listterkirim() {
		$this->db->select('*');
		$this->db->from('sms');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		return $query->result_array();      
	}
	public function selectchangefoto($table,$id){
		$tampung = $this->db->query("select * from $table ".$id);
		return $tampung->row(); 
	}

	public function jmlPeminjaman() {
		$query = $this->db->query('SELECT * FROM pengajuan');
		return $query->num_rows();
	}
	public function jmlBarang() {
		$query = $this->db->query('SELECT * FROM barang');
		return $query->num_rows();
	}

	public function jmlBerita() {
		$query = $this->db->query('SELECT * FROM berita');
		return $query->num_rows();
	}

	function getAllBerita($number,$offset){
		$this->db->select('berita.*, users.first_name');
		$this->db->from('berita');
		$this->db->join('users','users.id = berita.users','left');
		$this->db->order_by('berita.id','desc');
		$this->db->limit($number,$offset);
		$query = $this->db->get();
		return $query->result_array(); 	
	}

	public function jmlSms() {
		$query = $this->db->query('SELECT * FROM sms');
		return $query->num_rows();
	}
	public function jmlUsers() {
		$query = $this->db->query('SELECT * FROM users');
		return $query->num_rows();
	}
}