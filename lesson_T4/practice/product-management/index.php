<?php
include_once "Mondels/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Mondels\Product;

$productManager=new ProductManager();
$productManager->add(new Product('laptop',12000));
$productManager->add(new Product('mobile',15000));
$productManager->add(new Product('iphone',9000));
$productManager->add(new Product('samsung',5000));
$productManager->add(new Product('xps9360',21000));

$products=$productManager->getProducts();
foreach ($products as $product){
    echo $product->getName()." ".$product->getPrice() .'<br>';
}