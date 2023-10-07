<?php
session_start();
//Mysqli Connection Class
require_once("DataBase/DBController.php");

//Product Class
require_once("DataBase/product.php");

//Cart class
require_once("DataBase/cart.php");


//Mysqli connection object
$db_connection = new DBController();

//Product object
$product = new Product($db_connection);
$items = $product->get_data();


//Cart object
$cart = new Cart($db_connection);


