<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Supplier_data');        
    }
	public function index()
	{
		$data['title']='Suppliers / Distributor';
		$data['Supplier']=$this->Supplier_data->tampil_data()->result();
		$data['current_link']="shippers";
		$this->load->view('suppliers', $data);
	}
	public function Supplier_detail()
	{
		$id=$this->uri->segment(3);
		$data['title']='Supplier Detail | NORTHWIND';
		$data['Supplier_detail']=$this->Supplier_data->supplier_detail($id);
		$data['current_link']="shippers";
		$this->load->view('supplier_detail', $data);
	}
}
?>