<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<div id="content">
<h1>SUPPLIERS<hr /></h1>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<th>No.</th><th>Company Name</th><th>City</th><th>Country</th>
</thead>
<?php
	$no=1;
	foreach($Supplier as $supply){
		echo "<tr><td align=center>$no.</td><td><a href=suppliers/supplier_detail/$supply->SupplierID>$supply->CompanyName</a></td><td>$supply->City</td><td>$supply->Country</td></tr>";
		$no++;
	}
?>
</table>
</div>
<?php
$this->load->view('footer');
?>
<div style="clear: both;"></div>