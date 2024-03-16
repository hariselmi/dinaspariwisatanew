<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validate extends CI_Controller {

	/**
     * Login Validate
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
	

	public function validate_hotel()
	{
		$rules = [
			[
				'field' => 'nama_usaha',
				'label' => 'Nama Usaha',
				'rules' => 'required',
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {

			$data['nama_usaha']		    		= $this->input->post('nama_usaha');
		$this->db->insert('hotel', $data); 

			header("Content-type:application/json");
			echo json_encode('success');
		} else {
			header("Content-type:application/json");
			echo json_encode($this->form_validation->get_all_errors());
		}
	}

	
	public function validate_restoran()
	{

		$rules = [
			[
				'field' => 'nama_usaha',
				'label' => 'Nama Usaha',
				'rules' => 'required',
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {

			$data['nama_usaha']		    		= $this->input->post('nama_usaha');
		$this->db->insert('restoran', $data); 

			header("Content-type:application/json");
			echo json_encode('success');
		} else {
			header("Content-type:application/json");
			echo json_encode($this->form_validation->get_all_errors());
		}

	}

	public function validate_mall()
	{
	}

	public function validate_pantai()
	{
		
	}

	public function validate_wisata_sejarah()
	{
	}

	public function validate_wisata_budaya()
	{
		
	}

	public function validate_wisata_religi()
	{
		
	}

	public function validate_rumah_makan()
	{
	}

	public function validate_kedai_kopi()
	{
	
	}

	public function validate_salon_spa()
	{
		$rules = [
			[
				'field' => 'nama_usaha',
				'label' => 'Nama Usaha',
				'rules' => 'required',
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {

			$data['nama_usaha']		    		= $this->input->post('nama_usaha');
		$this->db->insert('salon_spa', $data); 

			header("Content-type:application/json");
			echo json_encode('success');
		} else {
			header("Content-type:application/json");
			echo json_encode($this->form_validation->get_all_errors());
		}
	}

	public function validate_wisata_buatan()
	{

	}

	public function validate_fitness()
	{
	}

	public function validate_agroeco_wisata()
	{
	}

	public function validate_bioskop()
	{
	}

	public function validate_bar()
	{
	}

	public function validate_diskotik()
	{
	}

	public function validate_wisata_jembatan()
	{
	}

	public function validate_pelabuhan()
	{
	}

	public function validate_gelper()
	{

		$rules = [
			[
				'field' => 'nama_usaha',
				'label' => 'Nama Usaha',
				'rules' => 'required',
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {

			$data['nama_usaha']		    		= $this->input->post('nama_usaha');
		$this->db->insert('gelper', $data); 

			header("Content-type:application/json");
			echo json_encode('success');
		} else {
			header("Content-type:application/json");
			echo json_encode($this->form_validation->get_all_errors());
		}

	}
	

}
