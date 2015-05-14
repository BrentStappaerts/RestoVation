<?php 
class Tweet_model extends CI_Model 
	{

		public $text;

		public function save($t)
		{
			$this->db->insert('tweets', $t);
		}


public function get_all()
{

$tweets=$this->db->get("tweets");
return $tweets->result_array();


}



	}


 ?>