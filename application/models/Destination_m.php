<?php

class Destination_m extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    public function all()
    {
        $query = $this->db->from('destination u')
                        ->select('u.*')
                        ->where('u.softdelete', '0')
                        ->get();

        return $query->result();
    }

    public function count()
    {
        $query = $this->db->from('destination u')
                        ->select('COUNT(u.nama) AS Jumlah')
                        ->where('u.softdelete', '0')
                        ->orderby('u.kategori_id')
                        ->get();

        return $query->result();
    }



}