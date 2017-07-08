<?php

class Userdata extends CI_Model{

	public function insert_data($data)
	{
		  $this->db->insert('user_accounts', $data);
        //echo $this->db->last_query();exit;
        if ($this->db->affected_rows()) {
            return $this->db->insert_id();
        }
        else {
            return false;
        }
	}


    public function select_data()
    {
         $this->db->select('*');
         $this->db->from('user_accounts');
        $query = $this->db->get();
        if($query->num_rows>=1)
        {
            return $query->result();
        }
        else{
            return false;
        }
    }

    public function Login_data($Name,$password)
    {
       $q = $this->db->where(['Name'=>$Name,'password'=>$password])
                      ->get('user_accounts');           
       if($q->num_rows() ){
         return $q->row()->id;
       // return True;
    }
    else{
        return false;
    }

}
}
 