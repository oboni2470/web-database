<?php
include "../database/config.php";

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$query = "insert into product(product_name, product_price) values('$product_name','$product_price')";
mysqli_query($myconn,$query);

header("location:../index.php");