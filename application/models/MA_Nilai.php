<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MA_Nilai extends CI_Model {

	// function get_data($where,$table){		
	// 	return $this->db->get_where($table,$where);
	// }	

	public function get_data(){
		$data = $this->db->query("
			SELECT
			  	n.id, n.nis, n.kd_kelas, n.UTS, n.UAS, n.nilai_akhir, n.tahun_ajaran, 
			  	s.nama, 
			  	m.nm_mapel, 
			  	t.nilai_tugas,
			  	u.nilai_ulangan
			FROM
			  	nilai n, siswa s, mapel m, tugas t, ulangan u
			WHERE
				n.nis = s.nis AND n.kd_mapel = m.kd_mapel AND (n.kd_tugas = t.kd_tugas AND n.kd_mapel = t.nm_tugas) AND (n.kd_ulangan = u.kd_ulangan AND n.kd_mapel = u.nm_ulangan)
				  
		");
    return $data->result(); 
  	}

  	public function get_data_nis($nis){
		$data = $this->db->query("
			SELECT
			  	n.id, n.nis, n.kd_kelas, n.UTS, n.UAS, n.nilai_akhir, n.tahun_ajaran, 
			  	s.nama, 
			  	m.nm_mapel, 
			  	t.nilai_tugas,
			  	u.nilai_ulangan
			FROM
			  	nilai n, siswa s, mapel m, tugas t, ulangan u
			WHERE
				n.kd_mapel = m.kd_mapel AND (n.kd_tugas = t.kd_tugas AND n.kd_mapel = t.nm_tugas) AND (n.kd_ulangan = u.kd_ulangan AND n.kd_mapel = u.nm_ulangan)
				  
		");	
    return $data->result(); 
  	}

  	public function nilai_tugas($kode){
  		$hasil=$this->db->query("SELECT nilai_tugas FROM tugas WHERE kd_tugas='$kode'");
        return $hasil->result();
  	}

  	public function nilai_ulangan($kode){
  		$hasil=$this->db->query("SELECT nilai_ulangan FROM ulangan WHERE kd_ulangan='$kode'");
        return $hasil->result();
  	}

  	function get_tugas($id){
        $hasil=$this->db->query("SELECT * FROM tugas WHERE nm_tugas='$id'");
        return $hasil->result();
    }

    function get_ulangan($id){
        $hasil=$this->db->query("SELECT * FROM ulangan WHERE nm_ulangan='$id'");
        return $hasil->result();
    }

  	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_data($kd,$table){
		$this->db->query("delete from $table where id = '$kd'");
	}

}

/* End of file MA_Nilai.php */
/* Location: ./application/models/MA_Nilai.php */