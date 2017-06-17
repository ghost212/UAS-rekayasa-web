<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Employees_data');        
    }
	public function index()
	{
		$data['title']='Employees / Karyawan';
		$data['Employees']=$this->Employees_data->tampil_data()->result();
		$data['current_link']="employees";
		$this->load->view('employees', $data);
	}
}
?>