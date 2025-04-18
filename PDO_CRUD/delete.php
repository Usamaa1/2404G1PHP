<?php 

include 'connection.php';

$prodId = $_GET['delId'];

$deleteQuery = "DELETE FROM `pdo_crud` WHERE prod_id = :prodId";
$deletePrepare = $connection->prepare($deleteQuery);

$deletePrepare->bindParam(":prodId", $prodId);

if($deletePrepare->execute())
`{
    echo "<script>location.href='view.php'</script>";

}
else
{
    echo "<script>alert('Deletion Failed!')</script>";
}`









?>