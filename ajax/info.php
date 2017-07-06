<?php
error_reporting(E_ALL);
require_once('data.php');
$data = new data();
$sql = "SELECT * FROM user ORDER BY `id` DESC LIMIT 0 , 5";
$record = mysqli_query($data->conn,$sql);
$result = array();
while($row = mysqli_fetch_assoc($record))
{
	$result[] = array('id' => $row['id'], 'name' => $row['name'], 'email' => $row['email'], 'message' => $row['message'], 'date' => $row['date']);
}
echo json_encode($result);
?>