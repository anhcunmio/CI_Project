<?php
/**
* 
*/
class Reg_model extends CI_Model
{
	public function register($data_user){
  

$this->db->insert('user', $data_user); 
    }


}