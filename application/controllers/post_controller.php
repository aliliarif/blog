<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_controller extends CI_Controller {

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
		// function is called from AJAX in cp_scripts,
		// post_title and post_desc are send with POST method from AJAX
		$post_title = $this->input->post('post_title');
		$post_desc = $this->input->post('post_desc');
		$username = $this->session->userdata('name');


		$this->load->model('post_model');
		$this->post_model->insPost($post_title,$post_desc,$username);
	}

	public function getRandPost()
	{
		$this->load->model('post_model');
		$post = $this->post_model->getRandPost();

		//$this->output->set_output($post);
	}

}

/* End of file create_post.php */
/* Location: ./application/controllers/create_post.php */