<?php
require_once 'login.php';

class Product extends \Illuminate\Database\Eloquent\Model
{

}

$product = Product::all();
var_dump($product);