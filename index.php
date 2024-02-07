<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

session_start();

require "config/autoload.php";

$router = new Router();

$router->handleRequest($_GET);

// test fonctionnement
require "models/Category.php";

// instance catégory
$category = new Category("Nadia");

// var dump
var_dump($category);




?>

