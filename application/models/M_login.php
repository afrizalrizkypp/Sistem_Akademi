<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($user, $pass){
		$check = $this->db->get_where('login', array('username' => $user, 'password' => md5($pass)));
		if ($check->num_rows() > 0) {			
			return 1;
		}else{
			return 0;
		}
	}

	public function get_level($user){
		$query = $this->db->query("SELECT level FROM login WHERE username = '$user' ");
		return $query;
	}

	public function get_nis($user){
		$query = $this->db->query("SELECT nis FROM login WHERE username = '$user' ");
		return $query;
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */