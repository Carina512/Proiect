<?php
///*** mysql hostname ***/
//$hostname = 'localhost';
///*** mysql username ***/
//$username = 'root';
///*** mysql password ***/
//$password = '';
///*** baza de date ***/
//$db = 'my_db';
///*** se creaza un obiect mysqli ***/
//$mysqli = new mysqli($hostname, $username, $password,$db);
///* se verifica daca s-a realizat conexiunea */
//if(!mysqli_connect_errno())
//{
//    echo 'Connectat la baza de date: '. $db;
//// $mysqli->close();
//}
//else
//{
//    echo 'Nu se poate connecta';
//    exit();
//}
$con = mysqli_connect("localhost","root","","my_db");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>