<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<div id="content">
<h1>EMPLOYEES<hr /></h1>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<th>No.</th><th>FirstName</th><th>LastName</th>
</thead>
<?php
	$no=1;
	foreach($Employees as $ship){
		echo "<tr><td align=center>$no.</td><td>$ship->FirstName</td><td>$ship->LastName</td></tr>";
		$no++;
	}
?>
</table>
</div>
<?php
$this->load->view('footer');
?>
<div style="clear: both;"></div>