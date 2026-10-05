<?php

function connection(){
    $conn = mysqli_connect("localhost", "root", "","todoapp");

if (!$conn) {

    echo("Connection failed: " . mysqli_connect_error());

}
return $conn;
}



