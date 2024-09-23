<?php

//$cities = ["Amsterdam", "Rotterdam", "Utrecht", "Den Haag"];
//echo $cities[0];
//echo end($cities);
//
//$cities[] = "Maastricht";
//echo end($cities);

echo "<pre>";
//$numbers = [5, 10, 15, 20];
//$numbers[1] = 12;
//print_r($numbers);
//
//$student = [
//    "name" => "Jan",
//    "age" => 20,
//    "grade" => "A"
//];
//echo $student["name"]." heeft de score ".$student['grade'];

$product = [
    "name" => "Laptop",
    "price" => 899.99,
    "inStock" => true
];

$product['brand'] = "HP";
$product['price'] = 799.99;

print_r($product);
var_dump($product);
