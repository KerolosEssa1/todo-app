<?php 
//delete

include_once "../cor/function.php";
//insert
$conn= connection();  
$id = $_GET['id'];

$sql = "DELETE FROM `tasks` WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
header("location:../index.php");
exit;
