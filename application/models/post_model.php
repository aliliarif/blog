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

	public function insPost($post_title,$post_desc)
	{
		try {
			$this->db->query("
				insert into post
				(
					title,
					description
				)
				values
				(
					'$post_title',
					'$post_desc'
				)
			");
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

}

/* End of file post.php */
/* Location: ./application/models/post.php */