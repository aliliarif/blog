<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_post extends CI_Controller {

	public function index()
	{
		$this->load->view('common/css_includes.php'); // load index css
		$this->load->view('common/header.php'); 

		$this->load->view('create_post');

		$this->load->view('common/footer.php'); 	
		$this->load->view('common/js_includes.php'); // load index js
	}

}

/* End of file create_post.php */
/* Location: ./application/controllers/create_post.php */