<?php

class Pengajuan extends CI_Model {

    var $table='pengajuan';
    var $column_order=array(null, "pengajuan.id","pengajuan.users","pengajuan.id_barang","pengajuan.nim","pengajuan.qty","pengajuan.deskripsi","pengajuan.tgl_pengajuan","pengajuan.tgl_pemakaian","pengajuan.status", null); //set column field database for datatable orderable
    var $column_search=array("pengajuan.id","pengajuan.users","pengajuan.id_barang","pengajuan.nim","pengajuan.qty","pengajuan.deskripsi","pengajuan.tgl_pengajuan","pengajuan.tgl_pemakaian","pengajuan.status"); //set column field database for datatable searchable 
    var $order=array('id'=> 'desc'); // default order 

    private function _get_datatables_query() {
        $this->db->select('pengajuan.*', FALSE);
        $this->db->from($this->table);

        // $this->db->join('payments', 'payments.customerNumber = pengajuan.customerNumber', 'left');

        $start_date=$_POST['minDate'];
        $end_date=$_POST['maxDate'];
        $this->db->where('pengajuan.tgl_pengajuan BETWEEN "'. $start_date. '" and "'. $end_date.'"');

        $i=0;
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                if($i===0) // first loop
                {
                    $this->db->like($item, $_POST['search']['value']);
                    $this->db->where('payments.paymentDate BETWEEN "'. $start_date. '" and "'. $end_date.'"');
                }
                else {
                    $this->db->or_like($item, $_POST['search']['value']);
                    $this->db->where('payments.paymentDate BETWEEN "'. $start_date. '" and "'. $end_date.'"');
                }
                if(count($this->column_search) - 1==$i) {}
                //$this->db->group_end(); //close bracket
            }
            $i++;
        }
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order)) {
            $order=$this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables() {
        $this->_get_datatables_query();
        if($_POST['length'] !=-1) $this->db->limit($_POST['length'], $_POST['start']);
        $query=$this->db->get();
        return $query->result();
    }

    function count_filtered() {
        $this->_get_datatables_query();
        $query=$this->db->get();
        return $query->num_rows();
    }
    
    public function count_all() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}