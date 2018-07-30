<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_Ulangan extends CI_Model {

	public function get_data(){		
		return $this->db->get('ulangan');
	}

	public function get_by_id($kd_ulangan,$table){		
		return $this->db->get_where($table,$kd_ulangan);
	}

	public function get_join(){
       $this->db->select('ulangan.*, mapel.nm_mapel'); //mengambil semua data dari tabel data_users dan users
	    $this->db->from('ulangan'); //dari tabel data_users
	    $this->db->join('mapel', 'mapel.kd_mapel = ulangan.nm_ulangan', 'left'); //menyatukan tabel users menggunakan left join
	    $data = $this->db->get(); //mengambil seluruh data
	    return $data->result(); //mengembalikan data
    }

	function get_option() {
	 	$this->db->select('*');
	 	$this->db->from('ulangan');
	 	$query = $this->db->get();

	return $query->result();
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($kd,$table){
		$this->db->query("delete from ulangan where id = '$kd'");
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */