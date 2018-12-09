<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_game');
	}

	public function index()
	{
		$data['games'] = $this->model_game->all();
		$this->load->view('game', $data);
	}
}