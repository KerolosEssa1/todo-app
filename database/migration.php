<?php

$conn = mysqli_connect("localhost", "root", "","todoapp");

if (!$conn) {

    echo("Connection failed: " . mysqli_connect_error());

}


$sql = "CREATE DATABASE IF NOT EXISTS todoapp";
mysqli_query($conn, $sql);


$sql = "USE todoapp";
mysqli_query($conn, $sql);


// users
// firstname, last_name, email unique, password, id

$sql = "CREATE TABLE IF NOT EXISTS `users` (

    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE

) ";

mysqli_query($conn, $sql);


// tasks
// user_id, content, id

$sql = "CREATE TABLE IF NOT EXISTS `tasks`(

    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(200) NOT NULL,
    `user_id` INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES `users` (id)

) ";

mysqli_query($conn, $sql);


echo "<pre>";

var_dump($conn);

mysqli_close($conn);












mysqli_query($conn,$sql);




