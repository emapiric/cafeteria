<?php


include('../database_connection.php');

if(isset($_POST["coffeeId"]))
{
 $error = '';
 $success = '';
 $coffeeId = '';
 $orderDate = '';


 if(empty($_POST["coffeeId"]))
 {
  $error .= '<p>Coffee ID is Required</p>';
 }
 else
 {
  $coffeeId = $_POST["coffeeId"];
 }


 if(empty($_POST["orderDate"]))
 {
  $error .= '<p>Order Date is Required</p>';
 }
 else
 {
  $orderDate = $_POST["orderDate"];
 }


 if($error == '')
 {
  $data = array(
   ':coffeeId'   => $coffeeId,
   ':orderDate'  => $orderDate,
  );

  $query = "
  INSERT INTO orders (coffeeId, orderDate)
  VALUES (:coffeeId, :orderDate)
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
  $success = 'Order Data Inserted';
 }
 $output = array(
  'success'  => $success,
  'error'   => $error
 );
 echo json_encode($output);
}

?>