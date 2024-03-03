<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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

	public function hotel()
	{
		$data['title'] = 'Hotel';
		$data['subview'] = 'form/hotel';
		$this->load->view('components/layout', $data);
	}

	public function restoran()
	{
		$data['title'] = 'Restaurant';
		$data['subview'] = 'form/restoran';
		$this->load->view('components/layout', $data);
	}

	public function mall()
	{
		$data['title'] = 'Mall';
		$data['subview'] = 'form/mall';
		$this->load->view('components/layout', $data);
	}

	public function pantai()
	{
		$data['title'] = 'Pantai';
		$data['subview'] = 'form/pantai';
		$this->load->view('components/layout', $data);
	}

	public function wisata_sejarah()
	{
		$data['title'] = 'Wisata Sejarah';
		$data['subview'] = 'form/wisata_sejarah';
		$this->load->view('components/layout', $data);
	}

	public function wisata_budaya()
	{
		$data['title'] = 'Wisata Budaya';
		$data['subview'] = 'form/wisata_budaya';
		$this->load->view('components/layout', $data);
	}

	public function wisata_religi()
	{
		$data['title'] = 'Wisata Religi';
		$data['subview'] = 'form/wisata_religi';
		$this->load->view('components/layout', $data);
	}

	public function rumah_makan()
	{
		$data['title'] = 'Rumah Makan';
		$data['subview'] = 'form/rumah_makan';
		$this->load->view('components/layout', $data);
	}

	public function kedai_kopi()
	{
		$data['title'] = 'Kedai Kopi';
		$data['subview'] = 'form/kedai_kopi';
		$this->load->view('components/layout', $data);
	}

	public function salon_spa()
	{
		$data['title'] = 'Salon & Spa';
		$data['subview'] = 'form/salon_spa';
		$this->load->view('components/layout', $data);
	}

	public function wisata_buatan()
	{
		$data['title'] = 'Mall';
		$data['subview'] = 'form/wisata_buatan';
		$this->load->view('components/layout', $data);
	}

	public function fitness()
	{
		$data['title'] = 'Fitness';
		$data['subview'] = 'form/fitness';
		$this->load->view('components/layout', $data);
	}

	public function agroeco_wisata()
	{
		$data['title'] = 'Agro & Eco Wisata';
		$data['subview'] = 'form/agroeco_wisata';
		$this->load->view('components/layout', $data);
	}

	public function bioskop()
	{
		$data['title'] = 'Bioskop';
		$data['subview'] = 'form/bioskop';
		$this->load->view('components/layout', $data);
	}

	public function bar()
	{
		$data['title'] = 'Bar';
		$data['subview'] = 'form/bar';
		$this->load->view('components/layout', $data);
	}

	public function diskotik()
	{
		$data['title'] = 'Diskkotik';
		$data['subview'] = 'form/diskotik';
		$this->load->view('components/layout', $data);
	}

	public function wisata_jembatan()
	{
		$data['title'] = 'Wisata Jembatan';
		$data['subview'] = 'form/wisata_jembatan';
		$this->load->view('components/layout', $data);
	}

	public function pelabuhan()
	{
		$data['title'] = 'Pelabuhan';
		$data['subview'] = 'form/pelabuhan';
		$this->load->view('components/layout', $data);
	}
	

}
