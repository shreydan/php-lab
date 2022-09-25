<?php

include 'connectdb.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST" && $connected == true) {

    echo "processing";
    $username = $_POST["username"];
    $password = $_POST["password"];

    $check_username_present = "Select * from credentials where username='$username'";
    $check_username_result = mysqli_query($conn, $check_username_present);
    
    $num = mysqli_num_rows($check_username_result);
    
    if($num == 1) {
        foreach($check_username_result as $row) {
            $stored_password = $row["password"];
        }
        if (password_verify($password, $stored_password)) {
            $_SESSION["loggedIn"] = true;
            $_SESSION["username"] = $username;
            header("Location: home.php");
        }
        else {
            $_SESSION["invalid"] = true;
            header("Location: index.php");
        }
    }


} else {
    echo "ERROR 5XX";
}
?>