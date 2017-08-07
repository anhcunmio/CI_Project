<?php

/**
* 
*/
class Blog_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function get_user(){
		$query= $this->db->get('user');
		return $query->result();
	}

	public function get_menu(){
		$query= $this->db->get('menu');
		return $query->result();
	}

	public function get_recent(){
		$query= $this->db->get('recent');
		return $query->result();
	}
	public function get_question(){
		$query= $this->db->get('question',6 ,1);
		return $query->result();
	}
}