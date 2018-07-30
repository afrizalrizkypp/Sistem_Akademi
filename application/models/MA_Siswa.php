<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_Siswa extends CI_Model {

	public function get_by_nis($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function get_data(){		
		return $this->db->get('siswa');
	}

	function get_option() {
	 	$this->db->select('*');
	 	$this->db->from('siswa');
	 	$query = $this->db->get();

	return $query->result();
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}

/* End of file MA_Siswa.php */
/* Location: ./application/models/MA_Siswa.php */