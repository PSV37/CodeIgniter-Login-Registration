<?php

class UserAcc extends CI_Model{
	
	public function userget()
{
 
      $this->load->database();
      $q=$this->db->query("SELECT * FROM user_accounts");
      return  $q->result_array();
    // echo "<pre>";
      //print_r($data);

	 
	}
}