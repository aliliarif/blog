<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('common/css_includes.php'); // load index css
		$this->load->view('common/header.php'); 
		$this->load->view('index_view.php');
		$this->load->view('common/footer.php'); 	
		$this->load->view('common/js_includes.php'); // load index js
	}
}

/* End of file index_controller.php */
/* Location: ./application/controllers/index_controller.php */