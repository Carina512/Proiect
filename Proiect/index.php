<html>
<head>

</head>
<body>
    <h1>Pagina principala</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
<?php
    $db=mysqli_connect("localhost","root","");

    mysqli_select_db($db,"my_db");

    session_start();
    $email = $_SESSION["email"];
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db,$query) or die(mysql_error());
    $row = mysqli_fetch_assoc($result);
    $_SESSION["tip"] = $row["tip"];

    if($_SESSION['tip'] == 2) {
        echo "bravo";
    }
?>