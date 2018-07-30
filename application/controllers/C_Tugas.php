<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Tugas extends CI_Controller {

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
		$data['join'] = $this->MA_Tugas->get_join();

		$this->load->view('Guru/template/tugas/VG_Tugas', $data);
	}

	public function tambah_aksi(){
		$kd_tugas = $this->input->post('kd_tugas');
		$nm_tugas = $this->input->post('nm_tugas');
		$nilai_tugas = $this->input->post('nilai_tugas');
 
		$data = array(
			'kd_tugas' => $kd_tugas,
			'nm_tugas' => $nm_tugas,
			'nilai_tugas' => $nilai_tugas
			);
		$this->MA_Tugas->input_data($data,'tugas');
		redirect('C_Tugas/index');
	}

	public function add(){
		$data = array(
			'mapel' => $this->MA_Mapel->get_option(),
			'siswa' => $this->MA_Siswa->get_option()
		);

		$this->load->view('Guru/template/tugas/VG_Tugas_Add', $data);
	}

	public function update($kd_tugas){
		$where = array('id' => $kd_tugas);
		$data = array(
			'mapel' => $this->MA_Mapel->get_option(),
			'siswa' => $this->MA_Siswa->get_option(),
			'tugas' => $this->MA_Tugas->get_by_id($where,'tugas')->result()
		);
		$this->load->view('Guru/template/tugas/VG_Tugas_Upd',$data);
	}

	function edit_data(){
		$id = $this->input->post('id');
		$kd_tugas = $this->input->post('kd_tugas');
		$nm_tugas = $this->input->post('nm_tugas');
		$nilai_tugas = $this->input->post('nilai_tugas');
	 
		$data = array(
			'kd_tugas' => $kd_tugas,
			'nm_tugas' => $nm_tugas,
			'nilai_tugas' => $nilai_tugas
		);
	 
		$where = array(
			'id' => $id
		);

		$this->MA_Tugas->update_data($where,$data,'tugas');
		redirect('C_Tugas/index');
	}

	public function delete($kd_tugas){
		$this->MA_Tugas->hapus_data($kd_tugas,'tugas');
		echo "<script type='text/javascript'>
			            alert ('Data Berhasil Dihapus !');			            
			     </script>";
		redirect('C_Tugas','refresh');
	}

}

/* End of file C_Guru.php */
/* Location: ./application/controllers/C_Guru.php */