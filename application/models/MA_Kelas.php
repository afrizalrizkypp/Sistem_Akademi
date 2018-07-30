<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_Kelas extends CI_Model {

	function get_option() {
	 	$this->db->select('*');
	 	$this->db->from('kelas');
	 	$query = $this->db->get();

	return $query->result();
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */