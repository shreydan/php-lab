<?php

    $connected = false;
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $database = "users";
   
     // Create a connection 
     $conn = mysqli_connect($servername, 
         $username, $password, $database);
   
    if($conn) {
        $connected = true; 
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 
?>