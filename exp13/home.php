<html>
<head>
    <title>The Void Realm</title>
</head>
<body>
    <h1>The Void Realm</h1>
    <form action="index.php" method="post">
        <button type='submit'>fare ye well brethren</button>
    </form>
    <?php
        session_start();

        if($_SESSION["loggedIn"] == true) {
            $username = $_SESSION["username"];
            echo "we are well pleased in our hearts to see thy presence master $username";
        }
        else {
            header("Location: index.php");
        }

    ?>
    

</body>
</html>

