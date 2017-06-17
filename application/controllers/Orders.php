<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Order_data');        
    }
	public function index()
	{
		$data['title']='Orders | NORTHWIND';
		$data['Orders']=$this->Order_data->tampil_data()->result();
		$data['current_link']="orders";
		$this->load->view('orders', $data);
	}
	public function detail_orders()
	{
		$id=$this->uri->segment(3);
		$data['title']='Order Detail | NORTHWIND';
		$data['Order_details']=$this->Order_data->order_detail($id)->result();
		$data['Peru_detail']=$this->Order_data->detail_perusahaan($id)->result();
		$data['current_link']="shippers";
		$this->load->view('order_detail', $data);
	}
}
?>