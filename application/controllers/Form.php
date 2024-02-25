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
	
	public function index()
	{
		$data['title'] = 'Form';
		$data['subview'] = 'form/main';
		$this->load->view('components/layout', $data);
	}


	public function restoran()
	{
		$data['title'] = 'Restaurant';
		$data['subview'] = 'form/restoran';
		$this->load->view('components/layout', $data);
	}

	public function hotel()
	{
		$data['title'] = 'Hotel';
		$data['subview'] = 'form/hotel';
		$this->load->view('components/layout', $data);
	}
	public function mall()
	{
		$data['title'] = 'Mall';
		$data['subview'] = 'form/mall';
		$this->load->view('components/layout', $data);
	}
	

}
