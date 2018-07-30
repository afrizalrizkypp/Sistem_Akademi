<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MA_Mapel');	
		$this->load->model('MA_Siswa');	
		$this->load->model('MA_Nilai', '', TRUE);	
		$this->load->model('M_Login');	
		$this->load->helper('url');

		if($this->session->userdata('status') != "sucsess"){
		   redirect(base_url("C_Home/login"));
		}
	 }

	public function index(){
		$user = $this->session->userdata('nama');
		$jumlah=$this->db->get('mapel')->num_rows();
		$data['mapel'] = $this->MA_Mapel->get_data()->result();
		
		$this->load->view('Admin/dashboard',$data);
	}

	public function profile(){
		$dt = $this->M_Login->get_nis($this->session->userdata('nama'))->row();
		$where = array('nis' => $dt->nis);
		$data['siswa'] = $this->MA_Siswa->get_by_nis($where,'siswa')->result();

		$this->load->view('Admin/template/VA_Profile', $data);
	}

	function edit_data(){
		$nis 			= $this->input->post('nis');
		$nama 			= $this->input->post('nama');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$tempat_lahir 	= $this->input->post('tempat_lahir');
		$tanggal_lahir 	= $this->input->post('tanggal_lahir');
		$alamat 		= $this->input->post('alamat');
		$tahun_angkatan = $this->input->post('tahun_angkatan');
	 
		$data = array(
			'nama' 			=> $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' 	=> $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'alamat' 		=> $alamat,
			'tahun_angkatan'=> $tahun_angkatan
		);
	 
		$where = array(
			'nis' => $nis
		);

		$this->MA_Siswa->update_data($where,$data,'siswa');
		redirect('C_Siswa/profile');
	}

	public function nilai(){
		$dt = $this->M_Login->get_nis($this->session->userdata('nama'))->row();
		// $data['nilai'] = $this->MA_Nilai->get_data_nis($dt->nis);

		$data = array(
			'nis' => $dt->nis,
			'nilai' => $this->MA_Nilai->get_data()
		);

		$this->load->view('Admin/template/VA_Nilai', $data);
	}
}

/* End of file C_Siswa.php */
/* Location: ./application/controllers/C_Siswa.php */