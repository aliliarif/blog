<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {

	public function index()
	{

		$this->load->model('post_model');

		$this->load->view('common/css_includes.php'); // load index css
		$this->load->view('common/header.php');

		// count number of pages to show in pagination
		$countPosts = $this->post_model->countPosts();
		$data['pages'] = ceil($countPosts / 5); // we will show only 5 posts per page

		// get page var from url for pagination
		$page = $this->input->get('page');
		$data['selected_page'] = $page;
		if($page == '' || $page == '1'){
			$page = 0;
		}else{ // show 5 posts
			$page = ($page*5) - 5;
		}

		$data['posts'] = $this->post_model->getPosts($page);
		$this->load->view('index_view.php',$data);

		$this->load->view('common/footer.php'); 	
		$this->load->view('index_modals_view.php'); // load bootstrap modals 
		$this->load->view('common/js_includes.php'); // load index js
	}
}

/* End of file index_controller.php */
/* Location: ./application/controllers/index_controller.php */