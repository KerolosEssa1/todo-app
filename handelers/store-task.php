<?php
session_start();
$errors = [];
include_once "../cor/function.php";
//insert
$conn= connection();

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title'])){
    
     
    
    $title=trim(htmlspecialchars(htmlentities($_POST['title'])));
    if(strlen($title) < 3){
        $_SESSION['errors'] = "title of task must be greater than 3 chars "; 
    }


    if(empty($_SESSION['errors'])){
        $sql = "INSERT INTO `tasks`(`title`) VALUES('$title')";
        $result = mysqli_query($conn,$sql);
        // echo mysqli_affected_rows($conn);
        if(mysqli_affected_rows($conn) == 1){
            $_SESSION['success'] = "data inserted succefully";
        }
    }
    header("location:../index.php");
exit;

}
