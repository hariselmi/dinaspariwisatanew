<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter_kategori extends CI_Controller {

	/**
     * Login Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	public function __construct()
	{
        parent::__construct();
        
        $this->load->language('siparbud', $this->session->userdata('language'));
		
    }
	
	public function index()
	{
		$data['title'] = 'Form';
		$data['subview'] = 'form/main';
		$data['q_category'] = $this->category_m->all();
		$this->load->view('components/layout', $data);
	}


	public function setup()
	{
		$kategori_id = $this->input->post('kategori_id');

		 $check  = $this->db->query("SELECT id FROM filter_kategori WHERE kategori_id = $kategori_id")->num_rows();

		 if ($check > 0) {
		 	$this->db->where('kategori_id', $kategori_id);
			$this->db->delete('filter_kategori');
		 }
		 else {
		 	$data['kategori_id']		    		= $kategori_id;
			$this->db->insert('filter_kategori', $data);
		 }
		 



		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	

}
