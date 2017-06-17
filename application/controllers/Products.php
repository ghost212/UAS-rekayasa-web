<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Products_data');        
    }
	public function index()
	{
		$data['title']='Products / Produk';
		$data['Products']=$this->Products_data->tampil_data()->result();
		$this->load->view('products', $data);
	}
	public function category(){
		$data['title']='Category Products';
		$data['Cat_detail']=$this->Products_data->cat_detail()->result();
		$data['Cat_detail_hitung']=$this->Products_data->cat_detail_hitung()->result();
		$this->load->view('category', $data);
	}
	public function category_detail(){
		$id=$this->uri->segment(3);
		$data['title']='Category Product Detail | NORTHWIND';
		$data['Category_details']=$this->Products_data->category_detail($id);
		$data['Product_incat']=$this->Products_data->product_in_category($id);
		$this->load->view('category_detail', $data);
	}
	public function detail_product(){
		$id=$this->uri->segment(3);
		$data['title']='Product Detail | NORTHWIND';
		$data['Produk_details']=$this->Products_data->products_detail($id);
		$this->load->view('product_detail', $data);
	}
}
?>