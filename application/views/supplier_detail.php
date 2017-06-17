<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<div id="content">
<h1>SUPPLIERS DETAIL<hr /></h1>
<?php
	foreach($Supplier_detail as $cetak){
		echo "<h3>$cetak->CompanyName</h3><hr />";
		echo "<p>";
		echo "<table>";
		echo "<tr><td width=120>Contact Name</td><td width=30>=</td><td width=420>$cetak->ContactName</td></tr>";
		echo "<tr><td width=120>Contact Title</td><td width=30>=</td><td>$cetak->ContactTitle</td></tr>";
		echo "<tr><td width=120>Address</td><td width=30>=</td><td>$cetak->Address, $cetak->City, $cetak->Region, $cetak->PostalCode, $cetak->Country</td></tr>";
		echo "<tr><td width=120>Phone</td><td width=30>=</td><td>$cetak->Phone</td></tr>";
		echo "<tr><td width=120>Fax</td><td width=30>=</td><td>$cetak->Fax</td></tr>";
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