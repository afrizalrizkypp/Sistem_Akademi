<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Login');
	}

	public function index(){
		$this->load->view('index');
	}

	public function about(){
		$this->load->view('template/V_About');
	}

	public function galeri(){
		$this->load->view('template/V_Galeri');
	}

	public function register(){
		
	}

	public function login(){
		if (isset($_POST['go'])){
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$hasil = $this->M_Login->login($user, $pass);
			if ($hasil == 1) {

				$data_session = array(
					'nama' => $user,
					'status' => "sucsess"
				);

				$dt = $this->M_Login->get_level($user)->row();
				
				if ($dt->level == "siswa") {
					$this->session->set_userdata($data_session);
					redirect('C_Siswa/index','refresh');
				}elseif ($dt->level == "guru") {
					$this->session->set_userdata($data_session);
					redirect('C_Guru/index','refresh');
				}	
			}else{
				echo "<script type='text/javascript'>
			            alert ('Maaf Username Dan Password Anda Salah !');			            
			     </script>";
				redirect('C_Home/login','refresh');
			}
		}else{
			$this->load->view('template/V_Login');
		}
	}

	public function logout(){
		$log = $this->session->sess_destroy();
		redirect(base_url(),'refresh');
	}
}

/* End of file C_Home.php */
/* Location: ./application/controllers/C_Home.php */