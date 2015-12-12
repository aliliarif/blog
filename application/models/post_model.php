<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

	public function getPosts()
	{
		$posts_query = $this->db->query("
			select
				title,
				description,
				username
			from 
				posts
		");
		return $posts_query->result();
	}

}

/* End of file post.php */
/* Location: ./application/models/post.php */