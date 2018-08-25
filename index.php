<?php
include("includes/db.php");
include("functions/functions.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Online Shop</title>
</head>
<link rel="stylesheet"href="style/style.css"media="all" />
<body>
	
	<!--main container starts-->
	<div class="main_wrapper">
	  <!--header_wrapper start-->
	        <div class="header_wrapper"> 
				<img src="images/logo.jpg"style="float: left">
				<img src="images/medical-store-in-India.jpg"style="float: right">
		      <!--  <img src="images/56f8d49d9ec6680578d33740.jpg"style="float:right">-->
		
		</div>
     <!--header_wrapper end -->
		<!--navgation bar starts-->
		    <div id="navbar">
				<ul id="menu">
					<li><a href="#">Home</a></li>
				    <li><a href="#">All product</a></li>
					<li><a href="#">My account</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Shopping Cart</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<div id="form">
				
				<form method="get"action="results.php"enctype="multipart/form-data">
					<input type="text"name="user_query"placeholder="search a product"/>
					<input type="submit"name"search"value"search"/>
					</form>
				</div>
		
		
		</div>
		<!--navgation bar starts-->
		<!--content Area starts-->
		    <div class="content_wrapper">
		
		      <div id="left_sidebar">
				  <div id="sidebar_title">Categories</div>
				  <ul id="cats">
					  <?php
						getCategories(); ?>
					 
				  </ul>
				  <div id="sidebar_title">Brands</div>
				    <ul id="cats">
						<?php
						getBrands(); ?>
						
				  
				  </ul>
				 
				
				
				</div>
				  
			  
			  <div id="right_content"> 
				  <div id="headline">
				  <div id="headline_content">
				 <b>Welcome Guest</b>
					  <b style="color: #F3F901";>Shopping Cart</b>
					  <span>-item: -price</span>
				  </div>
				
				  </div>
				<div id="products_box">
					<?php
					getPro();
					getCatPro();
					getBrandPro();
					
					
					?>
			
					
				
		
				  </div>
				</div>
		</div>	
<div class="footar">
<h1 style>rahulsingh@iiitkalyani.ac.in</h1>
</div>	
</body>
</html>
<br>
