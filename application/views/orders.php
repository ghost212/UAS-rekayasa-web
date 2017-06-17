<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>

<h1>ORDERS<hr /></h1>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<th>No.</th><th>ID</th><th>Company Order</th><th>Shipper Company</th><th>Ship Name</th><th>Shipped Date</th><th>Received Date</th><th>Order Detail</th>
</thead>
	<?php
		$no=1;
		foreach($Orders as $ord){
			echo "<tr><td align=center>$no.</td><td>$ord->ID</td><td>$ord->Perusahaan</td><td>$ord->Kapal</td><td>$ord->Namakapal</td><td>$ord->Tglkirim</td><td>$ord->Tglsampai</td><td><a href=".base_url('orders/detail_orders')."/$ord->ID>Detail</a></td></tr>";
			$no++;
		}
	?>
</table>

<?php

$this->load->view('footer');
?>
<div style="clear: both;"></div>