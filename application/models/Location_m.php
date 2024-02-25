<?php

class Location_m extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

   
    public function all()
    {
        $query = $this->db->from('location u')
                        ->select('u.*')
                        ->where('u.softdelete', '0')
                        ->get();

        return $query->result();
    }

     


    
}