<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shippers extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Shippers_data');        
    }
	public function index()
	{
		$data['title']='Shippers / Pengirim';
		$data['Shippers']=$this->Shippers_data->tampil_data()->result();
		$data['current_link']="shipper";
		$this->load->view('shippers', $data);
	}
}
?>