<?php
	class Model_jasa extends CI_Model{
		public function tambah($jenis, $harga, $bindcode, $pass){
			$data = array(
				'jenis' => $jenis,
				'harga' => $harga,
				'bindcode' => $bindcode,
				'pass' => $pass,
				);
			$this->db->insert('jasa',$data);
		}
	} 
?>