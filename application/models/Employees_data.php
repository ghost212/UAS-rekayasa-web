<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employees_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('employees');
	}
}
?>