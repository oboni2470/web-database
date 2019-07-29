<?php
include "database/config.php";

$query="select * from product";
$result=mysqli_query($myconn,$query);