<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Nilai extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MA_Mapel');	
		$this->load->model('MA_Siswa');	
		$this->load->model('MA_Nilai', '', TRUE);	
		$this->load->model('M_Login');	
		$this->load->model('MA_Tugas');	
		$this->load->model('MA_Ulangan');	
		$this->load->model('MA_Kelas');	
		$this->load->helper('url');

		if($this->session->userdata('status') != "sucsess"){
		   redirect(base_url("C_Home/login"));
		}
	 }

	public function index(){
		$data['nilai'] = $this->MA_Nilai->get_data();
		$this->load->view('Guru/template/nilai/VG_Nilai', $data);
	}

	function get_tugas(){
        $id=$this->input->post('id');
        $data=$this->MA_Nilai->get_tugas($id);
        echo json_encode($data);
    }

    function get_ulangan(){
        $id=$this->input->post('id');
        $data=$this->MA_Nilai->get_ulangan($id);
        echo json_encode($data);
    }

	public function add(){
		$data = array(
			'siswa' => $this->MA_Siswa->get_option(),
			'kelas' => $this->MA_Kelas->get_option(),
			'mapel' => $this->MA_Mapel->get_option(),
			'tugas' => $this->MA_Tugas->get_option(),
			'ulangan' => $this->MA_Ulangan->get_option(),
		);

		$this->load->view('Guru/template/nilai/VG_Nilai_Add', $data);
	}

	public function tambah_aksi(){
		$nis 			= $this->input->post('nis');
		$kd_kelas 		= $this->input->post('kd_kelas');
		$kd_mapel 		= $this->input->post('kd_mapel');
		$kd_tugas 		= $this->input->post('kd_tugas');
		$kd_ulangan		= $this->input->post('kd_ulangan');
		$uts 			= $this->input->post('uts');
		$uas 			= $this->input->post('uas');
		$nilai_akhir 	= $this->input->post('nilai_akhir');
		$tahun_ajaran	= $this->input->post('tahun_ajaran');
		
		$tugas = $this->MA_Nilai->nilai_tugas($kd_tugas);
 
		$data = array(
			'nis' 			=> $nis,
			'kd_kelas' 		=> $kd_kelas,
			'kd_mapel' 		=> $kd_mapel,
			'kd_tugas' 		=> $kd_tugas,
			'kd_ulangan'	=> $kd_ulangan,
			'uts' 			=> $uts,
			'uas' 			=> $uas,
			'nilai_akhir' 	=> $nilai_akhir,
			'tahun_ajaran' 	=> $tahun_ajaran
			);
		$this->MA_Nilai->input_data($data,'nilai');
		redirect('C_Nilai/index');
	}
	
	public function delete($id){
		$this->MA_Nilai->hapus_data($id,'nilai');
		echo "<script type='text/javascript'>
			            alert ('Data Berhasil Dihapus !');			            
			     </script>";
		redirect('C_Nilai','refresh');
	}

}

/* End of file C_Nilai.php */
/* Location: ./application/controllers/C_Nilai.php */