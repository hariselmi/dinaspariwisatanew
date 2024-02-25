<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
     * Login Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$data['title'] = 'Home';
		$data['subview'] = 'home/main';
		$this->load->view('components/layout', $data);
	}

	public function maps()
	{
		$data['title'] = 'Home';
		$data['subview'] = 'home/maps';
		$this->load->view('components/layout', $data);
	}


	public function category()
	{
		$data['title'] = 'Home';
		$data['subview'] = 'home/category';
		$this->load->view('components/layout', $data);
	}

	public function destination($id)
	{
		$data['title'] = 'Home';
		$data['subview'] = 'home/destination';
		$this->load->view('components/layout', $data);
	}


	
}
