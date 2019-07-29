<?php
include "../database/config.php";
$product_id=$_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$query = "update product set product_id='$product_id', product_name='$product_name', product_price='$product_price' where product_id='$product_id'";
mysqli_query($myconn,$query);

header("location:../index.php");