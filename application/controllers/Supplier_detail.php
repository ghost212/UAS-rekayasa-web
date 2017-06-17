<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_detail extends CI_Controller {
	public function __construct() {
    	parent::__construct();
    	$this->load->model('Supplier_data');        
    }
	public function index()
	{
		$data['title']='Suppliers | NORTHWIND';
		$id=$this->uri->segment(3);
		$data['Supplier_detail']=$this->Supplier_data->supplier_detail($id);
		$data['current_link']="shippers";
		$this->load->view('supplier_detail', $data);
	}
}
?>