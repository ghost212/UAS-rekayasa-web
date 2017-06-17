<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<div id="content">
<h1>CATEGORY DETAIL<hr /></h1>

<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<th>No.</th><th>Category Name</th><th>Description</th><th>Products Count</th><th>View All Product</th>
</thead>

	<?php
		$no=1;
		foreach($Cat_detail_hitung as $barang){
		echo "<tr><td align=center>$no.</td><td>$barang->NAMAKAT</td><td>$barang->DES</td><td align=center>$barang->JUM</td><td align=center><a href=".base_url('products/category_detail/')."$barang->CID>View all ...</a></td></tr>";
			$no++;
		}
	?>
</table>
</div>
<?php
$this->load->view('footer');
?>
<div style="clear: both;"></div>