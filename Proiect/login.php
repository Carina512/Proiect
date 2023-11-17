<?php

$db = mysqli_connect("localhost", "root", "");
mysqli_select_db($db, "my_db");

session_start();

if (isset($_SESSION["email"]) && $_SESSION["email"] != "") {
    header("Location: index.php");
    exit();
}

// If form submitted, insert values into the database.
if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']); // removes backslashes
    $email = mysqli_real_escape_string($db, $email); //escapes special characters in a string
    $parola = stripslashes($_REQUEST['parola']);
    $parola = mysqli_real_escape_string($db, $parola);

    // Checking if user exists in the database or not
    $query = "SELECT * FROM users WHERE email='$email' AND parola='$parola'";
    $result = mysqli_query($db, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verificare tip utilizator
        if ($user['tip'] == 2) { // Tip 2 pentru administratori
            $_SESSION["email"] = $email;
            header("Location: creare_eveniment.php");
            exit(); // Redirect user to creare_eveniment.php
        } else {
            echo '<h6 id="h6-login">Nu ai permisiunea să intri!</h6>';
        }
    } else {
        echo '<h6 id="h6-login">Emailul sau parola sunt incorecte! Te rugam sa incerci din nou</h6>';
    }
}

?>
<html>
<head>
    <link rel="stylesheet" href="css_login.css">
</head>
<body>
<form action="" method="post" style="border:1px solid #ccc">
    <div class="container">
        <h1>Login</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="parola" placeholder="Enter Password" name="parola" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>

</body>
</html>