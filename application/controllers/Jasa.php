<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jasa extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('model_jasa');
		}

		public function entry(){
			$jenis=$this->input->post('jenis');
			$harga=$this->input->post('harga');
			$bindcode=$this->input->post('bindcode');
			$pass=$this->input->post('pass');
			$this->model_jasa->tambah($jenis, $harga, $bindcode, $pass);
			redirect('jasa/index');
		}
		public function index(){
			$this->load->view('jasa');
		}
}
