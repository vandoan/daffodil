<?php

function get_list_view_html($product_id, $product) {

        $output=""; 

        $output = $output .  "<li>";
        $output = $output .  '<a href="shirt.php?id=' . $product_id . '" >';
        $output = $output .  '<img src="'. $product["img"] . '" alt"' . $product["name"] . '">';
        $output = $output .  "<p>" .  $product['name']; 
        $output = $output .  "View Details </p>"; 
        $output = $output .  "</a>"; 
        $output = $output .  "</li>"; 

        return $output; 
}



$products = array();
$products[101] = array(
	"name" => "Logo Shirt, Red",
	"img" => "img/shirts/shirt-101.jpg",
	"price" => 18,	
	"description" => "It's red!"
);
$products[102] = array(
	"name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20,
    "description" => "It's black!"
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20,
    "description" => "It's blue!"
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 14, 
	"description" => "It's green!"
);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25,
    "description" => "It's yellow!"
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20,
    "description" => "It's gray!"
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20,
    "description" => "It's Turquoise!"
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25,
    "description" => "It's Orange!"
); ?>