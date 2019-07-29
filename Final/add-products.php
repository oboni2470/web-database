<?php
include "model/session.php";
include "database/config.php";
include "header.php";
?>
<form action="model/insert-product.php" method="post">
    <div class="form-group">
        <label for="product_name">Product Name:</label>
        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="enter product name">
    </div>
    <div class="form-group">
        <label for="product_price">Price:</label>
        <input type="number" class="form-control" id="product_price" name="product_price" placeholder="enter product price">
    </div>
    <div>
        <button class="btn btn-info" type="submit">Add Product</button>
        <a class="btn btn-danger" href="index.php" role="button">Cancel</a>
    </div>
</form>
<?php
include "footer.php";
?>
