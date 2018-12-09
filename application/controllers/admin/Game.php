<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
		}
		
		$this->load->model('model_game');
	}
	
	public function index()
	{
		$data['games'] = $this->model_game->all();
		$this->load->view('backend/view_all_game', $data);
	}
	
	public function create(){
		//form validation sebelum mengeksekusi QUERY INSERT
		$this->form_validation->set_rules('name', 'Game Name', 'required');
		$this->form_validation->set_rules('description', 'Game Description', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/form_tambah_game');
		} else {
			//load uploading file library
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '300'; //KB
			$config['max_width']  = '2000'; //pixels
			$config['max_height']  = '2000'; //pixels

			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$this->load->view('backend/form_tambah_game');
			} else {
				$gambar = $this->upload->data();
				$data_game =	array(
					'name'			=> set_value('name'),
					'description'	=> set_value('description'),
					'image'			=> $gambar['file_name']
				);
				$this->model_game->create($data_game);
				redirect('admin/game');
			}
			
		}
	}
	
	public function update($id){
		$this->form_validation->set_rules('name', 'Product Name', 'required');
		$this->form_validation->set_rules('description', 'Product Description', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['game'] = $this->model_game->find($id);
			$this->load->view('backend/form_edit_game', $data);
		} else {
			if($_FILES['userfile']['name'] != ''){
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']	= '300'; //KB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels

				$this->load->library('upload', $config);
			
			
				if ( ! $this->upload->do_upload())
				{
					$data['game'] = $this->model_game->find($id);
					$this->load->view('backend/form_edit_game', $data);
				} else {
					$gambar = $this->upload->data();
					$data_product =	array(
						'name'			=> set_value('name'),
						'description'	=> set_value('description'),
						'image'			=> $gambar['file_name']
					);
					$this->model_game->update($id, $data_game);
					redirect('admin/game');
				}
			} else {
				$data_game =	array(
					'name'			=> set_value('name'),
					'description'	=> set_value('description')
				);
				$this->model_game->update($id, $data_game);
				redirect('admin/game');
			}
		}
	}
	
	public function delete($id){
		$this->model_game->delete($id);
		redirect('admin/game');
	}
}