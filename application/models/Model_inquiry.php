<?php
	class Model_inquiry extends CI_Model{
		public function tambah($nama, $deskripsi){
			$data = array(
				'nama' => $nama,
				'deskripsi' => $deskripsi,
				);
			$this->db->insert('inquiries',$data);
		}
		
		public function all() {
        //Get all invoices from Invoices table
        $hasil = $this->db->get('inquiries');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
		}
	} 
?>