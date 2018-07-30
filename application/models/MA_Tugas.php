<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_Tugas extends CI_Model {

	function get_data(){		
		return $this->db->get('tugas');
	}

	public function get_by_id($kd_tugas,$table){		
		return $this->db->get_where($table,$kd_tugas);
	}

	function get_option() {
	 	$this->db->select('*');
	 	$this->db->from('tugas');
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
		$this->db->query("delete from tugas where id = '$kd'");
	}

	public function get_join(){
       $this->db->select('tugas.*, mapel.nm_mapel'); //mengambil semua data dari tabel data_users dan users
	    $this->db->from('tugas'); //dari tabel data_users
	    $this->db->join('mapel', 'mapel.kd_mapel = tugas.nm_tugas', 'left'); //menyatukan tabel users menggunakan left join
	    $data = $this->db->get(); //mengambil seluruh data
	    return $data->result(); //mengembalikan data
    }
}

/* End of file MA_Tugas.php */
/* Location: ./application/models/MA_Tugas.php */