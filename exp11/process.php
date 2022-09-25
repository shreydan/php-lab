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
    echo "$num";
    
    if($num == 0) {
        
        $hashed = password_hash($password, PASSWORD_BCRYPT);
        $create_user = "INSERT INTO `credentials` (`username`,`password`) 
        VALUES ('$username', '$hashed')";

        $create_user_result = mysqli_query($conn, $create_user);

        if ($create_user_result) {
            $_SESSION["userType"] = "new";
            $_SESSION["loggedIn"] = true;
            $_SESSION["username"] = $username;
            header("Location: home.php");
        }
    }
    elseif($num == 1) {
        foreach($check_username_result as $row) {
            $stored_password = $row["password"];
        }
        if (password_verify($password, $stored_password)) {
            $_SESSION["userType"] = "old";
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