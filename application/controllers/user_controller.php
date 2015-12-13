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
			$this->load->view('common/js_includes.php'); // load index js
			$this->load->view('index_modals_view.php',$data); // load bootstrap modals 
		}else{
			$this->load->model('user_model');
			// hash pass
			$cost = 10;
			// Create a random salt
			$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
			// Prefix information using Blowfish algorithm.
			$salt = sprintf("$2a$%02d$", $cost) . $salt;

			// Hash the password with the salt
			$hashed_pass = crypt($password_register, $salt);
			

			$this->user_model->insUser($name_register,$email_register,$hashed_pass);
			$this->session->set_userdata('name',$name_register);
			redirect('/');
		}	
	}

	// function to check if user exists in DB
	public function selUser()
	{
		$email = $this->input->get('email');
		$password = $this->input->get('password');

		// check if user exists in DB
		$this->load->model('user_model');
		$auth = $this->user_model->selUser($email);
		
		foreach ($auth as $auth) {
			$name = $auth->name;
			$hashed_pass = $auth->password;
		}
		
		if ($hashed_pass != ''){
			if($this->hash_equals($hashed_pass, crypt($password, $hashed_pass))){
				// set session for the user
				$this->session->set_userdata('name',$name);

				$this->output->set_output("1");
			}else{
				$this->output->set_output("0");
			}
		}else{
			$this->output->set_output("0");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy('name'); // destroy session
		redirect('/');
	}	

	// if php < 5.6
   	public function hash_equals($str1, $str2)
    {
        if(strlen($str1) != strlen($str2))
        {
            return false;
        }
        else
        {
            $res = $str1 ^ $str2;
            $ret = 0;
            for($i = strlen($res) - 1; $i >= 0; $i--)
            {
                $ret |= ord($res[$i]);
            }
            return !$ret;
        }
    }
}