<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<div id="content">
<h1>SHIPPERS<hr /></h1>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<th>No.</th><th>Company Name</th><th>Phone</th>
</thead>
<?php
	$no=1;
	foreach($Shippers as $ship){
		echo "<tr><td align=center>$no.</td><td>$ship->CompanyName</td><td>$ship->Phone</td></tr>";
		$no++;
	}
?>
</table>
</div>
<?php
$this->load->view('footer');
?>
<div style="clear: both;"></div>