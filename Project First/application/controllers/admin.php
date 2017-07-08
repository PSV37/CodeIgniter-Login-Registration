<?php
class Admin extends CI_Controller
{
  public function dashboard()
  {	
    $this->load->view('Admin/dashboard');
    //if(!$this->session->set_userdata('user_id'))
  	//{
  	//	return redirect('Login_Controller');
  	//}
  }
 }