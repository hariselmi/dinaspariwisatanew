<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
     * Dashboard
     *
     * @access  public
     * @param   
     * @return  view
     */
	public function __construct()
    {
        parent::__construct();
        
        $this->load->language('siparbud', $this->session->userdata('language'));
		
    }

	public function index()
	{	
		$this->session->userdata('language');
		$data['title'] = 'Home';
		$data['subview'] = 'home/main';
		$data['q_location'] = $this->location_m->all();
		$data['q_category'] = $this->category_m->all();
		$this->load->view('components/layout', $data);
	}

	public function maps()
	{
		$data['title'] = 'Home';
		$data['subview'] = 'home/maps';
		$data['q_location'] = $this->location_m->all();
		$this->load->view('components/layout', $data);
	}


	public function category()
	{
		$data['title'] = 'Home';
		$data['subview'] = 'home/category';
		$data['q_location'] = $this->location_m->all();
		$data['q_category'] = $this->category_m->all();
		$this->load->view('components/layout', $data);
	}

	public function destination($id = '')
	{
		$data['title'] = 'Home';
		$data['subview'] = 'home/destination';
		$this->load->view('components/layout', $data);
	}

	public function contact()
	{
		$data['title'] = 'Home';
		$data['subview'] = 'home/contact';
		$this->load->view('components/layout', $data);
	}
	

}
