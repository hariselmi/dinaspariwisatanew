<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Base_Controller {
	
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
        
		
    }
	
	public function index()
	{

		$this->data['title'] 			= 'Dashboard';
		$data['subview'] = 'dashboard/main';
		$this->load->view('backend/layout', $data);

		
	}

}
