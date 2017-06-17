<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<div id="content">
<h1>CATEGORY DETAIL<hr /></h1>
<?php
	foreach($Category_details as $PrCategory){
		echo "<table>";
		echo "<tr><td width=180>Category ID</td><td width=30>=</td><td width=420><strong>$PrCategory->CategoryID</strong></td></tr>";
		echo "<tr><td>Category Name</td><td>=</td><td><strong>$PrCategory->CategoryName</strong></td></tr>";
		echo "<tr><td>Description</td><td>=</td><td>$PrCategory->Description</td></tr>";
		//echo "<tr><td>Region</td><td>=</td><td><strong>$CetakUsaha->NEGARA</strong></td></tr>";
		echo "</table>";
		echo "<hr /><h3>Products in Category : $PrCategory->CategoryName </h3>";
	}
?>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<th>No.</th><th>Product Name</th><th>Quantity Unit</th><th>Unit Price</th><th>Stocks</th>
</thead>

	<?php
		$no=1;
		foreach($Product_incat as $barang){
		echo "<tr><td align=center>$no.</td><td>$barang->ProductName</td><td>$barang->QuantityPerUnit</td><td align=center>$barang->UnitPrice</td><td align=center>$barang->UnitsInStock</td></tr>";
			$no++;
		}
	?>
</table>
</div>
<?php
$this->load->view('sidebar');
$this->load->view('footer');
?>
<div style="clear: both;"></div>