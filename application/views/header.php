<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="<?php echo base_url('assets');?>/css/style.css" type="text/css" charset="utf-8" />	
	

</head>

<body>
	<div id="header">
		<a href="index.html" id="logo"><img src="<?php echo base_url('assets');?>/images/logo.jpg" alt="LOGO" /></a>
		<div id="navigation">
			<ul>
				<li class="first selected"><a href="<?php echo base_url();?>">Dashboard</a></li>
				<li><a href="<?php echo base_url('products/category');?>">Categories</a></li>
				<li><a href="<?php echo base_url('products');?>">Products</a></li>
				<li><a href="<?php echo base_url('customers');?>">Customers</a></li>
				<li><a href="<?php echo base_url('employees');?>">Employees</a></li>
				<li><a href="<?php echo base_url('shippers');?>">Shippers</a></li>
				<li><a href="<?php echo base_url('suppliers');?>">Suppliers</a></li>
			</ul>
		</div>
		<div id="search">
			<form action="" method="">
				<input type="text" value="Search" class="txtfield" onblur="javascript:if(this.value==''){this.value=this.defaultValue;}" onfocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
				<input type="submit" value="" class="button" />
			</form>
		</div>
	</div> <!-- /#header -->
	<div id="contents">