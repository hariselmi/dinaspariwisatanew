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
			],
			[
				'field' => 'nama_perusahaan',
				'label' => 'Nama Perusahaan',
				'rules' => 'required',
			],
			[
				'field' => 'alamat',
				'label' => 'Alamat',
				'rules' => 'required',
			],
			[
				'field' => 'penanggung_jawab',
				'label' => 'Penanggung Jawab',
				'rules' => 'required',
			],
			[
				'field' => 'nib',
				'label' => 'NIB',
				'rules' => 'required',
			],
			[
				'field' => 'resiko_usaha',
				'label' => 'Resiko Usaha',
				'rules' => 'required',
			],
			[
				'field' => 'sls',
				'label' => 'SLS',
				'rules' => 'required',
			],
			[
				'field' => 'sertifikat_standar_usaha',
				'label' => 'Sertifikat Standar Usaha',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_kamar',
				'label' => 'Jumlah Kamar',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_tenaga_laki_laki',
				'label' => 'Jumlah Tenaga Kerja Laki-Laki',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_tenaga_perempuan',
				'label' => 'Jumlah Tenaga Kerja Perempuan',
				'rules' => 'required',
			],
			[
				'field' => 'pengunjung_per_bulan',
				'label' => 'Pengunjung Per Bulan',
				'rules' => 'required',
			],
			[
				'field' => 'fasilitas',
				'label' => 'Fasilitas',
				'rules' => 'required',
			],
			[
				'field' => 'standing',
				'label' => 'Standing',
				'rules' => 'required',
			],
			[
				'field' => 'standing_banner_informasi',
				'label' => 'Standing Banner Informasi',
				'rules' => 'required',
			],
			[
				'field' => 'persetujuan_melengkapi_kekurangan',
				'label' => 'Menyetujui Melengkapi Kekurangan dari Standarisasi',
				'rules' => 'required',
			],
			[
				'field' => 'tanggal_pengisian',
				'label' => 'Tanggal Pengisian',
				'rules' => 'required',
			],
			[
				'field' => 'nama_pengisi',
				'label' => 'Nama Pengisi',
				'rules' => 'required',
			],
			[
				'field' => 'ttd_pengisi',
				'label' => 'Tanda Tangan Pengisi',
				'rules' => 'required',
			],
			[
				'field' => 'telepon_pengisi',
				'label' => 'Telepon Pengisi',
				'rules' => 'required',
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {

			$max_id = $this->db->query("SELECT id FROM hotel")->num_rows();
			$max_id = ($max_id + 1);
			$nomor_pendaftaran = 'HTL'. date('Ym'). str_pad($max_id, 4, '0', STR_PAD_LEFT);


			$data_1['nama_usaha']		    				= $this->input->post('nama_usaha');
			$data_1['nama_perusahaan']		    			= $this->input->post('nama_perusahaan');
			$data_1['alamat']		    					= $this->input->post('alamat');
			$data_1['penanggung_jawab']		    			= $this->input->post('penanggung_jawab');
			$data_1['nib']		    						= $this->input->post('nib');
			$data_1['resiko_usaha']		    				= $this->input->post('resiko_usaha');
			$data_1['sls']		    						= $this->input->post('sls');
			$data_1['sertifikat_standar_usaha']		    	= $this->input->post('sertifikat_standar_usaha');
			$data_1['jumlah_kamar']		    				= $this->input->post('jumlah_kamar');
			$data_1['jumlah_tenaga_laki_laki']		    	= $this->input->post('jumlah_tenaga_laki_laki');
			$data_1['jumlah_tenaga_perempuan']		    	= $this->input->post('jumlah_tenaga_perempuan');
			$data_1['pengunjung_per_bulan']		    		= $this->input->post('pengunjung_per_bulan');
			$data_1['fasilitas']		    				= $this->input->post('fasilitas');
			$data_1['standing']		    					= $this->input->post('standing');
			$data_1['standing_banner_informasi']		    = $this->input->post('standing_banner_informasi');
			$data_1['persetujuan_melengkapi_kekurangan']	= $this->input->post('persetujuan_melengkapi_kekurangan');
			$data_1['tanggal_pengisian']		    		= $this->input->post('tanggal_pengisian');
			$data_1['nama_pengisi']		    				= $this->input->post('nama_pengisi');
			$data_1['ttd_pengisi']		    				= $this->input->post('ttd_pengisi');
			$data_1['telepon_pengisi']		    			= $this->input->post('telepon_pengisi');
			$data_1['nomor_pendaftaran']		    		= $nomor_pendaftaran;
			$this->db->insert('hotel', $data_1); 

			$properti_id = $this->db->insert_id();


			$data_2['nama_lokasi']		    				= $this->input->post('nama_usaha');
			$data_2['properti_id']		    				= $properti_id;
			$data_2['kategori']		    					= 'hotel';
			$data_2['latitude']		    					= $this->input->post('latitude');
			$data_2['longitude']		    				= $this->input->post('longitude');
		$this->db->insert('maps', $data_2);

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
			],
			[
				'field' => 'nama_perusahaan',
				'label' => 'Nama Perusahaan',
				'rules' => 'required',
			],
			[
				'field' => 'alamat',
				'label' => 'Alamat',
				'rules' => 'required',
			],
			[
				'field' => 'penanggung_jawab',
				'label' => 'Penanggung Jawab',
				'rules' => 'required',
			],
			[
				'field' => 'nib',
				'label' => 'NIB',
				'rules' => 'required',
			],
			[
				'field' => 'resiko_usaha',
				'label' => 'Resiko Usaha',
				'rules' => 'required',
			],
			[
				'field' => 'slhs',
				'label' => 'SLHS',
				'rules' => 'required',
			],
			[
				'field' => 'sertifikat_standar_usaha',
				'label' => 'Sertifikat Standar Usaha',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_tenaga_laki_laki',
				'label' => 'Jumlah Tenaga Kerja Laki-Laki',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_tenaga_perempuan',
				'label' => 'Jumlah Tenaga Kerja Perempuan',
				'rules' => 'required',
			],
			[
				'field' => 'ragam_menu',
				'label' => 'Ragam Menu',
				'rules' => 'required',
			],
			[
				'field' => 'pengunjung_per_bulan',
				'label' => 'Pengunjung Per Bulan',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_meja',
				'label' => 'Jumlah Meja',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_kursi',
				'label' => 'Jumlah Kursi',
				'rules' => 'required',
			],
			[
				'field' => 'standing_banner_informasi',
				'label' => 'Standing Banner Informasi',
				'rules' => 'required',
			],
			[
				'field' => 'standing_banner_bebas_asap_rokok',
				'label' => 'Standing Banner Bebas Asap Rokok',
				'rules' => 'required',
			],
			[
				'field' => 'fasilitas',
				'label' => 'Fasilitas',
				'rules' => 'required',
			],
			[
				'field' => 'persetujuan_melengkapi_kekurangan',
				'label' => 'Menyetujui Melengkapi Kekurangan dari Standarisasi',
				'rules' => 'required',
			],
			[
				'field' => 'tanggal_pengisian',
				'label' => 'Tanggal Pengisian',
				'rules' => 'required',
			],
			[
				'field' => 'nama_pengisi',
				'label' => 'Nama Pengisi',
				'rules' => 'required',
			],
			[
				'field' => 'ttd_pengisi',
				'label' => 'Tanda Tangan Pengisi',
				'rules' => 'required',
			],
			[
				'field' => 'telepon_pengisi',
				'label' => 'Telepon Pengisi',
				'rules' => 'required',
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {

			$max_id = $this->db->query("SELECT id FROM restoran")->num_rows();
			$max_id = ($max_id + 1);
			$nomor_pendaftaran = 'RES'. date('Ym'). str_pad($max_id, 4, '0', STR_PAD_LEFT);

			$data_1['nama_usaha']		    				= $this->input->post('nama_usaha');
			$data_1['nama_perusahaan']		    			= $this->input->post('nama_perusahaan');
			$data_1['alamat']		    					= $this->input->post('alamat');
			$data_1['penanggung_jawab']		    			= $this->input->post('penanggung_jawab');
			$data_1['nib']		    						= $this->input->post('nib');
			$data_1['resiko_usaha']		    				= $this->input->post('resiko_usaha');
			$data_1['slhs']		    						= $this->input->post('slhs');
			$data_1['sertifikat_standar_usaha']		    	= $this->input->post('sertifikat_standar_usaha');
			$data_1['jumlah_tenaga_laki_laki']		    	= $this->input->post('jumlah_tenaga_laki_laki');
			$data_1['jumlah_tenaga_perempuan']		    	= $this->input->post('jumlah_tenaga_perempuan');
			$data_1['ragam_menu']		    				= $this->input->post('ragam_menu');
			$data_1['pengunjung_per_bulan']		    		= $this->input->post('pengunjung_per_bulan');
			$data_1['jumlah_meja']		    				= $this->input->post('jumlah_meja');
			$data_1['jumlah_kursi']		    				= $this->input->post('jumlah_kursi');
			$data_1['standing_banner_informasi']		    = $this->input->post('standing_banner_informasi');
			$data_1['standing_banner_bebas_asap_rokok']		= $this->input->post('standing_banner_bebas_asap_rokok');
			$data_1['fasilitas']		    				= $this->input->post('fasilitas');
			$data_1['persetujuan_melengkapi_kekurangan']	= $this->input->post('persetujuan_melengkapi_kekurangan');
			$data_1['tanggal_pengisian']		    		= $this->input->post('tanggal_pengisian');
			$data_1['nama_pengisi']		    				= $this->input->post('nama_pengisi');
			$data_1['ttd_pengisi']		    				= $this->input->post('ttd_pengisi');
			$data_1['telepon_pengisi']		    			= $this->input->post('telepon_pengisi');
			$data_1['nomor_pendaftaran']		    		= $nomor_pendaftaran;
		$this->db->insert('restoran', $data); 

		$properti_id = $this->db->insert_id();


			$data_2['nama_lokasi']		    				= $this->input->post('nama_usaha');
			$data_2['properti_id']		    				= $properti_id;
			$data_2['kategori']		    					= 'restoran';
			$data_2['latitude']		    					= $this->input->post('latitude');
			$data_2['longitude']		    				= $this->input->post('longitude');
		$this->db->insert('maps', $data_2);


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
			],
			[
				'field' => 'nama_perusahaan',
				'label' => 'Nama Perusahaan',
				'rules' => 'required',
			],
			[
				'field' => 'alamat',
				'label' => 'Alamat',
				'rules' => 'required',
			],
			[
				'field' => 'penanggung_jawab',
				'label' => 'Penanggung Jawab',
				'rules' => 'required',
			],
			[
				'field' => 'nib',
				'label' => 'NIB',
				'rules' => 'required',
			],
			[
				'field' => 'sertifikat_standar_usaha',
				'label' => 'Sertifikat Standar Usaha',
				'rules' => 'required',
			],
			[
				'field' => 'sls',
				'label' => 'SLS',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_tenaga_laki_laki',
				'label' => 'Jumlah Tenaga Kerja Laki-Laki',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_tenaga_perempuan',
				'label' => 'Jumlah Tenaga Kerja Perempuan',
				'rules' => 'required',
			],
			[
				'field' => 'brosur_spa_massage',
				'label' => 'Brosur Spa/Massage/Panti Pijat',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_terapis_sertifikasi',
				'label' => 'Jumlah Terapis Sertifikasi',
				'rules' => 'required',
			],
			[
				'field' => 'pengunjung_per_bulan',
				'label' => 'Pengunjung Per Bulan',
				'rules' => 'required',
			],
			[
				'field' => 'fasilitas',
				'label' => 'Fasilitas',
				'rules' => 'required',
			],
			[
				'field' => 'standing',
				'label' => 'Standing',
				'rules' => 'required',
			],
			[
				'field' => 'standing_banner_informasi',
				'label' => 'Standing Banner Informasi',
				'rules' => 'required',
			],
			[
				'field' => 'persetujuan_melengkapi_kekurangan',
				'label' => 'Menyetujui Melengkapi Kekurangan dari Standarisasi',
				'rules' => 'required',
			],
			[
				'field' => 'tanggal_pengisian',
				'label' => 'Tanggal Pengisian',
				'rules' => 'required',
			],
			[
				'field' => 'nama_pengisi',
				'label' => 'Nama Pengisi',
				'rules' => 'required',
			],
			[
				'field' => 'ttd_pengisi',
				'label' => 'Tanda Tangan Pengisi',
				'rules' => 'required',
			],
			[
				'field' => 'telepon_pengisi',
				'label' => 'Telepon Pengisi',
				'rules' => 'required',
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {

			$max_id = $this->db->query("SELECT id FROM salon_spa")->num_rows();
			$max_id = ($max_id + 1);
			$nomor_pendaftaran = 'SPA'. date('Ym'). str_pad($max_id, 4, '0', STR_PAD_LEFT);

			$data_1['nama_usaha']		    				= $this->input->post('nama_usaha');
			$data_1['nama_perusahaan']		    			= $this->input->post('nama_perusahaan');
			$data_1['alamat']		    					= $this->input->post('alamat');
			$data_1['penanggung_jawab']		    			= $this->input->post('penanggung_jawab');
			$data_1['nib']		    						= $this->input->post('nib');
			$data_1['sertifikat_standar_usaha']		    	= $this->input->post('sertifikat_standar_usaha');
			$data_1['sls']		    						= $this->input->post('sls');
			$data_1['jumlah_tenaga_laki_laki']		    	= $this->input->post('jumlah_tenaga_laki_laki');
			$data_1['jumlah_tenaga_perempuan']		    	= $this->input->post('jumlah_tenaga_perempuan');
			$data_1['brosur_spa_massage']		    		= $this->input->post('brosur_spa_massage');
			$data_1['jumlah_terapis_sertifikasi']		    = $this->input->post('jumlah_terapis_sertifikasi');
			$data_1['pengunjung_per_bulan']		    		= $this->input->post('pengunjung_per_bulan');
			$data_1['fasilitas']		    				= $this->input->post('fasilitas');
			$data_1['standing']		    					= $this->input->post('standing');
			$data_1['standing_banner_informasi']		    = $this->input->post('standing_banner_informasi');
			$data_1['persetujuan_melengkapi_kekurangan']	= $this->input->post('persetujuan_melengkapi_kekurangan');
			$data_1['tanggal_pengisian']		    		= $this->input->post('tanggal_pengisian');
			$data_1['nama_pengisi']		    				= $this->input->post('nama_pengisi');
			$data_1['ttd_pengisi']		    				= $this->input->post('ttd_pengisi');
			$data_1['telepon_pengisi']		    			= $this->input->post('telepon_pengisi');
			$data_1['nomor_pendaftaran']		    		= $nomor_pendaftaran;
		$this->db->insert('salon_spa', $data); 

		$properti_id = $this->db->insert_id();


			$data_2['nama_lokasi']		    				= $this->input->post('nama_usaha');
			$data_2['properti_id']		    				= $properti_id;
			$data_2['kategori']		    					= 'salon_spa';
			$data_2['latitude']		    					= $this->input->post('latitude');
			$data_2['longitude']		    				= $this->input->post('longitude');
		$this->db->insert('salon_spa', $data_2);

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
			],
			[
				'field' => 'nama_perusahaan',
				'label' => 'Nama Perusahaan',
				'rules' => 'required',
			],
			[
				'field' => 'alamat',
				'label' => 'Alamat',
				'rules' => 'required',
			],
			[
				'field' => 'penanggung_jawab',
				'label' => 'Penanggung Jawab',
				'rules' => 'required',
			],
			[
				'field' => 'nib',
				'label' => 'NIB',
				'rules' => 'required',
			],
			[
				'field' => 'resiko_usaha',
				'label' => 'Resiko Usaha',
				'rules' => 'required',
			],
			[
				'field' => 'sls',
				'label' => 'SLS',
				'rules' => 'required',
			],
			[
				'field' => 'sertifikat_standar_usaha',
				'label' => 'Sertifikat Standar Usaha',
				'rules' => 'required',
			],
			[
				'field' => 'terverifikasi_persyaratan_khusus',
				'label' => 'Terverifikasi Persyaratan Khusus',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_tenaga_laki_laki',
				'label' => 'Jumlah Tenaga Kerja Laki-Laki',
				'rules' => 'required',
			],
			[
				'field' => 'jumlah_tenaga_perempuan',
				'label' => 'Jumlah Tenaga Kerja Perempuan',
				'rules' => 'required',
			],
			[
				'field' => 'standing_banner_informasi',
				'label' => 'Standing Banner Informasi',
				'rules' => 'required',
			],
			[
				'field' => 'standing_banner_bebas_asap_rokok',
				'label' => 'Standing Banner Bebas Asap Rokok',
				'rules' => 'required',
			],
			[
				'field' => 'apar',
				'label' => 'Apar',
				'rules' => 'required',
			],
			[
				'field' => 'p3k',
				'label' => 'P3K',
				'rules' => 'required',
			],
			[
				'field' => 'penerapan_k3',
				'label' => 'Penerapan K3',
				'rules' => 'required',
			],
			[
				'field' => 'fasilitas',
				'label' => 'Fasilitas',
				'rules' => 'required',
			],
			[
				'field' => 'trainer_sertifikasi',
				'label' => 'Trainer Sertifikasi',
				'rules' => 'required',
			],
			[
				'field' => 'pengunjung_per_bulan',
				'label' => 'Pengunjung Per Bulan',
				'rules' => 'required',
			],
			[
				'field' => 'persetujuan_melengkapi_kekurangan',
				'label' => 'Menyetujui Melengkapi Kekurangan dari Standarisasi',
				'rules' => 'required',
			],
			[
				'field' => 'tanggal_pengisian',
				'label' => 'Tanggal Pengisian',
				'rules' => 'required',
			],
			[
				'field' => 'nama_pengisi',
				'label' => 'Nama Pengisi',
				'rules' => 'required',
			],
			[
				'field' => 'ttd_pengisi',
				'label' => 'Tanda Tangan Pengisi',
				'rules' => 'required',
			],
			[
				'field' => 'telepon_pengisi',
				'label' => 'Telepon Pengisi',
				'rules' => 'required',
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {

			$max_id = $this->db->query("SELECT id FROM gelper")->num_rows();
			$max_id = ($max_id + 1);
			$nomor_pendaftaran = 'GEL'. date('Ym'). str_pad($max_id, 4, '0', STR_PAD_LEFT);

			$data_1['nama_usaha']		    				= $this->input->post('nama_usaha');
			$data_1['nama_perusahaan']		    			= $this->input->post('nama_perusahaan');
			$data_1['alamat']		    					= $this->input->post('alamat');
			$data_1['penanggung_jawab']		    			= $this->input->post('penanggung_jawab');
			$data_1['nib']		    						= $this->input->post('nib');
			$data_1['resiko_usaha']		    				= $this->input->post('resiko_usaha');
			$data_1['sls']		    						= $this->input->post('sls');
			$data_1['sertifikat_standar_usaha']		    	= $this->input->post('sertifikat_standar_usaha');
			$data_1['terverifikasi_persyaratan_khusus']		= $this->input->post('terverifikasi_persyaratan_khusus');
			$data_1['jumlah_tenaga_laki_laki']		    	= $this->input->post('jumlah_tenaga_laki_laki');
			$data_1['jumlah_tenaga_perempuan']		    	= $this->input->post('jumlah_tenaga_perempuan');
			$data_1['standing_banner_informasi']		    = $this->input->post('standing_banner_informasi');
			$data_1['standing_banner_bebas_asap_rokok']		= $this->input->post('standing_banner_bebas_asap_rokok');
			$data_1['apar']		    						= $this->input->post('apar');
			$data_1['p3k']		    						= $this->input->post('p3k');
			$data_1['penerapan_k3']		    				= $this->input->post('penerapan_k3');
			$data_1['fasilitas']		    				= $this->input->post('fasilitas');
			$data_1['trainer_sertifikasi']		    		= $this->input->post('trainer_sertifikasi');
			$data_1['pengunjung_per_bulan']		    		= $this->input->post('pengunjung_per_bulan');
			$data_1['persetujuan_melengkapi_kekurangan']	= $this->input->post('persetujuan_melengkapi_kekurangan');
			$data_1['tanggal_pengisian']		    		= $this->input->post('tanggal_pengisian');
			$data_1['nama_pengisi']		    				= $this->input->post('nama_pengisi');
			$data_1['ttd_pengisi']		    				= $this->input->post('ttd_pengisi');
			$data_1['telepon_pengisi']		    			= $this->input->post('telepon_pengisi');
			$data_1['nomor_pendaftaran']		    		= $nomor_pendaftaran;
		$this->db->insert('gelper', $data); 

		$properti_id = $this->db->insert_id();


			$data_2['nama_lokasi']		    				= $this->input->post('nama_usaha');
			$data_2['properti_id']		    				= $properti_id;
			$data_2['kategori']		    					= 'gelper';
			$data_2['latitude']		    					= $this->input->post('latitude');
			$data_2['longitude']		    				= $this->input->post('longitude');
		$this->db->insert('gelper', $data_2);

			header("Content-type:application/json");
			echo json_encode('success');
		} else {
			header("Content-type:application/json");
			echo json_encode($this->form_validation->get_all_errors());
		}

	}
	

}
