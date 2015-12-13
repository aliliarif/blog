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

	public function selUser($email)
	{
		$selUser_query = $this->db->query("
			select
				name,
				password
			from
				user
			where
				email = '$email'
			limit 1
		");
		return $selUser_query->result();
	}
	

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */