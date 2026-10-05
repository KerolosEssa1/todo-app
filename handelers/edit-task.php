<?php
//update
include_once "../cor/function.php";
//insert
$conn= connection();

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title'])){
     
    
    $title=trim(htmlspecialchars(htmlentities($_POST['title'])));
    $sql = "INSERT INTO `tasks` (`title`) VALUES ('$title')";

    $result = mysqli_query($conn, $sql);
}
header("location:../index.php");
exit;