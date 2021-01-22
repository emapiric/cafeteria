<?php

include('../database_connection.php');

if(isset($_POST["orderId"]))
{
    $orderId = $_POST["orderId"];
    $query = "
    DELETE FROM orders 
    WHERE orderId = $orderId";
    $statement = $connect->prepare($query);
    $statement->execute();
}
 
?>