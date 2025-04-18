<?php include "connection.php" ?>


<?php 

$prodId = $_GET['upId'];

echo $prodId;


$view_query = "SELECT * FROM `pdo_crud` where prod_id = :prodId";
$view_prepare = $connection->prepare($view_query);
$view_prepare->bindParam(":prodId",$prodId);
$view_prepare->execute();

$view_data = $view_prepare->fetch(PDO::FETCH_ASSOC);




    if(isset($_POST['addBtn']))
    {

        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productDescription = $_POST['productDescription'];
        $productRating = $_POST['productRatting'];




        $prod_update_query = "UPDATE `pdo_crud` SET `prod_name`=:productName,`prod_desc`=:productDescription,`prod_price`=:productPrice,`prod_rating`=:productRating WHERE prod_id = :prodId";
        $prod_update_prepare = $connection->prepare($prod_update_query);


        $prod_update_prepare->bindParam(':prodId', $prodId);
        $prod_update_prepare->bindParam(':productName', $productName);
        $prod_update_prepare->bindParam(':productPrice', $productPrice);
        $prod_update_prepare->bindParam(':productDescription', $productDescription);
        $prod_update_prepare->bindParam(':productRating', $productRating);

       if ($prod_update_prepare->execute())
       {
        echo "<script>location.href='view.php'</script>";
    
    }
    else
    {
        echo "<script>alert('Updation Failed!')</script>";
    }



     
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
    <h1 class="text-center my-3">Update Products</h1>

    <div class="container">
        <div class="row">

            <form class="row g-3" method="post" >
                <div class="col-md-12">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" value="<?= $view_data['prod_name'] ?>" class="form-control" id="productName" name="productName">
                </div>
               
                <div class="col-md-12">
                    <label for="productPrice" class="form-label">Product Price</label>
                    <input type="text" value="<?= $view_data['prod_price'] ?>" class="form-control" id="productPrice" name="productPrice">
                </div>
                <div class="col-md-12">
                    <label for="productDescription" class="form-label">Product Description</label>
                    <textarea class="form-control"  id="productDescription" name="productDescription"><?= $view_data['prod_desc'] ?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="productRatting" class="form-label">Product Rating</label>
                    <input type="text" value="<?= $view_data['prod_rating'] ?>" class="form-control" id="productRatting" name="productRatting">
                </div>
               
               
           
                <div class="col-12">
                    <button type="submit" name="addBtn" class="btn btn-primary">Update Product</button>
                </div>
            </form>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>