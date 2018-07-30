<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Ulangan extends CI_Controller {

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
		$data = array(
			// 'ulangan' => $this->MA_Ulangan->get_data()->result(),
			'join' => $this->MA_Ulangan->get_join()
		);

		$this->load->view('Guru/template/ulangan/VG_Ulangan', $data);
	}

	public function add(){
		$data = array(
			'mapel' => $this->MA_Mapel->get_option(),
			'siswa' => $this->MA_Siswa->get_option()
		);

		$this->load->view('Guru/template/ulangan/VG_Ulangan_Add', $data);
	}

	public function tambah_aksi(){
		$kd_ulangan = $this->input->post('kd_ulangan');
		$nm_ulangan = $this->input->post('nm_ulangan');
		$nilai_ulangan = $this->input->post('nilai_ulangan');
 
		$data = array(
			'kd_ulangan' => $kd_ulangan,
			'nm_ulangan' => $nm_ulangan,
			'nilai_ulangan' => $nilai_ulangan
			);
		$this->MA_Ulangan->input_data($data,'ulangan');
		redirect('C_Ulangan/index');
	}
	
	public function update($kd_ulangan){
		$where = array('id' => $kd_ulangan);
		$data = array(
			'mapel' => $this->MA_Mapel->get_option(),
			'siswa' => $this->MA_Siswa->get_option(),
			'ulangan' => $this->MA_Ulangan->get_by_id($where,'ulangan')->result()
		);
		$this->load->view('Guru/template/ulangan/VG_Ulangan_Upd',$data);
	}

	function edit_data(){
		$id = $this->input->post('id');
		$kd_ulangan = $this->input->post('kd_ulangan');
		$nm_ulangan = $this->input->post('nm_ulangan');
		$nilai_ulangan = $this->input->post('nilai_ulangan');
	 
		$data = array(
			'kd_ulangan' => $kd_ulangan,
			'nm_ulangan' => $nm_ulangan,
			'nilai_ulangan' => $nilai_ulangan
		);
	 
		$where = array(
			'id' => $id
		);

		$this->MA_Ulangan->update_data($where,$data,'ulangan');
		redirect('C_Ulangan/index');
	}

	public function delete($kd_ulangan){
		$this->MA_Ulangan->hapus_data($kd_ulangan,'ulangan');
		echo "<script type='text/javascript'>
			            alert ('Data Berhasil Dihapus !');			            
			     </script>";
		redirect('C_Ulangan','refresh');
	}

}

/* End of file C_Guru.php */
/* Location: ./application/controllers/C_Guru.php */