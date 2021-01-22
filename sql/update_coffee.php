<?php

include('../database_connection.php');

if(isset($_POST["name"]))
{
 $error = '';
 $success = '';
 $name = '';
 $description = '';
 $price = '';
 $id = $_POST["id"];
 if(empty($_POST["name"]))
 {
  $error .= '<p>name is Required</p>';
 }
 else
 {
  $name = $_POST["name"];
 }
 if(empty($_POST["description"]))
 {
  $error .= '<p>description is Required</p>';
 }
 else
 {
  $description = $_POST["description"];
 }
 if(empty($_POST["price"]))
 {
  $error .= '<p>price is Required</p>';
 }
 else
 {
  $price = $_POST["price"];
 }

 if($error == '')
 {
  $data = array(
   ':name'   => $name,
   ':description'  => $description,
   ':price'   => $price,
   ':id'   => $_POST["id"]
  );

  $query = "
  UPDATE coffee 
  SET name = :name,
  description = :description,
  price = :price
  WHERE coffeeId = :id
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
  $success = 'Coffee Data Updated';
 }
 $output = array(
  'success'  => $success,
  'error'   => $error
 );
 echo json_encode($output);
}

?>
