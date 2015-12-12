<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_post_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('common/css_includes.php'); // load index css
		$this->load->view('common/header.php'); 

		$this->load->view('create_post_view');

		$this->load->view('common/footer.php'); 	
		$this->load->view('common/js_includes.php'); // load index js
	}

	public function insPost()
	{
		// --- + USERNAME HERE

		// function is called from AJAX in cp_scripts,
		// post_title and post_desc are send with POST method from AJAX
		$post_title = $this->input->get('post_title');
		$post_desc = $this->input->get('post_desc');

		$this->load->model('post_model');
		$this->post_model->insPost($post_title,$post_desc);
	}

}

/* End of file create_post.php */
/* Location: ./application/controllers/create_post.php */