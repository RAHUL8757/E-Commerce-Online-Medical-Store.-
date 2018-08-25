<?php
$db = mysqli_connect("localhost","root","","myshop");


function getPro(){
	global $db;
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
			

					$get_product="select * from products order by RAND() LIMIT 0,6";
					$run_product=mysqli_query( $db, $get_product);
					while($row_product= mysqli_fetch_array($run_product)){
						$product_id= $row_product['product_id'];
						$product_title= $row_product['product_title'];
						$product_cat=$row_product['cat_id'];
						$product_brand=$row_product['brand_id'];
						$product_desc= $row_product['product_desc'];
						$product_price= $row_product['product_price'];
						$product_image= $row_product['product_img1'];
						
						echo " 
<div id='single_product'>
<h3> $product_title </h3>
<img src='C:/xampp/htdocs/Online_Shop/admin_area/product_images/$product_image' width='180' height='180' />
<br/>
<p><b> Price : ₹ $product_price</b></p>
<a href='details.php?pro_id=$product_id' style='float:left;'>Details</a>
<a href='index.php?add_cart=$product_id'><input type='submit' value =' Add to cart'style='float:right;'/></a>
								</div>

							";
							
					
					}
					}
		}
		
	}
		function getCatPro(){
	global $db;
	if(isset($_GET['cat'])){
		$cat_id= $_GET['cat'];
		
		

					$get_cat_product="select * from products where cat_id='$cat_id'";
					$run_cat_product=mysqli_query( $db, $get_cat_product);
		$count=mysqli_num_rows($run_cat_product);
		if($count==0){
			echo "<h2>No Product Found in this Categories: </h2>";
		}
					while($row_cat_product= mysqli_fetch_array($run_cat_product)){
						$product_id= $row_cat_product['product_id'];
						$product_title= $row_cat_product['product_title'];
						$product_cat=$row_cat_product['cat_id'];
						$product_brand=$row_cat_product['brand_id'];
						$product_desc= $row_cat_product['product_desc'];
						$product_price= $row_cat_product['product_price'];
						$product_image= $row_cat_product['product_img1'];
						
						
						echo " 
<div id='single_product'>
<h3> $product_title </h3>
<img src='C:/xampp/htdocs/Online_Shop/admin_area/product_images/$product_image' width='180' height='180' />
<br/>
<p><b> Price : ₹ $product_price</b></p>
<a href='details.php?pro_id=$product_id' style='float:left;'>Details</a>
<a href='index.php?add_cart=$product_id'><input type='submit' value =' Add to cart'style='float:right;'/></a>
								</div>

							";
							
					
							
					}
		}
	} 

	function getBrandPro(){
	global $db;
	if(isset($_GET['brand'])){
		$brand_id= $_GET['brand'];
		
		

					$get_brand_product="select * from products where brand_id='$brand_id'";
					$run_brand_product=mysqli_query( $db, $get_brand_product);
		$count=mysqli_num_rows($run_brand_product);
		if($count==0){
			echo "<h2>No Product Found in this categories: </h2>";
		}
					while($row_brand_product= mysqli_fetch_array($run_brand_product)){
						$product_id=$row_brand_product['product_id'];
						$product_title=$row_brand_product['product_title'];
						$product_cat=$row_brand_product['cat_id'];
						$product_brand=$row_brand_product['brand_id'];
						$product_desc=$row_brand_product['product_desc'];
						$product_price=$row_brand_product['product_price'];
						$product_image=$row_brand_product['product_img1'];
						
						
						echo " 
<div id='single_product'>
<h3> $product_title </h3>
<img src='C:/xampp/htdocs/Online_Shop/admin_area/product_images/$product_image' width='180' height='180' />
<br/>
<p><b> Price :₹ $product_price</b></p>
<a href='details.php?pro_id=$product_id' style='float:left;'>Details</a>
<a href='index.php?add_cart=$product_id'><input type='submit' value =' Add to cart'style='float:right;'/></a>
								</div>

							";
							
					
							
					}
		}
	}
		
				


function getBrands(){
                        global $db;
						$get_brand="select* from brands";
						$run_brand=mysqli_query($db,$get_brand);
						while($row_brand=mysqli_fetch_array($run_brand)){
							$brand_id=$row_brand['brand_id'];
							$brand_title=$row_brand['brand_title'];
							echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
							
						}
						
}
function getCategories(){
	                  global $db; 
					  $get_cats="select*from categories";
					  $run_cats=mysqli_query($db,$get_cats);
					  while($row_cats=mysqli_fetch_array($run_cats)){
						  $cat_id=$row_cats['cat_id'];
					  $cat_title=$row_cats['cat_title'];
				   echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
					  }
					
}