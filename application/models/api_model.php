<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

	// function to return all posts in JSON or XML format
	public function getPosts($format)
		{
			$api_query = $this->db->query("
				select 
					*
				from
					post
			");
			if($format == 'json'){
				foreach($api_query->result() as $fieldname => $fieldvalue) {
		    		$data[$fieldname] = $fieldvalue;
		    	}
		    	$this->output->set_content_type('application/json')->set_output(json_encode($data));
			}else if($format == 'xml'){
				$this->load->dbutil();
				$config = array (
                  'root'    => 'root',
                  'element' => 'element', 
                  'newline' => "\n", 
                  'tab'    => "\t"
                );
                $xml = $this->dbutil->xml_from_result($api_query, $config);
                $this->output->set_content_type('text/xml')->set_output($xml);;
			}
		}	
}

/* End of file api_model.php */
/* Location: ./application/models/api_model.php */