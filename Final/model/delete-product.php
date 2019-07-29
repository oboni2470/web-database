<?php
include "../database/config.php";

$product_id=$_GET['productid'];

$query="delete from product where product_id='$product_id'";

mysqli_query($myconn,$query);
header("location:../index.php");