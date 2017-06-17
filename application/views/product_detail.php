<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<div id="content">
<h1>PRODUCT DETAIL<hr /></h1>
<?php
	foreach($Produk_details as $cetak){
		echo "<h3>$cetak->NB</h3><hr />";
		echo "<p>";
		echo "<table>";
		echo "<tr><td width=150>Product Name</td><td width=30>=</td><td width=420>$cetak->NB</td></tr>";
		echo "<tr><td>Supplier</td><td>=</td><td>$cetak->NP</td></tr>";
		echo "<tr><td>Category Product</td><td>=</td><td><a href=".base_url('products/category_detail/')."$cetak->IDKP>$cetak->KP</a></td></tr>";
		echo "<tr><td>Quantity Per Unit</td><td>=</td><td>$cetak->QPU</td></tr>";
		echo "<tr><td>Unit Price</td><td>=</td><td>$cetak->UP</td></tr>";
		echo "<tr><td>Unit In Stock</td><td>=</td><td>$cetak->UIS</td></tr>";
		echo "<tr><td>Unit on Order</td><td>=</td><td>$cetak->UOO</td></tr>";
		echo "<tr><td>Reorder Level</td><td>=</td><td>$cetak->RL</td></tr>";
		echo "<tr><td>Discontinued</td><td>=</td><td>$cetak->DC</td></tr>";
		//echo "<tr><td width=120>Fax</td><td width=30>=</td><td>$cetak->Fax</td></tr>";
		echo "</table>";
		echo "</p>";

	}
?>
</div>
<?php
$this->load->view('sidebar');
$this->load->view('footer');
?>
<div style="clear: both;"></div>