<?php

include('../../database_connection.php');

if(isset($_POST["id"]))
{
 $query = "
 DELETE FROM coffee 
 WHERE coffeeId = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>