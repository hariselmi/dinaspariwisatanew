<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

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

    }

    public function index()
	{
		redirect(base_url());
	}
    	
	public function setup()
	{

		$this->load->model('language_m');
        $this->language_m->set($this->input->post('language_id'));

	}

}
