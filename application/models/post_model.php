<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

	public function getPosts($page)
	{
		$posts_query = $this->db->query("
			select
				title,
				description,
				DATE_FORMAT(date,'%d-%m-%Y %h:%i:%s') date,
				username
			from 
				post
			order by date desc
			limit $page,5
		");
		return $posts_query->result();
	}

	public function countPosts()
	{
		$count_posts_query = $this->db->query("
			select
				count(*) countPages
			from
				post
		");
		return $count_posts_query->row()->countPages;
	}

	public function insPost($post_title,$post_desc,$username)
	{
		date_default_timezone_set('Europe/Skopje'); 
		$date_time = date('Y-m-d h:i:s');

		try {
			$this->db->query("
				insert into post
				(
					title,
					description,
					date,
					username
				)
				values
				(
					'$post_title',
					'$post_desc',
					'$date_time',
					'$username'
				)
			");
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public function getRandPost()
	{
		$rand_post_query = $this->db->query("
			select 
				title,
				description,
				date,
				username 
			from 
				post
			order by rand()
			limit 1
		");
		// return result in JSON format
		foreach($rand_post_query->result() as $fieldname => $fieldvalue) {
    		$data[$fieldname] = $fieldvalue;
    	}
    	$this->output->set_content_type('application/json')->
    		set_output(json_encode($data));
	}

}

/* End of file post.php */
/* Location: ./application/models/post.php */