<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function logout()
	{
		$this->session->sess_destroy('name'); // destroy session
		redirect('/');
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

	// function to insert user into DB (registration)
	public function insUser($name,$email,$password)
	{
		
	}
}