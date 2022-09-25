<html>
<head>
    <title>Login/Sign-Up</title>
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
        echo "<h4 style='color: red;'>invalid credentials, please try again!</h4>";
        session_unset();
        session_destroy();
    }
    ?>
    <h1>Virtual Lab!</h1>
    
    <form action="process.php" method="post">
        <label><h3>Login or Create an Account!</h3></label>
        <input type='text' name='username' required="required" placeholder="username"/>
        <input type='password' name='password' required="required" placeholder="password"/>
        <button type='submit'>LOGIN / SIGN-UP</button>
    </form>
</body>
</html>

<!-- 
WORKING:

1. enter username, password.
2. redirects to process.php which import connectdb.php
3. connectdb.php connects to MySQL and sets connected=true
4. if process.php was accessed via form, and connected is true: proceed else: error
5. check username entered is present in db
6. if username not present, use the entered password as new password, hash it, create new user.
7. new user is auto-loggedin, redirect to homepage.
7. if username is present, verify password hash stored in db against input password.
8. if password matches, redirect to homepage.
9. if password doesnt match redirect to login page with error.
10. ignore possibilities of sql-injection coz this is not in prod, marry your crush.
11. end
-->