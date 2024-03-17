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
		$data['q_maps'] = $this->maps_m->all();
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
		$data['q_maps'] = $this->maps_m->all();
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

	public function search()
	{
		$data['title'] = 'Home';
		$data['subview'] = 'home/search';
		$this->load->view('components/layout', $data);
	}

	public function testing()
	{
		$no_pendaftaran_asli = 'HTL2024030009';
		$no_pendaftaran = substr($no_pendaftaran_asli, 0, 3) ;


		$nama_table = $this->db->query("SELECT * FROM category WHERE singkatan = '$no_pendaftaran'")->row();
		$tabel_pencarian = $nama_table->tabel_formulir;


		$query = $this->db->query("SELECT * FROM $tabel_pencarian WHERE nomor_pendaftaran = '$no_pendaftaran_asli'");
		if ($query->num_rows() > 0) {
			$nama_usaha = $query->row()->nama_usaha;
		}
		else {
			$nama_usaha = 'Data Tidak Ditemukan';
		}
		echo $nama_usaha;
	}
	

}
