<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_game extends CI_Model {

	public function all(){
		
		$hasil = $this->db->get('games');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}
	
	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('games');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	
	public function create($data_game){

		$this->db->insert('games', $data_game);
	}

	public function update($id, $data_game){

		$this->db->where('id', $id)
				 ->update('games', $data_game);
	}
	
	public function delete($id){

		$this->db->where('id', $id)
				 ->delete('games');
	}
	
}