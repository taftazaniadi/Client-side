<?php

class M_user extends CI_Model
{

	public function index_model($wher = "")
	{
		$tampung = $this->db->query("select * from contact " . $wher);
		return $tampung->result_array();
	}
	public function insert($namatable, $data, $email)
	{
		$tampung = $this->db->insert($namatable, $data, $email);
		return $tampung;
	}
	public function update($table, $data, $acuan)
	{
		$tampung = $this->db->update($table, $data, $acuan);
		return $tampung;
	}
	public function delete($table, $primary)
	{
		$tampung = $this->db->delete($table, $primary);
		return $tampung;
	}

	public function search($cari = '')
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('nama like ', "%$cari%");
		$query = $this->db->get();
		return $query->result_array();
	}


	public function GetRow($keyword)
	{
		$this->db->order_by('id', 'DESC');
		$this->db->where('keterangan =', 'tersedia');
		$this->db->like("nama", $keyword);
		return $this->db->get('barang')->result_array();
	}

	public function getDataUser($id)
	{
		$this->db->select('foto', 'email');
		$this->db->from('users');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function GetRowBarang($keyword)
	{
		$this->db->select('barang.*, barang.id as id_barang', FALSE);
		$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->from('barang');
		$this->db->join('details_barang', 'barang.id = details_barang.id_barang', 'left');
		$this->db->like("nama", $keyword);
		$this->db->where('keterangan !=', 'pinjam');
		$this->db->where('details_barang.baik >=', '1');
		$this->db->where('barang.id NOT IN (SELECT id_barang FROM barang_hilang)', NULL, FALSE);
		$this->db->order_by('barang.id', 'desc');
		$query = $this->db->get();
		return $query->result_array();
		// return $this->db->get('barang')->result_array();
	}

	public function GetRowBarangPengajuan($keyword)
	{
		$this->db->select('*', FALSE);
		$this->db->from('pengajuan');
		$this->db->where("id_barang", $keyword);
		$this->db->where('status !=', 'kembali');
		$this->db->where('status !=', 'tolak');
		$query = $this->db->get();
		return $query->result_array();
		// return $this->db->get('barang')->result_array();
	}
	public function databarang()
	{
		$this->db->select('barang.*, barang.id as id_barang', FALSE);
		$this->db->select('details_barang.*, details_barang.id as id_details', FALSE);
		$this->db->from('barang');
		$this->db->join('details_barang', 'barang.id = details_barang.id_barang', 'left');
		$this->db->where('keterangan !=', 'pinjam');
		$this->db->where('details_barang.baik >=', '1');
		$this->db->order_by('barang.id', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function pengajuan($myid = "")
	{
		$this->db->select('*');
		$this->db->from('pengajuan');
		$this->db->join('barang', 'barang.id = pengajuan.id_barang', 'left');
		$this->db->where('pengajuan.users', $myid);
		$this->db->order_by('pengajuan.id', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function pengajuanuser($myid = "")
	{
		$this->db->select('pengajuan.*, pengajuan.id as id_pengajuan');
		$this->db->select('barang.*, barang.id as id_barang');
		$this->db->from('pengajuan');
		$this->db->join('barang', 'barang.id = pengajuan.id_barang', 'left');
		$this->db->where('pengajuan.users', $myid);
		$this->db->order_by('pengajuan.id', 'desc');
		$query = $this->db->get();
		return $query->result_array();
	}

	// public function datasekre($wher="sekre"){
	// 	$this->db->select('*');
	// 	$this->db->from('barang');
	// 	$this->db->where('tempat',$wher);
	// 	$this->db->order_by('id','desc');
	// 	$query = $this->db->get();
	// 	return $query->result_array();           	
	// }

	function kodepengajuan()
	{
		$this->db->select('RIGHT(pengajuan.id,4) as kode', FALSE);
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('pengajuan');
		//cek dulu apakah ada sudah ada kode di tabel.
		if ($query->num_rows() <> 0) {
			//jika kode ternyata sudah ada.
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			//jika kode belum ada
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "P" . $kodemax;
		return $kodejadi;
	}

	public function edit($table, $id)
	{
		$tampung = $this->db->query("select * from $table " . $id);
		return $tampung->row();
	}
}
