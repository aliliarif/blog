<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function insUser($name,$email,$password)
	{
		$this->db->query("
			insert into user
			(
				name,
				email,
				password
			)
			values
			(
				'$name',
				'$email',
				'$password'
			)
		");
	}

	public function selUser($email,$password)
	{
		$selUser_query = $this->db->query("
			select
				name
			from
				user
			where
				email = '$email'
				and password = '$password'
		");
		return $selUser_query->row()->name;
	}
	

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */