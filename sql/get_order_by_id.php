<?php


include('../database_connection.php');
include('../model/orders.php');

if(isset($_POST["orderId"]))
{
 $orderId = $_POST["orderId"];

 $query = "SELECT orders.orderId as orderId, orders.coffeeId as coffeeId, coffee.name as coffee, 
 coffee.price as price, orders.orderDate as orderDate 
 FROM orders JOIN coffee ON orders.coffeeId = coffee.coffeeId 
 WHERE orders.orderId = '$orderId'";

 $statement = $connect->prepare($query);
 $statement->execute();
 $row = $statement->fetch(PDO::FETCH_ASSOC);
 $order = new Orders();
 $order->setOrderId($row['orderId']);
 $order->setCoffeeId($row['coffee']);
 $order->setOrderDate($row['orderDate']);
 
 echo json_encode($order);
}

?>
