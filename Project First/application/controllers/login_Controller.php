<?php

class Login_Controller extends CI_Controller{

	public function index()
	{
		$this->load->view('login');
	}
	
	public function Check_login()
	{
		$Name = $this->input->post('username');
		$password = $this->input->post('pass');
        
        $this->load->model('Userdata');

		$login_id= $this->Userdata->Login_data($Name,$password);

		if(isset($login_id) && !empty($login_id))
		{
			$this->load->library('session');
			$this->session->set_userdata('user_id',$login_id);
			return redirect('Admin/dashboard');
		  //echo "successfully login";
			//return true;
		}else{
			//echo "error occured";
			//return FALSE;
			$this->session->set_flashdata('login_s', 'Occured , plz Correct Login');
    	     redirect('Login_Controller');
           } 
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('Login_Controller');
	}
}
