<?php

include('../database_connection.php');
include('../model/coffee.php');

if(isset($_POST["id"]))
{
 $id = $_POST["id"];
 $query = "SELECT name, description, price FROM coffee WHERE coffeeId = $id";

 $statement = $connect->prepare($query);
 $statement->execute();
 $row = $statement->fetch(PDO::FETCH_ASSOC);
 $coffee = new Coffee();
 $coffee->setName($row['name']);
 $coffee->setDescription($row['description']);
 $coffee->setPrice($row['price']);

 echo json_encode($coffee);
}

?>
