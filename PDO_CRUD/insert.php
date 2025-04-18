<?php include "connection.php" ?>


<?php 

    if(isset($_POST['addBtn']))
    {

        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productDescription = $_POST['productDescription'];
        $productRating = $_POST['productRatting'];




        $prod_insert_query = "INSERT INTO `pdo_crud`(`prod_name`, `prod_desc`, `prod_price`, `prod_rating`) VALUES (:productName, :productDescription, :productPrice, :productRating)";
        $prod_insert_prepare = $connection->prepare($prod_insert_query);
        // $prod_insert_prepare->bindValue(':productName', $productName, PDO::PARAM_STR);
        // $prod_insert_prepare->bindValue(':productPrice', $productPrice, PDO::PARAM_INT);
        // $prod_insert_prepare->bindValue(':productDescription', 'Good Product', PDO::PARAM_STR);
        // $prod_insert_prepare->bindValue(':productRating', $productRating);

        $prod_insert_prepare->bindParam(':productName', $productName, PDO::PARAM_STR);
        $prod_insert_prepare->bindParam(':productPrice', $productPrice, PDO::PARAM_INT);
        $prod_insert_prepare->bindParam(':productDescription', $productDescription, PDO::PARAM_STR);
        $prod_insert_prepare->bindParam(':productRating', $productRating);

        $prod_insert_prepare->execute();




        // $prod_insert_prepare->execute([
        //     $productName,
        //     $productDescription,
        //     $productPrice,
        //     $productRating
        // ]);        
    }




?>









<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center my-3">Add Products</h1>

    <div class="container">
        <div class="row">

            <form class="row g-3" method="post" action="insert.php">
                <div class="col-md-12">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName">
                </div>
               
                <div class="col-md-12">
                    <label for="productPrice" class="form-label">Product Price</label>
                    <input type="text" class="form-control" id="productPrice" name="productPrice">
                </div>
                <div class="col-md-12">
                    <label for="productDescription" class="form-label">Product Description</label>
                    <textarea class="form-control" id="productDescription" name="productDescription"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="productRatting" class="form-label">Product Rating</label>
                    <input type="text" class="form-control" id="productRatting" name="productRatting">
                </div>
               
               
           
                <div class="col-12">
                    <button type="submit" name="addBtn" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>