<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_controller extends CI_Controller {

	

	// function to check if user exists in DB
	public function selUser()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->load->model('user_model');
		

		$this->output->set_output("1");
	}

	// function to insert user into DB (registration)
	public function insUser($name,$email,$password)
	{
		
	}
}