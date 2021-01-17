<?php

include('../../database_connection.php');
$query = '';
$output = array();
$query .= "SELECT orders.orderId as OrderId, coffee.name as Coffee, orders.orderDate as OrderDate 
FROM orders JOIN coffee ON orders.coffeeId = coffee.coffeeId";


// if(isset($_POST["order"]))
// {
//  $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
// }

// if($_POST["length"] != -1)
// {
//  $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
// }


$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["OrderId"];
 $sub_array[] = $row["Coffee"];
 $sub_array[] = $row["OrderDate"];
 $sub_array[] = '<button type="button" name="view" id="'.$row["OrderId"].'"  class="btn btn-primary btn-xs view">View</button>';
 $sub_array[] = '<button type="button" name="delete" id="'.$row["OrderId"].'" class="btn btn-danger btn-xs delete">Delete</button>';
 $data[] = $sub_array;
}

function get_total_all_records($connect)
{
 $statement = $connect->prepare("SELECT orders.orderId as OrderId, coffee.name as Coffee, orders.orderDate as OrderDate 
 FROM orders JOIN coffee ON orders.coffeeId = coffee.coffeeId");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records($connect),
 "data"    => $data
);
echo json_encode($output);
?>
