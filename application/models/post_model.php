<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

	public function getPosts()
	{
		$posts_query = $this->db->query("
			select
				title,
				description,
				username
			from 
				post
		");
		return $posts_query->result();
	}

}

/* End of file post.php */
/* Location: ./application/models/post.php */