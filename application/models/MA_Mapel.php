<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_Mapel extends CI_Model {

	function get_data(){		
		return $this->db->get('mapel');
	}

	function get_option() {
	 	$this->db->select('*');
	 	$this->db->from('mapel');
	 	$query = $this->db->get();

	return $query->result();
	}
}

/* End of file MA_Mapel.php */
/* Location: ./application/models/MA_Mapel.php */