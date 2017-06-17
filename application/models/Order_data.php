<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order_data extends CI_Model{
	function tampil_data(){
		$SQL="select a.OrderID AS ID, a.ShippedDate AS Tglkirim, a.RequiredDate AS Tglsampai, a.ShipName AS Namakapal, b.CompanyName AS Perusahaan,c.CompanyName AS Kapal FROM orders a, customers b, shippers c WHERE a.CustomerID=b.CustomerID AND a.ShipVia=c.ShipperID ORDER by a.OrderID";
		return $this->db->query($SQL);
	}
	function order_detail($id){
		$SQL2="select a.odID AS DetID, a.OrderID AS ORD, b.ProductName AS NamaBarang, a.Quantity AS JUMLAH, a.UnitPrice AS HARGA, a.Discount AS DISKON FROM order_details a, products b WHERE a.ProductID=b.ProductID AND a.OrderID='$id'";
	return $this->db->query($SQL2);
	}
	function detail_perusahaan($id){
		$SQL3="select d.CompanyName AS BadanUsaha, d.CustomerID AS CSID, d.ContactName AS CTNAME, d.ContactTitle AS CTT, d.Country AS NEGARA, e.OrderID AS ODID FROM customers d, orders e WHERE e.OrderID='$id' AND e.CustomerID=d.CustomerID ";
		return $this->db->query($SQL3);
	}
}
?>