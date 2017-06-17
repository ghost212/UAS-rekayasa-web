<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Supplier_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('suppliers');
	}
	function supplier_detail($id){
		$this->db->where('SupplierID', $id);
		$query=$this->db->get('suppliers');
		return $query->result();
	}
}
?>