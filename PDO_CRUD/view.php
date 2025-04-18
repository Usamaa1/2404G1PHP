<?php include "connection.php" ?>
<?php 

    $view_query = "SELECT * FROM `pdo_crud`";
    $view_prepare = $connection->prepare($view_query);
    $view_prepare->execute();

    $view_data = $view_prepare->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($view_data);
    // echo "</pre>";


    foreach($view_data as $data){
        // echo $data['prod_desc'] . "<br>";
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
    <h1 class="text-center m-5">All Products</h1>
    <div class="container">
        <div class="row">
        <?php foreach($view_data as $data){ ?>
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['prod_name'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $data['prod_price'] ?></h6>
                    <p class="card-text"><?php echo $data['prod_desc'] ?></p>
                    <p class="card-text"><?php echo $data['prod_rating'] ?></p>
                    <a href="update.php?upId=<?=$data['prod_id'] ?>" class="btn btn-warning">Update</a>
                    <a href="delete.php?delId=<?=$data['prod_id'] ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>