<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Products_data extends CI_Model{
	function tampil_data(){
		$this->db->select('a.ProductID AS IDPro, a.ProductName AS NABAR, a.QuantityPerUnit AS QPU, a.UnitPrice AS REGO, b.CategoryName AS KATEGORI, a.UnitsInStock AS UIS, a.UnitsOnOrder AS UOO, a.ReorderLevel AS RL, a.Discontinued AS DC, b.CategoryID AS KATID');
		$this->db->from('products a, categories b');
		$this->db->where('a.CategoryID=b.CategoryID');
		return $this->db->get();
	}
	function products_detail($id){
		$this->db->select('a.ProductName AS NB, b.CompanyName AS NP, c.CategoryName AS KP, c.CategoryID AS IDKP, a.QuantityPerUnit AS QPU, a.UnitPrice AS UP, a.UnitsInStock AS UIS, a.UnitsOnOrder AS UOO, a.ReorderLevel AS RL, a.Discontinued AS DC');
		$this->db->from('products a, suppliers b, categories c');
		$this->db->where('a.SupplierID=b.supplierID AND a.CategoryID=c.CategoryID');
		$this->db->where('ProductID', $id);
		return $this->db->get()->result();
	}
	function category_detail($id){
		$this->db->where('CategoryID', $id);
		$query=$this->db->get('categories');
		return $query->result();
	}
	function product_in_category($id){
		$this->db->where('CategoryID', $id);
		$query=$this->db->get('products');
		return $query->result();
	}
	function cat_detail(){
		return $this->db->get('categories');
	}
	function cat_detail_hitung(){
		$SQL="select a.CategoryID AS CID, a.CategoryName AS NAMAKAT, a.Description AS DES, COUNT(*) AS JUM FROM categories a, products b WHERE a.CategoryID=b.CategoryID GROUP BY a.CategoryID";
		return $this->db->query($SQL);
	}

}
?>