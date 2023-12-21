<?php

require_once($_SERVER['DOCUMENT_ROOT']."/app/configs/Autoloader.php");

$route= new Route();
$products=new Products();
 

$route->get('/', function() use($products){
    $products->displayAll();
});

$route->get('/addproduct', function() use($products){
    $products->showAddProducts();
});

$route->post('/add', function() use($products){
    $products->add();
});

$route->post('/delete', function() use($products){
    $products->deleteProducts();
});


$route->dispatch($_SERVER['REQUEST_URI']);





