<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_detail extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Order_data_detail');        
    }
	public function index()
	{
		$data['title']='Orders Details | NORTHWIND';
		$data['Orders']=$this->Order_data_detail->tampil_data()->result();
		$data['current_link']="orders";
		$this->load->view('order_detail', $data);
	}
}
?>