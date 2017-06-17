<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order_data_detail extends CI_Model{
	function tampil_data(){
		$SQL="select a.odID, b.OrderID, c.ProductName FROM order_details a, orders b, products c WHERE a.OrderID=b.OrderID AND a.ProductID=c.ProductID AND b.OrderID=$id", $data;
		return $this->db->query($SQL);
	}
}
?>