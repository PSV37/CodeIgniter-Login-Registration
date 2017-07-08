<?php

class UserAccount extends CI_Controller{


	public function index()
	{
    
        $this->load->view('Registration_form');

        $this->load->model('Userdata');
		$mydata=$this->Userdata->select_data();
		//print_r($mydata[7]);
    }

    public function insert()
	{
		
      $user_data['Name']=$this->input->post('name');
      $user_data['Email']=$this->input->post('email');
      $user_data['Password']=$this->input->post('pwd');

      $this->load->model('Userdata');
      $result=$this->Userdata->insert_data($user_data);
      //print_r($result);
      //echo "$user_data[Name]<br>";
      //echo "$user_data[Email]";

    //$this->load->view('Login');
    if($result != '')
    {
    	$this->session->set_flashdata('Registration_s', 'Registration Successfully');
    	redirect('UserAccount');
    }
   
  

    }
    



}
