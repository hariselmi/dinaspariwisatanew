<?php

class Home_m extends CI_Model {   

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Datagrid Data
     *
     * @access  public
     * @param   
     * @return  json(array)
     */

public function get_gallery()
    {
        $query = $this->db->from('gallery g')
                        ->select('g.*')
                        
                        ->order_by('id','DESC')
                        ->limit('4')
                        ->get();

        return $query->result();
    }
       
    

}