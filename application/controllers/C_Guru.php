<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Guru extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MA_Mapel');	
		$this->load->model('MA_Siswa');	
		$this->load->model('MA_Nilai', '', TRUE);	
		$this->load->model('M_Login');	
		$this->load->model('MA_Ulangan');
		$this->load->model('MA_Tugas');
		$this->load->helper('url');

		if($this->session->userdata('status') != "sucsess"){
		   redirect(base_url("C_Home/login"));
		}
	 }

	public function index(){
		$user = $this->session->userdata('nama');
		$jumlah=$this->db->get('siswa')->num_rows();

		$this->load->view('Guru/dashboard', compact('jumlah'));
	}

	public function siswa(){
		$data['siswa'] = $this->MA_Siswa->get_data()->result();

		$this->load->view('Guru/template/VG_Siswa', $data);
	}

}

/* End of file C_Guru.php */
/* Location: ./application/controllers/C_Guru.php */