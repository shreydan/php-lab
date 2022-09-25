<html>
<head>
    <title>Virtual Lab HomePage!</title>
</head>
<body>
    <h1>Virtual Lab HomePage!</h1>
    <?php
        session_start();

        if($_SESSION["loggedIn"] == true) {
            $username = $_SESSION["username"];
            if($_SESSION["userType"] == "new") {
                echo "thank you for joining @$username";
            }
            else {
                echo "welcome back @$username";
            }
            
        }
        else {
            header("Location: index.php");
        }

    ?>

</body>
</html>

