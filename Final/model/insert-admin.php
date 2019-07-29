<?php
include "../database/config.php";

$admin_name = $_POST['admin_name'];
$admin_pass = md5($_POST['admin_pass']);
$query = "insert into admininfo(admin_name, admin_pass) values('$admin_name','$admin_pass')";
mysqli_query($myconn,$query);

$create_table = "create table if not exists product(
                            product_id int not null auto_increment,
                            primary key(product_id),
                            product_name varchar(50) not null,
                           product_price int(11) not null
)";
mysqli_query($myconn,$create_table);
header("location:../index.php");