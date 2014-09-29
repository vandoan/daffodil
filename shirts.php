<?php include("products.php"); ?>


<?php 
$pageTitle = "Mike's Full Catalog of Shirts"; 
$section = "shirts";
include('header.php'); ?> 
	
	<div class="section shirts  page">

		<div class="wrapper">  

			<h1>Mike&rsquo;s Full Catalog of Shirts</1> 

			<ul class="products"> 
				<?php foreach($products as $product_id => $product) {
				echo "<li>";
				echo '<a href="shirt.php?id=' . $product_id . '" >';
				echo '<img src="'. $product["img"] . '" alt"' . $product["name"] . '">';
				echo "<p>" .  $product['name']; 
				echo "View Details </p>"; 
				echo "</a>"; 
				echo "</li>"; 
			}
				?> 
			</ul>
		</div> 

		<?php include('footer.php'); ?> 







