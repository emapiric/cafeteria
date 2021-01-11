<?php

include('../../database_connection.php');

if(isset($_POST["name"]))
{
 $error = '';
 $success = '';
 $name = '';
 $description = '';
 $price = '';


 if(empty($_POST["name"]))
 {
  $error .= '<p>Name is Required</p>';
 }
 else
 {
  $name = $_POST["name"];
 }


 if(empty($_POST["description"]))
 {
  $error .= '<p>Description is Required</p>';
 }
 else
 {
  $description = $_POST["description"];
 }


 if(empty($_POST["price"]))
 {
  $error .= '<p>Price is Required</p>';
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
   ':price' => $price,
  );

  $query = "
  INSERT INTO coffee 
  (name, description, price) 
  VALUES (:name, :description, :price)
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
  $success = 'Coffee Data Inserted';
 }
 $output = array(
  'success'  => $success,
  'error'   => $error
 );
 echo json_encode($output);
}

?>


