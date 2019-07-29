<?php
//include "model/session.php";
include "database/config.php";
include "model/fetch-product.php";
echo '

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Action</th>
      </tr>
    </thead>
';

while ($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
   $product_name=$row['product_name'];
   $product_price=$row['product_price'];

    echo '
    <tbody>
      <tr>
        <td>'.$product_id.'</td>
        <td>'.$product_name.'</td>
        <td>'.$product_price.'</td>
        <td>
        <button class="btn btn-info" type="submit"><a href="model/edit-product.php?productid='.$product_id.'">Edit</a></button>
        <button class="btn btn-danger" type="submit"><a href="model/delete-product.php?productid='.$product_id.'">Delete</a></button>
    </td>
    </tbody>
    ';
}
echo '</table>';
?>

