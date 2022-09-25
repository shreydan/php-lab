<html>
<head>
    <title>The Void</title>
    <style>
        input, button {
            font-size: 18px;
        }
        form * {
            display: block;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php 
    session_start();
    if($_SESSION["invalid"] == true) {
        echo "<h4 style='color: red;'>how dareth thou mere mortal</h4>";
        session_unset();
        session_destroy();
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_SESSION["username"];
        echo "<h4 style='color: #00adef;'>farewell $username!</h4>";
        session_unset();
        session_destroy();
    }
    ?>
    <h1>The Void</h1>
    
    <form action="process.php" method="post">
        <label><h3>Only the Chosen Ones can Enter</h3></label>
        <input type='text' name='username' required="required" placeholder="thy name"/>
        <input type='password' name='password' required="required" placeholder="thy key"/>
        <button type='submit'>TAKE ME IN</button>
    </form>
</body>
</html>

<!-- 
WORKING:

1. run exp11 to create multiple accounts coz the db.table is same
2. enter the void
3. LOGOUT FEATURE: click 'fare ye well' in home.php: redirects you to login page, destroys all session data with a message
4. rest
-->