<?php
include "../database/config.php";

$product_id=$_GET['productid'];

$query="select * from product where product_id='$product_id'";

$result=mysqli_query($myconn,$query);
while ($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
    $product_name=$row['product_name'];
    $product_price=$row['product_price'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="insert-edited-product.php" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" id="product_id" name="product_id" value="<?php echo $product_id?>">
        </div>
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $product_name?>">
        </div>
        <div class="form-group">
            <label for="product_price">Price:</label>
            <input type="number" class="form-control" id="product_price" name="product_price" value="<?php echo $product_price?>">
        </div>
        <div>
            <button class="btn btn-info" type="submit">Update Product</button>
            <a class="btn btn-danger" href="../index.php" role="button">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>
