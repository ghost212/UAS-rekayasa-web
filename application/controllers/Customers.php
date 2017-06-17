<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Customer_data');        
    }
	public function index()
	{
		$data['title']='Customers / Pelanggan';
		$data['Customers']=$this->Customer_data->tampil_data()->result();
		$data['current_link']="customer";
		$this->load->view('customers', $data);
	}
}
?>