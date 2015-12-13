<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function index(){
		$name_register = $this->input->post('name_register');
		$email_register = $this->input->post('email_register');
		$password_register = $this->input->post('password_register');
		$password_register_conf = $this->input->post('password_register_conf');
		
		// FORM VALIDATION
		$this->form_validation->set_rules('name_register', 'name', 'required|is_unique[user.name]');
		$this->form_validation->set_rules('email_register', 'email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('password_register_conf', 'password confirmation', 'required');
		$this->form_validation->set_rules('password_register', 'password', 'required|matches[password_register_conf]');
		
		
		if ($this->form_validation->run() == FALSE){
			$data['error_registration'] = '1';

			$this->load->model('post_model');
			$this->load->view('common/css_includes.php'); // load index css
			$this->load->view('common/header.php');

			$data['posts'] = $this->post_model->getPosts();
			$this->load->view('index_view.php',$data);

			$this->load->view('common/footer.php'); 	
			$this->load->view('common/js_includes.php'); // load index js
			$this->load->view('index_modals_view.php',$data); // load bootstrap modals 
		}else{
			$this->load->model('user_model');
			$this->user_model->insUser($name_register,$email_register,$password_register);

			$this->session->set_userdata('name',$name_register);
			redirect('/');
		}	
	}

	// function to check if user exists in DB
	public function selUser()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		// check if user exists in DB
		$this->load->model('user_model');
		$name = $this->user_model->selUser($email,$password);

		if($name != ''){ // user exists
			// set session for the user
			$this->session->set_userdata('name',$name);

			$this->output->set_output("1");
		}else{ // user doesn't exist
			$this->output->set_output("0");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy('name'); // destroy session
		redirect('/');
	}	
}