<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_controller extends CI_Controller {

	public function jsonFormat()
	{
		$this->load->model('api_model');
		$this->api_model->getPosts('json');
	}

	public function xmlFormat()
	{
		$this->load->model('api_model');
		$this->api_model->getPosts('xml');
	}

}

/* End of file api_controller.php */
/* Location: ./application/controllers/api_controller.php */