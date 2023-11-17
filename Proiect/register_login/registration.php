<?php


$db = mysqli_connect("localhost", "root", "");
mysqli_select_db($db, "my_db");


$name = $email = $parola = "";


if (empty($_POST["name"])) {
    $nameErr = "Este necesar sa introduceti numele.";
    echo $nameErr;
} else {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $parola = $_POST["parola"];


    $sql = "INSERT INTO users (name,email,parola) VALUES ('$name','$email','$parola')";
    $results = mysqli_query($db, $sql);
    if (!$results)
        die('Invalid querry:' . mysqli_error($db));
    else {

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
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="name"><b>Nume</b></label>
                <input type="text" placeholder="Introduceti numele" name="name" required>

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