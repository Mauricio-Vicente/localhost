<?php
// Get the database connection file
 require_once 'library/connections.php';
 // Get the acme model for use as needed
 require_once 'model/acme-model.php';
// // Get the array of categories
//	$categories = getCategories();
//        var_dump($categories);
//	exit;
// Build a navigation bar using the $categories array
 $navList = '<ul>';
$navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
 $navList .= "<li><a href='/acme/index.php?action=".urlencode($category['categoryName'])."' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';
echo $navList;
exit;  


