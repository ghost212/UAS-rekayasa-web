<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
     public function index()
	{   
		
//        $this->load->view('layout_home');	
        $data['title'] = 'Welcome to Northwind SHop!';
        $data['sidebar_category']=$this->Home_start->start_category()->result();
        $this->my_template->loadHome('layout_home',$data);	 	
//        $this->my_template->loadAdmin('home/home',$data);	 	
	}
 }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */