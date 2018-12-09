<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inquiries extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
		}
		
		//load model -> model_inquiries
		$this->load->model('model_inquiry');
	}
	
	public function index()
	{
		$data['inquiries'] = $this->model_inquiry->all();
		$this->load->view('backend/view_all_inquiries', $data);
	}
}
