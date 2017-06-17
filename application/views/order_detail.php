<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<div id="content">
<h1>ORDER DETAIL</h1><hr />
<h3>Customer Profile</h3>
<?php
	foreach($Peru_detail as $CetakUsaha){
		echo "<table>";
		echo "<tr><td width=180>ORDER ID</td><td width=30>=</td><td width=420><strong>$CetakUsaha->ODID</strong></td></tr>";
		echo "<tr><td>Company Name</td><td>=</td><td><strong>$CetakUsaha->BadanUsaha</strong></td></tr>";
		echo "<tr><td>Contact Name/Title</td><td>=</td><td><strong>$CetakUsaha->CTNAME / $CetakUsaha->CTT</strong></td></tr>";
		echo "<tr><td>Region</td><td>=</td><td><strong>$CetakUsaha->NEGARA</strong></td></tr>";
		echo "</table>";
	}
?>
<hr />
<h3>Product List</h3>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<th>No.</th><th>Product Name</th><th>Quantity</th><th>Price</th><th>Discount</th>
</thead>
	<?php
		$no=1;
		foreach($Order_details as $ord){
			echo "<tr><td align=center>$no.</td><td>$ord->NamaBarang</td><td align=center>$ord->JUMLAH</td><td align=center>$ord->HARGA</td><td align=center>$ord->DISKON</td></tr>";
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