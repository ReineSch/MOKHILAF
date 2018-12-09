<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inquiry extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('model_inquiry');
		}

		public function member(){
			$nama=$this->input->post('nama');
			$deskripsi=$this->input->post('deskripsi');
			$this->model_inquiry->tambah($nama,$deskripsi);
			redirect('inquiry/index');
		}
		public function index(){
			$this->load->view('inquiry');
		}
}
